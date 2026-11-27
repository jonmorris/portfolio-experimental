# The Pamphlet: side-project material

Raw material for a side-project write-up. Unjudged; gaps are questions, not verdicts.

**Template:** `docs/case-study-template.md` (type: side)

**Sources**

- `src/projects/the-pamphlet.md`: current portfolio page (Eleventy markdown)
- `src/previous case studies/the-pamphlet.php`: earlier page ("Pamphlet"); byte-identical to `/home/user/jon-morris.com/work/the-pamphlet.php`
- `/home/user/jon-morris.com/variables/variables-all.php`: old site's project arrays
- `/home/user/thepamphlet.info`: the site's repo (static HTML + Bootstrap; one commit, 2026-06-29, "adding new content")
- `docs/catalog.md`: row "The Pamphlet", conflict #20

Short names below: **md** = `src/projects/the-pamphlet.md`, **php** = `the-pamphlet.php` (old portfolio), **vars** = `jon-morris.com/variables/variables-all.php`, **site** = `/home/user/thepamphlet.info`.

---

## Snapshot

| Field | What's known | Source |
|---|---|---|
| title | md: "Exactly the answer you came for" | md |
| | php h1: "Pamphlet". vars header: "Basic Information You Need". Site `<title>`: "Pamphlet". | php, vars, `site/index.html` |
| name | md: "The Pamphlet". The site and old page call it "Pamphlet". Which is the name? `[[?]]` | md, php, site |
| type | side | md |
| year | md: `year: 2026`, `displayYear: "2024-2026"`. Catalog #20: 2024–2026 appears only in md. Repo history is one commit (2026-06-29), so it doesn't date the start. | md, `docs/catalog.md`, site git log |
| role | md: "Designer & Developer". php "My Role": "I designed and developed this site". vars client: "Personal Project". | md, php, vars |
| link | `https://thepamphlet.info/` | md, php |
| skills | md: Product Strategy, UX Design, UI Design, Front-End Development, Content Strategy. vars categories: "UX, Visual Design, Commerce Cloud" (the same string vars gives most rows). | md, vars |
| summary | md: "It's my attempt to collect useful simple information without ads that you might need to reference, you want or need it to be accurate and reliable" | md |
| cover | `[[?]]` none in md frontmatter. | md |

---

## What it is

**What exists**

- An ad-free site of simple reference information that is "somehow difficult to obtain on the modern internet"; built "organically as I find something else I want to recreate in this form". (md, php)
- Live home page lists three topics: Liquid Measurement Conversions, How to Boil Eggs, Meat Doneness; plus "Suggest a Topic" and "Support This Project" links. (`site/index.html`)
- Topic pages live under `/rmation/`, so URLs read `thepamphlet.info/rmation/…` ("info" + "rmation"). (site)
- Each page is a short instruction list or table, e.g. a cup/Tbsp/oz conversion table, a meat doneness table in °F and °C, egg timings for runny/soft/hard. (`site/rmation/liquidmeasurementconversions.html`, `meatdoneness.html`, `howtoboileggs.html`)
- About page: "I just wanted simple answers to simple questions…"; also a wider aim: information "that probably everyone would benefit from knowing… easily found in one place for you (and me)." (`site/about.html`)

**Open questions for Jon**

- "The Pamphlet" or "Pamphlet"?
- Was the `info/rmation` URL a deliberate play on the domain?
- Which topics are live today, and which are in progress (see *Other material*)?

## Why I made it

**What exists**

- The baking story (md, php): mid-bake, Jon googled "liquid measurement conversions" and "found only despair": an "ad farm cooking website with an entire article before the conversion chart", then an image result that was "inaccurate". He finished cooking and "started making my own chart."
- Stated purpose: "Pamphlet was created to fix the SEO optimized nonsense cluttering up someone's search for basic information." (md, php)
- The old page opened by inviting the reader to try the Google search themselves, with a link to it. (php)
- Self-initiated: "Own project" (catalog), "Personal Project" (vars).

**Open questions for Jon**

- Roughly when was the baking moment (to settle 2024 as the start)?
- Has the search landscape changed since (e.g. AI answers at the top of search)? Does that change the "why" you'd tell now?

## How it works & key decisions

**What exists**

- Ethos: "simple, fast, and accurate". The brand "gets out of the way, it's clean and sharp, but subdued." (md, php)
- Build: static HTML pages, Bootstrap CSS/JS, a small custom stylesheet; a VS Code launch config runs PHP's built-in server locally. (site, `site/.vscode/launch.json`)
- Visual system in `site/css/style.css`: Rubik (Google Fonts); background `#E8EAED`, charcoal text `#36454f`, near-white `#fdfdfd`, teal hover `#1CB4B4`; striped Bootstrap tables restyled.
- Page furniture: a back arrow to home and an info icon linking to the About page on each topic page. (`site/rmation/*.html`, `site/images/backarrow.*`, `infoicon.*`)
- Two outward features on the home page: "Suggest a Topic" (a Canny board) and "Support This Project" (Buy Me a Coffee), which ask readers for topics and support instead of using ads. (`site/index.html`)
- Each page has a meta description such as "A simple, ad free liquid measurement conversion chart." (site)
- php has a "Research" heading: "I took some time to find examples of anything similar out there on the internet." No examples are listed. (php)
- php had a "Branding" section with a "Style Guide" image. (php)

**Open questions for Jon**

- How do you check accuracy, and do you cite sources anywhere? (Accuracy is one of the three ethos words.)
- What did the research turn up: which similar sites did you look at?
- How do you choose a topic: your own needs, Canny suggestions, both? Have any suggestions or support come in?
- Was Bootstrap kept for a reason, or just a fast start?
- Any decisions about what *not* to put on a page (no intro text, no images)?

## What I learned

**What exists**

- None of the sources has a learning section. md ends at "Design".

**Open questions for Jon**

- What surprised you once it was live (search traffic, whether people found it, suggestions)?
- What's next for it?

---

## Live / public links (found, not verified)

- `https://thepamphlet.info/` (md, php)
- `https://pamphlet.canny.io/content-suggestions`: "Suggest a Topic" (`site/index.html`)
- `https://www.buymeacoffee.com/jonmorris`: "Support This Project" (`site/index.html`)
- Repo remote: `github.com/jonmorris/thepamphlet.info`

## Visual material

**Portfolio repo (`src/assets/the-pamphlet/`)**

- `liquid-hell.png`: alt text "Liquid Measurement Conversion Google Image Results Screenshot" (the "before")
- `liquid-heaven.png`: alt text "Pamphlet Liquid Measurement Conversion Chart" (the "after")
- `style-guide.png`: style guide

**Old site (`/home/user/jon-morris.com/images/`)**

- `the-pamphlet/`: the same three files
- `thumbs/pamphlet-thumb.png`: listing thumbnail

**Site repo (`/home/user/thepamphlet.info/`)**

- `images/logo.svg`, `images/logo.png`: logo
- `images/infoicon.*`, `images/backarrow.*`: UI icons
- `favicon*`, `apple-touch-icon.png`, `android-chrome-*.png`: icons

## Other material

- `site/rmation/` holds ten HTML files; the home page links three. The other seven: `communication.html` ("Every Problem is a Communication Problem"), `howtofocusonwork.html`, `howtopayoffstudentloans.html`, `howtomakecoffee.html`, `howtoeatright.html`, `howtoexercise.html`, `shouldyouavoidthesun.html`. Several carry the body or `<title>` of another page (e.g. `howtoeatright.html` is titled "How to Boil Eggs"), so they look like pages in progress. Question for Jon: are these planned topics?
- About page also describes a broader scope than cooking: life and work topics (loans, focus, sun) appear in the unlinked pages.
- md and php share most of their text; md drops php's "Research" heading and the "Liquid Hell / Liquid Heaven" figures.

---

## Jon's answers (grill session, 2026-11-27)

**Name.** Call it **Pamphlet** (the brand). The URL is `thepamphlet.info` only because that was the domain available. Recommended on the page: "Pamphlet (thepamphlet.info)".

**Why I made it.** I was searching for measurement conversions while cooking. Google gave flat images, not live text, and every link led to ad-farm, SEO-optimised recipe sites with the chart 37 scrolls down past 50 ads, and sometimes inaccurate. Pamphlet shows the answer quickly at the top of the page, as live text that's responsive and accessible.

**Accuracy.** Checked against official sources. (Naming them on the page, for example USDA for meat temperatures, would strengthen this.)

**Key decision (with the rejected option).** The unlinked pages in the repo (loans, focus, sun and others) were **exploration of the site's point of view**. There were two paths: (1) accurately displaying basic factual information, the core idea; (2) answering general questions in an opinionated way (how to pay off debt, how to budget). The second was **rejected for this site** because it drifted from the original point toward editorial over factual. Topics must be relatively set in stone, not opinion. An example future topic: a pour-over coffee brewing guide with timings.

**Status.** Three topics live. Plans to add more entries with the same problem (fact buried under ads), but it dropped off; Jon wants to get back to it.

**What I learned.** Same as NHL '95: just build the things you want to build; act on the inclination instead of letting the idea sit. And **fix the internet**: ad-farm recipe sites are terrible, so build things that don't do that.
