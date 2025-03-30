<?php
$pagename = "Contact";
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
        <h1>Contact Us</h1>
        <img src="https://images.pexels.com/photos/4390580/pexels-photo-4390580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        <div>contact form
          <form>
            <input type="text">
            <textarea></textarea>
          </form>
        </div>
      </div>
      <div class="break"></div>
    </div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
  <script src="./common.js"></script>
</html>

