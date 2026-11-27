# Better Trail: case-study material

Raw material mapped to the template. Unjudged; gaps are questions, not verdicts.

**Template:** `docs/case-study-template.md` (type: work)

**Sources**

- `src/projects/better-trail.md`: current portfolio page (Eleventy markdown)
- `src/previous case studies/better-trail.php`: earlier page ("Establishing Trust and Authenticity")
- `src/previous case studies/better-trail-new.php`: earlier alternate page ("Building Trust and Legitimacy in Gear Reviews")
- `/home/user/jon-morris.com/work/better-trail.php` and `better-trail-new.php`: byte-identical to the two files above
- `/home/user/jon-morris.com/variables/variables-all.php`: old site's project listing (header, categories)
- `src/assets/better-trail/`: images (listed under *Visual material*)
- **Jon, chat 2026-11-26**: Jon's own notes from an earlier chat

Short names below: **md** = `src/projects/better-trail.md`, **php** = `better-trail.php`, **php-new** = `better-trail-new.php`, **Jon** = Jon, chat 2026-11-26.

---

## Snapshot

| Field | What's known | Source |
|---|---|---|
| title | "Trust and authenticity for adventure gear" | md frontmatter |
| | Earlier versions: "Establishing Trust and Authenticity" (php); "Building Trust and Legitimacy in Gear Reviews" (php-new, also the listing header in `variables-all.php`) | php, php-new |
| name | "Better Trail" | md |
| type | work | md |
| year | **Resolved: 2024** (Jon, 2026-11-26; exact timing not important). Job title: Senior UX Designer, Elva Design (Aug 2021 – Aug 2024). | md; Jon |
| role | "Senior UX Designer" in md frontmatter; body text says "lead UX designer" and "sole individual responsible for User Experience". Jon: Senior UX Designer at Elva Design (an agency). | md; php; Jon |
| client | `[[?]]`: no `client` field in md frontmatter. The client is Better Trail (its founders). The agency was Elva Design. Which one goes in `client`, and whether Elva is named, is open. | Jon |
| link | `https://bettertrail.com/`, linked in php and php-new ("check out their live site"). Not in md frontmatter. | php, php-new |
| skills | md: Product Strategy, UX Design, UI Design, Content Strategy, Navigation / Taxonomy. Old listing: "UX, Product Design, Content Design". | md; `variables-all.php` |
| summary | md has a 2-sentence summary: content strategy, the initial gear review experience, trust and confidence from launch, transparent and credible recommendations. | md |
| cover | `/assets/better-trail/better-trail-second-hero.png` | md |

---

## 1. Opening

**What exists**

- One-line pitch: Better Trail was "a new outdoor gear review website" for "serious adventurers and casual consumers" wanting trustworthy, in-depth reviews. (md, php, php-new)
- Subhead: "I helped shape Better Trail's new outdoor gear review site, tackling content organization and helping to build user trust in a competitive market." php-new adds "differentiation". (php, php-new)
- Quote used in the earlier pages: "On top of a mountain is not the best time to find out your jacket isn't really waterproof." Its author isn't given: the client, a user, or Jon? (php, php-new)
- Jon's framing: he designed the launch site with the founders, and the gear-guide template is the heart of the project. (Jon)
- Hero images in use: `better-trail-hero.png` (php), `better-trail-second-hero.png` (md cover).

**Open questions for Jon**

- In one sentence, what changed because of the work: for readers, for the founders, or both?
- Who said the mountain/jacket line?
- Should the opening lead on the gear-guide template, since you call it the heart of the project?

## 2. Role & scope

**What exists**

- Jon was a Senior UX Designer at Elva Design, an agency, and left around Aug 2024. (Jon)
- Team: a Visual Designer, Developers and a PM. Jon was "the sole individual responsible for User Experience" and "personally created the deliverables… excluding visual design and development." (md, php)
- He worked "from kickoff to launch" to define structure, UX, content and features. (md, php)
- He ran discovery meetings with the client's key stakeholders, together with the visual designer. (md, php)
- He wrote the annotations in the dev handoff doc; the visual designer compiled the final designs. He then supported development: clarifications, answers, more iterations. (md, php)
- Client side: founders who had run and sold a review site before, plus a team of editors and writers. (Jon)
- Areas he worked on: the gear-guide template, navigation, individual reviews and the homepage. (Jon; md and php cover the same areas)

**Open questions for Jon**

- ~~Confirm the year~~ Resolved: 2024. How long the engagement ran is still open.
- What attribution do you want: the agency named (Elva Design), the client named, or both?
- Did you frame the problem or co-write the brief, or did it arrive from the founders?
- Where did your involvement end: at launch, or after?
- Visual designer, PM, developers: how many people, and were the developers Elva's or the client's?

## 3. Confidentiality note

**What exists**

- None of the sources mentions confidentiality or an NDA. The earlier pages link to the live site. (php, php-new)

**Open questions for Jon**

- Is there anything you can't show, such as the founders' brief, affiliate terms, or analytics?
- Are you free to name the client and show the work as it stood at handoff?

## 4. Problem

**What exists**

- The sources describe the user problem as trouble comparing products and finding trustworthy products and reviews. (md, php)
- The business context: a new site entering a "competitive market"; IA and navigation "were not well established yet"; the client was "still working out exactly what kind of content they'd create." (php, md)
- Direction was one PowerPoint slide plus verbal briefing. (Jon)
- Possible tension between sources: php says "Better Trail had a rough idea and a wireframe of what they were looking for" for the gear guide; Jon describes the direction as one slide plus verbal. Both could be true.
- Trust as the guiding principle: the sources say the research "confirmed our belief that a user's trust of a site like this is an important factor." php-new adds that this led to "a clear review structure, building confidence in Better Trail's process with transparency, and providing solid product comparison tools." (md, php, php-new)
- Business side: it is an affiliate-marketing site (php-new, PDP passage). Jon guided affiliate placement toward respecting users rather than pushing sales. (Jon)

**Open questions for Jon**

- What grounded the trust argument: research findings, the founders' experience with their earlier site, or competitor gaps?
- What did the business need from launch: affiliate revenue, audience, credibility with brands?
- Was the one PowerPoint slide the gear-guide wireframe php mentions, or something else?

## 5. Constraints

**What exists**

- The content catalogue would be shallow at launch. The navigation was simplified for phase one, with a planned path to a deeper nav divided by activity. (md, php)
- A variable number of products per guide, each with a variable amount of content. (md, php)
- Several content types (Gear Guides, Individual Reviews, Opinion Articles, more later) needed one coherent system with room for each type. (md, php)
- The client was new to all of this and was "figuring out exactly what they needed along the way." (md, php)
- The tension between affiliate monetisation and user trust. (Jon; php-new)

**Open questions for Jon**

- What were the time or budget limits on the engagement?
- What technical constraints were there (CMS, platform, dev capacity)?
- Which constraints did you push back on?

## 6. Design decisions

**What exists, by decision**

**a. Organising content by activity, not by content type**
- The client proposed grouping by type (browse all reviews, and so on). Jon suggested grouping by activity. Reasons: it shows what Better Trail covers, and users may not know a gear guide from a review but arrive with an activity in mind. (md, php, php-new)
- Rejected option: type-first grouping, named in the sources.
- Artifacts: `better-trail-site-map.png`, `better-trail-nav-comparison.png` ("Launch Nav vs Future Nav").

**b. A simpler launch nav, with a planned future nav**
- The nav was sized to the content volume expected at each stage. (md, php)

**c. A content component system across templates**
- Layouts and components let each content type stand alone and still feel cohesive. (md, php)
- This was later revised: individual reviews needed more differentiation. (md, php)
- Artifact: `better-trail-content-strategy.png`.

**d. The gear-guide template (Jon calls it "the heart")**
- A category-level collection of products (for example, all hiking boots) that ranks and compares the individual reviews. (md, php)
- Jon "added many features" (unspecified). (Jon) The features the sources document:
  - **Product cards**: concise, expandable summaries for browsing a category without opening many reviews. (md, php)
  - **Reading Length**: three levels, Skim, Medium and All In. (md, php)
  - **Product Comparison Tool**: sits lower on the page, for a shortlist. (md, php)
  - **Our Ratings Explained**: a section on testing practice and how each rating is produced. php-new attributes it to Jon in the first person: "I suggested for them to include a section." (md, php, php-new)
  - From iteration: ratings previewed on the card, a shorter minimised card, an overall guide summary, and a product-summary carousel. (md, php)
- Artifacts: `better-trail-gear-guide-wireframe-desktop.png`, `-mobile.png`, `better-trail-gear-guide-cards.png`, `better-trail-reading-length.png`, `better-trail-product-comparison.png`, `better-trail-ratings-explained.png`, `better-trail-visual-design.png`.

**e. Trust and authority**
- Jon influenced the rating system. (Jon)
- He pushed for human, friend-like pros and cons instead of technical ones. (Jon)
- He proposed a section explaining how ratings and testing work and what each score means for each parameter. (Jon; md/php "Our Ratings Explained")

**f. Affiliate-marketing placement**
- Jon guided placement to respect users rather than push sales. (Jon)
- php-new, on the review PDP: "This is an affiliate marketing site but… the objective of this page is to fully explain the details of the individual product." (php-new)

**g. Individual review page: from matching the gear guide to a PDP-style layout**
- The first aim was to match the gear guide's format for consistency. In practice, differentiating the two helped users tell the page types apart and let the presentation be tailored. (md, php)
- After "a few layouts", the team chose an e-commerce PDP-like template: the client's own field-test photography, and the user is "essentially 'shopping'." php-new: a two-column layout for photos and information. (md, php, php-new)
- Rejected option: consistency with the gear guide.
- Artifacts: `better-trail-individual-review.png`, `better-trail-final-review.png`, `1440-product-review-full.png`, `390-product-review-full.png`.

**h. Homepage**
- Jon worked on the homepage. (Jon) A "Homepage Hero Carousel" block exists in php but is commented out. In php-new the heading is present, but the text under it is gear-guide copy. (php, php-new)
- Artifacts: `better-trail-homepage-carousel.png`, `better-trail-carousel-desktop.png`, `better-trail-carousel-mobile.png`, `better-trail-final-homepage.png`, `1440-home-full.png`, `390-home-full.png`.

**Open questions for Jon**

- Which specific gear-guide features did you add, beyond the client's starting idea?
- Did the founders push back on affiliate restraint? Where did placement land, and what was given up?
- Rating system: what did you change, and what did the founders want instead?
- Pros and cons: what was the "technical" version you moved away from? Is there a before/after?
- For type-first vs activity-first navigation: how was the call made, and was anything lost?
- Which "few layouts" were tried for the review page?
- Is there a homepage decision worth telling?

## 7. Outcome

**What exists**

- Claim in the sources: "These improvements led to high user retention and positive feedback from the Better Trail community." No figures, and no source for the claim, is given. (md, php, php-new)
- "Our documentation helped support a smooth development process." (md, php)
- The live site, bettertrail.com, is linked from the earlier pages. (php)

**Open questions for Jon**

- Is the gear-guide template still in use on bettertrail.com, and how many guides use it?
- Where did "high user retention and positive feedback" come from: client reports, analytics, anecdote?
- How was success defined at kickoff?
- What didn't move, or what changed after you left?
- Did anything you designed ship differently, or not at all? For example the reading-length control or the comparison tool.

## 8. What I'd do differently

**What exists**

- Nothing in the sources. The nearest material: the content system was revised for reviews (md, php), and the client was figuring out needs along the way (md, php).

**Open questions for Jon**

- What would you change, looking back at the gear guide or the affiliate balance?
- Anything about the engagement itself (discovery, the one-slide brief, handoff)?

---

## Visual material

All in `src/assets/better-trail/`. Section fits are suggestions only.

| File(s) | What it appears to be | Could support |
|---|---|---|
| `better-trail-hero.png`, `better-trail-second-hero.png` | Hero / homepage designs (second-hero is the md cover) | 1 |
| `bettertrail-1-{384,768,1500,2500}.png` | Homepage mockup, desktop + mobile, on green (seen at 384) | 1, 6h |
| `bettertrail-2-{…}.png` | Gear guide ("Ski Jackets") mockup, desktop + mobile | 1, 6d |
| `bettertrail-3-{…}.png` | Product review ("…Ski Jacket Review") mockup, desktop + mobile | 6g |
| `better-trail-research.png` | Competitive research | 4 |
| `better-trail-site-map.png` | Site map | 6a |
| `better-trail-nav-comparison.png` | Launch nav vs future nav | 6a/b, 5 |
| `better-trail-content-strategy.png` | Content template wireframes | 6c |
| `better-trail-gear-guide.png` | Gear guide (small file, purpose unknown) | 6d |
| `better-trail-gear-guide-wireframe-desktop.png`, `-mobile.png` | Gear guide wireframes | 6d |
| `better-trail-gear-guide-cards.png` | Product cards | 6d |
| `better-trail-product-card.png`, `-product-card-wireframe.png`, `-product-card-design.png` | Product card, wireframe → design (a before/after pair is possible) | 6d |
| `better-trail-reading-length.png` | Reading Length feature | 6d |
| `better-trail-product-comparison.png` | Comparison tool | 6d |
| `better-trail-ratings-explained.png` | Our Ratings Explained | 6d/e |
| `better-trail-visual-design.png` | Design iterations of the gear guide | 6d |
| `better-trail-individual-review.png`, `better-trail-final-review.png` | Review template, wireframe/final | 6g |
| `better-trail-homepage-carousel.png`, `-carousel-desktop.png`, `-carousel-mobile.png` | Homepage hero carousel | 6h |
| `better-trail-final-homepage.png`, `-final-gear-guide.png` | Final designs | 6, 7 |
| `1440-home-full.png`, `1440-gear-guide-full.png`, `1440-product-review-full.png`, `1440 Gear Guide.png` | Full-page desktop finals at handoff | 6, 7 |
| `390-home-full.png`, `390-gear-guide-full.png`, `390-product-review-full.png` | Full-page mobile finals at handoff | 6, 7 |
| `better-trail-dev-documentation.png` | Annotated dev handoff doc | 2, other |
| `better-trail-impact.png` | Solid green block (placeholder) | n/a |
| `placeholder-image.png` | Placeholder | n/a |

Not found: anything showing the pros/cons treatment, the rating system change, or affiliate placement on its own. Ask whether these exist in the source files.

---

## Other material that doesn't fit a section

- **Process narrative:** discovery meetings and Jon's view that "getting to know the team, building trust, and learning more about how they operate is very important." (md, php)
- **User research claim:** the sources say "surveys and interviews with outdoor enthusiasts." Jon's chat notes mention competitive research only. Question for Jon: what user research was done, and by whom? (md, php; Jon)
- **Visual design collaboration:** wireframes needed tweaks at higher fidelity. (md, php)
- **Development handoff:** an annotated document and a walkthrough with developers. (md, php)
- **"Final Designs" gallery:** php and php-new end with a jump-linked gallery of mobile and desktop finals "as they stood as of development hand off."
- **Differences between php and php-new:** php-new has the first-person "I suggested" for the ratings section; the explicit affiliate-marketing sentence on the PDP; the "clear review structure… transparency… comparison tools" line; and a mislabelled "Homepage Hero Carousel" section. php and php-new comment out different blocks (php: the homepage carousel; php-new: the individual review section).
- **Portfolio context:** `docs/case-study-template.md` says Better Trail is the one page that already follows the template's frontmatter. `docs/adr/0019-case-studies-lead-with-decisions.md` lists it as written to the old spine.

---

## Jon's answers (grill session, 2026-11-27)

**Scope and timing.** 12 weeks. Jon's part ran from **kickoff to developer handoff**, with a little development support after.

**Team.** Jon (Senior UX Designer, Elva Design); a **Senior Visual Designer** (most likely; earlier sources vary); **third-party developers** working effectively as part of Elva.

**Platform.** A custom **Next.js** site with **Builder.io** as a headless CMS (checked from page source and headers, Nov 2026), behind Cloudflare, with Klaviyo, Google Tag Manager, Adobe Fonts and CookieYes. **Not Shopify or SFCC**, so it doesn't fit the resume line "40+ e-commerce builds on Shopify and SFCC". Consider describing it separately as a content site.

**What Jon designed (a substantial part of the gear guide):** the comparison tool; Our Ratings Explained; the pros and cons lists; copywriting suggestions and overall direction; the overall UI and site layout; content components on pages like the homepage; how and where affiliate links go; the superlatives list; the sort filter on gear guides; how one or more authors are shown; the summary paragraph at the top; the disclaimer at the top; how each item's ratings are shown; the "how we test" overview; the explanation of the components of a product type; the FAQ at the bottom.

**Key decision: inform before selling.** The founders were open to Jon's suggestion; they iterated together, and the founders **have kept it for years**. Main affiliate links sit **after the main summary and ratings**, so readers absorb the verdict before being sold to. The **product name at the top is a subtle link** to the product page: easy to find and buy, but it doesn't read as a shopping link. "Strategically and intentionally placed for findability without being too pushy."

**Where the trust approach came from.** User research was **minimal and informal** (asking people Jon knew), plus Jon's own experience as a heavy user and comparer of review sites, plus extensive competitive research on review sites and similar sites. The trust thesis came mostly from Jon: many review sites look unrigorous and are effectively affiliate fronts with no real testing. Better Trail's testing was real, so the job was to keep and convey that trust. **Trust, legitimacy and transparency were the main asset; revenue would follow** from living up to the founders' core practices.
- **Correction for reuse:** the old page's claim of user "surveys and interviews" overstates it; describe the research as informal.

**Outcome.** "High user retention and positive feedback" came from a **client report**. Jon has no copy or figures: he left Elva soon after and only got brief conversational updates, no analytics access. **Verifiable outcome:** the site still runs and looks very similar to Jon's design years later, and the founders kept the affiliate-placement approach. Don't state retention as a metric.

**What I'd do differently.** Be more rigorous in the design process. Push for more comprehensive user research, and **user testing along the way**: years of e-commerce projects meant approaching it from an e-commerce perspective, when a different kind of site deserved more discovery and exploration. Do more with wireframes and early designs. Jon's own experience in the space partly made up for the research, but he'd have liked more. The deliverable has stood the test of time.
