#!/usr/bin/env bash
# Fetch NASA public-domain images for key Apollo Blog posts.
# Requires: curl, sips (macOS built-in), ddev (for wp-cli).

set -euo pipefail
IMGDIR="$(dirname "$0")/images"
mkdir -p "$IMGDIR"

nasa_fetch() {
    local slug="$1"
    local query="$2"
    local outfile="$IMGDIR/${slug}.jpg"

    if [ -f "$outfile" ]; then
        echo "  skip $slug (already downloaded)"
        return 0
    fi

    echo "  fetching NASA image: $query"
    # Get first image result from NASA Image API
    local api_url
    api_url="https://images-api.nasa.gov/search?q=$(python3 -c "import urllib.parse,sys; print(urllib.parse.quote(sys.argv[1]))" "$query")&media_type=image"

    local asset_url
    asset_url=$(curl -sf "$api_url" | python3 -c "
import json,sys
data=json.load(sys.stdin)
items=data.get('collection',{}).get('items',[])
if not items:
    sys.exit(1)
links=items[0].get('links',[])
for l in links:
    if l.get('render') == 'image':
        print(l['href'])
        sys.exit(0)
if links:
    print(links[0]['href'])
")
    if [ -z "$asset_url" ]; then
        echo "  ERROR: no result for '$query'"
        return 1
    fi

    # Download the image
    curl -sf -L "$asset_url" -o "$outfile"
    echo "  downloaded: $outfile ($(du -h "$outfile" | cut -f1))"
}

# --- Optimization: resize to max 1200px wide, recompress JPEG ---
optimize() {
    local file="$1"
    local maxpx="${2:-1200}"
    local quality="${3:-72}"

    # Get current width
    local width
    width=$(sips -g pixelWidth "$file" 2>/dev/null | awk '/pixelWidth/{print $2}')

    if [ -n "$width" ] && [ "$width" -gt "$maxpx" ]; then
        sips -Z "$maxpx" "$file" --out "$file" >/dev/null 2>&1
        echo "  resized to ${maxpx}px"
    fi

    # Recompress to target quality
    sips -s format jpeg -s formatOptions "$quality" "$file" --out "$file" >/dev/null 2>&1
    echo "  compressed: $(du -h "$file" | cut -f1)"
}

# --- Image targets: slug, NASA search query ---
declare -a IMAGES=(
    "sputnik|Sputnik 1 satellite 1957"
    "john-glenn-friendship7|John Glenn Friendship 7 orbit 1962"
    "alan-shepard-freedom7|Alan Shepard Freedom 7 launch 1961"
    "gagarin|Yuri Gagarin cosmonaut"
    "earthrise|Earthrise Apollo 8"
    "apollo11-eagle-landing|Apollo 11 Eagle lunar module landing"
    "armstrong-moon|Neil Armstrong EVA Moon surface"
    "aldrin-moon|Buzz Aldrin visor Moon"
    "saturn-v-launch|Saturn V rocket launch"
    "apollo1-crew|Apollo 1 crew Grissom White Chaffee"
    "apollo15-rover|Apollo 15 lunar rover"
    "genesis-rock|Genesis Rock Apollo 15 lunar sample"
    "apollo17-night|Apollo 17 night launch"
    "apollo8-crew|Apollo 8 crew Borman Lovell Anders"
    "apollo13|Apollo 13 service module damage"
    "apollo12-pete-conrad|Pete Conrad Apollo 12 Moon"
    "ed-white-eva|Ed White spacewalk Gemini 4"
    "ham-chimp|Ham chimpanzee Mercury"
    "luna-moon|Luna Soviet spacecraft Moon"
    "mariner-mars|Mariner 4 Mars photographs"
)

echo "=== Downloading NASA images ==="
for entry in "${IMAGES[@]}"; do
    slug="${entry%%|*}"
    query="${entry##*|}"
    echo "[$slug]"
    nasa_fetch "$slug" "$query" || true
done

echo ""
echo "=== Optimizing images ==="
for entry in "${IMAGES[@]}"; do
    slug="${entry%%|*}"
    file="$IMGDIR/${slug}.jpg"
    if [ -f "$file" ]; then
        echo "[$slug]"
        optimize "$file" 1200 72
    fi
done

echo ""
echo "=== Done. Images in $IMGDIR ==="
ls -lh "$IMGDIR"
