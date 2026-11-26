# Cardboard Appendix: case-study material

Raw material mapped to the template. Unjudged; gaps are questions, not verdicts.

**Template:** `docs/case-study-template.md` (type: side). The template merges sections for side projects: 1 → "What it is", 2 → dropped (say it's self-initiated), 4 → "Why I built it", 6 → "How it works", 7 + 8 → "What I learned". The material is still mapped to all eight here so nothing is lost.

**Sources**

- `src/projects/cardboard-appendix.md`: current portfolio page
- `src/previous case studies/cardboard-appendix.php`: earlier page; byte-identical to `/home/user/jon-morris.com/work/cardboard-appendix.php`
- `/home/user/jon-morris.com/cardboard appendix project.php`: the site's old "About" page (origins, content types)
- `/home/user/jon-morris.com/delete/work/cardboard-appendix.php`: an older, deleted portfolio page (found while searching; not in the brief)
- `/home/user/jon-morris.com/variables/variables-all.php`: old portfolio listing and "ventures" list
- Project repo (private; summarised and cited only): `/home/user/cardboard-appendix/docs/CASE-STUDY.md`, `docs/PRINCIPLES.md`, `README.md`, `GLOSSARY.md`, ADR titles in `docs/adr/`
- Images: `src/assets/cardboard-appendix/`, `/home/user/jon-morris.com/images/cardboard-appendix/`, `/home/user/jon-morris.com/images/thumbs/ca-thumb.{png,jpg}`

Short names below: **md** = `src/projects/cardboard-appendix.md`, **php** = the earlier portfolio page, **about** = `cardboard appendix project.php`, **old** = `delete/work/cardboard-appendix.php`, **CS** = the repo's `docs/CASE-STUDY.md` (cited by module number, CS §n), **PR** = `docs/PRINCIPLES.md`.

---

## Snapshot

| Field | What's known | Source |
|---|---|---|
| title | "Bringing board game rules into the digital age" (md). Earlier: "Better Boardgame Rules" (php); "Revolutionizing Boardgame Rulebooks" (listing header); "Teaching boardgames better" (ventures list) | md; php; `variables-all.php` |
| name | "Cardboard Appendix" | md |
| type | side | md |
| year | **Conflict:** md `year: 2026`, `displayYear: "2023-2026"`. about: "2017 - Cardboard Appendix" and "began at the tail end of 2017". CS §1 timeline: `[[six months]]` (a placeholder). | md; about; CS §1 |
| role | md: "Founder & Designer". php: "Founder, Lead Designer, Creative Direction, Project Management, Design Strategy, Content Strategy, Copywriting, Development". old: "Web Design, Development, Copy Writing"; credits "Lead Designer". CS §1: `[[Product designer and owner: research, UX, visual design, content design, front-end]]`. | md; php; old; CS §1 |
| client | n/a (side project) | n/a |
| link | `https://www.cardboardappendix.com` | md |
| skills | md: Product Strategy, UX Design, UI Design, Front-End Development, Information Architecture. Old listing tag: "UX, Visual Design, Commerce Cloud" (the same tag as most rows in that list). CS §1 tools: Eleventy, Cloudflare Workers, Markdown in git, Python for extraction, `[[design tools]]`. | md; listing; CS §1 |
| summary | md has a summary: rules as a "real digital product": searchable, cross-linked, accessible, responsive; designed and built solo; relaunch coming in 2026. | md |
| cover | `[[?]]`: none in md frontmatter. Candidates: `ca-landing.png`, `ca-thumb.png`. CS §1 asks for a phone-and-desktop hero (`[ ]`, not captured). | assets; CS §1 |

---

## 1. Opening ("What it is")

**What exists**

- md "What it is" paragraph: paper rules turned into a digital product; solo design and build; relaunch in 2026. (md)
- CS §1 overview: turns rulebooks into something usable mid-game. Each game gets a rulebook, summary, glossary and index, cross-linked, searchable "down to the sentence", bookmarkable, readable on a phone in a dim room, and laid out for print. (CS §1)
- CS §1 one-line version: started out building a rules website, ended up designing a lookup tool. (CS §1)
- README opening: the same set of documents per game, a static site, content as Markdown in git. (`README.md`)

**Open questions for Jon**

- Which hero: a phone-and-desktop pair (as CS §1 plans), the landing page, or the photo thumbnail?
- Is the relaunch date firm enough to state?

## 2. Role & scope

**What exists**

- Self-initiated, solo: "I designed and built it solo." (md)
- Role lists differ by source (see Snapshot). (php; old; CS §1)
- about credits Jon as designer, developer, editor and contributor. (about)
- CS §11 is a placeholder module on working with an AI coding agent: what Jon directed and reviewed, and how written principles and decision records kept the work consistent. (CS §11)

**Open questions for Jon**

- Which role wording do you want: "Founder & Designer", or the CS §1 list?
- Do you want to say how the work was split with an AI coding agent (CS §11)? If so, how?
- Timeline: 2017 origins vs 2023–2026 vs "six months". Which span does this case study cover?

## 3. Confidentiality note

**What exists**

- Not applicable as an NDA. The project repo is private while this portfolio is public, so anything drawn from it is summarised here.

**Open questions for Jon**

- Is there anything from the repo (status page, admin, analytics) you'd rather not show publicly?

## 4. Problem ("Why I built it")

**What exists**

- md / php: address "the shortcomings of existing board game rulebooks"; move static paper rules into a "flexible, responsive, accessible, searchable" form. (md, php)
- old: rulebooks are hard to learn from, give no guide to teaching, and are poor for looking things up. The site is "my solution to that problem." (old)
- about, "Origins": it began as a home for Jon's own board-game aids, to share with his groups. Motivation: making it easier to get heavy games to the table, and the burden on the person teaching ("You are the arbiter of the rulebook"). (about)
- CS §2: rulebooks are built to teach before play but get used for lookup during play. The specific failures it lists: one copy, no search, answers split across places, not responsive, not very accessible. The named job is "at-the-table lookup", which reshaped the navigation, type, reading settings and bookmarks. (CS §2)
- CS §2 placeholder: `[[Research: what I observed or heard from players…]]`. (CS §2)
- PR: "For board gamers first": decisions favour the reader at the table. (PR)

**Open questions for Jon**

- The origin story (2017, a teacher's aid) and the current framing (at-the-table lookup): tell both, or one?
- Do you have any player observations or quotes for the CS §2 placeholder?

## 5. Constraints

**What exists**

- Content arrives as mixed-quality PDFs: clean text, OCR'd scans, image-only pages. (CS §3)
- Rules must stay faithful: one word can change a ruling, so damaged text is flagged rather than silently fixed. (CS §3)
- The smallest screen is the main reading context. (CS §4)
- No advertising, framed in CS as "a constraint, not a preference". (CS §8; PR "No ads…")
- Principles: accessible to everyone; links are permanent (relaxed during the beta); build for the library it will become; official content is never charged for. (PR)
- Static site, content in git (README). Cost-conscious infrastructure: one ADR title covers keeping CI inside the free minutes. (`README.md`; ADR 0049 title)

**Open questions for Jon**

- For a side project, keep a constraints paragraph or drop it? Which of these matter to the story?

## 6. Design decisions ("How it works")

**What exists**: CS is organised in beats (problem → tried → worked/didn't → decided). Summary of the beats:

**Content pipeline (CS §3)**
- Faithful over tidy: OCR damage kept, flagged, then corrected against the original. A document can't go live with an open flag.
- Images: PDF image extraction mostly failed (vector art, fragmented bitmaps). Jon built a tool that finds artwork regions and renders them, plus a contact sheet for one-pass fixes. The first crops lost meaningful frames and were recut.
- A figure whose content isn't confirmed doesn't render. This came from placeholder art once landing in a rulebook.
- Readiness is split into separate scored questions, with a gate before going live, a local admin view and a public status page. `[[Image-only PDFs]]` is a placeholder.

**Presenting dense rules (CS §4)**
- Rejected: the spec's pinned nav plus a bottom prev/next bar (two fixed bars on a short screen). Chosen: sidebar outline, sticky section bar, command palette.
- "Where am I?": the section bar names the game and document; the header slides away on scroll down.
- In-between screens: tried the desktop sidebar (squeezed the text); shipped a sidebar with a fold.
- The sidebar's page list folds behind the current page so the outline stays in place. Cost: one click.
- Figures use container queries rather than per-layout breakpoints.
- Failures told: dark mode erased diagrams (fix: a light ground in both themes); side-by-side layouts strangled prose (fix: floats).
- Type: tried Fraunces, then Literata, settled on Libre Franklin. A 14px floor, made a test after drift; a 12px floor for exceptions. Line width fixed at about 66 characters.
- Site numbering removed in favour of the rulebook's own numbers.
- Expansion documents named for the expansion, not "Rulebook".

**Reader features (CS §5)**
- Bookmarks went from a list to a built page of saved sections, shareable as a link with no server. Renamed from "Your Reference" to "Bookmarks" in a micro-copy pass.
- Search opens at the matched section (from testing). Fuzzy matching was tightened; it says so when nothing matches.
- Folding a section away; highlights that list changes rather than guess; related games by designer and publisher (mechanism similarity designed but held back on data quality).
- Also: editions switcher, self-linking rule references, glossary and index, dark mode, print layout.

**Accounts (CS §6, optional)**
- Email-only accounts with no password; a magic link that needs a button press (mail scanners); a sync bug where deleted bookmarks came back, then fixed; text size doesn't sync; storage designed early so accounts arrived without UI change; a draft pricing page deleted; a first-party visit counter instead of Google Analytics.

**What not to build (CS §8, optional)**
- A written not-building list, separate from the backlog. Some features were built and then held back. The status page was cut down for the public.

**Quality (CS §9, optional)**
- Touch targets, focus, type floor and print treated as requirements; accessibility and code audits. A failure: regex-based rule linking broke pages silently, replaced with an HTML parser. The stylesheet was split per component.

**ADR titles (`/home/user/cardboard-appendix/docs/adr/`)**, as a decision index. Titles only:
0001 The contact form · 0002 Counting visits · 0003 Related games at the foot of a game's overview · 0004 Sorting and filtering the shelf · 0005 Bookmarking a section, and the page it builds · 0006 Your bookmarks and Your Reference, as one block · 0007 Reordering Your Reference · 0008 Sharing a reference · 0009 The sidebar at tablet width · 0010 The sidebar's page picker · 0011 Figures in the reading column · 0012 The public status page · 0013 The content admin · 0014 Videos on a game's overview · 0015 The newsletter sign-up · 0016 The way back to the overview · 0017 Folding a section away · 0018 The articles section · 0019 Editions of a game's rules · 0020 Site-written documents, held back · 0021 Accounts: the backend · 0022 Highlighting a passage · 0023 What search shows before you type · 0024 The header slides away on a small screen · 0025 Bookmarks: one name for the act and the page · 0026 Sentence case · 0027 Documents have no subhead · 0028 The section list is unnumbered · 0029 The phone menu holds the page still · 0030 One scrim behind everything that takes over the page · 0031 Built for zoom: narrow and short screens · 0032 The order of a game's overview · 0033 One order for a game's documents · 0034 How documents are named · 0035 Tap targets · 0036 Redirects from the earlier site · 0037 How a page describes itself to search engines and link cards · 0038 The functional spec and its amendments · 0039 Building, deploying and serving the site · 0040 The project's principles, and what the site's own pages are · 0041 The content model · 0042 Typography and the 14px floor · 0043 Layout, controls and corners · 0044 Sections, anchors and the section bar · 0045 The site's own pages and navigation · 0046 Favorites, hidden and then cleared · 0047 The site's own text · 0048 Acting on the audits · 0049 CI, and keeping it inside the free minutes · 0050 Security of the live site · 0051 Third parties and analytics · 0052 Getting found through search engines · 0053 Judging the site · 0054 How the records are kept · 0055 Skills for repeated work · 0056 The backlog · 0057 Offline reading and installing to the home screen · 0058 Multi-language support · 0059 Accounts, and what a paid one is for · 0060 Funding, and the rule against ads · 0061 A mailing list · 0062 A community Discord · 0063 Deferred, and not doing · 0064 Rethinking the top of a game's overview · 0065 Importing official text

**Open questions for Jon**

- For the "How it works" version, which two or three beats lead? (CS's own suggested cuts: modules 1, 2, 4, 7 for one screen.)
- Who wrote "the spec" whose navigation was rejected (CS §4), and does it matter to the story?

## 7. Outcome (side: part of "What I learned")

**What exists**

- CS §10: `[[where the project stands: games live, what readers say]]` (placeholder).
- CS §7: a testing loop over one written set of criteria (automated checks, design review, task-based tests); a persona cast with a feature-by-persona map. Changes credited to testing: search opens at the matched section, the section bar names the game and document, search says when nothing matched. Placeholders: `[[findings from sessions with players]]`, `[[Method…]]`. (CS §7)
- CS §6 placeholder: `[[first finding from the search report]]`.
- Status today: md says "very developmental discovery and exploration phase" (an earlier wording carried over from php) and a public relaunch in 2026. (md, php)
- The repo has dated evaluation files (`docs/evaluations/2026-11-19-evaluate.md`, `2026-11-23-site-checklist.md`). Not read for this map.

**Open questions for Jon**

- Is the site live, in beta, or awaiting relaunch? What can be said about it publicly?
- Have any sessions with real players run? Any quotes?
- Is there any reader or search data you'd use?

## 8. What I'd do differently (side: part of "What I learned")

**What exists**

- CS §10 "What I'd carry forward": name the job before designing the screen; design for the messy input; make the tool honest about what it doesn't know; write the reason down where the decision lives. (CS §10)
- CS §10 "What I'd do differently": a placeholder with examples (test with players earlier; build the extraction tool before porting the first game by hand). (CS §10)
- PR "Nothing is locked in": earlier decisions describe the site, they don't direct it. (PR)

**Open questions for Jon**

- Are the CS §10 placeholder examples true for you, or are there others?

---

## Visual material

| File | What it is | Could support |
|---|---|---|
| `src/assets/cardboard-appendix/ca-landing.png` (also in jon-morris.com images) | Landing page (captioned "Landing Page" in old) | 1 |
| `src/assets/cardboard-appendix/ca-indonesia.png` | An individual game page (Indonesia; "Individual Game Page" in old) | 6 |
| `src/assets/cardboard-appendix/ca-indonesia-nav.png` | "Rulebook Navigation Example" (old) | 6 (navigation; possible before for CS §4) |
| `/home/user/jon-morris.com/images/thumbs/ca-thumb.png` / `.jpg` | Photo of a board game in play (looks like Indonesia) with the wordmark | 1, 4 |
| php image slots | They point at `/images/bettertrail/bettertrail-{1,2,3}-*.png` with captions Homepage / Gear Guide / Individual Product Review, carried over from the Better Trail page | n/a |

Evidence CS lists as not captured yet (`[ ]`): phone-and-desktop hero (§1); a rulebook mid-game photo (§2); clean, OCR'd and image-only pages side by side, the extractor contact sheet, a flagged OCR error (§3); the spec nav vs the shipped nav, four widths, dark-mode diagram before/after (§4); bookmarks built and shared, search landing, a highlight (§5); sign-in flow, sync diagram (§6); criteria, a session clip, before/after fixes (§7); a not-building list excerpt (§8); an audit before/after, the stylesheet split (§9). Question for Jon: do the ca-* images (used by the deleted older page) show the current site or an earlier version?

---

## Other material that doesn't fit a section

- **about, "Organization":** the earlier site's content types: Rulebook (PDF, with "living rules" updates), Rulebook (Digital), Player Aid, Teaching Script, Rules Refresher, Glossary, Rules Updates, Common Mistakes, Strategy, Spreadsheets (18xx). The current site's per-game set is rulebook, summary, glossary and book index. This is material for an evolution story from 2017 to now.
- **about, "What This Is":** the earlier site ran on free time and donations, with a game survey for voting on future content, and offered consulting on rulebook editing.
- **Venture listing:** the old site listed CA under "ventures" with the subtitle "Teaching boardgames better", next to "Boardgame Library: Cataloging cardboard". (`variables-all.php`)
- **old to-do list:** "Writeup Cardboard Appendix or DTHB, sketch out the plan?" (`/home/user/jon-morris.com/delete/To Do List`)
- **CS §11:** AI-collaborator module (placeholder), and the repo's record-keeping practice (ADRs, a not-building list, a glossary). This is process material if you want it.
- **GLOSSARY.md:** about 2,400 words of domain terms (library, documents, editions, sections, reader's own things, content states). It could support a short "the model behind it" aside.
- **CS conventions:** modules marked Core or Optional, suggested cuts by length, and a *Log of additions* (first draft 2026-11-18, latest row 2026-11-23).
- **Docs disagree on accounts:** README's opening says "No accounts, no backend"; CS §6 and ADR 0021 describe accounts that are live. Worth checking before you write.
- **md body:** "Why I built it" and "How it works" are carried over word for word from php.
