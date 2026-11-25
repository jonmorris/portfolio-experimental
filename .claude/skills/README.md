# .claude/skills/

Project skills for Claude Code. Each folder is one skill, run as `/<folder-name>`.

## Vendored: mattpocock/skills

These 27 skills are a verbatim copy of the Claude Code plugin set from
[mattpocock/skills](https://github.com/mattpocock/skills) (plugin v1.3.2,
commit `6f7f7831a625f040a8e06a0e7954826b87ce775a`, copied 2026-11-25). The
license is MIT (Copyright (c) 2026 Matt Pocock) and is kept in
`LICENSE-mattpocock-skills`.

ask-matt, code-review, codebase-design, diagnosing-bugs, domain-modeling,
grill-me, grill-with-docs, grilling, handoff, implement, implement-spec,
improve-codebase-architecture, pr, prototype, research, retro,
setup-matt-pocock-skills, tdd, teach, to-questionnaire, to-spec, to-tickets,
triage, wait-what, wayfinder, wizard, writing-for-agents

- **Treat these as third-party files:** don't edit them in place. To change
  how one behaves for this repo, say so in `CLAUDE.md`. If you have to fork
  one, rename it so the next update doesn't overwrite your edits.
- **To update:** re-copy each skill folder listed in the upstream
  `.claude-plugin/plugin.json` over these, then update the commit above.
- **First-time setup:** run `/setup-matt-pocock-skills` once. It asks which
  issue tracker, triage labels and docs location to use.
- **Name clashes:** `code-review`, `research` and `prototype` share names with
  Claude Code built-ins. Upstream won't rename them; the project copy is the
  one under `.claude/skills/`.
