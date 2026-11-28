---
name: writing-case-studies
description: Write, rewrite or review a product design case study for Jon's portfolio, telling the real, constrained project honestly instead of a polished tour of "the UX process". Use whenever the task is drafting or revising a page in src/projects/, turning a docs/case-study-material/ file into a case study, critiquing a case study, or planning what a project's write-up should say, even if the words "case study" aren't used (e.g. "write up Better Trail", "turn the Dickies notes into a page").
---

# Writing case studies

A hiring manager with 20 years in UX put it this way: case studies are usually
"the same cookie cutter polished finely tuned gift wrapped process you will
never have the time to actually produce on the job". What they want instead is
"THAT project": the one with no documentation, a broken current version, two
sprints and requirements still being written, where you had to cut corners.
The full post is in `references/hurricane-project.md`; read it once before a
first draft.

So the job of a case study is not to prove Jon knows the standard process.
Reviewers already know it. The job is to show **how Jon thinks and decides when
the conditions are bad**: what was broken, what box he was in, what he chose,
what he gave up, and what happened. Polish that hides the mess removes the only
thing worth reading.

This sits on top of the repo's existing rules, not beside them:

- **Structure:** `docs/case-study-template.md` (decisions first, ADR-0019).
  Follow its spine, frontmatter and figure patterns. Don't restate them here.
- **Phase:** `CLAUDE.md` says we're in discovery. Never judge whether a project
  belongs by how thin its current page is.

## Workflow

### 1. Gather what exists

For the project's slug, read, in this order:

1. `docs/case-study-material/<slug>.md`: the raw material, mapped to the
   template, with Jon's grill answers and open questions. This is the main
   source.
2. `src/projects/<slug>.md`: the current page, if any.
3. `src/previous case studies/`: earlier versions (CONVENTIONS.md asks for this).
4. `docs/catalog.md`: dates, role, employer.

If there's no material file, say so and offer to build one first. Writing from
the old page alone reproduces the polished version this skill exists to avoid.

### 2. Find the hurricane

Before writing a word of the draft, write down (for yourself, or to Jon) the
answers to these. They are the story; everything else is support.

- **What was actually broken or missing** when Jon arrived? (No docs, a bad
  current product, undefined workflows, unclear owners, manual processes.)
- **What was the box?** Time, team size, budget, tech, politics, a client who
  wanted something else, requirements that changed mid-flight.
- **What did Jon skip or cut, and why?** Research that didn't happen, testing
  done with five colleagues, a design system that was a Figma page. Name it.
- **What were the two or three hard calls?** Options on the table, the one
  chosen, the one rejected, what that cost.
- **What happened after?** Shipped, partly shipped, killed, unknown. Evidence,
  even if it's only directional.
- **What would he do differently** now, with hindsight, not as a ritual?

Where the material doesn't answer one, **ask Jon, one question per message**,
with a suggested answer he can accept with "yes". Don't fill the gap yourself.
Questions that tend to unlock the real story:

- "What was the 'you're kidding, right?' moment on this one?"
- "What did you have to ship before you felt ready?"
- "What did the process actually look like, week by week, not as it should have?"
- "Who disagreed with you, and how did it end?"
- "What's the part you'd leave out if you were polishing it? Why?"

That last one usually points straight at what belongs in.

### 3. Draft to the template

Follow the spine in `docs/case-study-template.md`. The hurricane mostly lands in
three places:

- **Opening:** the problem, what shipped, what changed, and one line of the
  mess ("with no specs and two sprints before engineering handoff…").
- **Constraints:** the box, plainly. A paragraph, not a process diagram.
- **Design decisions:** each hard call with what was rejected, what was lost and
  the constraint that forced it. This is the bulk of the page.

Show the real artifacts, rough ones included: whiteboard photos, a quick
wireframe, a spreadsheet, a Slack-thread decision. A messy real artifact with an
honest caption beats a re-drawn one made for the portfolio. If an image was
recreated after the fact, the caption says so.

### 4. Check it against the honesty rules

- **Nothing invented.** No metrics, quotes, research, personas or sketches that
  didn't exist. Unknowns stay as `[[placeholder]]` for Jon, never guesses.
- **No process theatre.** Cut any step named only because "the UX process" has
  it (empathize/define/ideate, a persona nobody used, a journey map made for the
  case study). If a method appears, say what it changed.
- **"I" for Jon, "we" for the team**, and be clear which is which.
- **Say what was cut** and what didn't work. Name what didn't move in the
  outcome.
- **Say when it was written** if it matters: an old project written up years
  later shouldn't read like a live diary.
- **No generic-app framing.** If it reads like a bootcamp capstone (clean
  problem, tidy personas, happy ending), find the real constraint and lead
  with it.

### 5. Voice

Plain, first person, specific, a bit dry. Short sentences. Concrete nouns
("the returns spreadsheet the ops team kept by hand") over abstractions
("streamlined workflows"). No hype words (seamless, delightful, robust,
empower). Let a frustrating moment be frustrating; don't spin every constraint
into "an exciting opportunity".

## Output

- A rewrite goes in `src/projects/<slug>.md` with the template's frontmatter.
  Keep anything there that's still right; don't silently drop Jon's wording.
- At the end, list for Jon: open `[[placeholders]]`, claims you couldn't source,
  and anything you cut from the old page and why.
- A review (not a rewrite) is a short list: where the page is polishing over the
  real story, what's missing from the hurricane questions, and what to cut.
- If the work changes how case studies are written in general, update
  `docs/case-study-template.md` or add an ADR, per `CLAUDE.md`.
