# Vendor mattpocock/skills into the repo

_Decided 2026-11-25._

The 27 skills in mattpocock/skills' Claude Code plugin are copied unchanged into `.claude/skills/` instead of relying only on a user-level plugin. A copy in the repo travels with it, so every session (cloud ones included) gets the same pinned skills, and an update shows up as a normal diff. The tradeoff is updating by hand. The frozen `misc/` and unfinished `in-progress/` skills are left out. Where the files came from, the license and update steps are in `.claude/skills/README.md`.
