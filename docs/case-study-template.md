# Case-study template

One modular template covers both work case studies and side projects. The spine
is the same; side projects switch some blocks off. This avoids maintaining two
systems. Grounded in guidance from NN/g, IxDF, UXfolio, learnui.design, and
exemplars like Simon Pan's Uber case study.

Live demos (build the site, then visit):

- Work: `/examples/case-study-work/`
- Side project: `/examples/case-study-side-project/`

The demo pages are excluded from the projects feed — they exist only to preview
the template.

## Frontmatter (the snapshot)

The layout renders role / year / client / skills / link as a metadata block, so
**never repeat them as body headings.** (Today five of the six real case studies
do — `## Role:`, `## Skills:`, `## Design Team:` — duplicating the frontmatter.
Better Trail is the one that already follows this template.)

```yaml
title:    "Outcome-focused headline, not the project name"
name:     "Project / Client Name"
cover:    "/assets/<slug>/cover.png"   # card + hero image
type:     work            # work | side
year:     2025
role:     "Senior UX Designer"
client:   "Acme"          # work only
link:     "https://…"     # side projects / anything public
skills:   ["Product Strategy", "UX Design", "UI Design"]
summary:  "2–3 lines that stand alone — many readers read only this."
```

## Section spine

| # | Section            | Work | Side project                         |
|---|--------------------|------|--------------------------------------|
| 1 | Hero / cover       | ✓    | ✓                                    |
| 2 | Overview / TL;DR   | ✓    | ✓ → "What it is" (the hook)          |
| 3 | Problem            | ✓    | ✓ → "Why I built it" (motivation)    |
| 4 | Goals & constraints| ✓    | optional / drop                      |
| 5 | Research           | ✓    | usually collapse                     |
| 6 | Process & decisions| ✓    | → "How it works" (lighter)           |
| 7 | Final solution     | ✓    | merged into "How it works"           |
| 8 | Outcomes & impact  | ✓    | → "What I learned" (qualitative ok)  |
| 9 | Reflection         | ✓    | merged into "What I learned"         |

**Work:** all nine, problem → process → outcome. Target 800–1,500 words; readers
spend ~60s, so sections 1–3 and 8 must carry the story alone. Lead outcomes with
real metrics against the baseline set in Goals.

**Side project:** ~4 sections (What it is → Why I built it → How it works → What I
learned). Read in a minute, lead with motivation, don't fake research or metrics,
link out for depth.

## Image patterns

Aim ~30% imagery / 70% text, distributed across sections (not clustered). Every
load-bearing image gets a caption saying what it is and *why it mattered.*

Authored as plain HTML `<figure>` blocks in the markdown (kept flush-left so
Markdown doesn't treat them as code):

```html
<!-- Standard captioned figure (column width) -->
<figure class="cs-figure">
  <img src="/assets/…/x.png" alt="describe it">
  <figcaption>What it is and why it mattered.</figcaption>
</figure>

<!-- Wide: breaks out of the reading column (hero, marquee screenshot) -->
<figure class="cs-figure cs-figure--wide"> … </figure>

<!-- Two-up: before/after, two screens -->
<figure class="cs-figure cs-figure--two-up">
  <div class="cs-figure__pair">
    <img src="…/before.png" alt="before">
    <img src="…/after.png"  alt="after">
  </div>
  <figcaption>Before / after.</figcaption>
</figure>
```

Patterns to reach for: **hero/cover** (one, full-bleed), **full-bleed final
screenshot**, **device-frame mockups** for multi-screen mobile, **before/after**
two-up (strongest evidence), **annotated wireframes** (callouts explain
decisions), **process artifacts** (flows, journey maps — always captioned).

Styles live in `src/css/style.css` under "Case-study figures." Placeholder
artwork for every pattern is in `src/assets/examples/`.

## Common mistakes to design against

- Output over outcome — pretty screens, no baseline or metrics.
- Repeating frontmatter (role/skills/team) as body headings.
- A mechanical process dump that explains *what UX is* instead of your judgment.
- Uncaptioned images; clustering all visuals in one section.
- Judging a side project by client-work standards — say it's self-initiated.
