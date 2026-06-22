// Eleventy 3.x config (ESM).
import { HtmlBasePlugin } from "@11ty/eleventy";

export default function (eleventyConfig) {
  // Rewrites root-relative URLs (href/src) to include the pathPrefix, so the
  // site works both at the domain root and under a subpath (GitHub Pages).
  eleventyConfig.addPlugin(HtmlBasePlugin);

  // Pass static assets straight through to the build output.
  eleventyConfig.addPassthroughCopy({ "src/css": "css" });
  eleventyConfig.addPassthroughCopy({ "src/js": "js" });
  eleventyConfig.addPassthroughCopy({ "src/assets": "assets" });

  // --- Collections -----------------------------------------------------------
  // Case studies / projects (work + side projects share one collection; the
  // `type` field on each item distinguishes them so the feed can filter).
  eleventyConfig.addCollection("projects", (collectionApi) =>
    collectionApi
      .getFilteredByTag("project")
      .sort((a, b) => {
        const ay = a.data.year || 0;
        const by = b.data.year || 0;
        if (by !== ay) return by - ay; // newest first
        return (a.data.order || 0) - (b.data.order || 0);
      })
  );

  // Blog posts.
  eleventyConfig.addCollection("posts", (collectionApi) =>
    collectionApi
      .getFilteredByTag("post")
      .sort((a, b) => b.date - a.date)
  );

  // --- Filters ---------------------------------------------------------------
  eleventyConfig.addFilter("readableDate", (dateObj) => {
    const d = new Date(dateObj);
    return d.toLocaleDateString("en-US", {
      year: "numeric",
      month: "short",
      day: "numeric",
      timeZone: "UTC",
    });
  });

  eleventyConfig.addFilter("isoDate", (dateObj) =>
    new Date(dateObj).toISOString().split("T")[0]
  );

  // Estimate reading time from raw content length.
  eleventyConfig.addFilter("readingTime", (content) => {
    if (!content) return "1 min";
    const words = String(content).replace(/<[^>]+>/g, " ").split(/\s+/).filter(Boolean).length;
    return `${Math.max(1, Math.round(words / 200))} min`;
  });

  return {
    dir: {
      input: "src",
      output: "_site",
      includes: "_includes",
      data: "_data",
    },
    markdownTemplateEngine: "njk",
    htmlTemplateEngine: "njk",
    templateFormats: ["njk", "md", "html"],
  };
}
