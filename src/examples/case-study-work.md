---
title: "Cutting the wait out of patient scheduling"
name: "Meridian Health (TEMPLATE EXAMPLE)"
cover: "/assets/examples/example-hero.svg"
type: work
year: 2025
role: "Senior UX Designer"
client: "Meridian Health"
skills: ["Product Strategy", "UX Design", "UI Design", "User Research", "Design Systems"]
summary: "A demo case study showing the recommended WORK template end to end — problem → process → outcome, with every image pattern in place. Use it as a fill-in-the-blanks skeleton, not real content."
---

<figure class="cs-figure cs-figure--wide">
  <img src="/assets/examples/example-fullbleed.svg" alt="The redesigned Meridian scheduling flow shown across desktop and mobile">
  <figcaption>Opening full-bleed shot — the one image that shows what shipped before anyone reads a word.</figcaption>
</figure>

## Overview

Two or three sentences that stand on their own, because some readers only read this. What was the project, what did *you* do, and what changed because of it. The role, year, client, and skills above (pulled from frontmatter) carry the snapshot — don't repeat them as body headings.

Meridian's online scheduler made patients call the office more often than it saved them a call. I led the redesign of the booking flow, cutting completion time roughly in half and dropping support calls about scheduling by a third.

## Problem

What was broken, who it affected, and what was at stake — for users *and* the business. Keep it concrete and tied to evidence. This frames every decision that follows.

Patients abandoned the booking flow at the "choose a time" step. The calendar showed every slot for every provider at once, with no way to filter by location or insurance, so people gave up and phoned the front desk — the exact outcome the tool was meant to prevent.

## Goals & constraints

State the success criteria and the box you had to work inside. Constraints are what make later decisions look deliberate rather than arbitrary.

- **Goal:** reduce booking-flow abandonment and scheduling-related support calls.
- **Constraint:** the underlying EHR API couldn't change; we designed around its existing slot data.
- **Constraint:** the launch had to meet WCAG AA — this is a healthcare product.

## Research

Methods, who you talked to, and the few insights that actually changed the design. Tie findings to decisions; skip the academic write-up. *(On a side project, this section usually collapses — see the side-project example.)*

<figure class="cs-figure">
  <img src="/assets/examples/example-process.svg" alt="Research-to-test process: research, sketch, wireframe, test, repeat">
  <figcaption>Process artifacts belong in the story too — here, the loop the team ran each sprint.</figcaption>
</figure>

Five booking sessions made the core insight obvious: people think in terms of *"the soonest appointment near me,"* not *"provider, then date, then time."* The flow was organized backwards from how patients reasoned about it.

## Process & design decisions

The core of a designer's case study. Show the turning points — the moments new information changed direction — not a mechanical march through phases. Annotated wireframes earn their place here.

<figure class="cs-figure">
  <img src="/assets/examples/example-wireframe.svg" alt="Annotated wireframe of the reordered booking flow with three numbered callouts">
  <figcaption>Annotated wireframe. Callouts (1) lead with location filter, (2) surface the soonest slot, (3) defer provider choice — the reordering that fixed the drop-off.</figcaption>
</figure>

We inverted the flow to lead with location and "soonest available," and deferred provider selection to the end for the patients who cared about it. A reusable date-and-time component replaced the wall-of-slots calendar.

## Final solution

The shipped experience. Polished key screens in context — full-bleed for the marquee flow, device frames for multi-screen work.

<figure class="cs-figure cs-figure--two-up">
  <div class="cs-figure__pair">
    <img src="/assets/examples/example-mobile.svg" alt="Mobile booking flow: filter, available times, confirm">
    <img src="/assets/examples/example-mobile.svg" alt="Mobile confirmation and reminder screens">
  </div>
  <figcaption>Two-up device frames show the mobile flow at a glance without a screen-by-screen slog.</figcaption>
</figure>

## Outcomes & impact

The most-valued section: results measured against the baseline you set in *Goals*. Outcomes, not outputs. Before/after imagery is the strongest evidence you can show.

<figure class="cs-figure cs-figure--two-up">
  <div class="cs-figure__pair">
    <img src="/assets/examples/example-before.svg" alt="Before: the original all-slots calendar">
    <img src="/assets/examples/example-after.svg" alt="After: the filtered, soonest-first booking flow">
  </div>
  <figcaption>Before / after — the redesign side by side with what it replaced.</figcaption>
</figure>

- Median booking time dropped from ~4 min to ~2 min.
- Scheduling-related support calls fell ~33% in the first quarter.
- Flow completion rose from 58% to 81%.

## Reflection

Short, honest, and forward-looking. What you'd do differently, what you learned, what's next. Signals maturity without padding the page.

If I ran it again I'd usability-test the insurance filter earlier — it tested well late but nearly shipped in a confusing spot. Next up: applying the same "soonest near me" pattern to rescheduling.
