// Decision-log tooling library.
//
// One place for: the Kind list, the filename check, the single-row entry
// parser, a filename sort, and the append-to-table function. The script
// (../decision-log.mjs) and the tests import from here so there is one source
// of truth. No dependencies — Node built-ins only.

import { readFileSync, writeFileSync } from "node:fs";
import { basename } from "node:path";

// The fixed Kind list. Keep this list here only; docs and the script refer to
// it. Chosen to fit a portfolio + blog repo: product/content/design decisions,
// engineering choices, process conventions, and the two lifecycle kinds.
export const KINDS = [
  "Product",
  "Design",
  "Content",
  "Engineering",
  "Process",
  "Deferred",
  "Reversed",
];

// A decision-log entry filename: YYYY-MM-DD-short-name.md (lowercase, hyphenated).
const FILENAME_RE = /^\d{4}-\d{2}-\d{2}-[a-z0-9]+(-[a-z0-9]+)*\.md$/;

/** True when `name` is a valid entry filename (basename only). */
export function isValidFilename(name) {
  return FILENAME_RE.test(basename(name));
}

/** The YYYY-MM-DD date embedded at the start of an entry filename, or null. */
export function dateFromFilename(name) {
  const m = basename(name).match(/^(\d{4}-\d{2}-\d{2})-/);
  return m ? m[1] : null;
}

/**
 * Parse one decision-log entry file's contents into a validated row.
 *
 * Rules (all required):
 *  - the filename itself is valid;
 *  - exactly one non-blank line;
 *  - that line has a leading and trailing `|`;
 *  - exactly four cells;
 *  - the Date cell equals the date in the filename;
 *  - the Kind cell is one of KINDS;
 *  - Decision and Ref cells are non-empty.
 *
 * Returns { date, kind, decision, ref, line } on success.
 * Throws Error with a plain message naming the file and the problem on failure.
 */
export function parseEntry(filename, contents) {
  const name = basename(filename);
  const fail = (problem) => {
    throw new Error(`${name}: ${problem}`);
  };

  if (!isValidFilename(name)) {
    fail(
      "filename must look like YYYY-MM-DD-short-name.md (lowercase letters, digits, hyphens)"
    );
  }

  const nonBlank = contents
    .split("\n")
    .map((l) => l.trim())
    .filter((l) => l.length > 0);

  if (nonBlank.length === 0) fail("file is empty; expected exactly one table row");
  if (nonBlank.length > 1) {
    fail(`expected exactly one non-blank line, found ${nonBlank.length}`);
  }

  const line = nonBlank[0];
  if (!line.startsWith("|") || !line.endsWith("|")) {
    fail("row must start and end with '|'");
  }

  // Drop the outer pipes, then split. `| a | b |` -> ["a", "b"].
  const cells = line.slice(1, -1).split("|").map((c) => c.trim());
  if (cells.length !== 4) {
    fail(`expected exactly 4 cells (Date, Kind, Decision, Ref), found ${cells.length}`);
  }

  const [date, kind, decision, ref] = cells;

  const fileDate = dateFromFilename(name);
  if (date !== fileDate) {
    fail(`Date cell '${date}' does not match the filename date '${fileDate}'`);
  }
  if (!KINDS.includes(kind)) {
    fail(`Kind '${kind}' is not one of: ${KINDS.join(", ")}`);
  }
  if (!decision) fail("Decision cell is empty");
  if (!ref) fail("Ref cell is empty");

  return { date, kind, decision, ref, line: `| ${date} | ${kind} | ${decision} | ${ref} |` };
}

/** Sort entry filenames by basename (date, then name — both lexical). */
export function sortByFilename(names) {
  return [...names].sort((a, b) => basename(a).localeCompare(basename(b)));
}

/**
 * Append table rows to the end of the Log table in DECISION-LOG.md text.
 * The table is the trailing run of lines that start with '|'. Rows are
 * inserted directly after the last such line. Returns the new file text.
 */
export function appendRowsToTable(docText, rows) {
  if (rows.length === 0) return docText;

  const lines = docText.replace(/\n+$/, "").split("\n");

  let lastTableLine = -1;
  for (let i = 0; i < lines.length; i++) {
    if (lines[i].trimStart().startsWith("|")) lastTableLine = i;
  }
  if (lastTableLine === -1) {
    throw new Error("DECISION-LOG.md: no table found (no line starts with '|')");
  }

  const before = lines.slice(0, lastTableLine + 1);
  const after = lines.slice(lastTableLine + 1);
  return [...before, ...rows, ...after].join("\n") + "\n";
}

/** Read + parse one entry file from disk, returning the parsed row. */
export function readEntry(path) {
  return parseEntry(path, readFileSync(path, "utf8"));
}

/** Write text back to a file (small wrapper for symmetry/testability). */
export function writeText(path, text) {
  writeFileSync(path, text, "utf8");
}
