---
title: "Cutting the wait out of patient scheduling"
name: "Meridian Health (TEMPLATE EXAMPLE)"
cover: "/assets/examples/example-hero.svg"
type: work
year: 2025
role: "Senior UX Designer"
client: "Meridian Health"
skills: ["Product Strategy", "UX Design", "UI Design", "User Research", "Design Systems"]
summary: "A demo case study showing the recommended WORK template end to end, decisions first (ADR-0019), with every image pattern in place. Use it as a fill-in-the-blanks skeleton, not real content."
---

<figure class="cs-figure cs-figure--wide">
  <img src="/assets/examples/example-fullbleed.svg" alt="The redesigned Meridian scheduling flow shown across desktop and mobile">
  <figcaption>Opening full-bleed shot: the one image that shows what shipped before anyone reads a word.</figcaption>
</figure>

**Opening, no heading.** One or two sentences that stand alone: the problem, what shipped, what changed. Many readers stop here.

Meridian's online scheduler sent patients to the phone more often than it saved them a call. I redesigned the booking flow around how patients actually choose an appointment; completion time roughly halved and scheduling calls fell by about a third.

## Role & scope

What *you* owned, in the first person, separate from the team. Team size, partners, stakeholders, dates, and where your part ended. The role, year, client and skills in the frontmatter render above. Don't repeat them as headings.

I was the sole designer on a squad of one PM and four engineers, from discovery through launch (six months). I proposed reordering the flow after the first round of sessions; the PM owned the roadmap call. I aligned the front-desk operations lead and the compliance reviewer. After launch, a teammate took over the rescheduling work.

*Confidentiality note, when needed: "Patient data and absolute volumes are omitted; figures below are relative." Repeat a one-line note beside any withheld data.*

## Problem

Why it mattered to users and the business, and how you knew it was real.

Patients abandoned the flow at "choose a time": the calendar showed every slot for every provider at once, with no filter for location or insurance. They phoned the front desk instead, the exact outcome the tool existed to prevent. Call logs and funnel data agreed on where people dropped.

## Constraints

Just enough process to explain the box: technical, business, time, and which ones you pushed back on.

The EHR's slot API couldn't change, so every idea had to work with its existing data. The launch had to meet WCAG AA. I pushed back on a fixed launch date that would have skipped a second usability round, and we moved it two weeks.

## Design decisions

The main body. For each hard call: the options, what you rejected and why, the compromise, where you pushed back, what you lost. Show the designs at readable size.

<figure class="cs-figure">
  <img src="/assets/examples/example-wireframe.svg" alt="Annotated wireframe of the reordered booking flow with three numbered callouts">
  <figcaption>Annotated wireframe. Callouts (1) lead with location filter, (2) surface the soonest slot, (3) defer provider choice.</figcaption>
</figure>

**Lead with "soonest near me", not provider.** Sessions showed patients think "the soonest appointment near me", not "provider, then date, then time". I considered keeping provider-first and adding filters on top; I rejected it because it kept the slowest step first for the majority who didn't care which provider they saw. The cost: patients loyal to one provider now take an extra step, so provider choice stays one tap away.

**Rebuild the calendar as a component, not a patch.** Patching the old wall-of-slots calendar was cheaper this quarter. I argued for a reusable date-and-time component because two other flows needed it; we lost two weeks of scope (a waitlist feature) to pay for it.

<figure class="cs-figure cs-figure--two-up">
  <div class="cs-figure__pair">
    <img src="/assets/examples/example-mobile.svg" alt="Mobile booking flow: filter, available times, confirm">
    <img src="/assets/examples/example-mobile.svg" alt="Mobile confirmation and reminder screens">
  </div>
  <figcaption>Two-up device frames show the mobile flow without a screen-by-screen slog.</figcaption>
</figure>

## Outcome

Metrics or qualitative evidence, how success was defined, and what didn't move. Relative figures if absolutes are confidential. Never invent a number.

<figure class="cs-figure cs-figure--two-up">
  <div class="cs-figure__pair">
    <img src="/assets/examples/example-before.svg" alt="Before: the original all-slots calendar">
    <img src="/assets/examples/example-after.svg" alt="After: the filtered, soonest-first booking flow">
  </div>
  <figcaption>Before / after: the redesign side by side with what it replaced.</figcaption>
</figure>

Success was defined as fewer abandoned bookings and fewer scheduling calls.

- Median booking time dropped from about 4 minutes to about 2.
- Scheduling-related calls fell about 33% in the first quarter.
- Flow completion rose from 58% to 81%.
- Didn't move: rescheduling calls, which this work didn't touch.

## What I'd do differently

Short and honest.

I'd test the insurance filter earlier. It tested well late but nearly shipped in a confusing spot.
