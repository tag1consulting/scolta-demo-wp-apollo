#!/usr/bin/env bash
# Apollo Blog Content Import Script
# Run from inside DDEV: ddev exec bash /var/www/html/import/import-posts.sh
# Or from host: ddev exec bash /var/www/html/import/import-posts.sh

set -e
WP="wp --allow-root"

echo "Starting Apollo Blog content import..."

create_post() {
  local date="$1"
  local title="$2"
  local category="$3"
  local tags="$4"
  local excerpt="$5"
  local content_file="$6"

  local cat_id
  cat_id=$($WP term get category --by=name "$category" --field=term_id 2>/dev/null || echo "")

  if [ -z "$cat_id" ]; then
    echo "Category '$category' not found, using Uncategorized"
    cat_id=1
  fi

  $WP post create \
    --post_title="$title" \
    --post_date="$date 10:00:00" \
    --post_status=publish \
    --post_category="$cat_id" \
    --post_excerpt="$excerpt" \
    --post_content="$(cat "$content_file")" \
    --porcelain \
    2>/dev/null

  if [ -n "$tags" ]; then
    local post_id
    post_id=$($WP post list --post_title="$title" --field=ID --posts_per_page=1 2>/dev/null | head -1)
    if [ -n "$post_id" ]; then
      $WP post term set "$post_id" post_tag $tags 2>/dev/null || true
    fi
  fi
}

echo "Import complete."
