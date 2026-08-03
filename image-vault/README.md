# Apollo Blog Image Vault

Drop-in package to illustrate all 200 Apollo Blog posts with freely-licensed,
locally-hosted, web-optimized images — each entry laid out differently.

**Start here:** open `APOLLO_IMAGE_VAULT.md` and follow the Runbook (section 4).

Files:
- `APOLLO_IMAGE_VAULT.md`   — the spec and runbook (read this)
- `image-manifest.json`     — machine-readable: library + per-post images, layouts, captions, inject-ready HTML
- `fetch-vault-images.py`   — download + license-check + optimize (Python; needs `requests`, `pillow`)
- `import-vault-images.php` — sideload featured images + inject inline figures (wp-cli / ddev)
- `apollo-layouts.css`      — append to the theme's style.css

All 113 images resolve to Public Domain / CC0 / CC-BY(-SA); the fetch step
enforces this and records every credit in `credits.json` + `SOURCES-vault.md`.
