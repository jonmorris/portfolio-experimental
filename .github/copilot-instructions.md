# Copilot Instructions

Project-specific conventions (naming, structure, patterns) are documented in CONVENTIONS.md. Follow them.

Behavioral guidelines to reduce common LLM coding mistakes. Merge with project-specific instructions as needed.

**Tradeoff:** These guidelines bias toward caution over speed. For trivial tasks, use judgment.

## TL;DR — If You Remember Nothing Else

When handling sourced content (rulebooks, FAQ, errata, glossary, anything under `_source/` or labeled Official/Augmented):

1. **Never change the words.** Word-for-word fidelity to the source. No grammar fixes, no paraphrasing, no "improvements."
2. **Build means structure, not rewrite.** During a page build or import, do not edit content — regardless of label. Editing is a separate, explicitly requested task.
3. **Flag uncertainty with a structured comment, do not silently fix.** Use `<!-- FIDELITY-FLAG type="..." source="..." note="..." -->`.
4. **Never silently truncate.** Import every section in full, or stop at a clean boundary and explicitly report what remains.
5. **`_source/` is read-only.** Pull from it; never edit, rename, move, or delete files there. See `CONVENTIONS.md` → "Source file handling".

If a task would force you to break any of the above, stop and ask.

## 1. Think Before Coding

**Don't assume. Don't hide confusion. Surface tradeoffs.**

Before implementing:
- State your assumptions explicitly. If uncertain, ask.
- If multiple interpretations exist, present them - don't pick silently.
- If a simpler approach exists, say so. Push back when warranted.
- If something is unclear, stop. Name what's confusing. Ask.

## 2. Simplicity First

**Minimum code that solves the problem. Nothing speculative.**

- No features beyond what was asked.
- No abstractions for single-use code.
- No "flexibility" or "configurability" that wasn't requested.
- No error handling for impossible scenarios.
- If you write 200 lines and it could be 50, rewrite it.

Ask yourself: "Would a senior engineer say this is overcomplicated?" If yes, simplify.

## 3. Surgical Changes

**Touch only what you must. Clean up only your own mess.**

When editing existing code:
- Don't "improve" adjacent code, comments, or formatting.
- Don't refactor things that aren't broken.
- Match existing style, even if you'd do it differently.
- If you notice unrelated dead code, mention it - don't delete it.

When your changes create orphans:
- Remove imports/variables/functions that YOUR changes made unused.
- Don't remove pre-existing dead code unless asked.

The test: Every changed line should trace directly to the user's request.

## 4. Goal-Driven Execution

**Define success criteria. Loop until verified.**

Transform tasks into verifiable goals:
- "Add validation" → "Write tests for invalid inputs, then make them pass"
- "Fix the bug" → "Write a test that reproduces it, then make it pass"
- "Refactor X" → "Ensure tests pass before and after"

For multi-step tasks, state a brief plan:
```
1. [Step] → verify: [check]
2. [Step] → verify: [check]
3. [Step] → verify: [check]
```

Strong success criteria let you loop independently. Weak criteria ("make it work") require constant clarification.

---

**These guidelines are working if:** fewer unnecessary changes in diffs, fewer rewrites due to overcomplication, and clarifying questions come before implementation rather than after mistakes.

## Content Fidelity Rules for Copilot

These rules apply whenever Copilot is asked to import, transcribe, restructure, format, or otherwise handle rulebook content, FAQ entries, errata, glossary definitions sourced from publishers, or any other text that originated outside this project.

## The Core Rule

**Never change the words. Ever.**

Cardboard Appendix's editorial standard is word-for-word fidelity to publisher rulebook text. The site's role is to structure and supplement, not to rewrite. This applies to every piece of sourced content the site hosts.

When importing or processing sourced content, your job is to:

- Preserve every word exactly as written in the source
- Preserve punctuation, capitalization, and inline emphasis
- Preserve numbered lists, bulleted lists, and their order
- Preserve section breaks
- Preserve game-specific terminology even when it looks like a typo or non-standard usage

Your job is **not** to:

- Improve grammar
- Fix what looks like awkward phrasing
- Modernize older language
- Standardize terminology across sources
- Make sentences shorter or punchier
- Substitute synonyms
- "Clean up" the prose in any way

If the source says "the active player may, if he so chooses, perform one (1) action," the site says exactly that. Not "the active player may perform one action." Not "the active player can take one action if they want to."

## What You May Interpret

Structural and presentational decisions are yours to make, because the source format (PDF, scanned image, OCR text) doesn't always carry them cleanly into Markdown. Specifically, you may interpret:

- **Heading levels.** If the source uses visual hierarchy (large bold text, smaller bold text, italics) to indicate section nesting, translate that into appropriate Markdown heading levels (`##`, `###`, `####`).
- **List structure.** If the source uses indentation or bullets to indicate a list, render it as a Markdown list. If a numbered list in the source restarts numbering after a break, preserve that.
- **Emphasis.** Bold and italics should carry over as `**bold**` and `*italics*`. If you're unsure whether something is bold or just a different font, leave it as plain text and flag it.
- **Tables.** If the source has a table, render it as a Markdown table. Preserve every cell's text exactly.
- **Callout candidates.** If the source visually sets off a passage (boxed text, sidebar, colored background), wrap it in the project's callout component. Do not change the text inside.
- **Whitespace and paragraph breaks.** Use Markdown paragraph conventions (blank line between paragraphs). Don't preserve every line break from a PDF that wraps mid-sentence.

The test: if you removed all your formatting decisions and reflowed the result back to plain text, every word should be identical to the source.

## When You're Unsure

If you encounter something where you think a change might be warranted — a word that looks misspelled, a sentence that seems incomplete, a number that seems wrong, an inconsistency between two passages — **do not change it**. Instead:

1. Leave the original text untouched and verbatim.
2. Add a structured HTML comment immediately above the line flagging the issue.
3. Continue with the rest of the import.

### Flag Format

Flags use a single-line HTML comment with three required attributes:

```markdown
<!-- FIDELITY-FLAG type="inconsistency" source="rulebook p.12" note="reads 'five (4) tokens' — apparent inconsistency between word and number. Verify against source." -->
The active player gains five (4) tokens.
```

- `type` — one of: `typo`, `inconsistency`, `unclear-emphasis`, `missing-content`, `gap`, `other`
- `source` — page, section, or other reference that locates the issue in the source material
- `note` — short human-readable description of the doubt

Keep all three attributes on one line, in the order above, with double-quoted values. This format is greppable: `grep -rn 'FIDELITY-FLAG' src/` produces a complete review queue.

The flagged passages get reviewed by Jon during the side-by-side review step in the content pipeline. The default is always: trust the source, flag the doubt, move on.

This applies even to obvious-looking typos. "Teh" instead of "the" still gets imported as "Teh" with a flag. Publishers sometimes preserve typos deliberately, sometimes not, and that's a human call.

## When Importing Content, Complete the Job

Long rulebooks are 40 to 60 pages. Imports take a lot of tokens and a lot of attention. The failure mode to avoid is **silently truncating** — stopping partway through, omitting a section, summarizing the rest, or saying "and so on for the remaining sections."

Rules for completion:

- **Import the entire source from start to finish.** Every section, every paragraph, every list item.
- **If you cannot complete the full import in one pass** (length limits, timeout, complexity), stop at a clean section boundary and explicitly report:
	- What range you completed (e.g. "imported through end of Section 4: Turn Structure")
	- What remains
	- Where to resume from
- **Never use phrases like "...and the rest follows the same pattern" or "[remaining sections continue similarly]" or "..." to indicate omitted content.** Either the content is there in full or you've explicitly stopped and reported where.
- **Never invent content to fill a gap.** If a section is missing from your source, leave a clearly marked placeholder using the standard flag format:

```markdown
<!-- FIDELITY-FLAG type="missing-content" source="Section 7: End of Game" note="source content not provided. Awaiting source material." -->
```

- **Do not assume continuity.** If the source jumps from page 12 to page 14 with no page 13 visible, do not invent a transition. Flag it as `type="gap"`.

### Recommended Chunking Strategy for Long Rulebooks

For sources of roughly 40 pages or more, do not attempt the whole document in one pass. Import one top-level section at a time, with a verification checkpoint between each:

1. Import the next top-level section (e.g. "Section 4: Turn Structure") in full, verbatim.
2. Run `npm run verify:source-fidelity -- --source <path-in-_source> --dest <path-in-game>` to confirm the imported text round-trips against `_source/`.
3. Resolve or accept any flagged differences before moving on.
4. Continue with the next section.

This keeps every pass small enough to complete cleanly, gives a verification checkpoint at every section boundary, and makes "where did the import stop?" trivially answerable.

## When Restructuring Existing Content

If asked to reorganize, split, or move existing rulebook content already on the site:

- The text being moved must arrive at its new location **byte-identical** to its old location, except for heading levels adjusted for the new nesting context
- Do not "tighten up" prose during a move
- Do not merge similar paragraphs
- Do not split paragraphs unless they're clearly two distinct ideas the original publisher would have separated

## Source Content Is Not Edited During Builds

When the task is to build, render, or import content from source files, Copilot does not edit the words — regardless of whether the content is labeled Official or Unofficial, sourced from a publisher or written by Jon. Building means structuring, formatting, and rendering. It does not mean rewriting.

This applies to:

- All content under `src/games/**/_source/`
- All rulebook, FAQ, errata, and glossary files committed to the repo
- Any content the build pipeline reads from disk to produce a page

Editing requests (improving wording, fixing grammar, tightening prose, rephrasing a glossary definition) are separate tasks and must be explicitly requested as edit work — never performed silently while building, importing, or restructuring.

If during a build task you spot something that genuinely needs an edit, surface it as a note to Jon. Do not edit it inline.

## Self-Check Before Finishing Any Content Task

Before considering an import or restructure complete, verify:

- [ ] Every word from the source is present in the output
- [ ] No content has been paraphrased, "improved," or shortened
- [ ] No sections have been summarized or truncated
- [ ] No "..." or "remaining content similar" placeholders exist
- [ ] All uncertainties are flagged with `<!-- FIDELITY-FLAG: -->` comments, not silently resolved
- [ ] If the import was incomplete, the stopping point and remaining work are explicitly reported

If you cannot honestly check every box, say so before handing back.

## Why This Matters

Publishers gave permission to host their rules on the trust commitment that the words go up exactly as they wrote them. A single rewritten sentence is a broken promise. The site's whole permission model — free non-exclusive license, no review cycles required, publish-as-is — depends on this rule being absolute.

If a sourced rulebook is genuinely unclear or wrong, the place to address that is in adjacent content (FAQ entry, glossary definition, Augmented-labeled callout), never inside the rulebook text itself.

## `_Source/` File Process

`_source/` files are strictly read-only. The canonical rules live in `CONVENTIONS.md` → "Source file handling (`_source/`)". Read those before touching anything under `src/games/**/_source/`.

Summary of the rule (do not rely on this summary alone — defer to CONVENTIONS.md if anything below differs):

- Never edit, reformat, rename, move, or delete `_source/` files.
- Use `_source/` only when explicitly authorized for the task, and only as a pull source.
- If a task would require changing `_source/`, stop and request a human edit instead.
