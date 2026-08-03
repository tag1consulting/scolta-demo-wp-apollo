#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Apollo Blog image vault — fetch, license-validate, and optimize.

Reads image-manifest.json (the "library" section) and, for every image slug:
  1. Resolves a concrete free-licensed source file
       - Wikimedia Commons: imageinfo on the `preferred` filename first, else a
         namespace-6 search on `query`; the FIRST hit is used (deterministic).
       - NASA images library: images-api.nasa.gov search on `query`; the first
         result's largest JPEG asset is used.
  2. Reads the license from the source metadata and REJECTS anything that is not
     Public Domain / CC0 / CC-BY / CC-BY-SA. (NASA library items are PD.)
  3. Downloads the original into  wp-content/uploads/vault/originals/
  4. Writes two web-optimized JPEGs into  wp-content/uploads/vault/ :
        <slug>.jpg       (<= 1600 px wide, q80)   hero / full-width use
        <slug>-med.jpg   (<= 1000 px wide, q78)   floated / inline use
  5. Records the real source URL + license + credit line into  credits.json
     and appends a human-readable block to  SOURCES.md.

Idempotent: existing optimized files are skipped unless --force.
Everything is hosted locally after this runs — nothing hot-links.

Deps:  pip install requests pillow
Usage: python3 fetch-vault-images.py [--manifest image-manifest.json]
                                      [--dest wp-content/uploads/vault] [--force]
"""
import argparse, json, os, sys, time, io, re, urllib.parse

try:
    import requests
except ImportError:
    sys.exit("Missing dependency: pip install requests pillow")
try:
    from PIL import Image, ImageOps
except ImportError:
    sys.exit("Missing dependency: pip install pillow")

# Wikimedia's robot policy rejects generic/placeholder contacts on
# upload.wikimedia.org (HTTP 403). The UA must name the tool and give real
# contact info, so point it at the repository.
UA = ("ApolloBlogVault/1.0 "
      "(https://github.com/tag1consulting/scolta-demo-wp-apollo; "
      "WordPress demo image fetcher)")
COMMONS_API = "https://commons.wikimedia.org/w/api.php"
NASA_SEARCH = "https://images-api.nasa.gov/search"

# License gate. Match on the Commons LicenseShortName / License / PD templates.
ALLOWED_PAT = re.compile(
    r"(public domain|^pd|pd-|cc0|cc[ -]?by(?:[ -]?sa)?)", re.IGNORECASE)
BLOCKED_PAT = re.compile(r"(-nc|noncommercial|-nd|noderiv|fair use|all rights)", re.IGNORECASE)

S = requests.Session()
S.headers.update({"User-Agent": UA})

def get(url, **kw):
    for attempt in range(4):
        try:
            r = S.get(url, timeout=40, **kw)
            if r.status_code == 200:
                return r
        except requests.RequestException:
            pass
        time.sleep(1.5 * (attempt + 1))
    return None

# ---------- Wikimedia Commons ----------
def commons_imageinfo(title):
    params = dict(action="query", format="json", titles=title,
                  prop="imageinfo",
                  iiprop="url|extmetadata|mime|size", iiurlwidth=2000)
    r = get(COMMONS_API + "?" + urllib.parse.urlencode(params))
    if not r:
        return None
    pages = r.json().get("query", {}).get("pages", {})
    for _, p in pages.items():
        if "missing" in p or "imageinfo" not in p:
            continue
        return p["imageinfo"][0]
    return None

def commons_search(query):
    params = dict(action="query", format="json", generator="search",
                  gsrsearch=f'{query} filetype:bitmap', gsrnamespace=6,
                  gsrlimit=8, prop="imageinfo",
                  iiprop="url|extmetadata|mime|size", iiurlwidth=2000)
    r = get(COMMONS_API + "?" + urllib.parse.urlencode(params))
    if not r:
        return []
    pages = r.json().get("query", {}).get("pages", {})
    # search generator preserves ranking in 'index'
    out = sorted(pages.values(), key=lambda p: p.get("index", 999))
    res = []
    for p in out:
        ii = p.get("imageinfo")
        if ii:
            res.append((p.get("title", ""), ii[0]))
    return res

def license_ok(ii):
    ext = ii.get("extmetadata", {}) or {}
    lic = (ext.get("LicenseShortName", {}) or {}).get("value", "")
    lic2 = (ext.get("License", {}) or {}).get("value", "")
    blob = f"{lic} {lic2}"
    if BLOCKED_PAT.search(blob):
        return None
    if ALLOWED_PAT.search(blob):
        return lic or lic2 or "Public Domain"
    return None

def credit_line(ii, fallback):
    ext = ii.get("extmetadata", {}) or {}
    def val(k):
        v = (ext.get(k, {}) or {}).get("value", "")
        return re.sub("<[^>]+>", "", v).strip() if v else ""
    artist = val("Artist") or val("Credit")
    lic = val("LicenseShortName")
    artist = re.sub(r"\s+", " ", artist)[:160]
    if artist and lic:
        return f"{artist} / {lic}"
    return artist or lic or fallback

# ---------- NASA images library ----------
def nasa_resolve(query):
    r = get(NASA_SEARCH + "?" + urllib.parse.urlencode(dict(q=query, media_type="image")))
    if not r:
        return None
    items = r.json().get("collection", {}).get("items", [])
    if not items:
        return None
    item = items[0]
    href = item.get("href")           # collection.json listing the assets
    data = (item.get("data") or [{}])[0]
    title = data.get("title", query)
    nasa_id = data.get("nasa_id", "")
    photographer = data.get("photographer") or data.get("secondary_creator") or "NASA"
    asset_url = None
    coll = get(href)
    if coll:
        files = coll.json()
        # prefer ~orig then ~large jpg
        jpgs = [u for u in files if u.lower().endswith((".jpg", ".jpeg"))]
        for tag in ("~orig", "~large", "~medium"):
            for u in jpgs:
                if tag in u:
                    asset_url = u; break
            if asset_url:
                break
        if not asset_url and jpgs:
            asset_url = jpgs[0]
    return dict(asset_url=asset_url, title=title, nasa_id=nasa_id,
                credit=f"NASA{('/'+photographer) if photographer and photographer!='NASA' else ''} — Public Domain",
                source_url=f"https://images.nasa.gov/details/{nasa_id}" if nasa_id else NASA_SEARCH,
                license="Public Domain")

# ---------- optimize ----------
def optimize(raw_bytes, out_path, max_w, quality):
    im = Image.open(io.BytesIO(raw_bytes))
    im = ImageOps.exif_transpose(im)
    if im.mode not in ("RGB", "L"):
        im = im.convert("RGB")
    if im.width > max_w:
        h = round(im.height * max_w / im.width)
        im = im.resize((max_w, h), Image.LANCZOS)
    im.save(out_path, "JPEG", quality=quality, optimize=True, progressive=True)
    return os.path.getsize(out_path)

def main():
    ap = argparse.ArgumentParser()
    ap.add_argument("--manifest", default="image-manifest.json")
    ap.add_argument("--dest", default="wp-content/uploads/vault")
    ap.add_argument("--force", action="store_true")
    a = ap.parse_args()

    lib = json.load(open(a.manifest))["library"]
    dest = a.dest
    orig_dir = os.path.join(dest, "originals")
    os.makedirs(orig_dir, exist_ok=True)

    credits_path = os.path.join(dest, "credits.json")
    credits = {}
    if os.path.exists(credits_path):
        credits = json.load(open(credits_path))

    ok = skip = fail = 0
    failures = []
    for slug, d in lib.items():
        full_out = os.path.join(dest, f"{slug}.jpg")
        med_out = os.path.join(dest, f"{slug}-med.jpg")
        if os.path.exists(full_out) and os.path.exists(med_out) and not a.force:
            skip += 1
            continue

        print(f"[{slug}] resolving ({d['source']}: {d['query']})")
        asset_url = source_url = license = credit = None

        def try_commons():
            ii = None
            if d.get("preferred"):
                ii = commons_imageinfo("File:" + d["preferred"])
                if ii and not license_ok(ii):
                    ii = None
            if not ii:
                for title, cand in commons_search(d["query"]):
                    if license_ok(cand):
                        ii = cand; break
            if not ii:
                return None
            return dict(asset_url=ii["url"],
                        source_url=ii.get("descriptionurl", ii["url"]),
                        license=license_ok(ii),
                        credit=credit_line(ii, d["expected_credit"]))

        primary = try_commons if d["source"] == "commons" else (lambda: nasa_resolve(d["query"]))
        secondary = (lambda: nasa_resolve(d["query"])) if d["source"] == "commons" else try_commons

        info = primary() or secondary()
        if not info or not info.get("asset_url"):
            print(f"  !! could not resolve a free-licensed source for {slug}")
            failures.append(slug); fail += 1
            continue

        asset_url = info["asset_url"]; source_url = info["source_url"]
        license = info["license"]; credit = info["credit"]

        raw = get(asset_url)
        if not raw:
            print(f"  !! download failed: {asset_url}")
            failures.append(slug); fail += 1
            continue

        ext = ".jpg"
        with open(os.path.join(orig_dir, slug + ext), "wb") as f:
            f.write(raw.content)
        try:
            s_full = optimize(raw.content, full_out, 1600, 80)
            s_med = optimize(raw.content, med_out, 1000, 78)
        except Exception as e:
            print(f"  !! optimize failed for {slug}: {e}")
            failures.append(slug); fail += 1
            continue

        credits[slug] = dict(source=d["source"], source_url=source_url,
                             license=license, credit=credit,
                             asset_url=asset_url,
                             full_kb=round(s_full/1024), med_kb=round(s_med/1024))
        print(f"  ok  {license} — {credit[:60]}  ({credits[slug]['full_kb']}KB / {credits[slug]['med_kb']}KB)")
        ok += 1
        json.dump(credits, open(credits_path, "w"), indent=1, ensure_ascii=False)
        time.sleep(0.3)

    # SOURCES.md block
    lines = ["\n## Image Vault — resolved sources\n",
             f"_Generated by fetch-vault-images.py. {ok} fetched, {skip} already present, {fail} failed._\n"]
    for slug in sorted(credits):
        c = credits[slug]
        lines.append(f"- **{slug}** — {c['credit']} ({c['license']}). Source: {c['source_url']}")
    open(os.path.join(dest, "SOURCES-vault.md"), "w").write("\n".join(lines) + "\n")

    print(f"\nDONE. fetched={ok} skipped={skip} failed={fail}")
    if failures:
        print("FAILED slugs (resolve/download):", ", ".join(failures))
        print("→ Re-run; for persistent failures, set a 'preferred' Commons filename "
              "in the manifest or refine the query, then re-run with --force on that slug.")
        sys.exit(1)

if __name__ == "__main__":
    main()
