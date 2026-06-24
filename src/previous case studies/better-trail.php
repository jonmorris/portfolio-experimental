<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <h1>Establishing Trust and Authenticity</h1>
  <h2>I helped shape <a href="https://bettertrail.com/">Better Trail's</a> new outdoor gear review site, tackling content organization and helping to build user trust in a competitive market.</h2>
  <figure class="no-limit">
    <img src="/images/better-trail/better-trail-hero.png" alt="Better Trail Project Hero Images">
  </figure>
  <h3>Project Overview</h3>
  <p>Better Trail was a new outdoor gear review website designed to provide serious adventurers and casual consumers with trustworthy, in-depth, high-quality reviews of outdoor gear.</p>
  <h3>My Role</h3>
  <p>I was the lead UX designer collaborating with a Visual Designer, Developers, and a PM. I was the sole individual responsible for User Experience, and I personally created the deliverables that you will see in this case study, excluding visual design and development (though we worked very collaboratively throughout). From kickoff to launch, I worked closely with the team to define the platform's structure, user experience, content, and features.</p>
  <figure class="no-limit">
    <figcaption>Better Trail Homepage</figcaption>
    <img src="/images/better-trail/better-trail-second-hero.png" alt="Better Trail Homepage Designs">
  </figure>
  <hr>

  <h3>Research & Discovery</h3>
  <p>The visual designer and I collaborated on running a series of discovery meetings with the client's key stakeholders. We spent time understanding their goals, any prior work they'd done, and any other specific requirements. I believe that for any project, getting to know the team, building trust, and learning more about how they operate is very important to the process.</p>
  <blockquote>"On top of a mountain is not the best time to find out your jacket isn't really waterproof"</blockquote>
  <p>I then conducted competitive research on leading gear/product review websites and other adjacent content sites, identifying usability gaps and opportunities to improve our content strategy. Through user research, including surveys and interviews with outdoor enthusiasts, I uncovered key pain points, such as difficulty comparing products and finding trustworthy products and reviews.</p>
  <figure class="no-limit">
    <figcaption>Competitive Research</figcaption>
    <img src="/images/better-trail/better-trail-research.png" alt="Competitive Research">
  </figure>
  <p>These insights confirmed our belief that a user's trust of a site like this is an important factor for both the content and the products themselves. We applied this insight as a guiding principle throughout the design process.</p>
  <hr>

  <h3>Information Architecture & Navigation</h3>
  <p>Their IA and Nav were not well established yet; they were still working out exactly what kind of content they'd create and how they might want to organize it. I helped them to define the content templates we'd need and how best to organize everything from both a navigation and a back-end CMS perspective.</p>
  <p>Initially, they were thinking that grouping content by type would make sense, as users might not have a single goal in mind; they might want to browse all reviews, for example. I suggested grouping the content by activity, which serves at least two purposes. First, it informs users exactly what Better Trail focuses on by listing the types of activities it covers. Second, a user might not understand the difference between a gear guide and a review, but they are likely here in relation to a specific activity or two.</p>
  <figure class="no-limit">
    <figcaption>Better Trail Site Map</figcaption>
    <img src="/images/better-trail/better-trail-site-map.png" alt="Better Trail Site Map Diagram">
  </figure>
  <p>We also accounted for the quantity of content they'd have at various stages of the site's lifespan. Early on, there wouldn’t be as much written, and so the content catalog depth and breadth would be shallower. For this first phase, we simplified the navigation; later, they can grow into a nav that divides the site into larger sections by activity.</p>
  <figure>
    <!-- <figcaption>Launch Nav vs Future Nav</figcaption> -->
    <img src="/images/better-trail/better-trail-nav-comparison.png" alt="Better Trail Site Map Diagram">
  </figure>
  <hr>

  <h3>Content Strategy</h3>
  <p>Better Trail had various types of planned content: Gear Guides, Individual Product Reviews, Opinion Articles, and might add more types over time. We wanted to ensure the site had a consistent look and feel while remaining flexible enough to meet each content type’s needs. I created layouts and a content component system that would allow each type of content to stand alone and also feel cohesive.</p>
  <figure class="no-limit">
    <figcaption>Content Template Wireframes</figcaption>
    <img src="/images/better-trail/better-trail-content-strategy.png" alt="Content Strategy Overview">
  </figure>
  <p>This was a reasonable enough initial plan; however, we ended up changing the way the individual product reviews were laid out. We found that they needed more differentiation to fulfill their purpose more effectively.</p>
  <hr>

  <h3>Gear Guide</h3>
  <p>The Gear Guide content type would be a category-level collection of products, such as all "Hiking Boots". Curating all of the individual reviews of a given category to rank and compare them against each other.</p>
  <p>Better Trail had a rough idea and a wireframe of what they were looking for with this template. I helped further define and refine the content, as well as how we would present the detailed data and analytics they would produce.</p>
  <figure class="no-limit">
    <figcaption>Gear Guide Wireframes</figcaption>
    <div class="double-container">
      <div class="scrollable desktop-scroll">
        <img src="/images/better-trail/better-trail-gear-guide-wireframe-desktop.png" alt="">
      </div>
      <div class="scrollable mobile-scroll">
        <img src="/images/better-trail/better-trail-gear-guide-wireframe-mobile.png" alt="">
      </div>
    </div>
  </figure>
  <h4>Gear Guide Product Cards</h4>
  <p>These product cards are the core element of this page. We needed to house a variable number of products with a variable number of contents. They needed to be concise summaries of each product for quick browsing. We also added expandable content so users could dive deeper. The reasoning for this was to allow users to explore the category at a higher level without needing to visit multiple individual review pages.</p>
  <figure class="text-limit collapse-top">
    <img src="/images/better-trail/better-trail-gear-guide-cards.png" alt="Product Review Wireframe">
  </figure>
  <h4>Reading Length Feature</h4>
  <p>This little feature allows users to control how in-depth each product card will be, depending on their desired approach. We established three different levels: Skim - a brief overview, Medium - a more detailed version, and All In - our comprehensive content. Each card would serve a different amount of content, depending on the user's preference.</p>
  <figure class="text-limit collapse-top">
    <img src="/images/better-trail/better-trail-reading-length.png" alt="Product Review Wireframe">
  </figure>
  <h4>Product Comparison Tool</h4>
  <p>This module allows users to compare products more directly. This would be an important tool to have further down the page, as users have now browsed a few of the products. They now might have a short list they're interested in and want to compare more directly.</p>
  <figure class="text-limit collapse-top">
    <img src="/images/better-trail/better-trail-product-comparison.png" alt="Product Review Wireframe">
  </figure>
  <h4>Our Ratings Explained</h4>
  <p>One way we sought to build trust and express Better Trail's methodology to users was for them to include a section that goes into depth on their testing practices and methods. We're building user confidence by exposing some of our back-end practices and further defining why and how each rating is produced.</p>
  <figure class="text-limit collapse-top">
    <img src="/images/better-trail/better-trail-ratings-explained.png" alt="Product Review Wireframe">
  </figure>
  <hr>

  <h3>Individual Product Review</h3>
  <p>For the individual product review pages, we initially aimed to match the gear guide’s format for visual consistency. But, in practice, we found that differentiation was not only helpful - allowing users to understand what kind of content they were on, but also to allow the presentation to be more tailored.</p>
  <p>We tried a few layouts, but ended up with a template that mimics an e-commerce PDP. Their reviews are not just text content; they create their own incredible photograph from their field testing. And at the end of the day, the user is essentially "shopping" for this product. We thought that this new layout would serve the text content, photos, and data best.</p>
  <figure class="no-limit">
  <figcaption>Individual Product Review</figcaption>
    <img src="/images/better-trail/better-trail-individual-review.png" alt="Product Review Wireframe">
  </figure>
  <hr>

  <!-- <h3>Homepage Hero Carousel</h3>
  <p></p>
  <figure>
    <figcaption>Homepage Hero Carousel</figcaption>
    <img src="/images/better-trail/better-trail-homepage-carousel.png" alt="Gear Guide Wireframe">
  </figure>
  <hr> -->

  <h3>Visual Design & Iterations</h3>
  <p>I worked closely with my visual design partner throughout the design process. I like to work very collaboratively, continuously iterating and refining features and functionality. There are always elements that are well defined in the wireframe stage, and then when they start being built out in higher levels of fidelity, they need some tweaks. Also, as all of this was entirely new to the Better Trail team, they were figuring out exactly what they needed along the way.</p>
  <p>The example below of the gear guide progress shows how we refined the content on product cards. This gave users a better visual preview of the ratings and shortened the height of the minimized card to improve browsing. We also added a few small elements, such as the overall guide summary and product summary carousel, to give a preview of what the guide has to offer.</p>
  <figure class="no-limit">
    <figcaption>Design Iterations</figcaption>
    <img src="/images/better-trail/better-trail-visual-design.png" alt="Design Iterations">
    
  </figure>
  <hr>

  <h3>Development Handoff</h3>
  <p>I collaborated with the visual designer to create a development handoff document. They compiled all of the final designs, and I annotated important elements describing intended functionality, details, and open questions. We then walked the development team through everything, answering questions, adding documentation as we worked through the finer details.</p>
  <figure class="no-limit">
    <figcaption>Development Documentation</figcaption>
    <img src="/images/better-trail/better-trail-dev-documentation.png" alt="">
  </figure>
  <p>Our documentation helped support a smooth development process. I was involved throughout the process, continually clarifying, answering questions, and creating additional design iterations as the site was built.</p>
  <hr>

  <h3>Impact</h3>
  <p>I helped Better Trail refine their strategy and platform with research, UX best practices, and design iteration. My work enabled users to more easily navigate the platform, find relevant product reviews, understand complex product analysis, and make informed purchase decisions. These improvements led to high user retention and positive feedback from the Better Trail community.</p>
  <p></p>
  <hr>

  <h3>Final Designs</h3>
  <p>The designs as they stood as of development hand off can be found below, you can also <a target="_blank" href="https://bettertrail.com/">check out their live site</a> for more.</p> 
  <ol class="numbered">
    <li><p><a href="#final-mobile">Mobile Designs</a></p></li>
    <li><p><a href="#final-homepage">Desktop Homepage</a></p></li>
    <li><p><a href="#final-gear-guide">Desktop Gear Guide</a></p></li>
    <li><p><a href="#final-review">Desktop Individual Review</a></p></li>
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