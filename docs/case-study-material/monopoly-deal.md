# Monopoly Deal: side-project material

Raw material for a side-project write-up. Unjudged; gaps are questions, not verdicts.

**Template:** `docs/case-study-template.md` (type: side)

**Sources**

- `src/projects/monopoly-deal.md`: current portfolio page (Eleventy markdown)
- `src/previous case studies/monopoly-deal.php`: earlier page ("Applying UX Principles to Paper Card Games"); byte-identical to `/home/user/jon-morris.com/work/monopoly-deal.php`
- `/home/user/jon-morris.com/variables/variables-all.php`: old site's project arrays
- `/home/user/jon-morris.com/css/style.css`: card colour and logo sizing for a `monopoly` project card
- `docs/catalog.md`: row "Monopoly Deal redesign" under *Challenges & exercises*; conflict #20

Short names below: **md** = `src/projects/monopoly-deal.md`, **php** = `monopoly-deal.php` (old portfolio), **vars** = `jon-morris.com/variables/variables-all.php`.

---

## Snapshot

| Field | What's known | Source |
|---|---|---|
| title | md: "Monopoly Deal" | md |
| | php h1: "Applying UX Principles to Paper Card Games". vars header: "Redesigning Monopoly Deal". | php, vars |
| name | "Monopoly Deal" | md |
| type | md: side. Catalog lists it under *Challenges & exercises* as "Monopoly Deal redesign". | md, `docs/catalog.md` |
| what the sources say it is | php: "my personal redesign of Monopoly Deal", "a self-initiated project focused on improving the game's usability, aesthetics, and clarity", done "as a design exercise". The game design is the original designer's (Katharine Chapman, credited on the page) "save for a couple of my own card designs". | php |
| year | md: 2026. php: undated. Catalog #20: no other source dates it. `[[?]]` | md, `docs/catalog.md` |
| role | **Conflict:** md "Designer & Developer"; catalog "Designer"; php: "I was solely respons[ible] for the new design and work within this project." vars client: "Personal Project". | md, `docs/catalog.md`, php, vars |
| link | `[[?]]` none in md. php links the game's BoardGameGeek page. | php |
| skills | md: Product Strategy, UX Design, UI Design, Front-End Development. vars categories: "UX, Visual Design, Commerce Cloud" (the same string vars gives most rows). php names heuristic evaluation, playtesting, a design system, a rulebook. | md, vars, php |
| summary | md: "A side project page for Monopoly Deal." | md |
| cover | `[[?]]` none in md frontmatter. | md |

---

## What it is

**What exists**

- A self-initiated redesign of the Monopoly Deal card game's cards (and rulebook), played and tested with friends, printed on real cards. (php)
- Framed explicitly as not a criticism: "not meant to criticize the original design in any way. Just meant to explore ways of making it even better than it already is." Repeated in a closing "Thank You" section. (php)
- php explains the game for readers who don't know it: win by collecting three complete property sets; draw two, take up to three actions (property, bank money, action cards); "much faster and condensed" than Monopoly; "usually pretty cuthroat", but short enough that losing "doesn't sting that bad". (php, "Game Overview")
- md body sections currently read "More details coming soon." (md)

**Open questions for Jon**

- Roughly when did you do this (v1 and the v2 changes)?
- Side project or exercise: which does it sit under on the new site? (md says side; catalog says challenge/exercise.)
- Is "Developer" in the md role intended (was anything built in code), or is it "Designer"?

## Why I made it

**What exists**

- "After a game or two I noticed a few things with the design of the game that could be improved. So as a design exercise I started to explore how I might redesign the game." (php)
- Goals listed: improve the usability and UX; improve the visual design; improve the game design if needed; improve the rulebook. (php, "Goals & Objectives")
- Considerations: "Make it as accessible as possible"; "Make it playable in a dimly lit, noisy bar." (php)
- Closing line: "I'd love to do something more official with this." (php)

**Open questions for Jon**

- What was the first thing you noticed that made you want to redesign it?
- Is the "dimly lit, noisy bar" where your group actually plays?

## How it works & key decisions

**What exists** (all php unless noted)

- **Research:** logged issues and opportunities across games, then ran a heuristic evaluation of the edition the group had. A "Heuristic & Playtest Findings" heading exists without content below it.
- **Visual direction:** aligned with older versions of Monopoly ("something sharp and cri[s]p about them"); worked from a chosen reference photo for direction and colours. Kept the existing card layouts; the changes were "stylistic and for better accessibility".
- **Universal wildcard:** "quite a bit of exploration", as it must match the property-card system yet work in any set; the original used a rainbow of property colours in the name box. (The paragraph ends mid-sentence: "But ".)
- **Money:** remade to "somewhat mimic monopoly money" without copying a reference; Jon flags it for another look in v2.
- **Card backs:** explored for something "iconic and fun".
- **Design system:** built from the chosen option "that would allow for easier modifications" across all cards (style guide and templates).
- **Playtest of v1** (printed copy): the group felt it was an improvement. Issues logged:
  - purple vs dark blue, and utility green vs dark property green, were confused;
  - stacked wildcards hid the colour on the other end;
  - colour printed to the edge of action cards showed through when face down;
  - House and Hotel cards were hard to see when stacked on a set;
  - "Double the Rent" was unclear;
  - the corner money value was too small to read across a table;
  - non-bidirectional card backs could reveal a wildcard in hand.
- **Iteration (v2 / "R2"):** a small dog-ear-style indicator in the colour box showing the opposite end's colour (a no-flip variant was tried and dropped for text readability); still to be tested across a table. Also: House/Hotel cards, bidirectional card backs, bigger money indicator, action-card borders, clearer action text.
- **Rulebook Augmentation** and **Final Designs (For Now)** headings exist without text.
- **Game-design analysis** (beyond the cards): randomness can feel "bad and deterministic", "more tactical than strategic"; no incentive to play on the first turn (worked example with "Debt Collector" and "It's Your Birthday" in a four-player game); games that stall once theft cards are spent; rules clarity (e.g. whether "Just Say No" cancels "It's Your Birthday" for the whole table or one player); "No Way To Catch Up" once your board is stolen. No proposed rule changes are written yet.

**Open questions for Jon**

- Which two or three decisions lead a short page? Candidates: the wildcard indicator, the colour-confusion fixes, bidirectional backs, the bar-legibility goal.
- Which heuristics did you use, and what did the evaluation find? (The findings heading has no content.)
- How did you fix the purple/dark-blue and green/green confusion?
- Did you test v2, and with how many people / games?
- Did you write proposed rule changes or a rulebook draft?
- Any trademark/IP considerations in how you show cards based on a Hasbro game?

## What I learned

**What exists**

- Implicit in php: playtesting surfaced issues the screen design didn't (colours under bar lighting, stacking, card backs revealing information). No explicit learning section.

**Open questions for Jon**

- What did designing for physical cards teach you that screens don't?
- What would you do in a v3?

---

## Live / public links (found, not verified)

- `https://boardgamegeek.com/boardgame/40398/monopoly-deal-card-game`: the original game on BoardGameGeek (php)
- No public link to the redesign itself was found.

## Visual material

**Portfolio repo (`src/assets/`)**

- `monopoly-deal/monopoly-wild-iteration.png`: wildcard iteration (used three times in php's Iteration section)
- `logos/monopoly-logo.svg`: logo

**Old site (`/home/user/jon-morris.com/images/`)**

- `monopoly/monopoly-wild-iteration.png`
- `monopoly/old-property-cards.png`: captioned "Property Card Reference" (the older-Monopoly reference)
- `monopoly/placeholder.png`: stands in for most figures
- `thumbs/monopoly-thumb.png`: listing thumbnail
- `logos/monopoly-logo.svg`
- `css/style.css`: `--monopoly-background: #D9E6CD`

**Figure slots in php pointing to `placeholder.png`** (the images they name were not found locally): hero; Property Cards; Wildcard; Action Cards; Money & Reference Cards; Card Backs; Design Style Guide; Design System Templates; Playtest Print; plus several uncaptioned slots in Game Overview, Heuristics, House/Hotel, Card Backs (v2) and Final Designs. Where are the card files and playtest photos (Figma, Illustrator, print-ready PDF, photos of the printed deck)?

## Other material

- `css/style.css` styles a `.project-card#monopoly`, but `includes/project-listing.php` has no Monopoly card today.
- The detailed game-design critique (randomness, first-turn incentives, stalling, rules clarity, catch-up) could be its own section, a link-out, or left off. Question for Jon.
- php's closing invites contact about doing "something more official".

---

## Jon's answers (grill session, 2026-11-27)

**When.** Not sure yet. Jon will check the dates in the Figma file.

**Why I made it.** There are many versions of Monopoly Deal. In the one Jon bought, the graphic design didn't do the game justice: confusing, a bit ugly, and drifting from classic Monopoly's visual baseline. He wanted to play a better version of a game he liked. An admittedly unsolicited redesign, done purely as a design exercise, and **not a criticism** of the people who made the game.

**Approach.** An **audit** of the existing version's problems (Jon has it and will add the details), then fixes for everything found while bringing it back to a classic Monopoly feel:
- **Colour and accessibility:** colours were too similar to tell apart, including for colour-blind players.
- **Double-sided cards:** once stacked, nothing shows a card is double-sided, so you can't read what someone has from across the table (which matters when stealing). Tried a **corner chip showing the opposite side's colour**.
- Readability fixes and more, in Jon's notes (to add).

**Testing.** v1 was printed and playtested, producing notes for v2. Some v2 changes may have started; it's still in progress.

**What I learned.** Everything can be better. Accessibility and readability don't only exist on the web. Curiosity about how corporately produced games are made: what the process and rigour are, and why obvious, fairly easy-to-fix problems ship. Fixes can be correct for accessibility and usability *and* faithful to the brand.
