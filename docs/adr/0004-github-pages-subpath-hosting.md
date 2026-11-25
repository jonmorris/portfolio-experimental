---
status: superseded by ADR-0018
---

# Host on GitHub Pages, under a subpath

_Decided 2026-06-22._

The site deploys to GitHub Pages from `.github/workflows/deploy.yml`. Because a project site is served at `/portfolio-experimental/`, not the domain root, `eleventy.config.js` uses `HtmlBasePlugin` to rewrite root-relative URLs with the path prefix. Templates keep writing plain `/css/...` links; don't hard-code the prefix.
