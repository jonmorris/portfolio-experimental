<?php  $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include_once($root . "/includes/head.php"); ?> 
<body class="work home">
    <?php include_once($root . "/includes/header.php"); ?>
    <main>
    <?php
      include_once($root . "/includes/project-listing-all.php");
      include_once($root . "/includes/footer.php");
      ?>
    </main>
    <?php include_once($root . "/includes/scripts.php"); ?>
  </body>
</html>