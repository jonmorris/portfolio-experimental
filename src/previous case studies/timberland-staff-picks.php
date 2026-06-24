<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <div class="projectinfo">
    <h1>Timberland Staff Picks</h1>
    <p>Timberland Staff Picks is a program that features Timberland employees wearing their favorite products. The idea is to bring a little "behind the scenes" personality to the site, and give our consumers a peek into what we like and what we're into.</p>
    <p>Throughout the past few seasons we've been building and iterating on this concept. Starting with a relatively simple product grid then developing the page into a more robust experince. Incorporating photos of the employees along with quotes discussing the products and their personal style.</p>
    <h2 class="metadata col-1"><span>My Role</span>UI Designer, Art Director</h2>
    <h2 class="metadata col-2"><span>Brand</span>Timberland</h2> 
    <h2 class="metadata col-3 span-2"><span>Team</span>Photographer, Project Manager, Developers</h2>
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