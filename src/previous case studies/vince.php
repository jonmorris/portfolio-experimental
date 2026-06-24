<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <div class="projectinfo">
    <h1>Vince</h1>
    <div>
    <p><a target="_blank" href="https://www.vince.com/">Vince</a> is a high-end apparel brand who's site had a  checkout experience that did not live up to the rest of the site. As we revamped their cart and checkout process visually and from a User Experience and ADA perspective.</p>
    </div>
    <h2 class="metadata col-1"><span>My Role</span>UI Designer</h2>
    <h2 class="metadata col-2"><span>Brand</span>Vince</h2> 
    <h2 class="metadata col-3 span-2"><span>Team</span>Senior UI Designer, Senior UX Designer, Project Manager, Developers</h2>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/vince/vince-cart-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/vince/vince-cart-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/vince/vince-cart-384.png 1x, /images/vince/vince-cart-768.png 2x"
      alt="sporting life website cart">
    </picture>
    <figcaption>Cart</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/vince/vince-checkout-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/vince/vince-checkout-1500.png, /images/vince/vince-checkout-2500.png 2x" media="(min-width: 769px)"  >
      <img srcset="/images/vince/vince-checkout-384.png 1x, /images/vince/vince-checkout-768.png 2x"
      alt="sporting life website product listing page">
    </picture>
    <figcaption>Checkout - Shipping</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/vince/vince-confirmation-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/vince/vince-confirmation-1500.png, /images/vince/vince-confirmation-2500.png 2x" media="(min-width: 769px)"  >
      <img srcset="/images/vince/vince-confirmation-384.png 1x, /images/vince/vince-confirmation-768.png 2x"
      alt="sporting life website product listing page">
    </picture>
    <figcaption>Checkout - Confirmation</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/vince/vince-existing-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/vince/vince-existing-1500.png, /images/vince/vince-existing-2500.png 2x" media="(min-width: 769px)"  >
      <img srcset="/images/vince/vince-existing-384.png 1x, /images/vince/vince-existing-768.png 2x"
      alt="sporting life website product listing page">
    </picture>
    <figcaption>Previous Site</figcaption>
  </div>

  <?php include_once($root . "/includes/project-footer.php"); ?>