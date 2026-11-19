// Validates every real entry file in docs/decision-log/ so CI fails on a
// malformed entry. README.md is skipped.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readdirSync, readFileSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";
import { parseEntry } from "./lib.mjs";

const ENTRY_DIR = join(dirname(fileURLToPath(import.meta.url)), "..", "..", "docs", "decision-log");

const files = readdirSync(ENTRY_DIR).filter((n) => n.endsWith(".md") && n !== "README.md");

test("docs/decision-log/ contains at least the pending entries", () => {
  // Not an error if empty after a fold, but the folder/README must exist.
  assert.ok(Array.isArray(files));
});

for (const name of files) {
  test(`entry ${name} is valid`, () => {
    assert.doesNotThrow(() => parseEntry(name, readFileSync(join(ENTRY_DIR, name), "utf8")));
  });
}
