# Apollo Blog

A WordPress demonstration site for [Scolta](https://scolta.io) — a semantic search re-ranking engine.

The site is a personal blog written from the perspective of an anonymous American civilian watching the Space Age unfold from 1957–1973: Sputnik, Mercury, Gemini, the Apollo 1 fire, the first Moon landing, and the quiet end of the program. 200+ posts, ~800–1,600 words each, covering missions, technology, Soviet competition, and personal reflection.

## Quick Start

```bash
git clone <this-repo> apollo-blog
cd apollo-blog
ddev start
```

`ddev start` automatically imports the database and fixes WordPress URLs. The site is ready at the URL shown at the end of startup (typically `https://counting-down-apollo.ddev.site`).

Default credentials are set in `.ddev/config.yaml`. WordPress admin: `/wp-admin/` — credentials as configured in the DDEV environment.

## Requirements

- [DDEV](https://ddev.com) v1.22+
- [OrbStack](https://orbstack.dev), Docker Desktop, or compatible container runtime

## Structure

```
.ddev/              DDEV project configuration
db/dump.sql.gz      Full database export (imported on ddev start)
import/             PHP import scripts used to generate post content
wp-content/
  themes/
    apollo-blog/    Custom newspaper/retro theme
  plugins/          (Scolta plugin — add separately)
SOURCES.md          Historical sources and image attributions
```

## Theme

Custom classic PHP theme `apollo-blog` with:
- Cream/navy/burnt-orange color palette (`#faf8f0` / `#1a1a3a` / `#c2571a`)
- Halftone dot-pattern texture on post cards
- Starfield header
- Responsive grid layout
- Retro dateline strip and newspaper-style typography

## Content

200 posts spanning 1957–1973:
- **Space Race** — Sputnik shock, Soviet program, Cold War context
- **Mercury Program** — seven missions, seven astronauts
- **Gemini Program** — rendezvous, docking, spacewalking
- **Technology** — Saturn V, guidance computers, spacesuits, re-entry physics
- **Apollo Program** — buildup, Apollo 1 fire, Apollo 7–17
- **Science** — lunar geology, planetary probes, biology of spaceflight
- **Personal** — narrator's day-to-day life and reactions

## Database

The database export at `db/dump.sql.gz` contains all posts, pages, categories, tags, and settings. It is imported automatically on `ddev start` via the post-start hook in `.ddev/config.yaml`.

## Scolta Integration

Install the Scolta plugin into `wp-content/plugins/scolta/` and configure per Scolta documentation. The demo search queries in the sidebar widget (`sidebar.php`) are pre-wired for Scolta showcase use.
