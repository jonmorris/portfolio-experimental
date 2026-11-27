# Leviathan Mech (Splinter keyboard): side-project material

Raw material for a side-project write-up. Unjudged; gaps are questions, not verdicts.

**Template:** `docs/case-study-template.md` (type: side). Planned as one page for the Leviathan Mech venture, with the Splinter keyboard as the centrepiece.

**Sources**

- `src/projects/leviathan-mech.md`: current portfolio page (Eleventy markdown)
- `src/previous case studies/splinter-keyboard.php`: earlier page ("The Perfect Keyboard Doesn't Exist"); byte-identical to `/home/user/jon-morris.com/work/splinter-keyboard.php`
- `/home/user/jon-morris.com/includes/project-listing.php`: old site's project card for Splinter (`id="splinter"`)
- `/home/user/jon-morris.com/variables/variables-all.php`: old site's project arrays (client, header, categories)
- `/home/user/jon-morris.com/css/style.css`, `/home/user/jon-morris.com/todo`: small mentions
- `/home/user/leviathanmech`: repo for the Leviathan Mech brand website (PHP, not a Shopify theme): `projects/splinter-keyboard.php`, `projects/dss-white-on-black.php`, `about.php`, `includes/`, `variables/variables.php`, `images/`
- `docs/catalog.md`: rows for Leviathan Mech and Splinter keyboard, conflict #14
- **Resume**: Jon's resume, Nov 2026 (as quoted in the brief and `docs/catalog.md`)
- **Jon**: Jon's notes in the brief (Leviathan Mech is the brand + Shopify store; Splinter is the main product he designed; it is both a split and a 40% keyboard)

Short names below: **md** = `src/projects/leviathan-mech.md`, **php** = `splinter-keyboard.php` (old portfolio), **listing** = `jon-morris.com/includes/project-listing.php`, **vars** = `jon-morris.com/variables/variables-all.php`, **lm-splinter** = `leviathanmech/projects/splinter-keyboard.php`, **lm-dss** = `leviathanmech/projects/dss-white-on-black.php`, **lm-about** = `leviathanmech/about.php`.

---

## Snapshot

| Field | What's known | Source |
|---|---|---|
| title | md: "The perfect 40% keyboard doesn’t exist..." | md |
| | php and vars header: "The Perfect Keyboard Doesn't Exist" (no "40%") | php, vars |
| | listing card: "Launching a premium split keyboard from concept to market" | listing |
| | Brand site subhead: "Split 40% Minivan" (also "40% Split Minivan" in the project array) | lm-splinter, `leviathanmech/variables/variables.php` |
| name | md: "Leviathan Mech". Old site: "Splinter Mechanical Keyboard" (path title), client "Leviathan Mech". | md, vars |
| type | side | md |
| year | md: `year: 2025`, `displayYear: "2024-2025"`. Listing: 2024-2025. Resume: Aug 2024 – Jul 2025 (freelance). **Note:** the brand site shows earlier activity: a 3D-printed Splinter prototype "as of July 2024", and a keycap group buy under the brand Feb–Mar 2024 (see *Other material*). Footer: "© 2024 Leviathan Mech LLC." | md, listing, Resume, lm-splinter, lm-dss, `leviathanmech/includes/footer.php` |
| role | "Product Designer" in md and listing. Brand site credits Jon ("Leviathan") with "Concept". | md, listing, lm-splinter |
| link | `[[?]]` none in md frontmatter. Candidates found: `https://shop.leviathanmech.com/` (header/footer "Shop" link on the brand site), the brand site itself (domain not stated in the repo; `[[?]]`). | `leviathanmech/includes/header.php` |
| skills | md: Product Strategy, UX Design, Industrial Design, Marketing, E-commerce Logistics. Listing adds User Testing / Research and Prototyping. vars categories: "Product Design, Industrial Design". | md, listing, vars |
| summary | md: brought "a premium split 40% mechanical keyboard to market, leading the product from concept through production", for enthusiasts who value "efficiency, ergonomics, and craftsmanship". Listing summary uses similar terms plus "go-to-market execution". | md, listing |
| team | **Conflict in wording, not substance (?):** Resume: "directing a PCB designer, a case designer, and an overseas factory". Listing "Design Team": Myself, PCB Designer, CAD Designer. Brand site credits a case designer and a PCB designer by handle (names left out here). | Resume, listing, lm-splinter |
| result | Resume: "Launched a custom premium mechanical keyboard from concept to fulfilled orders… selling 12 boards at a $550 base price." md/php: "ran multiple production batches" plus a 3D-printed lower-cost version; "sold units to other keyboard enthusiasts". | Resume, md, php |
| cover | `[[?]]` none in md frontmatter. `src/assets/leviathan-mech/splinter-hero.png` exists. | `src/assets/leviathan-mech/` |

---

## What it is

**What exists**

- A premium split 40% mechanical keyboard, Splinter, sold under Jon's own brand Leviathan Mech; the brand also runs the store. (md; Jon)
- Layout basis: a "Minivan" layout, split, with extra nav columns and support for rotary encoders. (lm-splinter)
- Layout highlights listed on the brand site: Minivan layout; split board; nav columns; "6 Rotary Encoder Spots, all independant"; exploded 3u or 1.75u / 1.25u spacebars; dedicated arrow cluster; Vial compatible. (lm-splinter)
- Versions/materials named: a 3D-printed (3DP) case; a planned "premium Aluminum and Sandblasted Brass run". md/php: production batches plus a 3D-printed lower-cost version. (lm-splinter, md, php)
- Resume framing: concept to fulfilled orders; 12 boards sold at a $550 base price. (Resume)
- The brand site's about page: Jon ("Leviathan") has been in the mechanical keyboard hobby "since mid 2020"; the site exists "to share my current and future projects with the keyboard community". (lm-about)

**Open questions for Jon**

- One sentence: how would you describe Splinter to a non-keyboard person? (Minivan, 40%, split and encoders may each need a gloss.)
- Is Leviathan Mech the page's name and Splinter the hero, or should the title name Splinter?
- The 12 boards at $550: was that the aluminium/brass run, and how many 3D-printed units sold (if any are counted separately)?
- Did the aluminium and sandblasted brass versions both ship, or one of them?
- Is the brand site (the `leviathanmech` repo) still live, and at what domain? Is the Shopify store at `shop.leviathanmech.com`?

## Why I made it

**What exists**

- Motivation: the hobby was "a creative outlet"; after "building more than ten boards" Jon "noticed there was still something missing… The keyboard I wanted didn't exist." (md, php)
- The brand-site page frames Splinter as representing "many of my preferred keyboard design elements": Minivan layout, split "for more comfortable hand placement", nav columns with encoders "for utility", exploded spacebars "for ergonomics", and "a chunky case". (lm-splinter)
- Self-initiated: Jon's own venture (catalog "Own venture"; resume lists it under freelance). (`docs/catalog.md`, Resume)

**Open questions for Jon**

- What specifically was missing from the ten-plus boards you'd built? Any one board that came closest?
- Was selling it part of the plan from the start, or did it start as a board for yourself?
- How does this sit alongside your freelance UX work Aug 2024 – Jul 2025: is the page framed as a venture, a side project, or both?

## How it works & key decisions

**What exists**

- Process (md, php): sketches and CAD models → "several prototype iterations, refining the layout, mounting system, and overall typing feel" → design finalised → multiple production batches, plus a 3D-printed lower-cost version.
- Layout decisions, in Jon's words on the brand site (lm-splinter, "Layout Overview" / "Design Notes"):
  - Minivan as the base, but split "to be a little more ergonomic with hand placement".
  - Nav-column keys that can also be rotary encoders, which "don't get in the way of typing" because they sit outside the main layout.
  - Three left modifiers ("I always seem to want 3").
  - A dedicated arrow cluster ("arrows on a layer always work but sometimes you just want dedicated arrows") and an extra 1.5u utility key.
  - Two 3u spacebars placed for thumb position, "centered on where your thumb should naturally fall" rather than where they fit on a non-split bottom row; un-split, they would overlap by about 1.25u. A 1.75u / 1.25u option kept for others.
- Status as of July 2024 (lm-splinter, "Current Status"): 3DP prototype in hand; mounting system and typing feel still being confirmed before a group buy; weight engraving design and PCB screen print design in progress; plan was a 3DP group buy in Q4 2024, then the aluminium and brass run in 2025.
- The brand page still has the group-buy block with TBD dates and `$XXX` placeholders, and was at the "Interest Check" stage when last committed. (lm-splinter, `leviathanmech/variables/variables.php`)
- Collaborators (Resume): a PCB designer, a case designer, an overseas factory, directed by Jon.
- Community channels used: the 40% Discord and Instagram, named on the page as the place for updates. (lm-splinter)
- Skills on the listing include "E-commerce Logistics" and "Marketing". (listing, md)

**Open questions for Jon**

- Which two or three decisions would you put on the page? Candidates from the sources: the thumb-placed split spacebars, the encoder nav columns, the mounting system, the 3DP-vs-metal tiering.
- What changed between prototype iterations (layout, mount, typing feel)? Any options you tried and dropped?
- What did "directing" the PCB designer, case designer and factory involve: briefs, specs, review rounds, sample approvals?
- How was the 3D-printed version produced: by you, or by a service?
- How did selling work: group buy vs in-stock on Shopify? Who handled fulfilment?
- Is there anything about the brand (logo, name "Leviathan", site, packaging) you designed and want to show?

## What I learned

**What exists**

- "The process taught me the complexities of bringing a physical product to market, from design decisions to manufacturing logistics, and resulted in a board that I'm proud to see in the hands of others." (md, php)
- "Both versions were well-received in the community." (md, php)

**Open questions for Jon**

- What was hardest or most surprising about manufacturing and logistics?
- What would you do differently on a second board?
- How did community feedback show up (Discord, Instagram, orders, posts by owners)? The old page has a "Splinter Final UGC" figure slot: is there user-generated content you can use?
- Does anything from this carry into your product design work (e.g. working with engineers/manufacturers, spec writing)?

---

## Live / public links (found, not verified)

- `https://shop.leviathanmech.com/`: "Shop" link on the brand site (`leviathanmech/includes/header.php`, `footer.php`)
- `https://www.instagram.com/leviathan_mech/`: brand Instagram (`leviathanmech/about.php`, `projects/splinter-keyboard.php`)
- `https://discord.gg/40percent`: the 40% keyboard community Discord, linked for updates (`leviathanmech/projects/*.php`)
- `https://geekhack.org/index.php?topic=113783.0`: Geekhack thread for the DSS White on Black keycap set (`leviathanmech/projects/dss-white-on-black.php`)
- The brand site's own domain: `[[?]]` (not stated in the repo; repo remote is `github.com/jonmorris/leviathanmech`)

## Visual material

**Portfolio repo (`src/assets/`)**

- `leviathan-mech/splinter-hero.png`: hero (same name as the old site's hero)
- `leviathan-mech/splinter-thumb-2.png`: card preview image
- `logos/leviathan-logo.svg`: brand logo

**Old site (`/home/user/jon-morris.com/images/`)**

- `splinter/splinter-hero.png` (1600×1256): the only image the old page uses; its Sketch, Prototype, Final Version and Final UGC figures all point to this same file
- `previews/splinter-thumb-2.png` (1200×641): listing card image
- `thumbs/splinter-thumb.png`, `thumbs/splinter-purple.jpg`: older thumbnails (purple may match the lilac 3DP case)
- `logos/leviathan-logo.svg`
- `css/style.css`: card colour `--splinter-background: #CFCABE`
- `todo`: "Better mobile image for splinter"

**Brand-site repo (`/home/user/leviathanmech/images/`)**

- `splinter/Splinter 1.jpg`, `Splinter 2.jpg`, `Splinter 3.jpg`: large camera photos (about 5400–5800 px wide); possibly product photography
- `splinter/splinter-hero-1200x600.png`: captioned "Splinter - Lilac 3DP case, with NicePBT Galaxy" (keycaps)
- `splinter/splinter-layout-1200x600.png`: layout diagram
- `splinter/splinter-left-1200x600.png`, `splinter-right-1200x600.png`: left and right half details
- `thumbs/splinter-thumb-1200x600.png`: project card image
- `lm-logo.svg`, `lm-logo.jpg`, `lm-fav.svg`: brand logo and favicon
- `dss-wob/` (15 files) and `thumbs/dss-wob-*`: renders, kitting diagrams and a photo for the DSS White on Black keycap set (see below)
- `thumbs/discord-thumb-*`: Discord card graphics

**Not found:** sketches, CAD screenshots, prototype photos, factory samples, packaging, store screenshots. Where do those live (Figma, CAD files, phone photos, Shopify)?

## Other material

- **DSS White on Black keycap set**, a second Leviathan Mech project on the brand site (lm-dss): a "classic colorway" in Signature Plastics' DSS profile, ABS doubleshot, with Trashcon modifiers, a "40% Focus" in the base kit and a new CMY mod kit. Kitting was designed "to cover as many layouts as possible" (the page lists 30% boards, ortholinear, column-staggered splits and staggered boards from 10u to 14u). Group buy ran 24 Feb – 31 Mar 2024 through another vendor; delivered July 2024. Open question: does this belong on the Leviathan Mech page (as the brand's first product), elsewhere, or nowhere?
- Brand-site structure: projects listing with status badges ("Interest Check", "Group Buy Complete"), project pages with a spec block (group buy dates, fulfilment, credits) and a standard disclaimer. (`leviathanmech/variables/variables.php`, `projects/*.php`)
- Brand-site type: Rubik (Google Fonts) and a Typekit kit; local font files `metric-web-*` and `tiempos-text-test-*` in `leviathanmech/fonts/`. (`leviathanmech/includes/head.php`)
- The `leviathanmech` repo has one commit (2026-04-15, "Add CLAUDE.md behavioral guidelines"), so its history doesn't date the work.
- Catalog conflict #14 (resolved): split and 40%; the old site names the product (Splinter), the new site the venture (Leviathan Mech). (`docs/catalog.md`)
- Jon's note says Leviathan Mech is a Shopify store; the `leviathanmech` repo is the separate brand/project site, which links out to the shop. No Shopify theme code was found locally.

---

## Jon's answers (grill session, 2026-11-27)

**Framing.** The page is **Splinter**. Leviathan Mech is only the name of the e-commerce side and brand; it doesn't need to be mentioned.

**Why I made it.** After years in the hobby and owning 14–16 keyboards, I'd built up a clear idea of what I wanted, and nothing on the market hit it. I started with the layout and core requirements: a **40%**, **split**, with **3u spacebars** and **nav columns**. Then the aesthetic: chunky, industrial-looking boards I liked. Further decisions refined the requirements from there.

**Why it was sold.** It began as a board for myself. In the 40% keyboard Discord, people design and sell boards all the time; I shared mine and others were interested. Making a couple just for me would have been expensive, so a commercial run helped cover the design costs. Goal: cover costs and effectively get a couple of boards free. Achieved, with a small profit, even after the tariffs.

**Sales.** About **15 sold**: 12 aluminium and brass at $550, plus about 3 3D-printed. (The resume's "12 boards" is the metal run.) Sold as a **group buy**: buyers pay up front, then the run is produced and shipped months later.

**Design decisions (include the full set of parameters; they work together as a curated whole):**
- **Nav columns: top mount.** The PCB is screwed directly to the case top. They hold rotary encoders, where flex makes no sense, and they anchor the flexible alpha section.
- **Alphas: hybrid mount.** A "hamburger" gasket mount (rubber on both sides of the plate, for damping, cushion and no rattle) combined with **leaf-spring** cutouts: thin arms on the plate that flex, so the whole assembly moves like a suspension instead of a hard surface.
- **One PCB, decoupled.** Rather than two PCBs with a wired link (rejected as adding complexity), thin flexible bridges connect the nav columns to the alphas, so the nav mounting doesn't affect alpha flex. Tested on prototype PCBs in 3D-printed cases and balanced so flex feels even across the alphas, with no dead or hard spots.
- **Plate options.** **FR4** (fiberglass, the same material as the PCB, so it's made by the PCB manufacturer in the same order): firm enough for leaf springs, soft enough to feel good. **POM**: naturally flexible, so a solid plate with no leaf springs, for a different feel and sound.
- **Connectivity.** Wired, simple USB-C only: no Bluetooth or battery. USB-C to the computer and USB-C between halves, for easy parts and matching ports at the back.
- **Look.** Chunky and industrial.

**How I worked.** I wrote a design document: the layout prototype (several iterations), the case design concept and the technical requirements. A well-known community case designer accepted it as a commission and did all the CAD under my art direction, handling tolerances, screw points and manufacturability, and introduced the manufacturer. A PCB designer from the Discord did the PCB. I coordinated the three-way back-and-forth (when one change moved something else), made final decisions and project-managed through to a successful production run.

**3D-printed version (a second design iteration).** For buyers who didn't want the premium price: about 60–80% of the experience for about $50 for the case. It was designed by the PCB designer and adapted from the machined design:
- The top prints face-down for a clean flat surface.
- Mounting points re-engineered for different screws.
- Fit tuned for 3D-print tolerance variance between top and bottom.
- **Heat-set screw inserts were rejected:** hard to do reliably (one bad insert means reprinting the case) and too much to ask of buyers printing their own from the files and hardware kits sold. **Replaced with press-fit magnets** (four sets), with the depth set by the case. It's repeatable for buyers and for me; magnet type and strength took some iteration.

**Hardest part.** The container-ship wait, and above all **unexpected tariffs mid-run**: about **50% of the cost of goods** on PCBs and cases, after buyers had already paid. I absorbed it rather than charge more; an optional contribution was offered and a few people chipped in.

**What I'd do differently.** Nothing about the board itself; it's exactly what I wanted. Commercially, it uses too much aluminium and brass: heavy (8–10 lb), expensive to make and ship, thin margin on a small run. Next: possibly another run of this version (gauging interest), and a **"Splinter Light"** with the case designer, keeping the same parameters in a much more minimal, travel-friendly case.
