<?php
$pagename = "Privacy";
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
        <h1>Privacy and Data Usage</h1>
        <p>We respect your privacy.</p>
        <p>Rowboat is open-source and fully auditable</p>
        <p>All your data is end-to-end encrypted, meaning only you and the descision making service can see it. No, not even the developers or Uncle Sam.</p>
        <p>The only data we show is what you've made available in your profile: the pictures and a small blurb.</p>
        <p>Your data is not, and never will be sold.</p>
        <p>We only use what you provide us to improve your match compatibility.</p>
        <div class="pic"><img src="https://images.pexels.com/photos/3769109/pexels-photo-3769109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"></div>
      </div>
      <div class="break"></div>
    </div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
  <script src="./common.js"></script>
</html>

