# Use mattpocock/skills through the plugin, not a repo copy

_Decided 2026-11-25._

The skills come from the `mattpocock-skills` Claude Code plugin, installed at the user level, instead of the copy in `.claude/skills/` from ADR-0015. Having both listed every skill twice. The plugin updates itself and works in every project, and its namespace (`/mattpocock-skills:code-review`) gets past the clashes with Claude Code's own `code-review`, `research` and `prototype`. Supersedes ADR-0015.

## Consequences

The repo no longer carries the skills, so a session only has them if the plugin is installed where that session runs. The setup files in `docs/agents/` and the ADRs don't depend on the copy and stay as they are.
