# Conventions

Decisions made in the initial scaffold. Document here before changing.

## Standing Principles

These principles apply to every change, regardless of which section it falls under.

- **Default to extending, not creating.** Before writing a new component, shortcode, or CSS block, search for an existing one that serves a similar purpose. If found, extend it with a modifier, prop, or content slot. New components require justification: a genuinely distinct purpose, or differences too structural to express as variants.
- **Check for earlier project material before starting a new case study.** When creating a new project in `src/projects/`, first look in `src/previous case studies/` to see whether an earlier version of that project already exists. Use it as reference material before writing a new version from scratch.
- **Reusable by default, experiments excepted.** Anything built is built to be reusable from the start (component, shortcode, shared style). The only exception is genuine experimentation. Experiments can stay one-off, but the moment an experiment is used a second time, it gets converted into a proper reusable form before that second use ships.
- **No game-specific code paths.** Do not write `{% if gameSlug == "..." %}` checks in templates. If a feature is per-game, drive it from data (a flag in `game.json`), not from a hardcoded slug check.
- **No game-specific selectors in shared CSS.** A unique component for one game (e.g. a merger calculator for Indonesia) gets a generic, plausibly-reusable block name (`.merger-calculator`), never a game-prefixed one (`.indonesia-merger-table`).
- **Generic templates for new content types.** When a new content type is introduced (calculator, scenario guide, etc.), build a generic template any game can opt into, not a one-off for the first game that needs it.
- **Print is a first-class output.** Every new component must look correct when printed. Check print preview before considering a component done. Print-specific overrides live in `print.css`, never in the component's main styles.
- **Accessibility is a floor, not a feature.** Every page and component meets the floor defined in the Accessibility section below. No exceptions.

## Pre-merge Checklist

Before considering a change done, run through these five checks:

1. Did this introduce a new component? If yes, was an existing one extended first?
2. Did this introduce new CSS variables on `:root`? If yes, are they used by more than one component?
3. Are there any `if gameSlug == "..."` checks? If yes, can they be driven from data instead?
4. Is there code handling a case that doesn't exist yet? If yes, delete it.
5. Could this be ~30% shorter without losing clarity? If yes, shorten it.

## Clean as You Go

When a feature is removed, reworked, or superseded, dead code and files come out in the same change — not later.

- Delete layouts, partials, templates, and scripts that are no longer referenced.
- Remove functions and helpers that only existed to support the removed feature.
- Strip frontmatter fields and data properties that are no longer consumed.
- Remove per-file boilerplate that a cascade or default now handles.
- Search for all references to the removed thing before closing the change, to catch stragglers.

The standard is: after the change, there should be no file, function, import, or frontmatter field that exists solely because of the old approach.

## Content Model

Each game lives under `src/games/{slug}/`. The slug is the URL segment and must be kebab-case and stable. A game consists of:

- `game.json` — metadata (title, designer, publisher, players, time, bgg_id, description).
- `{slug}.11tydata.js` — Eleventy directory data file. Sets `gameSlug` for every page under the directory and exposes the computed `game` object (metadata + glossary terms + rule sections, pulled from the global `games` registry).
- `landing.njk` — the game landing page at `/games/{slug}/`.
- `_source/` — raw source material, OCR dumps, or copied draft text used during content preparation.
- `_working/` — in-progress working files that should stay with the game while content is being prepared.
- `summary.md` — narrative summary.
- `glossary.md` — glossary listing. Terms live in frontmatter as an array of `{ term, slug, short, long }`.
- `glossary-term.njk` — pagination template that produces individual term pages.
- `index.md` — book index. Entries live in frontmatter as an array of `{ term, refs: [{ rule, anchor?, label? }] }`.
- `rulebook.md` — complete rulebook. On-page TOC is inferred from H2 headings (and H3 only when marked with `{toc}`), with optional `toc:` frontmatter override when needed.

Per-game presentation differences are driven from `game.json` data, never from `gameSlug` checks in templates or game-prefixed CSS selectors.

### Source File Handling (`_Source/`)

`_source/` files are read-only reference material.

- Do not edit, reformat, rename, move, or delete any file under `src/games/**/_source/`.
- `_source/` can be used only when explicitly authorized for the task.
- Authorized use is pull-only: copy needed text from `_source/` into destination content files (for example, `rulebook/*.md`) while preserving source wording per fidelity rules.
- If a requested change would require modifying `_source/`, stop and request a human edit instead.

### Hidden Game Tags

Game metadata supports hidden tags for future filtering and similarity features.

- Field: `tags`
- Shape: array of objects, each with `slug` and `label`
- Example: `[{ "slug": "asymmetric-factions", "label": "Asymmetric Factions" }]`

Conventions:

- `slug` is the stable machine identifier and must be lowercase kebab-case.
- `label` is human-readable text and can change without breaking references.
- Tags are metadata only for now: do not render as visible UI until filtering/similarity work is explicitly enabled.
- Phased rollout is acceptable: games can omit `tags`; omitted tags are treated as an empty list.

### BGG Metadata Workflow

Keep `bgg_id` in each game's `game.json`. This is the canonical BoardGameGeek boardgame ID used for the external link on landing pages and for future metadata refreshes.

When adding a game or correcting a BGG link:

1. Set `bgg_id` in `src/games/{slug}/game.json`.
2. Validate all IDs with `npm run verify:bgg`.

Use `node scripts/verify-bgg-ids.mjs --strict` when you want API/network failures to fail the run.

Validation uses the reachable Geekdo endpoint:

- `https://api.geekdo.com/api/geekitems?objectid={id}&objecttype=thing`

An ID is considered valid only if:

- The item exists.
- `subtype` is `boardgame`.
- The canonical `href` starts with `/boardgame/{id}/`.

Notes:

- In environments where BGG XML API2 returns `401`, prefer the Geekdo endpoint above.
- Geekdo may return `429` in constrained environments. The default verifier reports this as a warning unless strict mode is used.
- Do not store BGG search URLs in metadata; only store the numeric canonical `bgg_id`.

Global data:

- `src/_data/site.json` — site-wide config.
- `src/_data/games.js` — builds a `games` registry from disk at build time. This is the lookup source for shortcodes.

## File Structure Rules

**One file per content type, at the game root.** Filename is the content type slug. URL is `/games/<game-slug>/<content-type>/`. Sections within a content type are H2s with manual anchor IDs, never separate files.

**Expansions are nested directories under the base game.** Path is `<game-slug>/<expansion-slug>/`. Expansion content uses the same filename rules as base content. URLs nest the same way. No top-level `expansions/` folder.

**Files only exist when they have real content.** No empty placeholders. The absence of a file means that content type doesn't exist for that game or expansion yet.

**Content is base-level by default.** A file at the game root covers the base game and all its expansions. Put a file in an expansion directory only when the content is exclusively about that expansion.

**Game-specific content types follow the same rules as standard ones.** A unique content type for one game lives at the game root as `<slug>.md`, rendered with the default template unless it needs a custom one.

**Templates are shared across all games.** One template per content type, living outside game directories. No per-game template forks.

**Anchor IDs are stable forever.** Every section heading in every content file gets a manually-set, slugified anchor ID. Renames keep the old anchor as an alias. Applies to all content types.

**`_source/` is read-only originals. `_working/` is in-progress notes.** Neither is published. Both stay in the repo.

**Cross-links resolve through shortcodes.** Shortcodes use the page's path-derived game and expansion context to resolve targets. Authors never hardcode URLs in content files.

### Resulting Shape

```
src/games/<game-slug>/
├── game.yml
├── structure.md
├── _source/
├── _working/
├── <content-type>.md
├── <content-type>.md
└── <expansion-slug>/
    ├── game.yml
    ├── <content-type>.md
    └── ...
```

## URL Structure

All permalinks are explicit. No implicit URLs from Eleventy's default behavior.

- `/` — homepage.
- `/games/{slug}/` — landing (from `landing.njk`, explicit permalink).
- `/games/{slug}/rulebook/` — rulebook page (from `rulebook.md`, explicit permalink). Section anchors use `#slug`.
- `/games/{slug}/summary/` — summary (explicit permalink).
- `/games/{slug}/glossary/` — full glossary (explicit permalink).
- `/games/{slug}/glossary/{term-slug}/` — individual term page, generated by pagination over the glossary's `terms` frontmatter array.
- `/games/{slug}/index/` — book index (explicit permalink on `index.md`).

Reordering rulebook sections means renaming the `NN-` prefix. URLs do not change unless the slug part of the filename changes.

### Expansion Content Paths

Expansion content uses a flat path directly under the game slug.

- URL shape: `/games/{slug}/{expansion-slug}/{content-type}/`
- Source folder shape: `src/games/{slug}/{expansion-slug}/...`
- Do not add an extra `expansions/` path segment in URLs or source folders for new content.

Examples:

- `src/games/arcs/the-blighted-reach/rulebook.md` -> `/games/arcs/the-blighted-reach/rulebook/`
- `src/games/food-chain-magnate/the-ketchup-mechanism-and-other-ideas/rulebook.md` -> `/games/food-chain-magnate/the-ketchup-mechanism-and-other-ideas/rulebook/`

When adding expansion links to `game.json` sections, set `path` to `{expansion-slug}/{content-type}/` (no `expansions/` prefix).

## Cross-link Syntax and Structured Content

Two Nunjucks shortcodes, registered in `eleventy.config.js`, usable inside any template or markdown file:

- `{% raw %}{% term "label" %}{% endraw %}` — link to a glossary term in the current game.
- `{% raw %}{% rule "label" %}{% endraw %}` — link to a rulebook section anchor in the current game.

Behavior:

- The current game is derived from the page's `gameSlug` in the data cascade (set by the directory `.11tydata.js`). If absent, falls back to parsing the page's URL.
- The label is slugified and matched against the target's `slug` first, then against the slugified canonical name.
- On miss, a warning is logged and the label is rendered as plain text (no link). Builds do not fail.
- Both shortcodes accept an optional second argument: an explicit slug to use instead of slugifying the label. Use this when the display text diverges from the canonical slug (e.g., plural forms).
- `{% rule %}` links to `/games/{slug}/rulebook/#section-slug`.

### Shortcodes Are the Only Structured-content Mechanism

Anything beyond plain prose (callouts, cross-references, structured blocks, future content types) is authored as a Nunjucks shortcode. Custom Markdown syntax (`:::example`, etc.) is not used. Plain Markdown stays plain. One pattern, applied everywhere.

## Styling

Vanilla CSS only, split into the following files. No build step, no preprocessor.

- `base.css` — reset + global custom properties (design tokens).
- `typography.css` — text rules.
- `layout.css` — structural rules.
- `grid.css` — grid system.
- `components.css` — BEM components. New components live here. If this file grows past the point where it's annoying to scroll, split into `components/{block}.css` files; do not pre-split.
- `print.css` — print overrides.

Mobile-first. Breakpoints at 640px and 1024px. Max body content width 65ch for readability.

### CSS Variables

Two tiers:

- **Global design tokens** (color, spacing, type scale, breakpoints, radii) live on `:root` in `base.css`. These are the things used across more than one component.
- **Component-specific variables** live on the component's block selector in `components.css`. Anything used by only one component stays local to that component.

Default to local. Promote a variable to `:root` the second time it's needed by a different component. Do not promote speculatively.

```css
.callout {
  --callout-border-width: 4px;
  border-left: var(--callout-border-width) solid var(--color-accent);
}
```

### BEM Naming

Required for all new CSS.

- Blocks are kebab-case: `glossary-term`, `rulebook-section`.
- Elements use a double underscore: `glossary-term__definition`.
- Modifiers use a double hyphen: `callout--warning`, `button--small`.
- One level of nesting maximum. Never write `block__element__sub-element`. If a sub-element is needed, that's a signal the inner piece is its own block.

### Cross-link Styling

Term and rule links get the classes `.term-link` and `.rule-link` respectively. Style them distinctly so readers can tell a reference from a normal link.

### CSS Files — Do Not Edit

`src/assets/css/reset.css` and `src/assets/css/normalize.css` are third-party vendor files. Do not edit them. All project CSS belongs in the files listed above.

## JavaScript

No standing convention yet. When the first real piece of behavior needs to be built, the decision (vanilla JS, Alpine, build step, no build step) is made then with the actual use case in front of us. Until then, no JS is added speculatively.

## Accessibility

Every page and component must meet this floor. No exceptions.

- Use semantic HTML. `<nav>`, `<main>`, `<article>`, `<button>` for buttons, `<a>` for links. Never `<div onclick>`.
- Visible focus states on all interactive elements.
- WCAG AA contrast: 4.5:1 for body text, 3:1 for large text.
- Keyboard works for everything. Tab to every interactive thing. No mouse-only interactions.
- Alt text on every image. Decorative images get `alt=""`.

## Search

- Pagefind is run as a post-build step by `npm run build`.
- Each page sets `data-pagefind-filter="game:{slug}"` on the `<body>` tag (via `base.njk`) and `data-pagefind-body` on the main article to scope indexed content.
- Each game's landing page embeds a search UI that calls Pagefind with `filters: { game: [gameSlug] }`, so results never cross games.
- Cross-game search is explicitly out of scope for this phase.

## Content Labels on Game Landing Pages

Labels follow a single principle: the user is already on the game's page, so the game name is context, not part of the label. Each label only needs to carry what the surrounding context doesn't already supply.

### Base Game Content

Use the bare content type. Do not prefix with the game name.

- `Rulebook`
- `Glossary`
- `FAQ`
- `Player Aid`
- `Setup Guide`

### Expansion Content

Use the expansion's proper name followed by the content type. Do not prefix with the base game name.

- `Spice Islands Rulebook`
- `Spice Islands FAQ`
- `Spice Islands Player Aid`

The expansion's proper name is what distinguishes it from the base game and from other expansions. The base game name is already supplied by the page context.

### Same Labels for Digital Content and Downloads

The digital content list and the downloads list use the same labels. The section heading ("On this site," "Downloads," or however the section is titled) tells the user which list they're looking at. The labels themselves don't need to repeat that context.

### File Type Indicators

Omit file type when it is the expected default for that content type. Include it only when the file type is unusual or unexpected.

- `Rulebook` — no indicator (PDF is the assumed default)
- `Player Aid` — no indicator
- `Audiobook (MP3)` — indicator included because audio format matters
- `Printables (ZIP)` — indicator included because a zip archive is unusual
- `Spreadsheet (XLSX)` — indicator included for the same reason

The rule: if a reasonable user would be surprised by the file type after clicking, label it. Otherwise leave it bare.

### Worked Example for a Game with One Expansion

**On this site**
- Rulebook
- Glossary
- FAQ
- Spice Islands Rulebook
- Spice Islands FAQ

**Downloads**
- Rulebook
- Player Aid
- Spice Islands Rulebook
- Spice Islands Player Aid

## Out of Scope (Intentionally)

No accounts, comments, or any authoring UI. Content is Markdown + frontmatter, committed to git.