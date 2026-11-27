# NHL '95 Rosters: side-project material

Raw material for a side-project write-up. Unjudged; gaps are questions, not verdicts.

**Template:** `docs/case-study-template.md` (type: side)

**Sources**

- `src/projects/nhl-95-rosters.md`: current portfolio page (Eleventy markdown)
- `/home/user/jon-morris.com/ventures/nhl95.php`: old page "NHL-95 Player Stats"
- `/home/user/jon-morris.com/delete/work/nhl-95-stats.php`: an earlier version of the same page (different intro, same body)
- `/home/user/jon-morris.com/variables/variables.php`: "NHL 95 Player Stats" string (catalog #27 says it was copied into another array)
- `/home/user/nhl-95`: repo; contains only `CLAUDE.md` (one commit, 2026-04-15)
- `docs/catalog.md`: row "NHL-95 player stats / rosters", conflict #20

Short names below: **md** = `src/projects/nhl-95-rosters.md`, **ventures** = `ventures/nhl95.php`, **deleted** = `delete/work/nhl-95-stats.php`.

---

## Snapshot

| Field | What's known | Source |
|---|---|---|
| title | md: "NHL-95 Roster Project" | md |
| | Old pages: "NHL-95 Player Stats" | ventures, deleted |
| name | md: "NHL-95 Rosters" | md |
| type | side | md |
| year | md: 2026. Old pages: undated. Old thumbnail filenames include "2020" (`nhl-thumb-2020.jpg/.png`), which may or may not date it. Catalog #20: only the new site dates it. `[[?]]` | md, `jon-morris.com/images/thumbs/`, `docs/catalog.md` |
| role | md: "Designer & Developer". Old pages credit "DESIGNER Jon Morris"; category line "Data Analytics, Design, Development". | md, ventures |
| link | `[[?]]` none in md. Old pages link `http://www.nhl-95.com`. | ventures, deleted |
| skills | md: Product Strategy, UX Design, UI Design, Front-End Development. Old pages: "Data Analytics, Design, Development". | md, ventures |
| summary | md: "A side project focused on NHL-95 roster work and making the roster data easier to browse and use." | md |
| cover | md: `/assets/nhl-95/nhl-95-site.jpg` | md |
| framing | **Possible difference:** md talks about "roster data"; old pages talk about "player stats" and comparing players and teams. Same project, or has its scope changed? | md, ventures |

---

## What it is

**What exists**

- md: organises and presents NHL-95 roster data "in a way that's easier to browse and reference".
- Old pages: a spreadsheet, then a responsive website (nhl-95.com), for viewing and comparing player and team stats from NHL 95 on the Sega Genesis. (ventures)
- Two artefacts named: a colour-coded player stats spreadsheet (shared as a Google Sheets copy link) and "Webpage V 0.1" with team pages, desktop and mobile. (ventures)
- Catalog: "Spreadsheet and site for browsing and comparing NHL 95 (Sega Genesis) player and team stats." (`docs/catalog.md`)

**Open questions for Jon**

- Is the 2026 "Rosters" project the same thing as the old "Player Stats" site, a rebuild, or something new? What does "roster work" mean here (editing game rosters, browsing them, both)?
- Is nhl-95.com still live, and is it the link for this page?
- The `nhl-95` repo has only `CLAUDE.md`. Where does the site's code live now, or is a new version planned?

## Why I made it

**What exists**

- Origin story (ventures): Jon brought his Genesis to work; NHL 95 became "the only game"; "Rivalries were formed… Previous champions were de-throned." Then: "what's the next step after digging deep into a 1990's era retro hockey game? That's right, create a spreadsheet."
- The earlier intro (deleted) tells the same story in fewer words, ending "we needed a spreadsheet."
- The in-game problem (ventures): stats were hard to compare within a team and "impossible to compare entire teams"; you could only see them by starting a game; and the game "randomly adjusts individual player stats game-to-game", so capturing them was "tedious and imprecise".
- Second trigger (ventures): building a line-up from the spreadsheet on a phone in front of the TV "took far too long to find what I needed, it was time to upgrade."
- md: "a cleaner and more useful way to work with NHL-95 roster information than scattered notes and ad-hoc files."

**Open questions for Jon**

- Which workplace was the office league at, and roughly when? (It would date the project.)
- Which "why" leads the page: the office rivalry, the in-game stat problem, or the phone-in-front-of-the-TV moment?

## How it works & key decisions

**What exists**

- Data: Jon planned to pull stats from the game himself (rough, because of the random variation), then got a spreadsheet of the data from another NHL '95 fan. He reformatted it, "adding color coding to represent how 'hot' (good) or 'cold' (bad) a stat is." (ventures)
- Site build: "one Tuesday evening and in a few hours put nhl-95.com together", with the goal of being "usable for the next day". (ventures)
- Decisions on the site (ventures):
  - "simplified the statistics down to the most relevant categories" so there is no horizontal scroll on a phone;
  - "simply highlighted the star players" so someone new to a team can see who's good;
  - pulled in the game's "pixel art logos".
- md: "structures roster data so it can be explored quickly, with a clear layout and straightforward navigation."

**Open questions for Jon**

- Which stat categories made the cut for the site, and how did you decide?
- How were "star players" picked: a threshold, a formula, your judgement?
- Has anything been added since V 0.1 (team comparison, line-up builder, roster editing)?
- How should the data source be credited (the spreadsheet came from another fan)?

## What I learned

**What exists**

- md: "reinforced how much information architecture and clarity matter, even for niche data-heavy hobby projects."
- Old pages: no learning section.

**Open questions for Jon**

- Did the office group actually use the site? Anything they asked for?
- What would you change if you built it again today?

---

## Live / public links (found, not verified)

- `http://www.nhl-95.com`: the site (ventures, deleted)
- A Google Sheets "make a copy" link to the player stats spreadsheet (in ventures and deleted; not repeated here)
- Repo remote: `github.com/jonmorris/nhl-95` (contains only `CLAUDE.md`)

## Visual material

**Portfolio repo (`src/assets/nhl-95/`)**

- `nhl-95-site.jpg`: the site (md cover)
- `nhl-95-spreadsheet.jpg`: the colour-coded spreadsheet
- `nhl-95-team.jpg`: team page, desktop
- `nhl-95-team-mobile.jpg`, `nhl-95-team-mobile.png`: team page, mobile

**Old site (`/home/user/jon-morris.com/images/`)**

- `nhl-95/`: the same five files as above
- `thumbs/nhl-thumb.jpg`, `nhl-thumb.png`, `nhl-thumb-2020.jpg`, `nhl-thumb-2020.png`, `nhl-95-spreadsheet-thumb.jpg`: listing thumbnails

**Not found:** anything for a 2026 "rosters" version.

## Other material

- Two versions of the old page exist, `ventures/` (longer office-story intro) and `delete/work/` (shorter "mid-90's era gods of ice and bent wood" intro); the body text is the same.
- `jon-morris.com/variables/variables.php` carries "NHL 95 Player Stats" in the board-game descriptions array; catalog #27 records it as copied there from another array.
- Catalog places it under "Side projects & ventures", "short page". (`docs/catalog.md`)

---

## Jon's answers (grill session, 2026-11-27)

**Identity.** "NHL '95 Rosters" on the new site and the old "Player Stats" site (nhl-95.com) are the **same project**.

**When.** About **2016–2017**, while at Timberland. The spreadsheet came first, and the website a few months later. The exact year doesn't matter.

**Why I made it.** At Timberland we played NHL '95 on Jon's Sega Genesis on a small tube TV. Player stats were hard to find and hard to read in the game, and some were hidden entirely, yet the stats really matter in play. The **NHL '95 online community** (credit by that name, no link), still actively playing and running tournaments, provided an export of the base game's player stats.

**Iteration 1: spreadsheet.** I turned the export into a well-designed, filterable, searchable Google Sheet shared with everyone. It showed stats you can't see in the game. We used it mid-game to make substitutions, and to **build rosters**: customising lineups the way real coaches do (for example, a left-handed shooter on the right wing), and bringing better players into the one line we played. That made the game feel like managing a team rather than playing default lines.

**Iteration 2: website.** The sheet wasn't great on phones, so I built a simple responsive site for fun, hand-coded in HTML, CSS and PHP. Its current state shows only the in-game stats, not the deeper ones, plus full team rosters. It's an MVP of its era.

**Outcome.** It went live publicly. When the domain registration lapsed, **strangers messaged Jon on Twitter asking for the site back**, so people had found it and were using it to play. He renewed it with auto-renew; it's still live and people still use it. Usage numbers aren't known (there may have been analytics at the time).

**What I learned.** You can just make things, and you can just fix things: small improvements nobody asked for find users. The game's stat view was fine for a 1995 Genesis game but not great. It was also good practice hand-coding a small site.

**What I'd change.** It's of its era. I'd rebuild it much better today, add the deeper/hidden stats, and do more with it generally.
