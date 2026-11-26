// Builds the site once into a temp directory, then checks the output.
import { test, before, after } from "node:test";
import assert from "node:assert/strict";
import { spawnSync } from "node:child_process";
import { mkdtempSync, readdirSync, readFileSync, rmSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";

const out = mkdtempSync(join(tmpdir(), "site-"));
let build;

before(() => {
  build = spawnSync("npx", ["@11ty/eleventy", `--output=${out}`, "--quiet"], {
    encoding: "utf8",
  });
});

after(() => rmSync(out, { recursive: true, force: true }));

test("the site builds", () => {
  assert.equal(build.status, 0, build.stderr || build.stdout);
});

// Pre-launch only (ADR-0014). Delete this test at launch (#16).
test("pre-launch: every page carries noindex", () => {
  const pages = readdirSync(out, { recursive: true }).filter((f) => f.endsWith(".html"));
  assert.ok(pages.length > 0, "build produced no HTML pages");
  const missing = pages.filter(
    (f) => !readFileSync(join(out, f), "utf8").includes('<meta name="robots" content="noindex">')
  );
  assert.deepEqual(missing, [], `pages without noindex: ${missing.join(", ")}`);
});
