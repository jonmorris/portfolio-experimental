<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <h1>Building Trust and Legitimacy in Gear Reviews</h1>
  <h2>I helped shape the <a href="https://bettertrail.com/">Better Trail</a> team's new outdoor gear review site, tackling content organization, user trust, and differentiation in a competitive market.</h2>
  <figure>
    <img src="/images/better-trail/better-trail-hero.png" alt="Better Trail Project Hero Images">
  </figure>
  <h3>Project Overview</h3>
  <p>Better Trail was a new outdoor gear review website designed to provide serious adventurers and casual consumers with trustworthy, in-depth, high-quality reviews of outdoor gear.</p>
  <h3>My Role</h3>
  <p>I was the lead UX designer collaborating with a Visual Designer, Developers, and a PM. I was the sole individual responsible for User Experience and I personally created the deliverables that you will see in this case study, excluding visual design and development. From kickoff to launch, I worked closely with the team to define the platform's structure, content, and features.</p>
  <figure>
    <figcaption>Better Trail Homepage</figcaption>
    <img src="/images/better-trail/better-trail-second-hero.png" alt="Better Trail Homepage Designs">
  </figure>
  <hr>

  <h3>Research & Discovery</h3>
  <p>The visual designer and I collaborated on running a series of discovery meetings with the client's key stakeholders. We spent time to understand the client's goals, any prior work they'd done, and any other specific requirements. I believe for any project that getting to know the team, building trust and learning more about how they operate is very important to the process.</p>
  <blockquote>"On top of a mountain is not the best time to find out your jacket isn't really waterproof"</blockquote>
  <p>I then conducted competitive research on leading gear / product review websites and other adjacent content sites, identifying usability gaps and opportunities to improve our content strategy. Through user research, including surveys and interviews with outdoor enthusiasts, I uncovered key pain points, such as difficulty comparing products and finding trustworthy products and reviews.</p>
  <figure>
    <figcaption>Competitive Research</figcaption>
    <img src="/images/better-trail/better-trail-research.png" alt="Competitive Research">
  </figure>
  <p>These insights confirmed our belief that trust is a large factor in both users consuming review content as well as in the products themselves. This led to a focus on providing a clear review structure, building confidence in Better Trail's process with transparency, and providing solid product comparison tools.</p>
  <hr>

  <h3>Information Architecture & Navigation</h3>
  <p>Their IA and Nav was not well established yet, they were still working out exactly what kind of content they'd create and how they might want to organize it. I helped them to define what kinds of content templates we'd need and how best to organize everything from both a navigation and also a back end CMS perspective.</p>
  <p>Initially they were thinking that grouping content by type would make sense as users might not have a single goal in mind. I suggested grouping the content by activity, which serves at least two purposes. First it informs users exactly what it is that Better Trail focuses on by listing the types of things they cover. Second a user might not understand the difference between a gear guide and a review, but they are likely here in relation to an activity, which makes that first decision a lot easier.</p>
  <figure>
    <figcaption>Better Trail Site Map</figcaption>
    <img src="/images/better-trail/better-trail-site-map.png" alt="Better Trail Site Map Diagram">
  </figure>
  <p>We also accounted for the quantity of content they'd have at various stages of the site's lifespan. Early on there wouldn't be as much content written and so the content catalog depth and breadth would be shallower. For this phase we simplified the navigation as more levels weren't necessary. Later they can grow into a nav that divides the site into activities.</p>
  <figure>
    <!-- <figcaption>Launch Nav vs Future Nav</figcaption> -->
    <img src="/images/better-trail/better-trail-nav-comparison.png" alt="Better Trail Site Map Diagram">
  </figure>
  <hr>

  <h3>Homepage Hero Carousel</h3>
  <p>The Gear Guide content would be a category level collection of products, such as "Hiking Boots". Currating all of the individual reviews to rank and compare them against each other.</p>
  <p>Better Trail had a rough wireframe of what they were looking for with this template. I helped further define and refine the content and how we would present all of the detailed data and analytics they would produce.</p>
  <figure>
    <figcaption>Homepage Hero Carousel</figcaption>
    <img src="/images/better-trail/better-trail-homepage-carousel.png" alt="Gear Guide Wireframe">
  </figure>
  <hr>

  <h3>Content Strategy</h3>
  <p>Better Trail had various types of planned content: Gear Guides, Individual Product Reviews, Opinion Articles, and might add more types over time. We wanted to ensure that the site had cohesive functionality and feel but was also flexible to meet each content types needs. I created a layout and content system that would allow each type of content to stand alone, but also work together as a cohesive part of the whole.</p>
  <figure>
    <figcaption>Content Template Wireframes</figcaption>
    <img src="/images/better-trail/better-trail-content-strategy.png" alt="Content Strategy Overview">
  </figure>
  <p>I'll cover this in more detail later, but we ended up changing the way the individual product reviews were laid out. We found that they needed more differentiation to fulfill their purpose more effectively.</p>
  <hr>

  <h3>Gear Guide</h3>
  <p>The Gear Guide content would be a category level collection of products, such as "Hiking Boots". Currating all of the individual reviews to rank and compare them against each other.</p>
  <p>Better Trail had a rough idea/wireframe of what they were looking for with this template. I helped further define and refine the content and how we would present all of the detailed data and analytics they would produce.</p>
  <figure class="no-limit">
    <figcaption>Gear Guide Wireframes</figcaption>
    <div class="double-container">
      <div class="scrollable desktop-scroll">
        <img src="/images/better-trail/better-trail-gear-guide-wireframe-desktop.png" alt="Better Trail Gear Guide Product Card">
      </div>
      <div class="scrollable mobile-scroll">
        <img src="/images/better-trail/better-trail-gear-guide-wireframe-mobile.png" alt="Better Trail Gear Guide Product Card">
      </div>
    </div>
  </figure>
  <h4>Gear Guide Product Cards</h4>
  <p>These are the core element of this page. We needed to house a variable amount of products with a variable amount of content. </p>
  <figure class="limit collapse-top">
    <img src="/images/better-trail/better-trail-gear-guide-cards.png" alt="Product Review Wireframe">
  </figure>
  <h4>Reading Length Feature</h4>
  <p>This little feature allows users to control how in-depth each product card will be depending on their desired approach. We established three different levels: Skim - short, preview, Medium - a little more content, All In - everything we have</p>
  <figure class="limit collapse-top">
    <img src="/images/better-trail/better-trail-reading-length.png" alt="Product Review Wireframe">
  </figure>
  <h4>Product Comparison</h4>
  <p>This module allows users to more directly compare products together. I thought this would be an important tool to have as users have now browsed a few of the products, they might have a short list and need to compare more directly.</p>
  <figure class="limit collapse-top">
    <img src="/images/better-trail/better-trail-product-comparison.png" alt="Product Review Wireframe">
  </figure>
  <h4>Our Ratings Explained</h4>
  <p>In order to build trust and express Better Trail's legitimacy to users I suggested for them to include a section that goes into depth on their testing practices and methods.</p>
  <figure class="limit collapse-top">
    <img src="/images/better-trail/better-trail-ratings-explained.png" alt="Product Review Wireframe">
  </figure>
  <hr>

  <!-- <h3>Individual Product Review</h3>
  <p>For the individual product review pages, we initially wanted match the format of the gear guide for consistency. But, in practice we found that differentiation was not only helpful - allowing users to understand what kind of page their own, but also to allow the content be more tailored to the purpose of this template, to display everything we had on a single product.</p>
  <p>We tried a few layouts, but ended up with a template that mimics an ecommerce PDP. This is an affiliate marketing site but as far as the objective of this page is to fully explain the details of the individual product, and to display the review information and details that Better Trail has put together. So, this two column layout does a good job allow us to both show off great product photograph as well as display all the relevant information.</p>
  <figure>
  <figcaption>Product Review Wireframe</figcaption>
    <img src="/images/better-trail/better-trail-individual-review.png" alt="Product Review Wireframe">
  </figure>
  <hr> -->

  <h3>Visual Design & Iterations</h3>
  <p>I worked closely with my visual design partner throughout the design process. I like to work very collaboratively, continuously iterating and refining features and functionality. There are always elements that are well defined in the wireframe stage, then when they start being built out for real they need some tweaks. Also, as it was new Better Trail was figuring out exactly what they needed along the way.</p>
  <p>The example below of the gear guide progress shows how we refined the content on product cards. This gave users a better visual preview of the ratings and shortened the height of the minimized card to improve browsing. We also added a few elements such as the guide and product summaries.</p>
  <figure>
    <figcaption>Design Iterations</figcaption>
    <img src="/images/better-trail/better-trail-visual-design.png" alt="Design Iterations">
    
  </figure>
  <hr>

  <h3>Development Handoff</h3>
  <p>I collaborated with the visual designer to create a development handoff document. They compiled all of the final designs and I annotated important elements describing intended functionality, details, and open questions. We then walked the development team through everything answering questions, adding documentation as we worked through the finer details.</p>
  <figure>
    <figcaption>Development Documentation</figcaption>
    <img src="/images/better-trail/better-trail-dev-documentation.png" alt="Better Trail Gear Guide Product Card">
  </figure>
  <p>Our documentation helped support a smooth development process, I was invovled along the way continuing to clarify, answer questions, and create additional design iterations as the site was built.</p>
  <hr>

  <h3>Impact</h3>
  <p>I helped Better Trail refine their strategy and platform with research, UX best practices, and design iteration. My work made it easier for users to navigate the platform, find relevant product reviews, understand complex product analysis, and make an informed purchase decision. These improvements led to high user retention and positive feedback from the Better Trail community.</p>
  <p></p>
  <hr>

  <h3>Final Designs</h3>
  <p>The designs as they stood as of development hand off can be found below, you can also <a href="https://bettertrail.com/">check out their live site</a> for more.</p> 
  <ol class="numbered">
    <li><p><a href="#final-mobile">Mobile Designs</a></p></li>
    <li><p><a href="#final-homepage">Desktop Homepage</a></p></li>
    <li><p><a href="#final-gear-guide">Desktop Gear Guide</a></p></li>
    <li><p><a href="#final-review">Destop Individual Review</a></p></li>
  </ol>
  <figure class="no-limit" id="final-mobile">
    <figcaption>Final Design - Mobile</figcaption>
    <div class="triple-container">
      <div class="scrollable triple-item">
        <img src="/images/better-trail/390-home-full.png" alt="Final Design Mobile Homepage">
      </div>
      <div class="scrollable triple-item">
        <img src="/images/better-trail/390-gear-guide-full.png" alt="Final Design Mobile Gear Guide">
      </div>
      <div class="scrollable triple-item">
        <img src="/images/better-trail/390-product-review-full.png" alt="Final Design Mobile Individual Review">
      </div>
    </div>
  </figure>
  <figure class="no-limit" id="final-homepage">
    <figcaption>Final Design - Homepage</figcaption>
    <div class="scrollable">
      <img src="/images/better-trail/1440-home-full.png" alt="Final Design Homepage">
    </div>
  </figure>
  <figure class="no-limit" id="final-gear-guide">
    <figcaption>Final Design - Gear Guide</figcaption>
    <div class="scrollable">
      <img src="/images/better-trail/1440-gear-guide-full.png" alt="Final Design Gera Guide">
    </div>
  </figure>
  <figure class="no-limit" id="final-review">
    <figcaption>Final Design - Individual Review</figcaption>
    <div class="scrollable">
      <img src="/images/better-trail/1440-product-review-full.png" alt="Final Design Individual Review">
    </div>
  </figure>

  <?php include_once($root . "/includes/project-footer.php"); ?>