# Old write-ups: completeness and accuracy review

A check of Jon's older portfolio write-ups against what the repo already knows: the employment table, the resume claims, the old site pages and the existing material maps. It looks for what's missing and what disagrees, so the write-ups can be trusted if they're ever used.

**Source:** Google Drive write-ups, received 2026-11-27 (`.docx`, converted to plain text). Thirteen in the main folder, five more in a folder named "Depreciated".

**Unjudged; gaps are questions, not verdicts.** Nothing here says whether a project belongs in the portfolio. Length and empty sections show only what hasn't been written yet.

**Checked against**

- `docs/catalog.md`: the *Employment (authoritative)* table and *Conflicts and unknowns*.
- Resume claims: "40+ e-commerce builds on Shopify and SFCC for Stanley, Dickies, Better Trail, and Bassett" (Elva); "5-10% conversion growth across discovery and checkout for Stanley, L.L.Bean, and Dickies" (summary); "5 to 10% conversion growth across 10+ brands" (Pixelmedia).
- Old site pages: `src/previous case studies/*.php`. The copies in `jon-morris.com/work/` are byte-identical (checked for all 15 pages used here). Where it adds a year or duration, `jon-morris.com/zz work pre 2025 backup/*.php` is also cited, as **backup**.
- `src/projects/*.md` (the new site), `jon-morris.com/includes/project-listing.php` (**listing**), and the material maps `better-trail.md` and `dickies.md`.
- Placeholder text on `dickies.php`, `fidelity.php` and `nasm.php` is ignored, as Jon asked.

**Conventions**

- **Titles.** "Lead", "Lead UX Designer" or "UX/UI Designer" in a write-up describes the project role, not the job title (catalog convention). Where a stated role differs from the employment table it's flagged as *title (convention)* and counted separately, as "+1 title". It's probably not an error.
- **Employer.** Assigned from the employment table by year. Agency work not labelled Elva is most likely Pixelmedia. Where no year is given, the employer is marked *inferred* or `[[?]]`.
- **File dates.** The `.docx` last-modified dates are Aug 2024 – Mar 2025 for the main folder, Jan 2021 for Sporting Life and Jan 2021 for all five "Depreciated" files. These are a weak hint at when each was written, nothing more.

---

## Summary

Template columns: **O** Opening · **R** Role & scope · **C** Confidentiality note · **P** Problem · **K** Constraints · **D** Design decisions (with rejected options) · **Out** Outcome (incl. what didn't move) · **W** What I'd do differently. ✓ = some material exists for the section, however brief; – = none.

| Write-up | Client / employer (per employment table) | Year stated | Role stated | O | R | C | P | K | D | Out | W | # conflicts | # open questions |
|---|---|---|---|---|---|---|---|---|---|---|---|---|---|
| Bassett Furniture | Bassett / Elva | 2022 | Senior UX Designer | ✓ | ✓ | – | ✓ | – | ✓ | ✓ | – | 1 | 6 |
| Better Trail | Better Trail / Elva | 2024 | Senior UX Designer | ✓ | ✓ | – | ✓ | – | ✓ | – | – | 2 | 6 |
| Coola | Coola / `[[?]]` (no year) | – | Lead UX Designer | – | ✓ | – | – | – | – | – | – | 0 (+1 title) | 4 |
| Dickies | Dickies / Elva | – | – | – | – | – | – | – | – | – | – | 1 | 3 |
| ELF My Skin | E.L.F. Cosmetics / Elva | 2024 | Senior UX Designer | ✓ | ✓ | – | ✓ | – | – | ✓ | – | 2 | 6 |
| L.L.Bean for Business | L.L.Bean / Pixelmedia | 2020 | UX/UI Designer | ✓ | ✓ | – | ✓ | – | ✓ | ✓ | – | 2 (+1 title) | 7 |
| Red Wing Shoes (RWS) | Red Wing Shoes / Pixelmedia (no year; resume) | – | Lead UX/UI Designer | ✓ | ✓ | – | ✓ | ✓ | ✓ | ✓ | – | 1 (+1 title) | 7 |
| Roofnest | Roofnest / `[[?]]` (no year) | – | Lead UX Designer | – | ✓ | – | ✓ | – | – | ✓ | – | 2 (+1 title) | 5 |
| Sporting Life | Sporting Life / Pixelmedia (inferred) | – | "I led the redesign" | ✓ | ✓ | – | ✓ | – | – | – | – | 1 | 5 |
| Stanley | Stanley / Elva | 2023 | Senior UX Designer | ✓ | ✓ | – | ✓ | ✓ | ✓ | ✓ | – | 1 | 6 |
| The Company Store | The Company Store / Elva | 2023 | Senior UX Designer (UX Lead) | ✓ | ✓ | – | ✓ | ✓ | ✓ | ✓ | – | 3 | 7 |
| American Tourister *(Depreciated)* | Samsonite / Pixelmedia (inferred) | – | – | ✓ | – | – | – | – | – | – | – | 1 | 4 |
| Community Playthings *(Depreciated)* | Community Playthings / Pixelmedia (inferred) | – | – (placeholder) | ✓ | – | – | ✓ | – | – | – | – | 0 | 4 |
| NIC+ZOE *(Depreciated)* | NIC+ZOE / Pixelmedia (inferred) | – | – (placeholder) | ✓ | – | – | ✓ | – | – | ✓ | – | 0 | 4 |
| PXG *(Depreciated)* | PXG / Pixelmedia (inferred) | – | "I… led the exploration" | ✓ | ✓ | – | ✓ | ✓ | – | – | – | 2 | 5 |
| Vince *(Depreciated)* | Vince / Pixelmedia (inferred) | – | – | ✓ | – | – | ✓ | – | – | – | – | 1 | 5 |

Not in the table: *Portfolio Write Up Template* (Jon's own older template) and *PIP MITC User Study* (a test plan for The Company Store). Each has its own section at the end.

**No metric appears in any of the write-ups.** The resume's conversion figures (5–10% for Stanley, L.L.Bean and Dickies) and the AOV claims on the old Company Store page and in the Stanley listing aren't supported by any write-up. See each *Unsupported claims*.

---

## Bassett Furniture

**What it says**

- Title "Bringing The In-Store Custom Design Experience Online". The main question: how to bring Bassett's in-person, designer-led sales experience online so it "rival[s] that experience in ease of use and fun".
- 2022 redesign and replatform of the site to Salesforce Commerce Cloud. This write-up covers only the product customization part.
- Senior UX Designer; team: Senior UI Designer, UI Designer; 8 weeks; skills Figma, research, wireframing, prototyping. Links the live site.
- Goals: include all design options, easy to use, increase conversion.
- Jon audited the current site and PDP and ran a competitive audit of competitors and other sites with product customizers, cataloguing terminology.
- Two options: a stand-alone configurator (flexible, but takes users off the PDP and feels empty for products with few options) vs options inside the PDP (stays where users expect to configure, but less room). In-PDP was chosen.
- Retrospective: "Bassett has found this solution to be a very successful one".

**Accuracy flags**

1. **Navigation and taxonomy claim: which client?** `bassett.php`'s Final Design paragraph says "I also redesigned their navigation and taxonomy and oversaw UX improvements…". The write-up doesn't mention it. The same sentence was copied into the placeholder `dickies.php`, and Dickies has a separate navigation project (Jon, `dickies.md`). It's unclear whether this sentence is true of Bassett, of Dickies, or of both.

Consistent: year 2022, 8 weeks, role and team all match backup `bassett.php` ("Senior UX Designer (UX Lead)", "2022 - 8 Weeks"). SFCC matches the resume's "Shopify and SFCC" for Bassett. 2022 falls inside the Elva dates.

**Unsupported claims**

- "Bassett has found this solution to be a very successful one": no source, figure or baseline. "Increase Conversion" is a stated goal, but no result is reported against it.

**Gaps vs template**

- No confidentiality note.
- Constraints: only a passing "achievable within the overall project scope and timeline".
- Outcome: no evidence, no definition of success, nothing on what didn't move.
- What I'd do differently: the Retrospective repeats the outcome.
- The "Client Brief" paragraph is word for word the same as "Outcome", so there is no separate brief text.
- Final designs and "Final Wireframe" are image placeholders only.

**Questions for Jon**

1. Did you redesign Bassett's navigation and taxonomy, or does that line belong to Dickies?
2. What told you the configurator was "very successful": client feedback, analytics, conversion on configurable products?
3. Was conversion measured against the old PDP? Any direction, even a relative one?
4. Does the 8 weeks cover only the configurator, or your whole part in the replatform?
5. Why was the stand-alone option rejected in the end: user testing, client preference, dev effort? The old page's heading "The Stand-Alone Experience Was Feeling Complicated" hints at a reason.
6. Is the configurator still live as designed?

**Differences from the old site page** (`bassett.php`)

- The old page has more Client Brief detail: colour ranges from "a handful" to "10s of options", and a different mix of option types per product, so the system had to be "consistent yet also flexible".
- The old page says ideation used "Bassett's actual product data" and gives benefit/tradeoff pairs for each option.
- On the old page, "Project Overview" and "My Role" are "This is a paragraph." placeholders. Every image alt text reads "Better Trail Gear Guide Product Card" (also a placeholder). The write-up fills role, team, duration and year.

---

## Better Trail

**What it says**

- Title "Building Better Gear Reviews"; subtitle about a new gear review site that wanted "a unique presentation for reviews".
- Senior UX Designer; team: UI Designer, Project Manager, various developers; 12 weeks; 2024.
- Better Trail's veterans bring testing and in-depth reviews "to a market full of subpar affiliate marketing link farms". Jon "helped direct the site's experience to build trust".
- Homepage: a hero carousel built to best practice (pauses on hover, visible controls, time to read), plus reusable, flexible content components for the people updating the site.
- Gear Guides: a "top 10"-style listicle improved. A product summary at the top with links to reviews and affiliate shopping links, a stack of product cards (evaluation, ratings, overall score, stats), a side-by-side comparison tool, then a long-form article.
- Individual reviews: the same stats and scores repeated for consistency, in a PDP-like layout (gallery left, details right).
- The section skeleton (Opportunity, Outcome, Client Brief, Competitive Audit, Ideation, Solution, Retrospective) is empty. A "Keep in mind" note lists User Research, Target User, UX Audit, Competitive Analysis.

**Accuracy flags**

1. **Team partner's title.** "UI Designer" here and on `nasm.php`; "Visual Designer" on `better-trail.php`; "Senior Visual Designer" in the listing. Already catalog #12.
2. **"E-commerce build"?** The resume counts Better Trail among "40+ e-commerce builds on Shopify and SFCC". This write-up and every other source describe a gear-review site that earns through affiliate links, and none names a platform.

Consistent: 2024 and Senior UX Designer match the resolved catalog entries and Elva's dates.

**Unsupported claims**

- "We brought trust, legitimacy, and a thoughtful experience to their users": no evidence given. (The old pages' "high user retention and positive feedback" claim isn't repeated here; it's unsupported there too.)

**Gaps vs template**

- Every skeleton heading is empty. The prose covers the three templates only.
- Problem: one line about the market. Nothing on users' needs or the business case.
- No constraints, no rejected options (the old pages have type-first vs activity-first navigation), no outcome, no confidentiality note, nothing on what to do differently.

**Questions for Jon**

1. Does the 12 weeks cover kickoff to launch? (`better-trail.md` lists the engagement length as open; this answers it if so.)
2. What platform was the site built on? Should it count among the resume's "e-commerce builds on Shopify and SFCC"?
3. UI Designer, Visual Designer or Senior Visual Designer: which title did your partner have?
4. Was the homepage carousel your call or the client's? Did you argue for or against having a carousel at all?
5. The "Keep in mind" list names User Research and Target User. Was any user research done, and by whom? (`better-trail.md` raises the same question.)
6. What evidence is there for "trust, legitimacy" landing with users?

**Differences from the old site pages** (`better-trail.php`, `better-trail-new.php`)

- New here: the homepage carousel behaviour (pause on hover, visible controls) and its rationale. On `better-trail-new.php` the "Homepage Hero Carousel" heading carries gear-guide text, and on `better-trail.php` the block is commented out. This write-up gives the homepage the text it lacks.
- New: affiliate shopping links in the gear-guide summary, and the "link farms" framing.
- Missing here but on the old pages: navigation by activity, reading length, "Our Ratings Explained", discovery and handoff, the "sole individual responsible for UX" line.

---

## Coola

**What it says**

- Client Coola; role "Lead UX Designer". Every other field and section is empty (the skeleton from Jon's template).

**Accuracy flags**

- *Title (convention):* "Lead UX Designer" is not a job title in the employment table (Senior UX Designer at Elva, Experience Designer at Pixelmedia). It probably means he led the project.
- No conflicts found. Coola appears only in client lists (`site.json`, `select-clients.php`, `clients-capabilities.php`, `about.php`; catalog line 202). There is no old project page.

**Unsupported claims**

- None (no claims).

**Gaps vs template**

- All eight sections are absent; only the role is filled.

**Questions for Jon**

1. Which year, and so which employer: Elva or Pixelmedia?
2. What was the project: a full redesign, a feature, an audit?
3. Team and duration?
4. Is there any other material (Figma, deck, live-site screenshots)?

---

## Dickies

**What it says**

- Empty skeleton: "Dickies" at the top, every field blank.

**Accuracy flags**

1. **Wrong client heading.** The brand section is headed "E.L.F. Cosmetics:", carried over from the E.L.F. write-up or a shared draft. There is no Dickies content under it.

The old `dickies.php` body is placeholder Bassett text, which Jon said to ignore. Its metadata (backup: "2023 - 12 Weeks", "Senior UX Designer (UX Lead)", team "UI Director") can't be checked against this write-up because there's nothing to compare.

**Unsupported claims**

- None in the write-up. The resume's "5-10% conversion growth… for… Dickies" has no supporting source in any write-up or page.

**Gaps vs template**

- All eight sections are absent. The open questions in `dickies.md` (one case study or three; site redesign → nav → size guide) still stand.

**Questions for Jon**

1. Where does the Dickies part of the resume's 5–10% conversion figure come from, and which project (redesign, nav, size guide) does it belong to?
2. Was this write-up meant to be the size guide, the navigation work, or the whole relationship?
3. Did you mean to delete the "E.L.F. Cosmetics" heading, or was it a placeholder for the brand paragraph?

---

## ELF My Skin

**What it says**

- Title "Find Your Foundation"; subtitle "ELF's AI Driven Foundation Shade Finder Needed to be Clean".
- Senior UX Designer; team: Senior UI Designer, UI Designer; 6 weeks; 2024.
- Problem (in the client's voice): new tech suggests products from a user's actual skin tone. How do you get people to hold the phone in the right spot for an accurate reading?
- Outcome: an app experience that onboards users quickly to the capture and suggests matching E.L.F. products.
- Client: "We've worked with them for a few years designing their ecommerce and mobile app experiences."
- Brief: "Make it easy and fun". The early prototypes were clunky, the alignment unclear, and the phone position awkward.
- Competitive analysis of similar apps: instructions, clunkiness, how results are shown. Ideation and solution sections are empty.

**Accuracy flags**

1. **Year.** 2024 here and on backup `elf-my-skin.php`; 2023 in the catalog, `src/projects/elf-foundation-finder.md` and the listing.
2. **Team.** Here: "Senior UI Designer, UI Designer". Backup: "UI Designer, UI Designer". `elf-my-skin.php` and the md: "Design Director, Visual Designer, and the 3rd party developers".

Consistent: Senior UX Designer; Elva is supported by "worked with them for a few years" (an agency relationship within Aug 2021 – Aug 2024). E.L.F. isn't named on the resume, so the employer rests on the year.

**Unsupported claims**

- None in the write-up. (The new-site md summary says the work "improved confidence in shade selection"; no evidence is given there either.)

**Gaps vs template**

- No design decisions written (Ideation and Solution 1/2 are empty).
- No constraints section, although the brief's technical limits (capture quality, phone position) are there as raw material.
- Outcome is one sentence with no evidence. No confidentiality note. Nothing on what to do differently.
- "What is working? / What is not working? / What could be enhanced?" are unanswered prompts.

**Questions for Jon**

1. 2023 or 2024? (Or did it span both: a stand-alone version, then the in-app version?)
2. Does the 6 weeks cover both versions or only one?
3. Who was on the design team: a Design Director and a Visual Designer, or a Senior UI and a UI Designer?
4. Did the in-app version ship, and is it still live?
5. Is there anything from the third-party developer's in-person testing you can cite: how many people, and what changed?
6. Is there anything you can't show: the AI vendor's name, confidence-score details, unreleased screens?

**Differences from the old site page** (`elf-my-skin.php`)

- The old page is much fuller. It has the two versions (stand-alone for testing, then in-app), journey mapping, the onboarding pivot after testing, alignment options (Face ID-style, a dexterity game, all parameters at once), the stepped one-parameter-at-a-time choice, results bracketed with a lighter and darker shade, saved results, and in-person testing by the tech team.
- New here: the "Make it easy and fun" brief, the early prototypes' specific failures, and the multi-year E.L.F. relationship covering ecommerce and app work.

---

## L.L.Bean for Business

**What it says**

- Title "Optimizing Bulk Ordering and Custom Embroidery for Users". Main question: help bulk buyers of uniforms and branded gear finish the task faster.
- UX/UI Designer; team: UX Designer, Senior UI Designer; 12 weeks; 2020. Links the live site.
- Opportunity: an outdated site; bulk ordering that didn't show what was in stock or sold out; a need for better embroidery-file management.
- Brief: a refresh to match the parent brand, plus the unique complexity of ordering and embroidery.
- Audit of the current site. Ideation questions: men's and women's in one order, stock and backorder display, embroidery file control and live preview.
- Three options: (1) improve the existing table (clunky, hard to make responsive, pushed size selection down); (2) size tiles covering men's and women's (better, still too big, below the images); (3) smaller tiles fitted into the buy stack. A custom cart design is mentioned with no detail.
- Retrospective: "a wild improvement from the previous one… more responsive, more minimal".

**Accuracy flags**

- *Title (convention):* "UX/UI Designer" vs Experience Designer (Pixelmedia, Apr 2018 – Jul 2021). The year 2020 fits Pixelmedia.

1. **Who did UX?** The team lists a "UX Designer" (backup `llbean.php` lists only "UX Designer"). `llbean.php` says "As the UX/UI Designer, I led project discovery, research, and strategy… wireframing, prototyping, UI design". If a separate UX Designer was on the team, what did each of you own?
2. **Which direction won?** `llbean.php` says Jon tried two paths and "optimizing an experience similar to the existing one seemed the most promising… keeping a similar multi-field structure". The write-up describes moving *away* from the table to size tiles. These may describe the same end point in different words, or they may conflict.

**Unsupported claims**

- "A wild improvement" and "enhancing the brand perception": no evidence or baseline.
- **Resume:** "5-10% conversion growth across discovery and checkout for… L.L.Bean". Neither this write-up nor `llbean.php` reports a metric; the old page's Results section is "This is a paragraph".

**Gaps vs template**

- No constraints in the write-up (the old page has timeline/budget, an unusual use case and non-technical stakeholders).
- Outcome without evidence. No confidentiality note. The Retrospective restates the outcome.
- The custom cart section has a heading only.
- An unfinished sentence ("We wondered if bulk ordering the best way to handle the") and a typo ("meantPor").
- The "Ideation" and "Early Ideas" lists are identical.

**Questions for Jon**

1. Where does the resume's L.L.Bean conversion figure come from: discovery, checkout, which metric and period?
2. What did the separate "UX Designer" on the team do, versus you?
3. Is the final PDP an evolution of the old multi-field table (old page) or a break from it (write-up)?
4. Did the logo upload and preview feature ship? It's on the old page but only a question here.
5. Was the CSV upload cut for good (old page: cut for timeline/budget)?
6. "The number of projects" in the stock question: should that be "products"?
7. Is the client quote placeholder on the old page waiting for a real quote you have?

**Differences from the old site page** (`llbean.php`)

- The old page has more: discovery with the client's customer service and sales teams; a competitive finding (no competitor had a comparable bulk-ordering method); the logo management system (guest preview, approval for embroidery, upload limits); the CSV option cut; a reusable content-component system with ADA-safe colour themes; homepage concepts; a style guide.
- New here: the three-option PDP progression with reasons for each step.
- The old page dates nothing; the backup gives "2020 - 12 Weeks", which matches.

---

## Red Wing Shoes (RWS)

**What it says**

- Title "Bringing Brands Together". Replatform and redesign of four brand sites, folding Red Wing Heritage (lifestyle) into the core Red Wing Shoes (work) site.
- Lead UX/UI Designer; team: 1 UI Designer; 12 weeks; no year.
- Problem: four brands needing a refresh, and a self-imposed rule that work customers be fitted in store. Red Wing feared that a lifestyle boot bought for a job site, followed by an injury, would hurt its reputation.
- Competitive analysis: splitting lifestyle and work across two sites, and blocking online purchase of featured products, were both unusual.
- Recommendations: combine Work and Heritage into one site (less internal effort, less customer confusion, cross-selling); build a common framework across all brand sites to cut dev cost and technical debt.
- Outcome (intro): less confusion between similarly named sites, cross-merchandising, and one framework for the RWS dev team instead of four. Execution and Retrospective are empty.
- An interviewer's note is embedded: "What were the components of the platform and what did you do specifically?"

**Accuracy flags**

- *Title (convention):* "Lead UX/UI Designer" here; "Lead UI Designer" on `red-wing-shoes.php`; "Lead UX Designer" on `ventures/some rws thing.php`. The job title was Experience Designer at Pixelmedia (catalog #10, resolved).

1. **Team.** The write-up has "1 UI Designer", which implies Jon did the UX. The old page has "UX Designer, Project Manager, Developers", which implies a separate UX Designer and Jon on UI.

**Unsupported claims**

- "Alleviated customer confusion" and "enabled cross-merchandising": stated as results, with no evidence (no sales, search or support data).

**Gaps vs template**

- No year. No confidentiality note.
- Design decisions are recommendations at the strategy level; the screen-level decisions are absent (Execution is empty).
- Outcome without evidence. Nothing on what to do differently.
- The four brands aren't named here (the catalog lists Red Wing Shoes, Red Wing Heritage, Irish Setter, Vasque).

**Questions for Jon**

1. Which year(s)? Was it all at Pixelmedia?
2. Was there a separate UX Designer, or were you the UX lead with one UI Designer?
3. The write-up says "possibly change platforms": which platform did it end up on (the catalog says SFCC)?
4. Did the 12 weeks cover all four sites, or only the core Red Wing site?
5. What happened to the in-store fitting rule: did online purchase of work boots open up?
6. Any evidence the merge reduced confusion or raised cross-sell?
7. What did you personally do on the platform and its components (the interviewer's question)?

**Differences from the old site page** (`red-wing-shoes.php`)

- On the old page, Problem and Outcome have identical text, and Client Brief, Opportunity, Ideation, Solution 1/2 and Outcomes all repeat the intro paragraph (placeholder fill).
- New here: the in-store fitting rule, the reputational reason behind it, the competitive finding, and both recommendations with their reasoning.

---

## Roofnest

**What it says**

- No title. Lead UX Designer; team: 1 Lead UI Designer, 1 UI Designer; 12 weeks; no year.
- Problem: a site needing a refresh, for an expensive product with a specific use case. Improve how the product is described, and help users be sure it fits their vehicle.
- Outcome: redesigned site, better catalog taxonomy and wayfinding, and enhancements so users can buy a tent "more confidently".
- Every other section is empty.

**Accuracy flags**

- *Title (convention):* "Lead UX Designer" here vs "Senior UX Designer" on `roofnest.php`. Senior UX Designer points to Elva (Aug 2021 – Aug 2024).

1. **Team.** "1 Lead UI Designer, 1 UI Designer" (write-up) vs "UI Designer, Project Manager, Developers" (`roofnest.php`).
2. **Old page captions look borrowed.** `roofnest.php` captions its images "Homepage", "Gear Guide" and "Individual Product Review", the same three templates as Better Trail. This is likely placeholder content like the three pages Jon already named, but it isn't on that list.

**Unsupported claims**

- "Purchase a tent more confidently": no evidence.

**Gaps vs template**

- No title, opening, constraints, decisions, confidentiality note or what to do differently. Problem and Outcome are a sentence each.

**Questions for Jon**

1. Which year, and was it at Elva?
2. Are the "Gear Guide / Individual Product Review" captions on `roofnest.php` placeholders from Better Trail?
3. What were the "several enhancements" for buying confidently, for example a vehicle-fit checker?
4. Who was on the team: a Lead UI and a UI Designer, or a UI Designer, PM and developers?
5. Is any Roofnest design material left (old page title "Upgraded Camping")?

---

## Sporting Life

**What it says**

- A high-end sporting goods and fashion retailer based in Toronto. Replatformed onto SFCC; "at the same time I led the redesign of their site".
- The old site looked like a generic sporting goods retailer; the redesign set out to represent their higher-end assortment and brand.
- An interviewer's questions are embedded: workshop or personas? mock-ups with pros and cons? navigation? carousel? copy edits?

**Accuracy flags**

1. **"I led the redesign" vs the old page's role.** `sporting-life.php` lists Jon as "UI Designer" on a team with a Senior UI Designer, another UI Designer and a Senior UX Designer. Leading the redesign while those seniors were on the team needs explaining. It may be the project-role convention.

Note: "Toronto, CA" here, "Toronto, Canada" on the old page. CA can be misread as California. The file date (Jan 2021) fits the Pixelmedia era (catalog #4).

**Unsupported claims**

- None (no outcome claimed).

**Gaps vs template**

- Only an opening paragraph and a one-line problem. No role detail beyond "led", and no year, team, duration, decisions, outcome or retrospective.

**Questions for Jon**

1. Which year? Was it at Pixelmedia?
2. What did "led the redesign" mean in practice, given the team on the old page?
3. Which of the interviewer's questions can you answer: workshop, navigation, carousel, copy?
4. What did "higher-end" translate to in the design (photography, type, layout)?
5. Is there any evidence of the outcome (brand perception, conversion after relaunch)?

**Differences from the old site page** (`sporting-life.php`)

- Almost identical text. The old page adds the role and team and the "Premium Site to Match a Premium Brand" title; it has image captions only.

---

## Stanley

**What it says**

- Title "Big Cup Colors". Senior UX Designer; team: Senior UI Designer; 12 weeks; 2023. Links the live site.
- Opportunity: a redesigned ecommerce experience for short- and long-term goals "while not jeopardizing this recent explosion in popularity".
- Outcome: a new ecommerce experience brought "to marketing" (possibly meant "to market"), enabling future strategic goals and custom ways to merchandise hot products.
- "The Short Version": many products and colours; some year-round, some limited or seasonal; engraving available on some colours only.
- Decision: a filter inside the colour selector, so users can narrow by colour category while seeing the full range. It also lets Stanley flag which colours are customizable, seasonal or limited.
- The skeleton sections (Client Brief, Competitive Audit, Ideation, Solution 1/2, Retrospective) are empty; the brand paragraph breaks off mid-sentence.

**Accuracy flags**

1. **Borrowed caption on the old page.** `stanley.php` captions an image "Logo Upload Flow", an L.L.Bean for Business feature (catalog #25).

Consistent: 2023 matches the listing; the role matches; the team is compatible ("Senior UI Designer" vs "Senior UI Designer, Project Manager, Developers"). Stanley is a named Elva client on the resume.

**Unsupported claims**

- None in the write-up.
- **Resume:** "5-10% conversion growth… for Stanley". The listing summary also says the redesign "increased conversion, and supported higher average order value". No write-up or page gives a figure, source or baseline.

**Gaps vs template**

- No rejected options for the colour selector (Solution 1/2 empty). No outcome evidence. No confidentiality note. Nothing on what to do differently.
- Constraints only implied (protect the popularity surge; engraving on some colours only).

**Questions for Jon**

1. Where does Stanley's conversion figure come from: which metric, which period, and was it the colour filter or the redesign as a whole?
2. What other ways of showing colours did you consider before the in-selector filter?
3. Is the case study the colour selector alone, or the wider redesign (taxonomy, weekly launch cadence: old page)?
4. "Brought… to marketing": did you mean "to market"?
5. Is the colour filter still live on stanley1913.com?
6. Was the platform Shopify or SFCC (the resume says both are in the 40+ builds)?

**Differences from the old site page** (`stanley.php`)

- The old page frames the redesign around catalog taxonomy, findability, new categories, and a launch cadence of one new product a week plus limited editions, with colour stories as one goal. The write-up narrows to the colour selector.
- The old page's Results section is empty.

---

## The Company Store

**What it says**

- Title "Enabling Users To Build Their Own Sheet Sets". This is one part of a wider audit-and-optimize engagement.
- Senior UX Designer (UX Lead); team: UX Director, Senior UI Designer; 12 weeks; 2023. Links the live site.
- Brief: integrated into the PDP, minimal; mix and match products, sizes and colours within a collection. The previous out-of-the-box solution felt "large, clunky, and unpolished". Goals: increase AOV, improve UX, clean simple design, don't disrupt the PDP.
- Previous solution: a product grid with size and colour selection, placed so it felt disconnected from the main product.
- Competitive audit, then three options in wireframes and prototypes: (1) improve the existing low-on-page module (simplest to build, risk of being missed); (2) move it up near the base product's options (tighter, but easier to find); (3) a separate "product set" template (more room, but off the PDP).
- The client chose to test 1 vs 2. An unmoderated test on Usertesting.com, desktop and mobile, found both worked and users "generally preferred option 2".
- Iteration on 2: product thumbnails added; "edit mode" replaced by dropdowns on each card. Retrospective: successful for "performance and client satisfaction"; the client called the requirements "intricate".

**Accuracy flags**

1. **Duration.** 12 weeks here; 8 weeks on backup `the-company-store.php`.
2. **Team.** "UX Director, Senior UI Designer" (write-up and backup) vs "a Senior Visual Designer, Developers, and a PM" (`the-company-store.php`, `src/projects/the-company-store.md`).
3. **What the control was.** The write-up says option 1, "take the existing solution and improve upon it", was tested against option 2. `the-company-store.php` says the test "used a previous solution TCS had tried as a control". Was the control the unchanged previous solution or an improved version of it?

Consistent: 2023 and Senior UX Designer (UX Lead) match the listing and backup. This answers the year left open in catalog #11. The PIP MITC study (below) confirms an unmoderated, two-prototype, desktop-and-mobile test on Usertesting.com.

**Unsupported claims**

- "A successful solution from… a performance… perspective": no metric.
- The old page goes further, with no figure or source: "an increase in AOV across the bedding category", "outperformed its previous iterations in every way", "high user engagement and positive feedback from a customer service perspective".
- "Our research and user testing confirmed users would adopt this feature": a 10-person usability test shows the design was usable and preferred, not adoption.

**Gaps vs template**

- No confidentiality note.
- Outcome has no figures and no definition of success, and says nothing on what didn't move.
- What I'd do differently: the write-up's Retrospective is a summary. (The old page has three real takeaways; see below.)
- Image placeholders "[Show changes post testing]" and "[Show final result? What Else?]" are unfilled.

**Questions for Jon**

1. Where does "increase in AOV across the bedding category" come from: the client's analytics, an A/B test, a quarter-on-quarter comparison? Can you give a relative figure?
2. 8 weeks or 12?
3. Who was on the team: a UX Director and Senior UI Designer, or a Senior Visual Designer, PM and developers (or all of them)?
4. Was the test's control the unchanged previous module or an improved version of it?
5. Are the usability results written up anywhere (summary, ease scores, desktop vs mobile differences)? The study file has the plan and script only.
6. Which iteration changes shipped: thumbnails and dropdowns (write-up), checkmark, swatches, stock messaging and subtotal (old page), or all of them?
7. Is the component still live, and under what name ("Shop the Collection", "Complete the Set", "More in This Collection")?

**Differences from the old site page** (`the-company-store.php`)

- The old page has a user-research finding (people open multiple tabs and aren't sure products go together), the client's strong preference for the middle option, and the fact that it was mostly custom work.
- It also has different iteration details: a checkmark for added items, colour swatches in the dropdown, stock messaging, a subtotal.
- It has three takeaways that would fill *What I'd do differently*: more discovery early on, tighter self-contained presentations, and testing technical constraints earlier.
- Project goals are worded differently but match ("Reduce User Workload", "Avoid Negatively Impacting PDP Metrics").
- New here: option 3 (the separate "product set" template) described in full, the client's "intricate" remark, the out-of-the-box previous solution, and the dropdowns-instead-of-edit-mode change.

---

## Depreciated write-ups

These five were filed in a folder named "Depreciated". All five files are dated Jan 2021, which fits Pixelmedia. Each is two short paragraphs, and most contain an editor's or interviewer's bracketed questions or "My role was…" placeholders. Each has an old-site page with almost the same text plus role and team.

### American Tourister

**What it says:** Samsonite's younger, more colourful luggage brand. A redesign onto a new platform inside the design framework already built for Samsonite and High Sierra. Jon "worked with the Samsonite team" to bring its vibrant style across. An editor's questions are embedded (who on the Samsonite team, what technology, your contribution, wireframes or mock-ups, decision-making).

**Accuracy flags**

1. On `american-tourister.php` every image alt text reads "sporting life website…", copied from another page. The captions (Homepage, PLP, PDP, Cart) look right.

**Unsupported claims:** none.

**Gaps vs template:** an opening only. No role, year, problem, decisions or outcome (the editor's questions mark exactly these).

**Questions for Jon**

1. Which year, and which platform?
2. Your part, given the team on the old page (Senior UI Designer, UX Designer, PM, developers): UI for all templates, or some of them?
3. Did you work on the Samsonite and High Sierra framework itself, or only on American Tourister?
4. Should Samsonite and High Sierra be credited as separate projects (catalog lines 204, 209)?

**Differences from the old site page:** the old page adds the role (UI Designer), brand (Samsonite) and team. The text is otherwise the same (the old page fixes "stylist" → "stylish").

### Community Playthings

**What it says:** furniture and toys for daycares and schools. Redesign of the US and EU ecommerce sites and "created a learning library" for product and educational content. Goal: better navigation and search. "My role was to … The platform was ..." are left blank.

**Accuracy flags:** none found.

**Unsupported claims:** none.

**Gaps vs template:** an opening and a one-line goal. Role, platform, decisions and outcome are absent.

**Questions for Jon**

1. Which year?
2. Did you design the Learning Library from scratch, or redesign an existing content site?
3. Which platform?
4. What changed in navigation and search, and is there any evidence it helped?

**Differences from the old site page:** `community-playthings.php` fills the role ("re-design their E-commerce site and content site from both a visual and functional perspective"; UI Designer, with a Senior UI Designer and Senior UX Designer on the team). It also has a "CCI EU Homepage" caption.

### NIC+ZOE

**What it says:** a women's fashion brand; an elevated ecommerce redesign for loyal customers, with content components for a new brand direction. "Led by a mother and daughter duo". "We successfully helped them integrate their new brand direction". "My role, etc. the platform was, etc." are left blank.

**Accuracy flags:** none against repo sources.

**Unsupported claims**

- "Successfully helped": no evidence.
- "Led by a mother and daughter duo" is a fact about the company that this review hasn't verified. It isn't on the old page.

**Gaps vs template:** an opening and a goal. Role, platform, decisions and outcome are absent.

**Questions for Jon**

1. Which year and platform?
2. Is the "mother and daughter duo" description accurate as of the project?
3. What were the content components, and did you define the system or apply it?
4. Your part next to the Senior UI and Senior UX Designers on the old page's team?

**Differences from the old site page:** `nic+zoe.php` keeps the first two sentences, drops the "mother and daughter" and "inspire women" lines, and adds the role (UI Designer) and team. Its captions include Cart and Account Dashboard.

### PXG

**What it says:** a high-end golf club maker that sells only custom clubs, so the configurator was central. Owner Bob Parsons (founder of GoDaddy) is mentioned. Jon worked to update the web style guide and "led the exploration" of ordering that is simple for newcomers and precise for seasoned golfers. "(new platform name)" is left blank.

**Accuracy flags**

1. **"Led the exploration" vs the old page's role.** `pxg.php`: "UI Designer", with a "UX Designer" on the team. Who led the configurator UX?
2. **Company name.** `pxg.php`'s heading reads "Parson's Extreme Golf"; the catalog has "Parsons Xtreme Golf". The old page's spelling looks wrong.

**Unsupported claims:** none (no outcome claimed).

**Gaps vs template:** opening, problem and constraints (custom-only, complex ordering system, established brand). No year, platform, decisions or outcome.

**Questions for Jon**

1. Which year and platform?
2. Did you lead the configurator UX, or design its UI to a UX Designer's flows?
3. Which configurator decisions do you remember (step order, how fittings are handled, defaults for newcomers)?
4. The old page adds "a new set of custom content templates". Were those yours?
5. Is the Bob Parsons aside worth keeping, given it's about the owner and not the work?

**Differences from the old site page:** `pxg.php` adds content templates, role and team, and the Fitting/Store Locator template.

### Vince

**What it says:** a high-end apparel brand whose checkout didn't match its product. The cart and checkout were revamped visually and for UX; "updated it to current SFCC standards"; "brought them up to proper ADA compliance". An editor's questions are embedded (Vince Unfold, what was bad, how it changed, platform, why ADA).

**Accuracy flags**

1. On `vince.php` every image alt text reads "sporting life website…" (copied). The captions look right.

**Unsupported claims**

- "Brought them up to proper ADA compliance": an absolute compliance claim with no audit, standard (WCAG level) or test cited. The old page says only "from a… ADA perspective".

**Gaps vs template:** an opening and a problem. No role, year, decisions or outcome.

**Questions for Jon**

1. Which year?
2. Was compliance verified (an audit, WCAG AA testing), or was the work done to ADA guidelines?
3. Did you design Vince Unfold (the editor's question)?
4. What specifically was wrong with the old checkout, and what changed?
5. Your role next to the Senior UI and Senior UX Designers on the old page's team?

**Differences from the old site page:** `vince.php` drops "SFCC standards" and "proper ADA compliance", softening the claim. It adds the role (UI Designer), the team, and a "Previous Site" image.

---

## Portfolio Write Up Template (Jon's older template)

**What it is.** Two parts in one file.

1. **A skeleton with style notes.** Notes: easy to scan; impact-inclusive project title; scannable intro; section headers that tell a story; high-quality visuals with captions. Fields: Title, Client, Role, Team, Timeline, Year (with a "?"). Sections: Opportunity, Outcome, Client Overview, Project Overview, Opportunity (again), Competitive Analysis, Ideation, Solution 1, Solution 2, (Usability Testing), (Iteration), Retrospective. The Coola, Dickies, ELF, Roofnest and Stanley write-ups use this skeleton directly.
2. **A seven-part guide.** Overview; Problem Statement; Users and Audience; Roles and Responsibilities; Scope and Constraints; The Working Process and Actions Taken ("step-by-step… and why"); Outcomes and Takeaways (results, goals achieved, lessons, experience). The generic wording suggests it was pasted from an outside guide.

**What Jon's version asks for that the current template doesn't**

- **Client Overview** as its own section. The current template has `client` in the frontmatter only.
- **Users and Audience** as its own section. The current template covers users inside *Problem*.
- **Team and Timeline** as snapshot fields. The current frontmatter has year, role, client, skills and link; team and dates go in *Role & scope* prose.
- **Process sections in order:** Competitive Analysis, Ideation, then "step-by-step" actions. The current template says to give just enough process to explain the constraints, and lists "a tour of the standard process" as a mistake.
- **A fixed Solution 1 / Solution 2 pair.** The current template has no set number of decisions.
- **Optional Usability Testing and Iteration** sections. The current template folds these into *Design decisions* and *Outcome*.
- **"Opportunity" and "Outcome" up front as a pair.** The current *Opening* covers the same ground in one or two sentences.
- **"Lessons learned / experience gained"** inside the outcome.

**What the current template asks for that Jon's version doesn't**

- A **confidentiality note**.
- For each decision, **the rejected options, what was lost, and where you pushed back**. Jon's has "Solution 1 / 2" but doesn't ask why one lost.
- **How you knew the problem was real**, and why it mattered to the business as well as to users.
- In the outcome, **how success was defined and what didn't move**, with the rule never to invent a number.
- **First-person ownership separated from the team's work**, and where your involvement ended.
- A standalone **2–3 line summary**, skills and link in the frontmatter.
- **Captions that say why the image mattered**, not only what it is.
- *What I'd do differently* as its own short section. Jon's has "Retrospective" and "Takeaways", which cover similar ground.

**Shared:** an outcome-led title ("impact inclusive" / "outcome-focused headline"), a scannable opening, constraints (his part 2 only), role and team, and captioned visuals.

---

## PIP MITC User Study

**Which project.** The Company Store's sheet-set builder. The evidence:

- The screener lists The Company Store among the bedding sites testers had visited or bought from.
- Every task is about building a sheet set (flat sheet, pillowcases, duvet cover).
- The design question matches the write-up's: building a set vs adding separate components on one product page.
- It compares two prototypes (A/B) on desktop and mobile through Usertesting.com, as the write-up describes.

"PIP" appears to mean *product information page* (the script says "improve the shopping experience on our product information pages"). "MITC" appears to mean the **"More in This Collection"** module named in the first pre-study question.

**Method (summary)**

- **Key questions:** how easily customers build a set or add separate components to the bag, and whether desktop and mobile differ.
- **Approach:** remote, unmoderated; 10 sessions, 5 desktop and 5 mobile.
- **Platform:** Usertesting.com.
- **Experience tested:** PIP wireframe prototypes, desktop and mobile, two versions (A and B), not fully functional.
- **Testers (one line):** US adults matching the brand's target buyer, screened for recent online bedding purchases from premium retailers or brands. Prior contributors were excluded.
- **Pre-study:** what people expect in "More in This Collection" and in "Complete the Set" sections; how they buy sheets (separates, a set, other); their last sheet-shopping experience.
- **Tasks, for each prototype:** add a flat sheet; add matching pillowcases; complete the set including the duvet cover; add pillowcases in a second colour; swap an out-of-stock component for an in-stock one; confidence that everything was added; what was confusing and what was clear (written); ease of adding everything (rating scale).
- **Post-study:** which version was easier for a single item, which was easier for a set, and which was the better experience overall (each with a spoken reason).

**Key findings.** **The document has none.** It is the test plan and script only: set-up, screener, script, tasks. No results, scores or summary. The only reported findings are elsewhere:

- The write-up: both versions let users build a set, and users "generally preferred option 2" because the whole list was easier to manage in a smaller space.
- `the-company-store.php`: users "were indeed able to easily interact with the new design and most of them also preferred this new style".

Neither source reports the desktop vs mobile comparison, which was one of the two key questions.

**What could serve as evidence for The Company Store case study**

- **Method credibility** (*Design decisions → usability testing*): 10 sessions split evenly by device, a recruited target audience, an A/B comparison with explicit preference questions, and a realistic task set. This is the hard evidence the case study can cite today.
- **The out-of-stock task** (*Design decisions → iteration*): stock state was tested deliberately. The stock messaging added after testing (old page) can be tied back to it if the results support that.
- **Confidence to buy** (*Problem* and *Outcome*): the "Were you confident every item was added to bag?" question maps onto the old page's finding that users weren't confident products would go together, and onto the checkmark added later. It needs the actual answers.
- **Labels** (*Design decisions*): the pre-study asks what users expect from "More in This Collection" vs "Complete the Set"; the write-up's final component is "Shop the Collection". Testers' expectations could explain the naming, if Jon has the results.
- **Preference result** (*Outcome*): "most preferred option 2" is citable as qualitative evidence once the counts are confirmed (for example, how many of 10).

**Questions for Jon (study)**

1. Do you still have the results: session videos, a findings summary, the ease ratings, the A/B preference counts?
2. What did desktop vs mobile show?
3. Which prototype was A and which was B: option 1 (improved existing) and option 2, or the untouched previous module (old page's "control")?
4. Did the "More in This Collection" / "Complete the Set" questions influence the final name?

*Participant-level data, the full screener and participants' words are not reproduced here.*
