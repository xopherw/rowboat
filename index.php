<?php
$businessname = "Rowboat";
$shortdescription = "Dating for Everyone";
$longdescription = "Get Off Your Island, and into a 'Ship!";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $businessname." | ".$shortdescription;?></title>
    <link rel="shortcut icon" href="./resources/media/logo.svg">
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <meta name="description" content="<?php echo $longdescription;?>">
    <link href="./resources/css/home.css" rel="stylesheet" type="text/css">
    <link href="./resources/css/common.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="header">
      <div class="logo"><img src="./resources/media/logo.svg"></div>
      <div class="headerlinks">
        <span class="headerlink"><a href="./about">About</a></span>
        <span class="headerlink"><a href="./safety">Safety</a></span>
        <span class="headerlink"><a href="./privacy">Privacy</a></span>
        <span class="headerlink"><a href="./pricing">Pricing</a></span>
      </div>
      <div class="signup"><a href="./signup">sign up</a></div>
      <div class="login"><a href="userhome">log in</a></div>
    </div>
    <div class="main">
      <div class="titletext">Get into Your Next 'Ship!</div>
      <div class="blurb"></div>
    </div>
    <div class="footer"></div>
  </body>
</html>