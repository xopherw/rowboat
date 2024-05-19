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
    <header><?php echo $headercontent; ?></header>
    <div>Account settings</div>
    <div>profile settings</div>
    <div>Video Chats</div>
    <div>Calendar</div>
    <div>text chats</div>
    <div>additional stats</div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
</html>