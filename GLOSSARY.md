# Portfolio

A design portfolio and blog: projects in one filterable feed, plus Markdown blog posts, built as a static Eleventy site.

## Language

### Projects

**Project**:
One piece of work, done for a client or for yourself, with its own detail page and a **Card** in the **Feed**.
_Avoid_: Portfolio item, piece

**Work project**:
A **Project** done for a client or employer (`type: work`).
_Avoid_: Client project, professional project

**Side project**:
A **Project** done on your own initiative (`type: side`).
_Avoid_: Personal project

**Feed**:
The single list of every **Project** on `/projects/`, filterable by **Work project** or **Side project**.
_Avoid_: Gallery, grid, archive

**Card**:
A **Project**'s summary in the **Feed**, built from its **Snapshot**.
_Avoid_: Tile, thumbnail

**Snapshot**:
The fixed frontmatter fields every **Project** has (`title`, `name`, `type`, `year`, `role`, `client`, `skills`, `summary`, `cover`).
_Avoid_: Metadata, project data

**Title**:
A **Project**'s outcome-focused headline, for example "Trust and authenticity for adventure gear".

**Name**:
The project's or client's own name, shown as the **Eyebrow**, for example "Better Trail".
_Avoid_: Client name (when used as the heading)

**Eyebrow**:
The small line above a **Project**'s **Title** on its detail page that shows its **Name**.

**Skills**:
Up to five capabilities a **Project** demonstrates.
_Avoid_: Tech, stack, tags

**Case study**:
The written account on a **Project**'s detail page, following the one **Case-study template**. **Work projects** and **Side projects** both have one.
_Avoid_: Using "case study" to mean a **Work project**

**Case-study template**:
The single modular structure every **Case study** follows; **Side projects** switch some blocks off.

**Example**:
A demo page under `src/examples/` that previews the **Case-study template** and stays out of the **Feed**.
_Avoid_: Sample, mock

**Previous case study**:
Material from the earlier portfolio in `src/previous case studies/`, used as reference before writing a new **Case study**.
_Avoid_: Old case study, legacy page

### Blog

**Post**:
A blog entry under `src/posts/`, published at `/blog/<slug>/`.
_Avoid_: Article, entry

**Draft**:
A **Post** kept in the repo but not built, because it sets `permalink: false` and `eleventyExcludeFromCollections: true`.
_Avoid_: Unpublished post, WIP

### Working method

**Design canon**:
The curated references in `DESIGN_INSPIRATION.md` that design decisions are checked against before any generic best practice.
_Avoid_: Inspiration, moodboard

**Running case study**:
`docs/CASE-STUDY.md`, the modular story of building this portfolio itself, kept up to date as the work happens.
_Avoid_: Case study (that means a **Project**'s write-up)
