# Every page is noindex until launch

_Decided 2026-11-20._

The GitHub Pages preview is public but not launched, so `base.njk` gives every page `<meta name="robots" content="noindex">`. It's a meta tag, not `robots.txt`, because a project site sits under `jonmorris.github.io/portfolio-experimental/` and crawlers only read `robots.txt` at the domain root; a `Disallow` would also stop Google from ever seeing the `noindex`. Launching means deleting that one line.
