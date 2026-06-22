---
title: "termtype — a typing trainer that lives in your terminal"
type: side
year: 2025
role: "Designer & developer"
tech: ["TypeScript", "Ink", "Node"]
link: "https://github.com/jonmorris"
summary: "A weekend project that got out of hand: a monospace typing trainer with real-time WPM, themes, and a stats history — all in the terminal."
order: 1
---

## Why

I wanted to practice typing without leaving the terminal, and every existing
tool wanted a browser. So I built one that didn't.

## What it is

A small TUI app that throws code snippets and prose at you, tracks words-per-
minute and accuracy live, and keeps a local history so you can see whether
you're actually improving (you are, slowly).

- **Live stats** — WPM, accuracy, and a per-keystroke heatmap.
- **Themes** — because of course it has themes. Mono fonts deserve good color.
- **Local-first** — your history is a plain JSON file you own.

## What I learned

Designing for a fixed-width grid is a constraint I genuinely enjoy — every
element snaps to the same rhythm, and there's nowhere to hide sloppy alignment.
A lot of the type and spacing thinking here leaked back into my day-job work.
