#!/usr/bin/env node
// Decision-log script.
//
//   node scripts/decision-log.mjs           validate every pending entry,
//                                            print the rows and a count
//   node scripts/decision-log.mjs --fold    append the rows to DECISION-LOG.md
//                                            (in filename order) and delete the
//                                            entry files
//
// Run `--fold` on main, in a commit of its own. README.md in the entry folder
// is always skipped.

import { readdirSync, readFileSync, rmSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";
import {
  appendRowsToTable,
  readEntry,
  sortByFilename,
  writeText,
} from "./decision-log/lib.mjs";

const here = dirname(fileURLToPath(import.meta.url));
const REPO = join(here, "..");
const ENTRY_DIR = join(REPO, "docs", "decision-log");
const LOG_FILE = join(REPO, "docs", "DECISION-LOG.md");

/** Pending entry filenames (everything but README.md), sorted by filename. */
function pendingEntryFiles() {
  const names = readdirSync(ENTRY_DIR)
    .filter((n) => n.endsWith(".md") && n !== "README.md");
  return sortByFilename(names);
}

function validate() {
  const names = pendingEntryFiles();
  const rows = [];
  const errors = [];

  for (const name of names) {
    const path = join(ENTRY_DIR, name);
    try {
      rows.push(readEntry(path));
    } catch (err) {
      errors.push(err.message);
    }
  }

  if (errors.length > 0) {
    for (const m of errors) console.error(`error: ${m}`);
    console.error(`\n${errors.length} invalid entr${errors.length === 1 ? "y" : "ies"}.`);
    process.exit(1);
  }

  if (rows.length === 0) {
    console.log("No pending decision-log entries.");
    return;
  }

  for (const r of rows) console.log(r.line);
  console.log(`\n${rows.length} pending entr${rows.length === 1 ? "y" : "ies"}.`);
}

function fold() {
  const names = pendingEntryFiles();
  if (names.length === 0) {
    console.log("No pending decision-log entries to fold.");
    return;
  }

  // Parse all first; fold nothing if any entry is invalid.
  const rows = names.map((name) => readEntry(join(ENTRY_DIR, name)));

  const docText = readFileSync(LOG_FILE, "utf8");
  const updated = appendRowsToTable(docText, rows.map((r) => r.line));
  writeText(LOG_FILE, updated);

  for (const name of names) rmSync(join(ENTRY_DIR, name));

  console.log(
    `Folded ${rows.length} entr${rows.length === 1 ? "y" : "ies"} into docs/DECISION-LOG.md and removed the files.`
  );
}

const mode = process.argv[2];
if (mode === "--fold") {
  fold();
} else if (mode === undefined) {
  validate();
} else {
  console.error(`unknown argument: ${mode}\nusage: decision-log [--fold]`);
  process.exit(2);
}
