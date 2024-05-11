<?php
$appname = "Rowboat";
$pagename = "Home";

$longdescription = "Rowboat is a dating app made by people,
for people. We want to see you find a great match, then get off the app once and for all!
No hidden fees. No playing games. Just pure and simple matching and dating.
Are you ready to get off your lonely island, and into a 'ship?";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $appname." | ".$pagename;?></title>
    <link rel="shortcut icon" href="./resources/media/logo.svg">
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <meta name="description" content="<?php echo $longdescription;?>">
    <link href="./resources/css/home.css" rel="stylesheet" type="text/css">
    <link href="./resources/css/common.css" rel="stylesheet" type="text/css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="main">
      <header>
        <div class="logo"><img src="./resources/media/logo.svg"></div>
        <span class="headerlink"><a href="./about.php">About</a></span>
        <span class="headerlink"><a href="./safety.php">Safety</a></span>
        <span class="headerlink"><a href="./privacy.php">Privacy</a></span>
        <span class="headerlink"><a href="./pricing.php">Plus Account</a></span>
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