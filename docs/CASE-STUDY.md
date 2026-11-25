# Case study — portfolio-experimental

A running, modular case study for the portfolio & blog project itself. It's a
repo-only document (never built or shipped) and the place where the decisions in
`docs/adr/` become a story you can lift into a written case study.

## How this file works

- **Modules, not chapters.** Each `##` section stands alone. A write-up can pick
  the modules it needs and drop the rest without leaving a gap.
- **Tag line.** Every module opens with an italic tag:
  - *Core* — spine of any version.
  - *Optional [audience/length]* — for long form or a specific reader.
  - *Evidence:* what to show beside the text. `[ ]` marks evidence not yet
    captured; `[x]` marks it ready.
- **Running.** When work is worth telling, add or amend a module **and** a row in
  *Log of additions*. Facts and dates come from `docs/adr/`; this file
  is where they become a narrative.
- **Placeholders.** `[[double brackets]]` mark things only the owner can fill in
  (role, tools, metrics, reflections). Never invent those.

## Suggested cuts

| Form     | Modules            |
|----------|--------------------|
| Short    | 1, 2, 8            |
| Standard | 1, 2, 3, 4, 6, 8   |
| Long     | 1–9                |

---

## 1. Overview

*Core — Evidence: [ ] hero screenshot of the live site (home + a case study), light & dark*

A content-first design portfolio and blog, built as a static [Eleventy](https://www.11ty.dev/)
site: monospace throughout (JetBrains Mono), dark/light toggle, and a single
tagged feed where professional case studies and personal side projects sit
together. Content is Markdown + frontmatter, committed to git — no CMS, no
backend.

- **Role:** [[your role — e.g. designer/builder, solo]]
- **Timeline:** started 2026-06-22; [[ongoing / dates]]
- **Tools:** Eleventy, Nunjucks, vanilla CSS, vanilla JS; [[design tools — Figma?]]

## 2. The problem

*Core — Evidence: [ ] before state / the brief in one image or quote*

[[The problem in your words.]] The working premise visible in the repo: a
designer whose range has widened from "designer who can build" to selling,
scoping, running product, designing end to end, building the front end, leading
a team, and now shipping AI-assisted products — and the portfolio has to make
breadth read as *range*, not as spread-thin. (See the draft post *"I'm not sure
what's impressive anymore."*)

## 3. Reframing the brief

*Optional [long form] — Evidence: [ ] the unified-feed page showing work + side by side*

Rather than wall off "serious" work from side projects, the site reframes the
portfolio as **one feed**: work and side projects share a collection and a card
model, distinguished only by a `type` tag the reader can filter. The argument is
that the breadth *is* the point, so the structure should show it rather than hide
it. (ADR-0003.)

## 4. Key decisions & trade-offs

*Core — Evidence: [ ] annotated frontmatter snippet; [ ] the card + detail layout*

- **Static site, Markdown in git.** No backend, accounts, or authoring UI —
  simplest thing that ships and stays maintainable. Trade-off: authoring is
  text-file-and-commit, not a CMS. (ADR-0001.)
- **One content model for every project.** A fixed frontmatter snapshot and a
  five-skill cap keep the feed uniform and force a real choice about what each
  project demonstrates. (ADR-0005, ADR-0007.)
- **No build step for CSS/JS.** Vanilla throughout; JS added only when a real
  behavior needs it (theme toggle, project filter). (ADR-0010, ADR-0011.)
- **Monospace, techie, content-first.** The aesthetic is a deliberate signal, not
  a default. (DESIGN_INSPIRATION.md.)

## 5. Design canon

*Optional [design audience] — Evidence: [ ] DESIGN_INSPIRATION.md excerpt*

Design, layout, typography, color, and motion decisions are weighed against a
written canon (`DESIGN_INSPIRATION.md`) *before* generic best practice — the
canon wins on conflict unless overridden. This keeps the look coherent as the
site grows. (ADR-0008.) [[Which designers/principles in
the canon mattered most, and why?]]

## 6. Working method

*Core — Evidence: [ ] a PR showing the draft→review→merge flow; [ ] the `docs/adr/` folder*

Two habits make the project legible over time:

- **Blog ideas as versioned drafts.** Ideas land as real Markdown files with
  `permalink: false` so they're captured, reviewable in a PR, and never shipped
  half-written; publishing is deleting two lines. (ADR-0006.)
- **Decisions recorded as they're made.** Short, numbered ADRs in `docs/adr/`
  keep the "why" close to the work. (ADR-0016; it started as a decision-log
  table, ADR-0013, and moved to ADRs so the agent skills could read it.)

## 7. Saying no, on the record

*Optional [long form] — Evidence: [ ] the "Out of Scope" / deferred notes*

Deliberately deferred, and written down so the absences are choices, not gaps:
no accounts, comments, or authoring UI; no speculative JavaScript. (ADR-0012;
CONVENTIONS.md → Out of Scope.) [[Anything else you
consciously left out?]]

## 8. Outcome & reflection

*Core — Evidence: [ ] live URL; [ ] metrics if any*

- **Shipped:** [[live URL]] on GitHub Pages. [[What's live vs. in progress.]]
- **Reflection:** [[What you'd tell someone about building your own portfolio
  this way — what worked, what you'd change.]]
- **Metrics:** [[traffic / interviews / responses, if you track any — don't
  invent.]]

## 9. Working with an AI collaborator

*Optional [when relevant] — Evidence: [ ] a representative commit or PR*

Parts of the build and the writing were done with an AI collaborator (this
record among them). [[Your honest take: where it helped, where it didn't, and
how you kept judgment in the loop.]] Related reading: the draft post *"This post
was entirely written with AI. Is that good?"*

---

## Log of additions

| Date | Module | Change |
|------|--------|--------|
| 2026-11-19 | all | Initial draft from repo history and docs |
| 2026-11-25 | all, 6 | References moved from the decision log to ADRs; module 6 retold |
