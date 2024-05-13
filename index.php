<?php
$pagename = "Home";
include "./common.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $headcontent; ?>
  </head>
  <body>
    <div class="main">
      <span class="flextog hamback"><span class="hamburger" tabindex="0"></span></span>
      <header><?php echo $headercontent; ?></header>
      <div class="break"></div>
      <div class="maincontent">
        <div class="titletext">Get into Your Next 'Ship!</div>
        <?php echo $signinbox; ?>
      </div>
      
      <div class="break"></div>
    </div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
  <script src="./common.js"></script>
</html>