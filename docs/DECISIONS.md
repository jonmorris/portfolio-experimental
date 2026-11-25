# Decisions

Where the *reasoning* lives for decisions that aren't already explained in
another doc. `docs/DECISION-LOG.md` is the dated index; it points here (and to
README.md, CONVENTIONS.md, CLAUDE.md, DESIGN_INSPIRATION.md, and
`docs/case-study-template.md`) for the "why". Add a section here only when a
decision's rationale has nowhere else to go, then point the log row's Ref at it.

## Content model

Projects (work + side) share one tagged collection and render from a fixed
frontmatter snapshot (`title`, `name`, `type`, `year`, `role`, `client`,
`skills`, `summary`, `cover`). Standardizing the card/detail fields keeps the
feed uniform and lets one template serve every project.

- **`tech` → `skills`.** The field was renamed because the portfolio is about
  what the person *did* (capabilities), not just the stack. "Skills" reads
  correctly for both design-led work and build-led side projects.
- **Skills capped at 5.** A short, curated list scans in the ~60s a reader
  gives a card and forces a real choice about what each project demonstrates;
  long tech lists read as noise.
- **Name eyebrow on detail pages.** The outcome-focused `title` is the
  headline, so the project/client `name` moves to a small eyebrow above it —
  the headline sells, the eyebrow identifies.

## Blog draft workflow

Blog post ideas live in the repo as real Markdown files from the moment they're
captured, but stay off the live site until finished. A draft sets
`permalink: false` and `eleventyExcludeFromCollections: true` in its
frontmatter; publishing is deleting those two lines. This keeps ideas,
summaries, and working notes under version control (and reviewable in a PR)
without a separate drafts system or a risk of shipping half-written posts.

## Pre-launch noindex

The GitHub Pages preview is public, but the site isn't launched yet, so every
page carries `<meta name="robots" content="noindex">` from `base.njk`. A meta
tag rather than `robots.txt` because a project site lives under
`jonmorris.github.io/portfolio-experimental/` and crawlers only read
`robots.txt` at the domain root — and a `Disallow` would stop Google from ever
seeing the `noindex`. Launching means deleting that one line.

## Vendored agent skills (mattpocock/skills)

The 27 skills from mattpocock/skills' Claude Code plugin are copied verbatim
into `.claude/skills/` instead of installed as a user-level plugin. A copy
inside the repo travels with it, so every session (cloud ones included) gets
the same skills with nothing to install, and an update shows up as a normal
diff. The tradeoff is manual updates. The `misc/` bucket (frozen upstream) and
`in-progress/` bucket are left out. Provenance, license and update steps are in
`.claude/skills/README.md`.
