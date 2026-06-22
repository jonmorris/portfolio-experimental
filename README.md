# portfolio-experimental

A design portfolio + blog. Techie, monospace, content-first. Built with
[Eleventy](https://www.11ty.dev/).

Case studies and personal side projects live in **one unified, tagged feed** —
filter by `work` or `side project` on the [/projects/](src/projects.njk) page.
The blog is plain Markdown. Type is **monospace throughout** (JetBrains Mono),
with a dark/light theme toggle.

## Develop

```bash
npm install
npm run dev      # serve with live reload at http://localhost:8080
npm run build    # build static site to ./_site
```

## Project structure

```
src/
  _data/site.json          # site title, nav, social links — edit me first
  _includes/
    layouts/               # base, project (case study), post (blog)
    partials/              # header, footer, project-card macro
  projects/                # case studies (.md) — work + side projects
    projects.json          # shared front matter for the collection
  posts/                   # blog posts (.md)
  css/style.css            # all styling + design tokens
  js/                      # theme toggle + project filter
  index.njk                # home (hero + featured work + latest writing)
  projects.njk             # full filterable project feed
  blog.njk                 # blog index
  about.njk                # about page
eleventy.config.js         # collections, filters, dirs
```

## Adding a project

Create a Markdown file in `src/projects/`. Front matter:

```yaml
---
title: "Project name"
type: work          # "work" or "side"
year: 2025
role: "Your role"
client: "Client"    # optional
tech: ["Figma", "React"]
link: "https://..." # optional, for live/repo links
summary: "One-line hook shown on cards and the case-study header."
order: 1            # tie-breaker within a year (lower = first)
---

## The problem
Markdown body…
```

`type: work` and `type: side` drive the colored tag and the feed filter.

## Adding a blog post

Create a Markdown file in `src/posts/`, e.g. `2026-05-18-my-post.md`:

```yaml
---
title: "Post title"
date: 2026-05-18
summary: "Shown on the blog index."
tags: ["post", "typography"]   # keep "post"; add topic tags freely
---

Markdown body…
```

## Customizing

- **Identity & nav** — `src/_data/site.json`.
- **Colors / fonts** — the `:root` and `[data-theme]` token blocks at the top of
  `src/css/style.css`. Swap the accent, or change the Google Fonts link in
  `src/_includes/layouts/base.njk` for a different monospace face.

## Deploying

The build is plain static output in `_site/` — host it anywhere:

- **GitHub Pages** — run `npm run build` in a GitHub Action and publish `_site/`.
- **Vercel / Netlify** — set build command `npm run build`, output dir `_site`.

No deployment is wired up yet (deferred by design); pick a host and add the
config when ready.
