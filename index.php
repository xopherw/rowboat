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
      <header>
        <?php echo $headercontent; ?>
      </header>
      
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
      <div>&nbsp;</div>
    </div>
    
    <footer>
      <div class="footerlinks">
        <p><a href="./about.php">About Rowboat</a></p>
        <p><a href="./safety.php">Online Safety</a></p>
        <p><a href="./privacy.php">Privacy and Data Usage</a></p>
        <p><a href="./pricing.php">Plus Account</a></p>
        <p><a href="./contactus.php">Contact Us</a></p>
        <p><a href="https://github.com/steveman1123/rowboat">View Source</a></p>
        <p><a href="https://github.com/steveman1123/rowboat/issues">Technical Support</a></p>
      </div>
      <div class="quote">"Being deeply loved by someone gives you strength, while loving someone deeply gives you courage." ~Lao Tzu</div>
    </footer>
  </body>
</html>