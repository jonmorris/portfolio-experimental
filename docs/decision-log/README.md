# docs/decision-log/

One file per pending decision, each holding exactly one table row for
`docs/DECISION-LOG.md`. Files are named `YYYY-MM-DD-short-name.md` (lowercase,
hyphenated). Separate files never produce merge conflicts the way appending to a
shared table does.

Print the pending entries (validate + list, with a count):

```bash
npm run decision-log
```

Fold them into the log table and delete the files (run on the default branch, in
a commit of its own):

```bash
npm run decision-log -- --fold
```

`README.md` (this file) is always skipped.
