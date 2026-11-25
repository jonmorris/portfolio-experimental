# Conventions

Decisions made in the initial scaffold. Document here before changing.

## Standing Principles

These principles apply to every change, regardless of which section it falls under.

- **Default to extending, not creating.** Before writing a new component, shortcode, or CSS block, search for an existing one that serves a similar purpose. If found, extend it with a modifier, prop, or content slot. New components require justification: a genuinely distinct purpose, or differences too structural to express as variants.
- **Check for earlier project material before starting a new case study.** When creating a new project in `src/projects/`, first look in `src/previous case studies/` to see whether an earlier version of that project already exists. Use it as reference material before writing a new version from scratch.
- **Reusable by default, experiments excepted.** Anything built is built to be reusable from the start (component, shortcode, shared style). The only exception is genuine experimentation. Experiments can stay one-off, but the moment an experiment is used a second time, it gets converted into a proper reusable form before that second use ships.
- **Print is a first-class output.** Every new component must look correct when printed. Check print preview before considering a component done. Print-specific overrides live in an `@media print` block, never in the component's main styles.
- **Accessibility is a floor, not a feature.** Every page and component meets the floor defined in the Accessibility section below. No exceptions.

## Pre-merge Checklist

Before considering a change done, run through these four checks:

1. Did this introduce a new component? If yes, was an existing one extended first?
2. Did this introduce new CSS variables on `:root`? If yes, are they used by more than one component?
3. Is there code handling a case that doesn't exist yet? If yes, delete it.
4. Could this be ~30% shorter without losing clarity? If yes, shorten it.

## Clean as You Go

When a feature is removed, reworked, or superseded, dead code and files come out in the same change — not later.

- Delete layouts, partials, templates, and scripts that are no longer referenced.
- Remove functions and helpers that only existed to support the removed feature.
- Strip frontmatter fields and data properties that are no longer consumed.
- Remove per-file boilerplate that a cascade or default now handles.
- Search for all references to the removed thing before closing the change, to catch stragglers.

The standard is: after the change, there should be no file, function, import, or frontmatter field that exists solely because of the old approach.

## Content Model

- `src/projects/*.md` — projects (work and side projects in one collection, told apart by `type`). Frontmatter fields are fixed: see `docs/adr/0005-project-content-model.md` and `0007-skills-cap-and-name-eyebrow.md`. Shared frontmatter lives in `src/projects/projects.json`.
- `src/posts/*.md` — blog posts, filename `YYYY-MM-DD-slug.md`. Drafts set `permalink: false` and `eleventyExcludeFromCollections: true` (`docs/adr/0006-blog-drafts-in-repo-unpublished.md`). Shared frontmatter lives in `src/posts/posts.json`.
- `src/examples/` — demo pages for the case-study template, kept out of the projects feed.
- `src/previous case studies/` — earlier portfolio material, reference only (see Standing Principles).

Global data:

- `src/_data/site.json` — site-wide config (title, nav, social links).
- `src/_data/build.js` — build-time globals.

## Styling

Vanilla CSS only, in one file: `src/css/style.css` (design tokens and all rules). No build step, no preprocessor. If it grows past the point where it's annoying to scroll, split it then; do not pre-split.

Mobile-first. Breakpoints at 640px and 1024px. Max body content width 65ch for readability.

### CSS Variables

Two tiers:

- **Global design tokens** (color, spacing, type scale, breakpoints, radii) live on `:root`. These are the things used across more than one component.
- **Component-specific variables** live on the component's block selector. Anything used by only one component stays local to that component.

Default to local. Promote a variable to `:root` the second time it's needed by a different component. Do not promote speculatively.

```css
.callout {
  --callout-border-width: 4px;
  border-left: var(--callout-border-width) solid var(--color-accent);
}
```

### BEM Naming

Required for all new CSS.

- Blocks are kebab-case: `project-card`, `post-header`.
- Elements use a double underscore: `project-card__title`.
- Modifiers use a double hyphen: `callout--warning`, `button--small`.
- One level of nesting maximum. Never write `block__element__sub-element`. If a sub-element is needed, that's a signal the inner piece is its own block.

## JavaScript

Vanilla JS in `src/js/`, no framework or build step, added only when a real behavior needs it (so far: the theme toggle and the project filter). No JS is added speculatively. See `docs/adr/0011-vanilla-js-only-when-needed.md`.

## Accessibility

Every page and component must meet this floor. No exceptions.

- Use semantic HTML. `<nav>`, `<main>`, `<article>`, `<button>` for buttons, `<a>` for links. Never `<div onclick>`.
- Visible focus states on all interactive elements.
- WCAG AA contrast: 4.5:1 for body text, 3:1 for large text.
- Keyboard works for everything. Tab to every interactive thing. No mouse-only interactions.
- Alt text on every image. Decorative images get `alt=""`.

## Out of Scope (Intentionally)

No accounts, comments, or any authoring UI. Content is Markdown + frontmatter, committed to git.