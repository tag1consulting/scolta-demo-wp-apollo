# Apollo Blog — Image Vault

**A complete, executable plan to illustrate all 200 posts of the Apollo Blog with freely-licensed, locally-hosted, web-optimized imagery — and to lay each entry out differently so the archive reads like someone cared.**

> Follow the Runbook in section 4. Everything needed — which image goes on which post, where to download it, how to size it, and exactly what HTML to inject — is either in this document or in the machine-readable `image-manifest.json` beside it.

---

## 1. Context

The Apollo Blog is the WordPress demo at `demos/apollo-blog` in the Scolta repo. It is a fictional 1957–1973 space-age diary — 200 published posts across Space Race, Mercury, Gemini, Apollo 1–17, Technology, and Reflections. The Scolta search cards and search-as-you-type now paint each post's **featured image**, so bare posts look empty in results. Today only ~70 posts carry an image and every illustrated post uses the same top-of-article treatment.

**Goal:** give every post at least one well-matched image (many get 2–3, the marquee events get 4+), and vary the on-page layout so it is never just "image at the top, text below" all the way down.

### Coverage this vault delivers

- **Posts illustrated:** 200 / 200 (100%)
- **Distinct images:** 113 in the library, all used
- **Total image placements:** 316
- **Density (varied on purpose):** 96 posts with 1 image(s), 95 posts with 2 image(s), 6 posts with 3 image(s), 3 posts with 4 image(s)
- **Layout treatments:** 12 distinct; **0** adjacent posts share a layout

---

## 2. Rules (non-negotiable)

1. **Freely usable only.** Every image resolves to Public Domain, CC0, CC-BY, or CC-BY-SA. The fetch script reads the license from the source's own metadata and **refuses** anything non-free (NC/ND/fair-use). NASA imagery is public domain.
2. **Host locally.** Nothing hot-links. Originals land in `wp-content/uploads/vault/originals/`; optimized copies in `wp-content/uploads/vault/`. WordPress serves our own copies.
3. **Credit everything.** Each figure prints a small credit line. The real credit + license + source URL for every image is written to `credits.json` and `SOURCES-vault.md` at fetch time, and injected into the page via `{{CRED:slug}}` tokens that the import step resolves.
4. **Optimize for web.** Two JPEGs per image: `<slug>.jpg` (≤1600px, q80) for hero/full-width and `<slug>-med.jpg` (≤1000px, q78) for floats/insets. Progressive, stripped, typically 80–250 KB.

---

## 3. Package contents

| File | Purpose |
| --- | --- |
| `image-manifest.json` | Machine-readable source of truth: the image library + per-post images, layout, captions, and ready-to-inject figure HTML. |
| `fetch-vault-images.py` | Resolves → license-checks → downloads → optimizes every image; writes `credits.json` + `SOURCES-vault.md`. |
| `import-vault-images.php` | Sideloads featured images and injects the inline figures into each post (idempotent). |
| `apollo-layouts.css` | The figure/layout CSS to add to the theme. |
| `APOLLO_IMAGE_VAULT.md` | This document. |

---

## 4. Runbook (do these in order)

```bash
# From the apollo-blog repo root.
# 0. Put the four vault files where the scripts expect them:
mkdir -p import
cp image-manifest.json import/
cp fetch-vault-images.py import/
cp import-vault-images.php import/

# 1. Fetch, license-check, and optimize every image (needs network + Python).
python3 -m pip install --quiet requests pillow
cd import && python3 fetch-vault-images.py \
     --manifest image-manifest.json \
     --dest ../wp-content/uploads/vault && cd ..
#   -> wp-content/uploads/vault/<slug>.jpg + <slug>-med.jpg
#   -> wp-content/uploads/vault/credits.json + SOURCES-vault.md
#   Re-run until it reports 0 failures. For a stubborn image, set a
#   'preferred' Commons filename or refine 'query' in image-manifest.json.

# 2. Add the layout CSS to the theme (once).
cat apollo-layouts.css >> wp-content/themes/apollo-blog/style.css

# 3. Import into WordPress: featured images + inline figures (idempotent).
ddev wp eval-file import/import-vault-images.php
#   Re-run any time; add VAULT_FORCE=1 to re-inject after editing the manifest:
#   ddev wp eval-file import/import-vault-images.php   # (env VAULT_FORCE=1)

# 4. Verify (see section 7).
```

If you are **not** running under DDEV, replace `ddev wp` with your `wp-cli` invocation (e.g. `wp eval-file ...`). The fetch step is plain Python and can run anywhere with network access; commit the resulting `wp-content/uploads/vault/` so the images ship with the demo image.

---

## 5. Layout system

Images are inserted **into the post body**, not just bolted to the top. Each post is assigned one treatment; the assignment guarantees no two consecutive posts (in publication order) use the same one. Placement: `hero-bleed` and `dropcap-inset` go at the very top of the content; everything else is inserted after the first paragraph so the entry opens with words, then breaks into image.

| Treatment | Imgs | What it looks like |
| --- | --- | --- |
| `hero-bleed` | 1 | Full-bleed banner image at the very top of the article, edge to edge, with the caption as an overlaid dateline strip. |
| `figure-right` | 1 | Single image floated right at ~48% width; body text wraps down its left side. Halftone hairline frame. |
| `figure-left` | 1 | Single image floated left at ~48% width; body text wraps down its right side. |
| `postcard` | 1 | Centered image at ~70% width with a thick cream border and a typewriter caption underneath, like a mailed postcard. |
| `polaroid` | 1 | Image in a white snapshot frame, tilted a couple of degrees, with a handwritten-style caption. Drops into the text like a photo left on a desk. |
| `panorama` | 1 | Extra-wide letterbox image, full content width, breaking the column mid-article. Caption sits flush-right beneath. |
| `stamp` | 1 | Small square 'commemorative stamp' image (perforated edge) floated right, for portraits and objects. |
| `dropcap-inset` | 1 | Small square image tucked beside the opening paragraph's drop cap, so the entry opens with art and a large initial. |
| `duo` | 2 | Two images side by side (2-up) with a shared caption bar beneath — good for before/after or two crew members. |
| `portrait-pull` | 2 | A tall portrait floated right beside a large pull-quote lifted from the post; a second small image sits lower in the body. |
| `triptych` | 3 | Three images across in a filmstrip strip with sprocket-hole edges and one caption line beneath all three. |
| `gallery` | 4–6 | A 2-column contact-sheet grid of images, each with its own small caption — for the marquee, multi-image entries. |

All treatments share the theme's palette (cream `#faf8f0`, navy `#1a1a3a`, burnt-orange `#c2571a`), use a halftone/newspaper feel, and collapse to a single column on mobile. The CSS is in `apollo-layouts.css`.

Distribution across the 200 posts:

| Treatment | Posts |
| --- | --- |
| `portrait-pull` | 52 |
| `duo` | 43 |
| `hero-bleed` | 28 |
| `polaroid` | 15 |
| `figure-right` | 13 |
| `figure-left` | 12 |
| `stamp` | 10 |
| `postcard` | 7 |
| `dropcap-inset` | 7 |
| `triptych` | 6 |
| `panorama` | 4 |
| `gallery` | 3 |

---

## 6. Image library — what to use and where to get it

Each image is resolved at fetch time. **Source** is the service; **query** is the exact search the script runs (first free-licensed hit wins, deterministic); **preferred** (when set) is a specific Wikimedia Commons filename tried first. The **credit** shown is the expected attribution — the script overwrites it with the live value from the source's metadata.

| Slug | Subject | Source | Search query / preferred file | Expected credit |
| --- | --- | --- | --- | --- |
| `agc-dsky` | Apollo Guidance Computer DSKY | Wikimedia Commons | Apollo Guidance Computer DSKY display keyboard | NASA, Public Domain |
| `agena` | Agena target vehicle | NASA images | Agena target vehicle Gemini rendezvous | NASA, Public Domain |
| `aldrin-flag` | Aldrin and the flag | NASA images | Buzz Aldrin American flag Apollo 11 Moon | NASA, Public Domain |
| `aldrin-g12` | Aldrin EVA Gemini 12 | NASA images | Buzz Aldrin Gemini 12 spacewalk EVA | NASA, Public Domain |
| `aldrin-moon` | Aldrin on the Moon (visor) | NASA images | Buzz Aldrin visor reflection Apollo 11 Moon | NASA / Neil Armstrong, Public Domain |
| `apollo1-crew` | Apollo 1 crew portrait | NASA images | Apollo 1 crew Grissom White Chaffee portrait | NASA, Public Domain |
| `apollo1-fire` | Apollo 1 command module after fire | NASA images | Apollo 1 command module fire damage interior | NASA, Public Domain |
| `apollo1-suited` | Apollo 1 crew suited / training | NASA images | Apollo 1 crew training spacesuits | NASA, Public Domain |
| `apollo10-snoopy` | Apollo 10 LM 'Snoopy' | NASA images | Apollo 10 lunar module Snoopy Moon | NASA, Public Domain |
| `apollo11-crew` | Apollo 11 crew portrait | NASA images | Apollo 11 crew Armstrong Collins Aldrin portrait | NASA, Public Domain |
| `apollo11-eagle` | Lunar Module Eagle | NASA images | Apollo 11 Eagle lunar module orbit | NASA, Public Domain |
| `apollo12-conrad` | Apollo 12 Conrad / Surveyor 3 | NASA images | Apollo 12 Pete Conrad Surveyor 3 Moon | NASA, Public Domain |
| `apollo12-launch` | Apollo 12 launch (lightning) | NASA images | Apollo 12 launch rain clouds 1969 | NASA, Public Domain |
| `apollo13-control` | Apollo 13 Mission Control relief | NASA images | Apollo 13 Mission Control controllers splashdown relief | NASA, Public Domain |
| `apollo13-crew` | Apollo 13 crew | NASA images | Apollo 13 crew Lovell Swigert Haise | NASA, Public Domain |
| `apollo13-mailbox` | Apollo 13 CO2 'mailbox' | NASA images | Apollo 13 mailbox carbon dioxide adapter lithium hydroxide | NASA, Public Domain |
| `apollo13-sm` | Apollo 13 damaged service module | NASA images | Apollo 13 service module damage explosion panel | NASA, Public Domain |
| `apollo14-antares` | Apollo 14 LM Antares / Fra Mauro | NASA images | Apollo 14 lunar module Antares Fra Mauro | NASA, Public Domain |
| `apollo15-rover` | Apollo 15 lunar rover | NASA images | Apollo 15 lunar roving vehicle rover mountains | NASA, Public Domain |
| `apollo16-young` | Apollo 16 Young leaping salute | NASA images | Apollo 16 John Young jump salute flag Moon | NASA, Public Domain |
| `apollo17-night` | Apollo 17 night launch | NASA images | Apollo 17 night launch Saturn V 1972 | NASA, Public Domain |
| `apollo8-crew` | Apollo 8 crew | NASA images | Apollo 8 crew Borman Lovell Anders | NASA, Public Domain |
| `apollo9-spider` | Apollo 9 LM 'Spider' | NASA images | Apollo 9 lunar module Spider Schweickart EVA | NASA, Public Domain |
| `armstrong-moon` | Armstrong on the Moon | NASA images | Neil Armstrong on the Moon EVA Apollo 11 | NASA, Public Domain |
| `astronaut-families` | Astronaut family / Life era | NASA images | astronaut family 1960s home Life magazine | NASA, Public Domain |
| `backyard-night` | Backyard telescope / stargazing | Wikimedia Commons | amateur astronomer telescope backyard night silhouette | CC-BY, credited on the file page |
| `blue-marble` | The Blue Marble | NASA images | Blue Marble Apollo 17 whole Earth 1972 | NASA, Public Domain |
| `bootprint` | Bootprint on the Moon | NASA images | Apollo 11 bootprint lunar soil Aldrin | NASA, Public Domain |
| `carpenter` | Scott Carpenter / Aurora 7 | NASA images | Scott Carpenter Aurora 7 astronaut | NASA, Public Domain |
| `cernan-eva` | Gemini 9 Cernan EVA | NASA images | Gene Cernan Gemini 9 spacewalk EVA | NASA, Public Domain |
| `cernan-rover` | Apollo 17 Cernan / rover | NASA images | Apollo 17 Cernan lunar rover Taurus Littrow | NASA, Public Domain |
| `collins` | Michael Collins | NASA images | Michael Collins Apollo 11 command module pilot | NASA, Public Domain |
| `cooper` | Gordon Cooper / Faith 7 | NASA images | Gordon Cooper Faith 7 Mercury astronaut | NASA, Public Domain |
| `crowd-launch` | Crowds watching a launch | NASA images | crowd spectators watching Apollo launch beach | NASA, Public Domain |
| `cuban-missile` | Cuban Missile Crisis reconnaissance | Wikimedia Commons | Cuban Missile Crisis reconnaissance photograph San Cristobal | Public Domain |
| `deke-slayton` | Deke Slayton | NASA images | Deke Slayton astronaut Mercury | NASA, Public Domain |
| `descartes` | Apollo 16 Descartes highlands | NASA images | Apollo 16 Descartes highlands Duke rover | NASA, Public Domain |
| `dsn` | Deep Space Network antenna | NASA images | Deep Space Network antenna Goldstone dish | NASA/JPL, Public Domain |
| `earthrise` | Earthrise (Apollo 8) | NASA images | Earthrise Apollo 8 Earth over lunar horizon | NASA / William Anders, Public Domain |
| `echo1` | Echo 1 balloon satellite | NASA images | Echo 1 balloon satellite inflation | NASA, Public Domain |
| `ed-white-eva` | Ed White spacewalk (Gemini 4) | NASA images | Ed White spacewalk Gemini 4 EVA 1965 | NASA, Public Domain |
| `enos-chimp` | Enos the chimpanzee | NASA images | Enos chimpanzee Mercury orbit 1961 | NASA, Public Domain |
| `explorer1` | Explorer 1 team holding model | NASA images | Explorer 1 Pickering Van Allen von Braun model | NASA/JPL, Public Domain |
| `f1-engine` | F-1 engine cluster | NASA images | Saturn V F-1 engines first stage cluster | NASA, Public Domain |
| `family-tv` | 1960s family watching TV | Wikimedia Commons | 1960s family watching television living room | Public Domain |
| `full-moon` | The full Moon | Wikimedia Commons | full moon photograph detailed | Public Domain |
| `gagarin` | Yuri Gagarin portrait | Wikimedia Commons | Yuri Gagarin cosmonaut portrait helmet | Public Domain |
| `gemini-titan` | Gemini-Titan launch | NASA images | Gemini Titan II rocket launch | NASA, Public Domain |
| `gemini11-earth` | Gemini 11 high-orbit Earth | NASA images | Gemini 11 Earth from high orbit 1966 | NASA, Public Domain |
| `gemini6-7` | Gemini 6/7 rendezvous | NASA images | Gemini 7 photographed from Gemini 6 rendezvous | NASA, Public Domain |
| `gemini8-agena` | Gemini 8 Agena target | NASA images | Gemini 8 Agena target docking vehicle | NASA, Public Domain |
| `genesis-rock` | Genesis Rock | NASA images | Genesis Rock Apollo 15 anorthosite lunar sample | NASA, Public Domain |
| `glenn-friendship7` | John Glenn / Friendship 7 | NASA images | John Glenn Friendship 7 Mercury 1962 | NASA, Public Domain |
| `grissom-young-g3` | Gemini 3 (Grissom & Young) | NASA images | Gemini 3 Grissom Young Molly Brown | NASA, Public Domain |
| `hadley` | Hadley Rille / Apennines | NASA images | Apollo 15 Hadley Rille Apennine mountains | NASA, Public Domain |
| `ham-chimp` | Ham the chimpanzee | NASA images | Ham chimpanzee Mercury 1961 | NASA, Public Domain |
| `icbm` | ICBM / rocket as weapon | Wikimedia Commons | Atlas ICBM missile launch | U.S. Air Force, Public Domain |
| `irwin-flag` | Apollo 15 Irwin salute | NASA images | Apollo 15 James Irwin flag salute rover mountains | NASA, Public Domain |
| `jfk-portrait` | President John F. Kennedy | Wikimedia Commons | John F. Kennedy White House portrait 1963 | White House, Public Domain |
| `khrushchev` | Nikita Khrushchev | Wikimedia Commons | Nikita Khrushchev portrait 1961 | Public Domain |
| `komarov` | Vladimir Komarov | Wikimedia Commons | Vladimir Komarov cosmonaut portrait | Public Domain |
| `korolev` | Sergei Korolev chief designer | Wikimedia Commons | Sergei Korolev chief designer | Public Domain |
| `laika` | Laika the space dog | Wikimedia Commons | Laika dog Sputnik 2  ·  _pref:_ `Soviet_stamp_Laika.jpg` | Soviet Union post, Public Domain |
| `last-footprint` | Last footprint / departure | NASA images | Apollo 17 last footprint Moon departure | NASA, Public Domain |
| `leonov-eva` | Alexei Leonov first spacewalk | Wikimedia Commons | Alexei Leonov Voskhod 2 spacewalk 1965 | Public Domain |
| `liberty-bell7` | Liberty Bell 7 / Gus Grissom | NASA images | Liberty Bell 7 Gus Grissom recovery 1961 | NASA, Public Domain |
| `lm-diagram` | Lunar Module | NASA images | Apollo Lunar Module spacecraft | NASA, Public Domain |
| `luna` | Luna probe | Wikimedia Commons | Luna 2 spacecraft Soviet Moon probe | Public Domain |
| `lunar-orbiter` | Lunar Orbiter / first Earthrise | NASA images | Lunar Orbiter 1 first Earthrise 1966 | NASA, Public Domain |
| `mariner4` | Mariner 4 first Mars photo | NASA images | Mariner 4 Mars first photograph 1965 | NASA/JPL, Public Domain |
| `mariner9` | Mariner 9 Mars orbit | NASA images | Mariner 9 Mars orbiter photograph 1971 | NASA/JPL, Public Domain |
| `mercury-atlas` | Mercury-Atlas launch | NASA images | Mercury Atlas rocket launch | NASA, Public Domain |
| `mercury-seven` | Mercury Seven astronauts | NASA images | Mercury Seven astronauts group portrait spacesuits | NASA, Public Domain |
| `mission-control` | Mission Control Houston | NASA images | Apollo Mission Control MOCR Houston consoles | NASA, Public Domain |
| `moon-men-group` | Moonwalkers / astronaut group | NASA images | Apollo astronauts group Moon walkers portrait | NASA, Public Domain |
| `mqf` | Mobile Quarantine Facility | NASA images | Apollo 11 mobile quarantine facility Nixon | NASA, Public Domain |
| `n1` | Soviet N1 Moon rocket | Wikimedia Commons | N1 rocket Soviet Moon launch vehicle | Public Domain |
| `newspaper-moon` | Moon-landing newspaper front page | Wikimedia Commons | newspaper front page Men Walk On Moon 1969 | Public Domain |
| `orange-soil` | Apollo 17 orange soil | NASA images | Apollo 17 orange soil Shorty crater Schmitt | NASA, Public Domain |
| `pioneer10` | Pioneer 10 / plaque | NASA images | Pioneer 10 spacecraft plaque interstellar | NASA, Public Domain |
| `ranger7` | Ranger 7 impact photo | NASA images | Ranger 7 Moon photograph impact 1964 | NASA/JPL, Public Domain |
| `reentry` | Command module reentry / heat shield | NASA images | Apollo command module reentry heat shield capsule | NASA, Public Domain |
| `rice-speech` | JFK Rice University speech | Wikimedia Commons | Kennedy Rice University Moon speech 1962 stadium | Public Domain |
| `rope-memory` | Core rope memory | Wikimedia Commons | Apollo core rope memory guidance computer | Public Domain |
| `salyut` | Salyut 1 space station | Wikimedia Commons | Salyut 1 space station | Public Domain |
| `saturn-v-launch` | Saturn V launch (Apollo 11) | NASA images | Saturn V Apollo 11 launch liftoff | NASA, Public Domain |
| `saturn-v-rollout` | Saturn V rollout / crawler | NASA images | Saturn V rollout crawler transporter VAB | NASA, Public Domain |
| `schirra` | Wally Schirra / Sigma 7 | NASA images | Wally Schirra Sigma 7 astronaut | NASA, Public Domain |
| `schmitt-earth` | Apollo 17 Schmitt, flag & Earth | NASA images | Apollo 17 Schmitt flag Earth above Moon | NASA, Public Domain |
| `schmitt-scientist` | Harrison Schmitt, geologist-astronaut | NASA images | Harrison Schmitt geologist astronaut Apollo 17 | NASA, Public Domain |
| `scientist-geology` | Astronaut geology training | NASA images | Apollo astronaut geology training field lunar | NASA, Public Domain |
| `shepard-a14` | Apollo 14 Shepard on Moon | NASA images | Alan Shepard Apollo 14 Moon flag | NASA, Public Domain |
| `shepard-freedom7` | Alan Shepard / Freedom 7 | NASA images | Alan Shepard Freedom 7 launch 1961 | NASA, Public Domain |
| `shuttle-concept` | Space Shuttle 1972 concept | NASA images | Space Shuttle 1972 early concept artwork | NASA, Public Domain |
| `skylab` | Skylab in orbit | NASA images | Skylab space station orbit 1973 | NASA, Public Domain |
| `skylab-repair` | Skylab parasol repair | NASA images | Skylab parasol sunshade repair Conrad | NASA, Public Domain |
| `soyuz11` | Soyuz 11 crew | Wikimedia Commons | Soyuz 11 crew Dobrovolsky Volkov Patsayev | Public Domain |
| `spacesuit` | Apollo A7L spacesuit | NASA images | Apollo A7L spacesuit pressure garment | NASA, Public Domain |
| `sputnik` | Sputnik 1 satellite | Wikimedia Commons | Sputnik 1 satellite replica  ·  _pref:_ `Sputnik_asm.jpg` | NSSDC/NASA, Public Domain |
| `starfield` | Night sky / Milky Way | Wikimedia Commons | Milky Way night sky stars | CC-BY, credited on the file page |
| `surveyor` | Surveyor lunar lander | NASA images | Surveyor spacecraft Moon landing soft | NASA/JPL, Public Domain |
| `telstar` | Telstar communications satellite | Wikimedia Commons | Telstar satellite 1962 | NASA, Public Domain |
| `tereshkova` | Valentina Tereshkova | Wikimedia Commons | Valentina Tereshkova cosmonaut 1963 | Public Domain |
| `tiros1` | TIROS-1 weather satellite | NASA images | TIROS 1 weather satellite first image 1960 | NASA, Public Domain |
| `tv-camera` | Apollo lunar TV camera | NASA images | Apollo lunar television camera Moon | NASA, Public Domain |
| `u2` | Lockheed U-2 spy plane | Wikimedia Commons | Lockheed U-2 reconnaissance aircraft | Public Domain |
| `vab` | Vehicle Assembly Building | NASA images | Vehicle Assembly Building Kennedy Space Center | NASA, Public Domain |
| `vab-factory` | Saturn V assembly / factory | NASA images | Saturn V assembly factory Michoud stage | NASA, Public Domain |
| `vanguard-fail` | Vanguard TV3 launch failure | Wikimedia Commons | Vanguard TV3 rocket explosion 1957 | U.S. Navy, Public Domain |
| `voskhod` | Voskhod spacecraft | Wikimedia Commons | Voskhod spacecraft capsule Soviet | Public Domain |
| `white-room` | Pad white room / technicians | NASA images | Apollo white room pad technicians crew ingress | NASA, Public Domain |
| `world-tour` | Apollo 11 world tour / parade | NASA images | Apollo 11 crew ticker tape parade Giantstep tour | NASA, Public Domain |
| `zond5` | Zond 5 circumlunar mission | Wikimedia Commons | Zond 5 spacecraft Soviet | Public Domain |

> **The manifest, not this table, is the source of truth.** The table records the
> original intent for each slug. Live resolution against the Commons and NASA
> search APIs picked the wrong subject for a number of them (a Mars rover for
> `apollo12-conrad`, Jupiter's moon Io for `luna`, a group of astronauts with a
> flag for `saturn-v-launch`), and twenty more resolved to nothing at all
> because the NASA API returns no items for long multi-word queries. Those
> entries now carry an exact `preferred` Commons filename and a shorter `query`
> in `image-manifest.json`. Check the manifest for what a slug actually fetches.

> Download endpoints the script uses: Wikimedia Commons `imageinfo`/search API (`commons.wikimedia.org/w/api.php`) for the file URL **and** its license, and the NASA Image Library API (`images-api.nasa.gov/search`) → the item's largest JPEG asset. Both are public, keyless, and stable.

---

## 7. Per-post plan — every entry

The **Featured** image (first in the list) is what the Scolta cards and search results paint. **Images** are injected into the body in the order shown, using the post's **Layout**. Full ready-to-inject HTML + captions for each post is in `image-manifest.json` under `posts.<id>` (the import script consumes it directly).

| ID | Post | Category | Layout | Featured | All images (in body order) |
| --- | --- | --- | --- | --- | --- |
| 18 | The Russians Did It First | Mercury | `portrait-pull` | `gagarin` | `gagarin`, `shepard-freedom7` |
| 19 | Alan Shepard Goes Up | Mercury | `duo` | `shepard-freedom7` | `shepard-freedom7`, `mercury-atlas` |
| 20 | Before the Decade Is Out | Mercury | `portrait-pull` | `jfk-portrait` | `jfk-portrait`, `rice-speech` |
| 21 | John Glenn Goes Around the World | Mercury | `stamp` | `glenn-friendship7` | `glenn-friendship7` |
| 22 | We Choose to Go to the Moon | Mercury | `duo` | `rice-speech` | `rice-speech`, `jfk-portrait` |
| 23 | Ed White Walks in Space | Gemini | `hero-bleed` | `ed-white-eva` | `ed-white-eva` |
| 24 | Two Ships in the Same Sky | Gemini | `figure-right` | `gemini6-7` | `gemini6-7` |
| 25 | Neil Armstrong Almost Died Up There | Gemini | `portrait-pull` | `gemini8-agena` | `gemini8-agena`, `mission-control` |
| 26 | Gemini Is Over — And I Can't Believe What We Did | Gemini | `triptych` | `ed-white-eva` | `ed-white-eva`, `gemini6-7`, `aldrin-g12` |
| 27 | The Men Who Will Fly First | Apollo 1 | `duo` | `apollo1-crew` | `apollo1-crew`, `apollo1-suited` |
| 28 | A Terrible Friday Afternoon | Apollo 1 | `hero-bleed` | `apollo1-fire` | `apollo1-fire` |
| 29 | What Went Wrong — What We're Learning | Apollo 1 | `portrait-pull` | `apollo1-fire` | `apollo1-fire`, `apollo1-crew` |
| 30 | The Saturn V Shook the Earth | Technology | `duo` | `saturn-v-launch` | `saturn-v-launch`, `f1-engine` |
| 31 | Eighteen Months Later — I Think They're Ready | Apollo 1 | `portrait-pull` | `white-room` | `white-room`, `saturn-v-rollout` |
| 32 | They're Going Up Again | Apollo 7 | `duo` | `schirra` | `schirra`, `mission-control` |
| 33 | Apollo 7 Is Home — We're Back | Apollo 7 | `figure-right` | `schirra` | `schirra` |
| 34 | They're Going to the Moon — Not to Orbit the Earth | Apollo 8 | `portrait-pull` | `apollo8-crew` | `apollo8-crew`, `saturn-v-launch` |
| 35 | Christmas Eve at the Moon | Apollo 8 | `triptych` | `earthrise` | `earthrise`, `apollo8-crew`, `full-moon` |
| 36 | They Were RIGHT THERE | Apollo 10 | `postcard` | `apollo10-snoopy` | `apollo10-snoopy` |
| 37 | Launch Day | Apollo 11 | `portrait-pull` | `saturn-v-launch` | `saturn-v-launch`, `crowd-launch` |
| 38 | The Eagle Has Landed | Apollo 11 | `gallery` | `apollo11-eagle` | `apollo11-eagle`, `aldrin-moon`, `mission-control`, `bootprint` |
| 39 | One Small Step | Apollo 11 | `triptych` | `armstrong-moon` | `armstrong-moon`, `bootprint`, `aldrin-moon` |
| 40 | I Looked Up Last Night | Apollo 11 | `portrait-pull` | `full-moon` | `full-moon`, `aldrin-moon` |
| 41 | Lightning Hit the Rocket | Apollo 12 | `figure-left` | `apollo12-launch` | `apollo12-launch` |
| 42 | Whoopee — Pete Conrad Steps on the Moon | Apollo 12 | `stamp` | `apollo12-conrad` | `apollo12-conrad` |
| 43 | Apollo 12 Home — We're Getting Good at This | Apollo 12 | `polaroid` | `apollo12-conrad` | `apollo12-conrad` |
| 44 | Apollo 13 Launches Without Much Fanfare | Apollo 13 | `duo` | `apollo13-crew` | `apollo13-crew`, `saturn-v-launch` |
| 45 | Houston, We've Had a Problem | Apollo 13 | `hero-bleed` | `apollo13-sm` | `apollo13-sm` |
| 46 | Day Two — The Lifeboat | Apollo 13 | `portrait-pull` | `lm-diagram` | `lm-diagram`, `apollo13-sm` |
| 47 | The Carbon Dioxide Problem | Apollo 13 | `hero-bleed` | `apollo13-mailbox` | `apollo13-mailbox` |
| 48 | Day Three — Cold and Dark | Apollo 13 | `figure-left` | `apollo13-crew` | `apollo13-crew` |
| 49 | They're Home | Apollo 13 | `duo` | `apollo13-control` | `apollo13-control`, `reentry` |
| 50 | The People Who Brought Them Home | Apollo 13 | `portrait-pull` | `mission-control` | `mission-control`, `apollo13-control` |
| 51 | Alan Shepard Comes Back | Apollo 14 | `duo` | `shepard-a14` | `shepard-a14`, `shepard-freedom7` |
| 52 | Alan Shepard Plays Golf on the Moon | Apollo 14 | `dropcap-inset` | `shepard-a14` | `shepard-a14` |
| 53 | Apollo 14 Home — Eight Men on the Moon | Apollo 14 | `polaroid` | `apollo14-antares` | `apollo14-antares` |
| 54 | Four Wheels on the Moon | Apollo 15 | `hero-bleed` | `apollo15-rover` | `apollo15-rover` |
| 55 | Driving on the Moon | Apollo 15 | `portrait-pull` | `apollo15-rover` | `apollo15-rover`, `hadley` |
| 56 | The Genesis Rock | Apollo 15 | `hero-bleed` | `genesis-rock` | `genesis-rock` |
| 57 | The Feather and the Hammer | Apollo 15 | `stamp` | `irwin-flag` | `irwin-flag` |
| 58 | Apollo 15 Home — The Science Is the Point Now | Apollo 15 | `duo` | `hadley` | `hadley`, `irwin-flag` |
| 59 | The Highlands — Walking Where No One Planned | Apollo 16 | `portrait-pull` | `descartes` | `descartes`, `apollo16-young` |
| 60 | Ten Men on the Moon | Apollo 16 | `figure-right` | `moon-men-group` | `moon-men-group` |
| 61 | The Night Launch | Apollo 17 | `hero-bleed` | `apollo17-night` | `apollo17-night` |
| 62 | The Orange Soil | Apollo 17 | `figure-right` | `orange-soil` | `orange-soil` |
| 63 | The Last Footprint | Apollo 17 | `duo` | `last-footprint` | `last-footprint`, `cernan-rover` |
| 64 | Twelve Men | Apollo 17 | `gallery` | `moon-men-group` | `moon-men-group`, `blue-marble`, `schmitt-earth`, `last-footprint` |
| 65 | Where Do We Go From Here? | Reflections | `portrait-pull` | `shuttle-concept` | `shuttle-concept`, `blue-marble` |
| 66 | Eleven Years of Clippings | Reflections | `dropcap-inset` | `newspaper-moon` | `newspaper-moon` |
| 67 | What the Moon Taught Me About Earth | Reflections | `duo` | `earthrise` | `earthrise`, `blue-marble` |
| 68 | The Summer I Fell in Love with the Space Program | Reflections | `triptych` | `mercury-seven` | `mercury-seven`, `family-tv`, `backyard-night` |
| 69 | The Beep That Changed Everything | Space Race | `portrait-pull` | `sputnik` | `sputnik`, `newspaper-moon` |
| 70 | Laika | Space Race | `figure-left` | `laika` | `laika` |
| 71 | Explorer 1 — We're In | Space Race | `duo` | `explorer1` | `explorer1`, `vanguard-fail` |
| 72 | NASA Is Open for Business | Space Race | `portrait-pull` | `mercury-seven` | `mercury-seven`, `mission-control` |
| 73 | The Seven | Space Race | `panorama` | `mercury-seven` | `mercury-seven` |
| 74 | The U-2 Affair | Space Race | `figure-right` | `u2` | `u2` |
| 75 | Ham the Chimp Goes to Space | — | `figure-left` | `ham-chimp` | `ham-chimp` |
| 76 | Gagarin | Space Race | `dropcap-inset` | `gagarin` | `gagarin` |
| 77 | Alan Shepard, American | — | `figure-left` | `shepard-freedom7` | `shepard-freedom7` |
| 78 | Before This Decade Is Out | Space Race | `duo` | `rice-speech` | `rice-speech`, `jfk-portrait` |
| 79 | Liberty Bell 7 Sinks | — | `panorama` | `liberty-bell7` | `liberty-bell7` |
| 80 | John Glenn Orbits the Earth | — | `portrait-pull` | `glenn-friendship7` | `glenn-friendship7`, `mercury-atlas` |
| 81 | Scott Carpenter's Overshoot | — | `polaroid` | `carpenter` | `carpenter` |
| 82 | Wally Schirra Does It Right | — | `figure-right` | `schirra` | `schirra` |
| 83 | Gordon Cooper Goes Last | — | `dropcap-inset` | `cooper` | `cooper` |
| 84 | A Soviet Woman in Space | Space Race | `figure-left` | `tereshkova` | `tereshkova` |
| 85 | Dallas | Space Race | `stamp` | `jfk-portrait` | `jfk-portrait` |
| 86 | Gemini — The Stepping Stone | Gemini Program | `portrait-pull` | `gemini-titan` | `gemini-titan`, `ed-white-eva` |
| 87 | Gemini 3 — Molly Brown | Gemini Program | `figure-right` | `grissom-young-g3` | `grissom-young-g3` |
| 88 | Eight Days — Gemini 5 | Gemini Program | `dropcap-inset` | `gemini-titan` | `gemini-titan` |
| 89 | Two Ships, One Orbit — Gemini 6 and 7 | Gemini Program | `polaroid` | `gemini6-7` | `gemini6-7` |
| 90 | Docking — Gemini 8 and the Agena | Gemini Program | `portrait-pull` | `gemini8-agena` | `gemini8-agena`, `agena` |
| 91 | Gemini's Last Mission | Gemini Program | `panorama` | `aldrin-g12` | `aldrin-g12` |
| 92 | What the Saturn V Actually Is | Technology | `triptych` | `saturn-v-launch` | `saturn-v-launch`, `f1-engine`, `saturn-v-rollout` |
| 93 | How Do You Navigate to the Moon? | Technology | `duo` | `agc-dsky` | `agc-dsky`, `dsn` |
| 94 | The Spacesuit Problem | Technology | `hero-bleed` | `spacesuit` | `spacesuit` |
| 95 | Gemini 5 Follow-Up: What Eight Days Teaches You | Technology | `polaroid` | `gemini-titan` | `gemini-titan` |
| 96 | Mission Control and the People Behind the Headsets | Technology | `hero-bleed` | `mission-control` | `mission-control` |
| 97 | Surveyor Lands on the Moon | Technology | `figure-right` | `surveyor` | `surveyor` |
| 98 | Lunar Orbiter Maps the Moon | Technology | `postcard` | `lunar-orbiter` | `lunar-orbiter` |
| 99 | What I've Learned About Rocket Engines | Technology | `hero-bleed` | `f1-engine` | `f1-engine` |
| 100 | Grissom's Concerns | — | `portrait-pull` | `apollo1-crew` | `apollo1-crew`, `liberty-bell7` |
| 101 | The Worst Day | — | `polaroid` | `apollo1-fire` | `apollo1-fire` |
| 102 | After the Fire — What Happens Now | — | `duo` | `apollo1-fire` | `apollo1-fire`, `white-room` |
| 103 | Vladimir Komarov and the Soyuz 1 Crash | Space Race | `stamp` | `komarov` | `komarov` |
| 104 | The Long Wait | — | `portrait-pull` | `white-room` | `white-room`, `saturn-v-rollout` |
| 105 | Saturn V Test — Apollo 4 | — | `duo` | `saturn-v-launch` | `saturn-v-launch`, `f1-engine` |
| 106 | The Year Everything Will Happen | — | `figure-right` | `saturn-v-rollout` | `saturn-v-rollout` |
| 107 | The World Is on Fire | — | `figure-left` | `family-tv` | `family-tv` |
| 108 | April | — | `postcard` | `backyard-night` | `backyard-night` |
| 109 | Apollo 6 — The Saturn V Bounces | — | `portrait-pull` | `saturn-v-launch` | `saturn-v-launch`, `reentry` |
| 110 | June Again | — | `polaroid` | `backyard-night` | `backyard-night` |
| 111 | The Soviets and the Zond | Space Race | `stamp` | `zond5` | `zond5` |
| 112 | Zond 5 Returns | Space Race | `polaroid` | `zond5` | `zond5` |
| 113 | Apollo 7 — We're Back | — | `portrait-pull` | `schirra` | `schirra`, `mission-control` |
| 114 | Schirra's Cold and a Successful Mission | — | `figure-right` | `schirra` | `schirra` |
| 115 | The Decision for Apollo 8 | — | `portrait-pull` | `apollo8-crew` | `apollo8-crew`, `saturn-v-rollout` |
| 116 | They're On Their Way | — | `duo` | `apollo8-crew` | `apollo8-crew`, `saturn-v-launch` |
| 117 | Apollo 8 Comes Home | — | `portrait-pull` | `earthrise` | `earthrise`, `reentry` |
| 118 | What 1968 Was | — | `duo` | `earthrise` | `earthrise`, `newspaper-moon` |
| 119 | Spider — The Lunar Module Flies | — | `hero-bleed` | `apollo9-spider` | `apollo9-spider` |
| 120 | Who Will Land on the Moon? | — | `portrait-pull` | `apollo11-crew` | `apollo11-crew`, `collins` |
| 121 | Snoopy Goes to the Moon | — | `hero-bleed` | `apollo10-snoopy` | `apollo10-snoopy` |
| 122 | Nine Miles Up — Apollo 10's Descent | — | `postcard` | `apollo10-snoopy` | `apollo10-snoopy` |
| 123 | The Lunar Module Descent — Step by Step | Technology | `duo` | `lm-diagram` | `lm-diagram`, `agc-dsky` |
| 124 | What the Moon Actually Is | — | `portrait-pull` | `full-moon` | `full-moon`, `lunar-orbiter` |
| 125 | The Launch Is Three Weeks Away | — | `duo` | `saturn-v-rollout` | `saturn-v-rollout`, `vab` |
| 126 | Armstrong's Voice | — | `figure-left` | `armstrong-moon` | `armstrong-moon` |
| 127 | Watching the Rollout | — | `portrait-pull` | `saturn-v-rollout` | `saturn-v-rollout`, `vab` |
| 128 | It's Up — Apollo 11 Launch Day | Apollo 11 | `triptych` | `saturn-v-launch` | `saturn-v-launch`, `crowd-launch`, `mission-control` |
| 129 | Lunar Orbit Insertion — They Made It | Apollo 11 | `duo` | `apollo11-eagle` | `apollo11-eagle`, `full-moon` |
| 130 | Program Alarm 1202 | Apollo 11 | `portrait-pull` | `agc-dsky` | `agc-dsky`, `mission-control` |
| 131 | Tranquility Base Here — The Eagle Has Landed | Apollo 11 | `gallery` | `apollo11-eagle` | `apollo11-eagle`, `aldrin-moon`, `bootprint`, `armstrong-moon` |
| 132 | Gemini 9 — Cernan's Difficult Walk | Gemini Program | `stamp` | `cernan-eva` | `cernan-eva` |
| 133 | Gemini 10 — Young and Collins Hit Two Targets | Gemini Program | `duo` | `agena` | `agena`, `gemini-titan` |
| 134 | Gemini 11 — Highest Orbit | Gemini Program | `hero-bleed` | `gemini11-earth` | `gemini11-earth` |
| 135 | The Lunar Rocks Arrive | — | `portrait-pull` | `genesis-rock` | `genesis-rock`, `scientist-geology` |
| 136 | The World Tour — Armstrong, Aldrin, Collins | Apollo 11 | `hero-bleed` | `world-tour` | `world-tour` |
| 137 | What Does It Mean That We Went? | — | `duo` | `earthrise` | `earthrise`, `blue-marble` |
| 138 | The Television Camera on the Moon | Technology | `portrait-pull` | `tv-camera` | `tv-camera`, `family-tv` |
| 139 | Before Pete Conrad Lands — A Note | — | `polaroid` | `apollo12-launch` | `apollo12-launch` |
| 140 | What the Second Landing Proved | — | `figure-right` | `apollo12-conrad` | `apollo12-conrad` |
| 141 | The Cost of Apollo | Space Race | `duo` | `vab-factory` | `vab-factory`, `saturn-v-launch` |
| 142 | Why Apollo 13 Matters Beyond Survival | — | `portrait-pull` | `apollo13-control` | `apollo13-control`, `apollo13-mailbox` |
| 143 | How They Talk to Spacecraft | Technology | `hero-bleed` | `dsn` | `dsn` |
| 144 | Reading the Transcript | — | `postcard` | `mission-control` | `mission-control` |
| 145 | Fra Mauro — The Landing Shepard Deserved | — | `duo` | `apollo14-antares` | `apollo14-antares`, `shepard-a14` |
| 146 | Why the Highlands Now | — | `polaroid` | `descartes` | `descartes` |
| 147 | The Soviets Float Two Ships | Space Race | `portrait-pull` | `voskhod` | `voskhod`, `gagarin` |
| 148 | Voskhod — Three People, No Spacesuits | Space Race | `stamp` | `voskhod` | `voskhod` |
| 149 | Khrushchev Falls — What It Means for the Race | Space Race | `polaroid` | `khrushchev` | `khrushchev` |
| 150 | Alexei Leonov Walks in Space First | Space Race | `hero-bleed` | `leonov-eva` | `leonov-eva` |
| 151 | The Soviet Moon Program — What We Think We Know | Space Race | `portrait-pull` | `n1` | `n1`, `korolev` |
| 152 | Christmas with the Space Program | — | `duo` | `earthrise` | `earthrise`, `family-tv` |
| 153 | Independence Day, Space Age | — | `portrait-pull` | `crowd-launch` | `crowd-launch`, `full-moon` |
| 154 | The Night After the Landing | — | `duo` | `backyard-night` | `backyard-night`, `aldrin-moon` |
| 155 | What Comes After Apollo | — | `portrait-pull` | `skylab` | `skylab`, `shuttle-concept` |
| 156 | Skylab Is Coming | — | `hero-bleed` | `skylab` | `skylab` |
| 157 | Skylab Saved — A Repair No One Planned For | — | `figure-left` | `skylab-repair` | `skylab-repair` |
| 158 | Sixty Days in Space — Skylab 3 | — | `postcard` | `skylab` | `skylab` |
| 159 | The Men Who Walked on the Moon | — | `polaroid` | `moon-men-group` | `moon-men-group` |
| 160 | What NACA Was, and What NASA Will Be | Technology | `portrait-pull` | `mission-control` | `mission-control`, `mercury-seven` |
| 161 | Luna 2 Hits the Moon | Space Race | `stamp` | `luna` | `luna` |
| 162 | Echo 1 — The Big Balloon in the Sky | Technology | `polaroid` | `echo1` | `echo1` |
| 163 | Telstar — Live Television Across the Atlantic | Technology | `duo` | `telstar` | `telstar`, `family-tv` |
| 164 | What Weightlessness Actually Feels Like | Technology | `portrait-pull` | `ed-white-eva` | `ed-white-eva`, `aldrin-g12` |
| 165 | Eating on the Moon | Technology | `figure-left` | `skylab` | `skylab` |
| 166 | How the Computers Are Built | Technology | `duo` | `rope-memory` | `rope-memory`, `agc-dsky` |
| 167 | Mariner 4 Photographs Mars | — | `hero-bleed` | `mariner4` | `mariner4` |
| 168 | A Normal Tuesday at Home | — | `portrait-pull` | `family-tv` | `family-tv`, `backyard-night` |
| 169 | The Summer of Love and the Space Program | — | `postcard` | `starfield` | `starfield` |
| 170 | What I Tell People When They Ask Why I Care | — | `duo` | `earthrise` | `earthrise`, `full-moon` |
| 171 | The New Decade | — | `figure-left` | `full-moon` | `full-moon` |
| 172 | Salyut — The Soviets Build a Space Station | Space Race | `hero-bleed` | `salyut` | `salyut` |
| 173 | Soyuz 11 — A Tragedy in Three Lines | Space Race | `panorama` | `soyuz11` | `soyuz11` |
| 174 | Apollo 16 — Descartes Highlands | — | `portrait-pull` | `descartes` | `descartes`, `apollo16-young` |
| 175 | The Space Age at Sixteen | — | `duo` | `newspaper-moon` | `newspaper-moon`, `mercury-seven` |
| 176 | TIROS 1 — The Weather Eye | Technology | `hero-bleed` | `tiros1` | `tiros1` |
| 177 | Enos the Chimp Orbits | — | `polaroid` | `enos-chimp` | `enos-chimp` |
| 178 | The Cuban Missile Crisis, From Ohio | Space Race | `portrait-pull` | `cuban-missile` | `cuban-missile`, `u2` |
| 179 | The Space Race and the Arms Race | Space Race | `duo` | `icbm` | `icbm`, `saturn-v-launch` |
| 180 | James McDivitt and the Gemini 4 Flight | Gemini Program | `figure-left` | `ed-white-eva` | `ed-white-eva` |
| 181 | The Agena — The Target That Keeps Coming Back | Technology | `hero-bleed` | `agena` | `agena` |
| 182 | The Astronauts I've Been Getting to Know | — | `portrait-pull` | `mercury-seven` | `mercury-seven`, `moon-men-group` |
| 183 | Harold's Question | — | `duo` | `family-tv` | `family-tv`, `backyard-night` |
| 184 | Two Days Out | Apollo 11 | `portrait-pull` | `apollo11-crew` | `apollo11-crew`, `saturn-v-rollout` |
| 185 | Aldrin's Communion on the Moon | Apollo 11 | `duo` | `aldrin-moon` | `aldrin-moon`, `aldrin-flag` |
| 186 | Pete Conrad's First Words on the Moon | Apollo 12 | `dropcap-inset` | `apollo12-conrad` | `apollo12-conrad` |
| 187 | What I've Learned from the Scientists | — | `portrait-pull` | `scientist-geology` | `scientist-geology`, `genesis-rock` |
| 188 | Between Missions — The Waiting | — | `duo` | `white-room` | `white-room`, `backyard-night` |
| 189 | Pioneer 10 Is Leaving Earth's Neighborhood | — | `hero-bleed` | `pioneer10` | `pioneer10` |
| 190 | Counting Down to the Last Landing | — | `portrait-pull` | `apollo17-night` | `apollo17-night`, `saturn-v-rollout` |
| 191 | The Science Astronauts | — | `duo` | `schmitt-scientist` | `schmitt-scientist`, `scientist-geology` |
| 192 | My Last Entry for a While | — | `portrait-pull` | `blue-marble` | `blue-marble`, `moon-men-group` |
| 193 | We Choose to Go to the Moon — Rice University | Space Race | `duo` | `rice-speech` | `rice-speech`, `jfk-portrait` |
| 194 | Ranger 7 — Impact Photography | Technology | `hero-bleed` | `ranger7` | `ranger7` |
| 195 | Gemini 12 — The Last One | Gemini Program | `polaroid` | `aldrin-g12` | `aldrin-g12` |
| 196 | The Investigation Continues | — | `portrait-pull` | `apollo1-fire` | `apollo1-fire`, `white-room` |
| 197 | Zond 5 and What It Means | Space Race | `stamp` | `zond5` | `zond5` |
| 198 | Five Days Before — The Last Quiet Week | — | `duo` | `saturn-v-rollout` | `saturn-v-rollout`, `backyard-night` |
| 199 | The Quarantine — What Was It Like | Apollo 11 | `hero-bleed` | `mqf` | `mqf` |
| 200 | The Last Day of the Decade | — | `portrait-pull` | `blue-marble` | `blue-marble`, `full-moon` |
| 201 | Apollo 14 — Fra Mauro Geologically | — | `duo` | `apollo14-antares` | `apollo14-antares`, `scientist-geology` |
| 202 | The Genesis Rock — How Old Is Old | — | `hero-bleed` | `genesis-rock` | `genesis-rock` |
| 203 | The Soviet Unmanned Lunar Program | Space Race | `portrait-pull` | `luna` | `luna`, `n1` |
| 204 | The N1 Failed — Again | Space Race | `hero-bleed` | `n1` | `n1` |
| 205 | Why We Go Up and Come Down in Fire | Technology | `duo` | `reentry` | `reentry`, `saturn-v-launch` |
| 206 | The Men in the White Rooms | Technology | `portrait-pull` | `white-room` | `white-room`, `mission-control` |
| 207 | Life Magazine and the Astronaut Families | — | `hero-bleed` | `astronaut-families` | `astronaut-families` |
| 208 | Mariner 9 Orbits Mars | — | `figure-right` | `mariner9` | `mariner9` |
| 209 | The Pale Blue Dot — Before There Was a Name for It | — | `duo` | `blue-marble` | `blue-marble`, `earthrise` |
| 210 | The Saturn V Production Line Shuts Down | Technology | `portrait-pull` | `vab-factory` | `vab-factory`, `saturn-v-rollout` |
| 211 | After the Moon — Where Does the Program Go? | — | `duo` | `shuttle-concept` | `shuttle-concept`, `skylab` |
| 212 | My Neighbor Harold Goes to the Hospital | — | `portrait-pull` | `backyard-night` | `backyard-night`, `family-tv` |
| 213 | Preparing for Gemini — The Next Step | Gemini Program | `duo` | `gemini-titan` | `gemini-titan`, `ed-white-eva` |
| 214 | The Mercury Astronauts on Television | — | `portrait-pull` | `mercury-seven` | `mercury-seven`, `family-tv` |
| 215 | Deke Slayton Gets His Turn | — | `figure-right` | `deke-slayton` | `deke-slayton` |
| 216 | Luna 1 Escapes Earth | Space Race | `dropcap-inset` | `luna` | `luna` |
| 217 | Nixon Approves the Shuttle | Technology | `hero-bleed` | `shuttle-concept` | `shuttle-concept` |

---

## 8. Verify

```bash
# a) every image fetched & optimized (expect 0 missing, all < ~300KB)
ls wp-content/uploads/vault/*.jpg | wc -l          # ~226 (113 full + 113 med)
python3 - <<'PY'
import json,glob,os
m=json.load(open('import/image-manifest.json'))['library']
miss=[s for s in m if not os.path.exists(f'wp-content/uploads/vault/{s}.jpg')]
print('missing:', miss or 'none')
PY

# b) every post got a featured image and an injected block
ddev wp post list --post_type=post --posts_per_page=-1 --format=ids \
  | tr ' ' '\n' | while read id; do \
      thumb=$(ddev wp post meta get $id _thumbnail_id 2>/dev/null); \
      has=$(ddev wp post get $id --field=content | grep -c "apollo-vault:$id"); \
      echo "$id thumb=${thumb:-NONE} inject=$has"; \
    done | grep -E 'NONE|inject=0' || echo 'all posts illustrated + injected'

# c) licenses are all free (no NC/ND slipped through)
python3 - <<'PY'
import json; c=json.load(open('wp-content/uploads/vault/credits.json'))
bad=[k for k,v in c.items() if any(x in v['license'].lower() for x in ('-nc','-nd','noncommercial','noderiv'))]
print('non-free:', bad or 'none'); print('total credited:', len(c))
PY
```

Then load a few posts in the browser — e.g. *The Eagle Has Landed* (#38, gallery), *Houston, We've Had a Problem* (#45, hero), *The Genesis Rock* (#56), *Laika* (#70, stamp) — and confirm the layouts differ and captions/credits read correctly. Spot-check `SOURCES-vault.md` for attribution.

---

## 9. Tuning

- **Swap an image:** edit `posts.<id>.images` (and `featured_image`) in the manifest, re-run fetch (only new slugs download), then import with `VAULT_FORCE=1`.
- **Change a caption:** edit `posts.<id>.captions` and the `figure_html`, re-import with `VAULT_FORCE=1`.
- **Different layout for a post:** change `posts.<id>.layout` to any treatment in section 5 and re-render its `figure_html` (or hand-edit the HTML), then re-import.
- **A resolve keeps failing:** open the image's Commons category by hand, put the exact filename in `library.<slug>.preferred`, and re-run fetch.

