<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <h1>Personalized Bedding, Made Easy</h1>
  <h2>When you're online shopping how many tabs do you have open? How difficult is it to compare multiple products or decide if multiple products will look good together? We helped <a target="_blank" href="https://www.thecompanystore.com/">The Company Store</a> address this problem for their bedding sheets sets.</h2>
  <figure>
    <img src="/images/tcs/tcs-hero.png" alt="">
  </figure>
  <h3>Project Overview</h3>
  <p>The Company Store wanted to improve how customers purchase sheet sets by introducing a custom ordering experience. Traditionally, customers had to visit multiple product pages to select individual components (e.g., fitted sheets, flat sheets, pillowcases). The goal of this project was to streamline that experience into a single, user-friendly Product Detail Page (PDP), making it easier to build and purchase a custom set, all in one place.</p>
  <h3>My Role</h3>
  <p>I was the lead UX designer collaborating with a Senior Visual Designer, Developers, and a PM. I was the sole individual responsible for User Experience and I personally created the deliverables that you will see in this case study, excluding visual design and development.</p>
  </div>
  <figure>
    <figcaption>Previous Solution</figcaption>
    <img src="/images/tcs/tcs-previous-solution.png" alt="">
  </figure>
  <hr>
  
  <!-- <h3>Project Summary</h3>
  <ol class="numbered">
    <li><p>Ran a series of <a href="#discovery">discovery</a> meetings to establish requirements, challenges, and opportunities</p></li>
    <li><p>Conducted a <a href="#discovery">competitive audit</a> to explore existing solutions</p></li>
    <li><p><a href="#options">Explored options</a> and achieved client buy-in</p></li>
    <li><p>Facilitated <a href="#test">usability testing</a> to gather user insights</p></li>
    <li><p><a href="#iterated">Iterated on design</a> collaboratively with UI and Dev</p></li>
    <li><p><a href="#delivered">Delivered</a> on business and user experience goals</p></li>
  </ol> -->

  <h3>The Problem</h3>
  <p>The Company Store team wanted a clean, simple, and elevated solution for presenting users with the ability to design their own bed linen sets.</p>
  <p>They had tried several ways to do this in the past with limited success and wanted us to explore further and find something that would really work for their customers.</p>
  <ul>
    <li><span>Project Goals</span></li>
    <li>Increase Average Order Value</li>
    <li>Reduce User Workload</li>
    <li>Clean and Elevated Design</li>
    <li>Avoid Negatively Impacting PDP Metrics</li>
  </ul>
  <h3 class="second-h3">The Solution</h3>
  <p>We designed and tested a component that allows users to build their own bedding sets easily on a single product detail page.</p>
  <p>The result was an increase in AOV across the bedding category with high user engagement with the new feature.</p>
  <figure>
    <figcaption>Final Shop the Collection Component</figcaption>
    <img src="/images/tcs/tcs-final-designs.png" alt="">
  </figure>
  <hr>

  <div id="discovery" class="projectinfo">
    <h3>Understanding the Problem Space</h3>
    <h4>Discovery</h4>
    <p>I ran a discovery session with client stakeholders in order to collect requirements and to better understand the problem space.</p>
    <h4>Competitive Audit</h4>
    <p>I audited their past and current attempts as well as competitor sites uncovering a wide variety of options available.</p>
    <h4>User Research</h4>
    <p>We found that users would achieve this same result by opening multiple tabs. They also didn't feel confident that the products they were interested in would go well together.</p>
  </div>
  <figure>
    <figcaption>Selection from Competitive Audit</figcaption>
    <img src="/images/tcs/tcs-competitive-audit.png" alt="">
  </figure>
  <hr>

  <div id="options" class="projectinfo collapse-bottom">
    <h3>Exploration of Options</h3>
    <p>Through my research and experience I knew there were a few different ways we could approach this problem. Some of which utilized well known existing layouts and others that were completely new approaches.</p>
    <p>I explored each of these options in wireframes, including TCS's specific needs and requirements to determine a subset that might be viable for their use case. I collected and presented the three strongest options that offered a range of benefits and tradeoffs.</p>
  </div>
  <figure>
    <figcaption>Wireframes of Three Main Options</figcaption>
    <img src="/images/tcs/tcs-wireframe-options.png" alt="">
  </figure>
  <p>They had a strong preference for the option which condensed multiple products into the PDP buy stack (the middle options in the figure above). This would be the most complicated option to implement as it would be mostly custom work. But, it matched their requirements the closest and we thought it had a high likelyhood of being what the customer would want.</p>
  <hr>

  <h3 id="test">Usability Testing</h3>
  <p>In order to test this option I built out prototypes and wrote a test script for unmoderated tests on Usertesting.com. We wanted to ensure the new denser solution would easily naivgable for users and would help them achieve the goal of feeling confident about building a set of products.</p>
  <p>We constructed the test to determine if the proposed solution would be easily understood and usable by customers and also used a previous solution TCS had tried as a control to test if the new solution would outperform the previous one.</p>
  <figure>
    <figcaption>Usability Testing Variations</figcaption>
    <img src="/images/tcs/tcs-usability-testing.png" alt="">
  </figure>
  <p>The results showed that users were indeed able to easily interact with the new design and most of them also preferred this new style. The new version condenses the variation selection quite a bit and allows us to fit it in the buy stack under the main product's add to cart button. This make it a natural addition to shopping for the original product, it makes it very easy for users to stumble upon it and start exploring additional product.</p>
  <hr>

  <h3 id="iterated">Further Design Iteration</h3>
  <p>So, with testing confirming we wer on the right track I continued to iterate and refine the solution as we were able to more deeply explore specific interactions and began working closely with development on how this would be implemented.</p>
  <p>We added important features such as a checkmark to indicate more clearly what has been added, color swatches in the dropdown so users can better preview available colors, stock messaging, and a subtotal so users can easily understand the cost of their additions.</p>
  <figure>
    <figcaption>Post Testing Updates</figcaption>
    <img src="/images/tcs/tcs-design-iteration.png" alt="">
  </figure>
  <p>These modifications further improved the user experience by increasing ease of use and reducing friction. The final design below shows where we ended up after the visual design process. While this solution was a bit more involved than the client was initially expecting, minimalism was a large requirement, it includes necessary and helpful elements that in the end created a successful experience.</p>
  <figure>
    <figcaption>Final Designs</figcaption>
    <img src="/images/tcs/tcs-final-designs.png" alt="">
  </figure>
  <hr>

  <div id="delivered" class="projectinfo">
    <h3>Final Design and Retrospective</h3>
    <p>The new component went live and outperformed its previous iterations in every way. We saw high user engagement and positive feedback from a customer service perspective.
    </p>
      <h3 >Takeaways</h3>
        <ol class="numbered">
          <li><div>
            <h4>Additional Discovery</h4>
            <p>I didn't realize at the start how much work the client had already put towards this effort, they also had very strong opinions on how they wanted this feature to be designed. Some additional discovery and convrersation early in the process could have revealed this and given us more time for them to walk us through what they'd tried previously.</p>
          </div></li>
          <li><div>
            <h4>Tighter Presentations</h4>
            <p>There were many client stakeholders and they didn't all attend each design presentation. So, I began including and repeating important project details in each presentation to keep everyone informed. I also made sure to document our suggestions and key points in the presentation vs just doing it verbally to create a solid record of our work and progress. Each presentation became a document they could take and share internally to ensure everyone was able to follow along. I added this practice to every project going forward as it had a great positive impact on every project.</p>
          </div></li>
          <li><div>
            <h4>Technical Constraints</h4>
            <p>We avoided certain options because of potential high development levels of effort or performance concerns, which then actually turned out to be possible or avoidable. Earlier and deeper investigation and testing would have given us a better idea of what was actually possible earlier in the process.</p>
          </div></li>
        </ol>
  </div>

  <?php include_once($root . "/includes/project-footer.php"); ?>