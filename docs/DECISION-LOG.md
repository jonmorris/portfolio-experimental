# Decision log

A dated, one-line-per-decision index of the choices that shaped this project.

It is a **pointer, not a second source of truth**: each row names the file and
section where the reasoning actually lives. Those homes are:

- **`docs/DECISIONS.md`** — reasoning with no other natural home (content model,
  draft workflow, …). Write the "why" here first if it isn't written anywhere.
- **`README.md`** — what the project is, structure, how to add content, hosting.
- **`CONVENTIONS.md`** — standing principles and coding conventions.
- **`CLAUDE.md`** — working agreements, the design-canon rule, running records.
- **`DESIGN_INSPIRATION.md`** — the design canon.
- **`docs/case-study-template.md`** — the case-study system.
- **`docs/CASE-STUDY.md`** — the running portfolio case study.

## How to keep this file

- **Add a file, not a row.** A new decision goes in `docs/decision-log/` as its
  own file named `YYYY-MM-DD-short-name.md` (lowercase, hyphenated), holding
  **exactly one table row** (`| Date | Kind | Decision | Ref |`). Never edit the
  table below on a branch: rows appended to the same last line by parallel
  branches always conflict; separate files never do.
- **Fold on main.** Run `npm run decision-log -- --fold` on `main` (or the
  default branch), in a commit of its own, to append the waiting entries to the
  end of the table in filename order (date, then name) and delete their files.
  Do this whenever the folder gets long. Without `--fold`, the command just
  validates the pending entries and prints them.
- **One row per decision, not per commit.** A reversed decision gets a **new**
  row of kind `Reversed`. The old row stays.
- **Say the decision, not the change.** "Bookmarks widened to every content
  type", not "edit bookmark.js".
- **Kind** is one of a fixed list, defined once in code in
  `scripts/decision-log/lib.mjs` (`KINDS`): **Product, Design, Content,
  Engineering, Process, Deferred, Reversed**.
- **Ref** names the file → section holding the why. If no why is written
  anywhere, write it there (usually `docs/DECISIONS.md`) first.

## Log

| Date | Kind | Decision | Ref |
|------|------|----------|-----|
| 2026-06-22 | Engineering | Static Eleventy site; all content is Markdown + frontmatter in git, no backend | README.md → Project structure; CONVENTIONS.md → Out of Scope |
| 2026-06-22 | Design | Monospace throughout (JetBrains Mono), techie / content-first, with a dark/light toggle | README.md → intro; `src/css/style.css` |
| 2026-06-22 | Product | Work and side projects share one tagged feed, filtered by `type` | README.md → intro; `eleventy.config.js` → projects collection |
| 2026-06-22 | Engineering | Host on GitHub Pages; deploy workflow + subpath support via HtmlBasePlugin | `.github/workflows/deploy.yml`; `eleventy.config.js` |
| 2026-06-23 | Product | Project card content model standardized; `tech` field renamed to `skills` | docs/DECISIONS.md → Content model |
| 2026-06-24 | Content | Blog drafts live in-repo but unpublished via `permalink: false` + `eleventyExcludeFromCollections` | docs/DECISIONS.md → Blog draft workflow |
| 2026-06-24 | Design | Project `skills` capped at 5; project/client name shown as an eyebrow on detail pages | docs/DECISIONS.md → Content model |
| 2026-06-24 | Process | Adopt DESIGN_INSPIRATION.md as the design canon, weighted above generic best practice | CLAUDE.md → Design canon; DESIGN_INSPIRATION.md |
| 2026-06-24 | Process | One modular case-study template covers both work and side projects | docs/case-study-template.md |
| 2026-06-24 | Engineering | Vanilla CSS, no build step or preprocessor; tokens in a single `style.css` | README.md → Customizing; CONVENTIONS.md → Styling |
| 2026-06-24 | Engineering | Client JS stays vanilla, added only when a real behavior needs it (theme toggle, project filter) | CONVENTIONS.md → JavaScript; README.md → Project structure |
| 2026-06-24 | Deferred | No accounts, comments, or authoring UI; authoring stays Markdown-in-git | CONVENTIONS.md → Out of Scope |
