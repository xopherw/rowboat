<?php
$appname = "Rowboat";

$longdescription = "Rowboat is a dating app made by people, for people.".
" We want to see you find a great match, then get off the app once and for all!".
" No hidden fees. No playing games. Just pure and simple matching and dating.".
" Are you ready to get off your lonely island, and into a 'ship?";


$headcontent = '
<meta charset="utf-8">
<title>'.$appname.' | '.$pagename.'</title>
<link rel="shortcut icon" href="./resources/media/logo.svg">
<meta name="viewport" content="width=device-width; initial-scale=1">
<meta name="description" content="'.$longdescription.'">
<link href="./resources/css/common.css" rel="stylesheet" type="text/css">
<link href="./resources/css/'.strtolower(str_replace(" ","",$pagename)).'.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
';

$headercontent = '
<a href="./"><div class="logo"><img src="./resources/media/logo.svg"></div></a>
<a href="./about.php">About</a>
<a href="./safety.php">Safety</a>
<a href="./privacy.php">Privacy</a>
<a href="./pricing.php">Pricing</a>
<a href="./login.php">Login/Signup</a>
';

$signinbox = '
<div class="signin">
  <h2>LOG IN</h2>
  <form method="post" action="./userhome.php">
    <p><label for="email">Email</label></p>
    <input type="email" name="email" autofocus>
    <p><label for="pass">Password</label></p>
    <input type="password" name=pass">
    <p><button type="submit">Let\'s Go!</button></p>
  </form>
  <p><button class="goog oauth"><img src="./resources/media/goog.png">&emsp;&emsp;Sign in with Google</button></p>
  <p><button class="aapl oauth"><img src="./resources/media/aapl.png">&emsp;&emsp;Sign in with Apple</button></p>
  <p><a href="./forgotpassword.php">Forgot your password?</a></p>
  <p><a href="./makeaccount.php">Don\'t have an account yet?</a></p>
</div>
';

$forgotpassbox = '
<div class="signin">
  <h2>FORGOT PASSWORD</h2>
  
</div>
';

$footercontent = '
<div class="footerlinks">
  <p><a href="./about.php">About Rowboat</a></p>
  <p><a href="./safety.php">Online Safety</a></p>
  <p><a href="./privacy.php">Privacy and Data Usage</a></p>
  <p><a href="./pricing.php">Pricing</a></p>
</div>

<div class="footerlinks">
<p><a href="./contactus.php">Contact Us</a></p>
  <p><a href="https://github.com/steveman1123/rowboat">View Source</a></p>
  <p><a href="https://github.com/steveman1123/rowboat/issues">Technical Support</a></p>
</div>
  
<div class="quote" onclick="newquote();">"Being deeply loved by someone gives you strength, while loving someone deeply gives you courage." ~Lao Tzu</div>
';