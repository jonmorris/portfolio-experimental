# ADRs replace the decision log

_Decided 2026-11-25._

Decisions are now recorded as numbered ADRs in `docs/adr/`, the format the vendored mattpocock/skills (`/domain-modeling`, `/grill-with-docs`) read and write, instead of the earlier decision-log table, entry files and `DECISIONS.md`. One system the skills understand beats two kept in sync by hand. Every logged decision was transferred into ADRs 0001–0015 with its original date, and the decision-log tooling was removed. Supersedes the decision-log half of ADR-0013.

## Consequences

ADRs are offered sparingly: only for decisions that are hard to reverse, surprising without context, and the result of a real tradeoff (the `domain-modeling` skill's `ADR-FORMAT.md` (mattpocock-skills plugin)). Small, easily reversed calls no longer get a record.
