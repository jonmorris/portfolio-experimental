<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <div class="projectinfo">
    <h1>Multi Brand Redesign</h1>
    <h2><a href="https://www.pennfishing.com/">Penn Fishing</a></h2>
    <p>The other brands we worked with include: Abu Garcia, Berkley, Ugly Stik, Shakespear, Plano and more.</p>
    <h2 class="metadata col-1"><span>My Role</span>Senior UX Designer</h2>
    <h2 class="metadata col-2"><span>Brand</span>Penn Fishing</h2> 
    <h2 class="metadata col-3 span-2"><span>Team</span>Senior UI Designer, UI Designer, Project Manager, Developers</h2>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/bettertrail/bettertrail-1-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/bettertrail/bettertrail-1-1500.png, /images/bettertrail/bettertrail-1-2500.png 2x" media="(min-width: 769px)"  >
      <img srcset="/images/bettertrail/bettertrail-1-384.png 1x, /images/bettertrail/bettertrail-1-768.png 2x"
      alt="homepage design">
    </picture>
    <figcaption>Homepage</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/bettertrail/bettertrail-2-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/bettertrail/bettertrail-2-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/bettertrail/bettertrail-2-384.png 1x, /images/bettertrail/bettertrail-2-768.png 2x"
      alt="gear guide review page">
    </picture>
    <figcaption>Gear Guide</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/bettertrail/bettertrail-3-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/bettertrail/bettertrail-3-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/bettertrail/bettertrail-3-384.png 1x, /images/bettertrail/bettertrail-3-768.png 2x"
      alt="individual review page">
    </picture>
    <figcaption>Individual Product Review</figcaption>
  </div>

  <?php include_once($root . "/includes/project-footer.php"); ?>