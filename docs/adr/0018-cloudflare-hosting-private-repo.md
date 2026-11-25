# Host on Cloudflare at jon-morris.com, with a private repo

_Decided 2026-11-25._

The site will be built and served by Cloudflare from the GitHub repo, at the root of jon-morris.com (whose DNS also moves to Cloudflare), replacing GitHub Pages. The repo is only public so the free GitHub Pages preview works; GitHub's free plan serves Pages from public repos only, and the repo is meant to be private. Cloudflare builds from a private repo for free and gives a preview link per branch, so the repo goes private as soon as those previews work, and the GitHub Pages deploy is retired then. Supersedes ADR-0004.

## Considered options

- **Stay on GitHub Pages and pay for GitHub Pro** to keep Pages working with a private repo.
- **Stay on GitHub Pages and keep the repo public** permanently.

## Consequences

The site moves from the `/portfolio-experimental/` subpath to the domain root. jon-morris.com switches over at launch, together with removing the pre-launch `noindex` (ADR-0014); until then the old one-page site stays up and old URLs are not preserved.
