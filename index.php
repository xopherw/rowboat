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
        <div class="signin">
          <h2>LOG IN</h2>
          <form method="post" action="./userhome.php">
            <p><label for="uname">Username</label></p>
            <input type="text" name="uname" autofocus>
            <p><label for="pass">Password</label></p>
            <input type="password" name=pass">
            <p><button type="submit">Let's Go!</button></p>
          </form>
          <p><a href="./makeaccount.php">Don't have an account yet?</a></p>
        </div>
      </div>
      
      <div class="break"></div>
    </div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
  <script src="./common.js"></script>
</html>