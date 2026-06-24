<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>

<?php include_once($root . "/includes/head.php"); ?> 

<body id="top" class="project">

<?php include_once($root . "/includes/header.php"); ?> 

<main>
  <div class="projectinfo">
    <h1>Natural Connection Flyer</h1>
    <div>
    <p>This is a re-design of a United Natural Foods supermarket flyer. I know, I know everyone's doing unsolicted re-designs of supermarket flyers these days. But at the time I was a supermarket flyer production designer I couldn't help myself.</p>
    </div>
    <h2 class="metadata col-1"><span>My Role</span>Designer</h2>
    <h2 class="metadata col-2"><span>Brand</span>UNFI</h2> 
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/natural-connection/nc-cover-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/natural-connection/nc-cover-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/natural-connection/nc-cover-384.png 1x, /images/natural-connection/nc-cover-768.png 2x"
      alt="natural connection supermarket flyer cover page">
    </picture>
    <figcaption>Cover Page</figcaption>
  </div>
  <div>
    <p>UNFI distributes organic and natural foods not only to Whole Foods but many other smaller retailers as well. We created monthly supermarket flyers for those smaller retailers as it would be cost prohibitive to do these on their own. I wanted to add a more data driven approach to the cover, highlighting which brands are onsale and by how much. I also thought it might be usefull to add a checklist/shopping list on the back cover of the flyer. This would not only let someone see a summary of all the deals but also have a shopping list to use while shopping.</p>
  </div>
  <div class="inline_image">
      <img srcset="/images/natural-connection/nc-cover-detail.png 1x, /images/natural-connection/nc-cover-detail.png 2x"
      alt="natural connection supermarket flyer cover detail">
    <figcaption>Cover Infographic Detail</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/natural-connection/nc-interior-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/natural-connection/nc-interior-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/natural-connection/nc-interior-384.png 1x, /images/natural-connection/nc-interior-768.png 2x"
      alt="natural connection supermarket flyer interior page">
    </picture>
    <figcaption>Interior Page</figcaption>
  </div>
  <div class="single_image">
    <picture>
      <source srcset="/images/natural-connection/nc-back-cover-2500.png" media="(min-width: 1440px)"  >
      <source srcset="/images/natural-connection/nc-back-cover-1500.png" media="(min-width: 769px)"  >
      <img srcset="/images/natural-connection/nc-back-cover-384.png 1x, /images/natural-connection/nc-back-cover-768.png 2x"
      alt="natural connection supermarket flyer back cover page">
    </picture>
    <figcaption>Back Cover</figcaption>
  </div>

  <?php include_once($root . "/includes/project-footer.php"); ?>