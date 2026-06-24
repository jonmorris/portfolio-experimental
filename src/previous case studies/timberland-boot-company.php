<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <div class="projectinfo">
    <h1>Timberland Boot Company</h1>
    <p>Timberland Boot Company is Timberland's premium footwear line. Created with the finest leathers and materials, they mix inspiration from the past with modern design. Our task was to present Boot Co to a consumer in a way that justifies it's price tag. While, making them stand out among our other products, and working within the structure of the rest of our site.</p>
    <h2 class="metadata col-1"><span>My Role</span>Designer</h2>
    <h2 class="metadata col-2"><span>Brand</span>Timberland</h2> 
    <h2 class="metadata col-3 span-2"><span>Team</span>Project Manager, Developers</h2>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/sporting-life/spl-homepage-desktop-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/sporting-life/spl-homepage-desktop-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/sporting-life/spl-homepage-desktop-384.png 1x, /images/sporting-life/spl-homepage-desktop-768.png 2x"
      alt="sporting life website homepage">
    </picture>
    <figcaption>Homepage</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/sporting-life/spl-plp-desktop-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/sporting-life/spl-plp-desktop-1500.png, /images/sporting-life/spl-plp-desktop-2500.png 2x" media="(min-width: 769px)"  >
      <img srcset="/images/sporting-life/spl-plp-desktop-384.png 1x, /images/sporting-life/spl-plp-desktop-768.png 2x"
      alt="sporting life website product listing page">
    </picture>
    <figcaption>Product Listing Page</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/sporting-life/spl-pdp-desktop-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/sporting-life/spl-pdp-desktop-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/sporting-life/spl-pdp-desktop-384.png 1x, /images/sporting-life/spl-pdp-desktop-768.png 2x"
      alt="sporting life website product detail page">
    </picture>
    <figcaption>Product Detail Page</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/sporting-life/spl-pdp-wide-desktop-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/sporting-life/spl-pdp-wide-desktop-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/sporting-life/spl-pdp-wide-desktop-384.png 1x, /images/sporting-life/spl-pdp-wide-desktop-768.png 2x"
      alt="sporting life website wide product detail page variant">
    </picture>
    <figcaption>Product Detail Page – Wide Variant</figcaption>
  </div>

  <?php include_once($root . "/includes/project-footer.php"); ?>