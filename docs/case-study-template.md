# Case-study template

One modular template covers both work case studies and side projects. The spine
is the same; side projects switch some blocks off. This avoids maintaining two
systems. The structure leads with decisions, not process (ADR-0019), grounded
in first-party hiring guidance from HubSpot, Atlassian, Meta, Adobe, Intercom,
Spotify and NN/g, and in Simon Pan's Uber case study as an exemplar. Sources and
quotes: `docs/research/senior-product-designer-case-studies-verified.md`.

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

| # | Section                         | Work | Side project                      |
|---|---------------------------------|------|-----------------------------------|
| 1 | Opening (no heading)            | ✓    | ✓ → "What it is" (the hook)       |
| 2 | Role & scope                    | ✓    | drop: it's self-initiated, say so |
| 3 | Confidentiality note            | if needed | —                            |
| 4 | Problem                         | ✓    | ✓ → "Why I built it"              |
| 5 | Constraints                     | ✓    | optional / drop                   |
| 6 | Design decisions                | ✓    | → "How it works" (lighter)        |
| 7 | Outcome                         | ✓    | merged into "What I learned"      |
| 8 | What I'd do differently         | ✓    | merged into "What I learned"      |

1. **Opening.** Visible without scrolling: the strongest visual, then one or two
   sentences on the problem, what shipped and what changed. Reviewers may not
   finish the page, so the main points come first.
2. **Role & scope.** What *you* owned, in the first person, separated from the
   team's work. Team size, partner teams, stakeholders you aligned, dates, and
   where your involvement ended. Say so if you framed the problem or co-wrote
   the brief; that initiative is a seniority signal.
3. **Confidentiality note.** One or two lines saying what was omitted or
   obscured and why; visuals redacted, blurred or recreated generically. Repeat
   a one-line note next to any withheld data.
4. **Problem.** Why it mattered to users *and* the business, and how you knew it
   was real.
5. **Constraints.** Just enough process to explain the box you worked in:
   technical, business and time constraints, and which you pushed back on. A
   paragraph, not a tour. Reviewers already know the standard process.
6. **Design decisions.** The main body. Show the designs at readable size. For
   each hard call: the options considered, what you rejected and why, the
   constraint behind any compromise, where you pushed back, and what you lost.
   Pick the calls that matter; there's no set number.
7. **Outcome.** Metrics or qualitative evidence, how success was defined, and
   what didn't move. Use relative figures when absolute ones are confidential.
   Never invent a number; directional evidence stated honestly beats silence.
8. **What I'd do differently.** Short and honest.

**Side project:** four sections (What it is → Why I built it → How it works →
What I learned). Lead with motivation, say it's self-initiated, don't fake
research or metrics, and link out for depth.

**Length.** The sources don't settle it: Meta argues for a few hundred words on
the page; Simon Pan's well-regarded case study runs far longer. Keep the page
tight and put depth in the decisions section. A short-version-plus-full-write-up
split is an open site-design question, not part of this template.

**Portfolio level.** Three to five case studies online, chosen for the work you
want next, with one or two ready to present live for 30–45 minutes.

## Image patterns

Distribute imagery across sections rather than clustering it. Every
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

- Output over outcome: screens with no result or evidence of what changed.
- A tour of the standard process instead of the decisions you made.
- Hiding your own contribution inside the team's ("we" everywhere).
- Repeating frontmatter (role/skills/team) as body headings.
- Uncaptioned images; clustering all visuals in one section.
- Judging a side project by client-work standards — say it's self-initiated.
