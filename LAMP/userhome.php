<?php

$pagename = "User Home";
include "./common.php";

//include this file to redirect anyone not logged in away from the page
//if they are logged in, then they can access it
include "./internalpage.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $headcontent; ?>
  </head>
  <body>
    <span class="flextog hamback"><span class="hamburger" tabindex="0"></span></span>
    <header><?php echo $internalheader; ?></header>
    <div class="maincontent">
      <div class="matches">Matches</div>
      <div class="texts">Text Chats</div>
      <div class="vids">Video Chats</div>
      <div class="cal">Calendar</div>
      <div class="stats">Extra Stats</div>
      <div class="acct">Account Settings</div>
      <div class="prof">Profile Settings</div>
    </div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
  <script src="./common.js"></script>
</html>