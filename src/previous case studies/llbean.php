<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <h1>Redesigning L.L.Bean for Business</h1>
  <h2>Our redesign aimed to modernize the bulk ordering experience, improve usability, and introduce new customization features—aligning the platform with L.L.Bean’s brand while enhancing functionality for corporate and group buyers.</h2>
  <figure class="no-limit">
    <img src="/images/llbean/llbean-hero.png" alt="">
  </figure>
  <h3>Project Overview</h3>
  <p><a target="_blank" href="https://www.llbeanbusiness.com/">L.L.Bean for Business</a>, a subdivision of L.L.Bean, specializes in bulk ordering and custom embroidery for corporate and group purchases. The goal of this project was to refresh the site's visual design, align it with L.L.Bean’s brand guidelines, and improve overall functionality. Key improvements included enhancing the bulk ordering system, introducing a logo upload and preview feature, refining content management, and optimizing general e-commerce performance.</p>
  <h3 class="summary">My Role</h3>
  <p>As the UX/UI Designer, I led project discovery, research, and strategy. I was responsible for wireframing, prototyping, UI design, client presentations, and iterative improvements based on feedback. I worked closely with L.L.Bean for Business’s e-commerce team, as well as our developers, to ensure a user-friendly and technically feasible solution.</p>
  <figure class="no-limit">
    <figcaption>Homepage</figcaption>
    <img src="/images/llbean/llbean-homepage.png" alt="L.L.Bean Homepage">
  </figure>
  <hr>

  <h3>Opportunities</h3>
  <p>The existing L.L.Bean for Business website presented several issues:</p>
  <ol class="numbered">
    <li>Bulk Ordering Challenges</li>
      <ul>
        <li>The ordering process was unintuitive and lacked flexibility.</li>
        <li>Users couldn’t efficiently order men’s and women’s products together, making team purchases cumbersome.</li>
        <li>Key product details like stock availability weren’t visible, leading to frustration.</li>
      </ul>
    </li>
    <li><span>Limited Customization Features</span></li>
      <ul>
        <li>The site lacked a feature for users to upload and preview logos for custom embroidery.</li>
      </ul>
    </li>
    <li>Performance & Usability Issues</li>
      <ul>
        <li>Slow site speed hindered the shopping experience.</li>
        <li>Content management needed improvements for better user engagement.</li>
        <li>The site also wasn't responsive at all, mobile was very difficult to use.</li>
      </ul>
    </li>
  </ol>
  <h3>Challenges</h3>
  <ol class="numbered">
    <li>Limited Timeline & Budget: We had to prioritize key improvements while staying within constraints.</li>
    <li>Unique Use Case: Bulk ordering with customization is not a common e-commerce experience, requiring innovative UX solutions.</li>
    <li>Non-Technical Stakeholders: Ensuring alignment with stakeholders who weren’t deeply familiar with UX/UI or development constraints was crucial.
    </li>
  </ol>
  <hr>

  <h3>Discovery</h3>
  <p>I ran discovery sessions with our clients to understand their goals, document requirements, get to know them better, and understand any limitations we might come across. We learned that the client team was a small sub-brand for L.L.Bean, they didn't have their own dedicated design/development team and relied on L.L.Bean's core teams for support.</p>
  <p>They also walked us through a typical user journey on the current site, illustrating how many users seemed to struggle with the bulk ordering system. I had them connect me with their customer service and sales departments as well so I could run some additional stakeholder interviews. Customer service is always a good place to check for historical unsolicited feedback from actual customers.</p>
  <figure class="no-limit">
    <figcaption>Show Discovery Notes?</figcaption>
    <img src="/images/llbean/llbean-discovery.png" alt="">
  </figure>
  <hr>

  <h3>Competitive Analysis</h3>
  <p>I surveyed various direct competitors as well as adjacent sites like those that might have custom embroidery or other cutomization options. I found that none had a bulk ordering method similar to L.L.Bean's. Several of them opted to have users call a sales department, or simply had things set up like a normal e-commerce exerience putting it on the user to add a high volume of items to a cart that also wasn't optimized for high AOV. I did find plenty of good reference material for the custom logo management system.</p>
  <figure class="no-limit">
    <figcaption>Show a chart of competitor's features</figcaption>
    <img src="/images/llbean/llbean.png" alt="">
  </figure>
  <hr>

  <h3>UX Audit</h3>
  <p>I conducted a thorough audit of their existing site in order to fully explore and understand where we were coming from. Many times there are other unique elements that might be performing well or that need to be consider or reconsidered. Even if we're going to completely redesign a brand's site I think it's a valuable exercise.</p>
  <p>For L.L.Bean I found xx</p>
  <figure class="no-limit">
    <figcaption>Audit of Current Site Highlights</figcaption>
    <img src="/images/llbean/llbean-uxaudit.png" alt="">
  </figure>
  <hr>

  <h3>Bulk Ordering Exploration</h3>
  <p>I then began exploring options for how we could allow users to order large quantities of the same product easily. I took two different paths, first I wanted to create an evolution of the existing system, then I wanted to try something entirely new and see what might work from a new perspective.</p>
  <p>Optimizing an experience similar to the existing one seemed the most promising. I wanted to ensure we were balancing e-commerce standards and best practices while offering a unique way to accomplish their primary objective. I accomplished this by keeping a similar multi-field structure, but enhancing it with additional features but keeping the page working more similarly to a standard product detail page.</p>
  <figure class="no-limit">
    <figcaption>Bulk Ordering Wireframes</figcaption>
    <img src="/images/llbean/llbean-bulk-wireframe.png" alt="">
  </figure>
  <p>One of the things we considered with this direction was how users might be inputing quantities for thier order. We wanted to be sure that order of 6 units and orders of 1,000 units could both be easily input. Whether they were typing in quantities off of a hand written note, or if they were copying and pasting from a spreadsheet. We also considered creating a path for users to be able to upload a CSV file if they had a large order—this option was cut for timeline/budget reasons unfortunately.</p>
  <hr>

  <h3>Logo Management System Exploration</h3>
  <p>In order to better understand the requirments for this features, we had L.L.Bean walk us through how their current logo management system works. For the new system they wanted their customers to be able to upload and manage their own logo files. It was important for guest users to also be able to use the system to preview logos before creating an account.</p>
  <p>However, L.L.Bean would need to approve logos to ensure they can be embroidered with their machenery effectively. They also wanted to put a limit on how many logo files could be uploaded, especially for guest users, to not risk having a data storage problem inentionally or not.</p>
  <figure class="no-limit">
    <figcaption>Logo Management Wireframes</figcaption>
    <img src="/images/llbean/llbean-logo-wireframe.png" alt="">
  </figure>
  <hr>

  <h3>Content Component Wireframes</h3>
  <p>L.L.Bean's existing content management system was clunky and hard to work with also the people that needed to use it were not designers—so I compiled a simple yet flexible set of content components that would suit their needs. This was a system that I had created and defined as a resuable starting point for any of the brands we worked with. This system allowed our developers to create these components once and we could just restyle and make small modifications for each new client.</p>
  <figure class="no-limit">
    <figcaption>Content Component Library Wireframes</figcaption>
    <img src="/images/llbean/llbean-content-wireframe.png" alt="">
  </figure>
  <p>We made sure they would cover a wide variety of use cases and they would consider future expansion of categories and content types. We also ensured that each component was flexible so the client wouldn't need to re-develop the components if they wanted a small variation. I also defined the backend configuration options with a non-technical user in mind so that they wouldn't run into any problems. For example, I established several color themes for each component that ensured color combinations were ADA compliant and a user could simply select one from a dropdown vs needing to input individual hex codes.</p>
  <hr>

  <h3>Cart Customizations</h3>  
  <p>With large orders comes the need to customize the cart as well. We wanted to avoid a user needing to deal with the way a cart would work by default, displaying an individual product card per product size. This would lead to an unmanagble quantity of products for a user to manage.</p>
  <p>So, we created a new custom product card that would collect all sizes of an individual product. This would allow customers to see a more scanable order summary at a glance. Another feature we added was the abilty to add and modify the order easily from within the cart.</p>
  <figure class="no-limit">
    <figcaption>Cart Customizations</figcaption>
    <img src="/images/llbean/llbean-cart-exploration.png" alt="">
  </figure>
  <hr>

  <h3>Visual Design Process</h3>
  <p>The main objective of this project was a complete redesign referencing L.L.Bean's brand style guidelines and pulling this site back into alignment with those standards. I created several homepage concepts so we could discuss options with the client and decide on a direction to take the site.</p>
  <p>After we selected a direction, we went through an iterative design process completing designs of each page and template the client would need.</p>
  <figure>
    <figcaption>Design Exploration</figcaption>
    <img src="/images/llbean/llbean.png" alt="">
  </figure>
  <h3>Style Guide & Design System</h3>
  <p>Once the visual design direction was chosen, I also began work establishing a style guide and design system. This not only makes the work of designing each template more consistent and efficient, but they are useful for further ongoing design and optimization work and for QA in development.</p>
  <figure>
    <figcaption>Show Style Guide?</figcaption>
    <img src="/images/llbean/llbean.png" alt="">
  </figure>
  <h3>Final Designs</h3>
  <p>This is a paragraph</p>
  <figure>
    <figcaption>Show Final Designs?</figcaption>
    <img src="/images/llbean/llbean.png" alt="">
  </figure>
  <hr>

  <h3>Results, Impact, Reflections, Learnings, Conclusions, Next Steps</h3>
  <p>This is a paragraph</p>
  <blockquote>This is a quote from the client on how amazing it was.</blockquote>
  <p>This is a paragraph</p>
  <figure>
    <figcaption>Caption</figcaption>
    <img src="/images/llbean/llbean.png" alt="">
  </figure>
  <hr>

  <?php include_once($root . "/includes/project-footer.php"); ?>