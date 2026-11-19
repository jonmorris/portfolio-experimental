// Unit tests for the decision-log library.
import { test } from "node:test";
import assert from "node:assert/strict";
import {
  KINDS,
  appendRowsToTable,
  dateFromFilename,
  isValidFilename,
  parseEntry,
  sortByFilename,
} from "./lib.mjs";

const GOOD_NAME = "2026-06-24-adopt-thing.md";
const GOOD_ROW = "| 2026-06-24 | Process | Adopt the thing | CLAUDE.md → Running records |";

test("isValidFilename accepts well-formed names", () => {
  assert.ok(isValidFilename(GOOD_NAME));
  assert.ok(isValidFilename("2025-01-01-a.md"));
  assert.ok(isValidFilename("2025-12-31-a-b-c-123.md"));
});

test("isValidFilename rejects malformed names", () => {
  assert.ok(!isValidFilename("README.md"));
  assert.ok(!isValidFilename("2026-6-4-thing.md")); // unpadded
  assert.ok(!isValidFilename("2026-06-24-Thing.md")); // uppercase
  assert.ok(!isValidFilename("2026-06-24-thing.txt")); // wrong ext
  assert.ok(!isValidFilename("2026-06-24-.md")); // empty name
  assert.ok(!isValidFilename("2026-06-24-thing--two.md")); // double hyphen
});

test("dateFromFilename extracts the leading date", () => {
  assert.equal(dateFromFilename(GOOD_NAME), "2026-06-24");
  assert.equal(dateFromFilename("nope.md"), null);
});

test("parseEntry accepts a valid single-row entry", () => {
  const row = parseEntry(GOOD_NAME, GOOD_ROW + "\n");
  assert.equal(row.date, "2026-06-24");
  assert.equal(row.kind, "Process");
  assert.equal(row.decision, "Adopt the thing");
  assert.equal(row.ref, "CLAUDE.md → Running records");
});

test("parseEntry tolerates surrounding blank lines", () => {
  const row = parseEntry(GOOD_NAME, `\n\n${GOOD_ROW}\n\n`);
  assert.equal(row.kind, "Process");
});

test("parseEntry rejects an empty file", () => {
  assert.throws(() => parseEntry(GOOD_NAME, "\n  \n"), /exactly one table row/);
});

test("parseEntry rejects multiple non-blank lines", () => {
  assert.throws(
    () => parseEntry(GOOD_NAME, `${GOOD_ROW}\n${GOOD_ROW}`),
    /exactly one non-blank line, found 2/
  );
});

test("parseEntry requires leading and trailing pipes", () => {
  assert.throws(
    () => parseEntry(GOOD_NAME, "2026-06-24 | Process | x | y"),
    /start and end with '\|'/
  );
});

test("parseEntry requires exactly four cells", () => {
  assert.throws(
    () => parseEntry(GOOD_NAME, "| 2026-06-24 | Process | only three |"),
    /exactly 4 cells.*found 3/
  );
  assert.throws(
    () => parseEntry(GOOD_NAME, "| 2026-06-24 | Process | a | b | c |"),
    /exactly 4 cells.*found 5/
  );
});

test("parseEntry requires the Date cell to match the filename", () => {
  assert.throws(
    () => parseEntry(GOOD_NAME, "| 2026-06-25 | Process | x | y |"),
    /does not match the filename date/
  );
});

test("parseEntry requires a Kind from the list", () => {
  assert.throws(
    () => parseEntry(GOOD_NAME, "| 2026-06-24 | Bogus | x | y |"),
    /is not one of/
  );
});

test("parseEntry requires non-empty Decision and Ref", () => {
  assert.throws(
    () => parseEntry(GOOD_NAME, "| 2026-06-24 | Process |  | y |"),
    /Decision cell is empty/
  );
  assert.throws(
    () => parseEntry(GOOD_NAME, "| 2026-06-24 | Process | x |  |"),
    /Ref cell is empty/
  );
});

test("parseEntry rejects a bad filename up front", () => {
  assert.throws(() => parseEntry("README.md", GOOD_ROW), /README\.md: filename must look like/);
});

test("error messages name the file", () => {
  assert.throws(() => parseEntry(GOOD_NAME, "\n"), new RegExp(`^Error: ${GOOD_NAME}: `));
});

test("every Kind is a non-empty string and the list is unique", () => {
  assert.ok(KINDS.length > 0);
  assert.equal(new Set(KINDS).size, KINDS.length);
});

test("sortByFilename orders by date then name", () => {
  const input = [
    "2026-06-25-b.md",
    "2026-06-24-zeta.md",
    "2026-06-24-alpha.md",
  ];
  assert.deepEqual(sortByFilename(input), [
    "2026-06-24-alpha.md",
    "2026-06-24-zeta.md",
    "2026-06-25-b.md",
  ]);
});

test("appendRowsToTable inserts after the last table row", () => {
  const doc = [
    "# Decision log",
    "",
    "## Log",
    "",
    "| Date | Kind | Decision | Ref |",
    "|------|------|----------|-----|",
    "| 2026-06-22 | Design | Monospace | README |",
    "",
  ].join("\n");
  const out = appendRowsToTable(doc, ["| 2026-06-24 | Process | New | X |"]);
  const lines = out.trimEnd().split("\n");
  assert.equal(lines[lines.length - 1], "| 2026-06-24 | Process | New | X |");
  assert.equal(lines[lines.length - 2], "| 2026-06-22 | Design | Monospace | README |");
});

test("appendRowsToTable with no rows is a no-op", () => {
  assert.equal(appendRowsToTable("| a |\n", []), "| a |\n");
});

test("appendRowsToTable throws when there is no table", () => {
  assert.throws(() => appendRowsToTable("# No table here\n", ["| x |"]), /no table found/);
});
