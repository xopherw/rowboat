<?php
$pagename = "Pricing";
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
        <h1>Pricing Tiers</h1>
        <div class="pricetable">
          <div class="titlecol">
            <div class="pricetitle">&nbsp;</div>
            <div class="pricebox">Price</div>
            <div class="pricebox">Daily Matches</div>
            <div class="pricebox">Matching Parameters</div>
            <div class="pricebox">Advanced Matching</div>
            <div class="pricebox">Unlimited Video Chat Time</div>
            <div class="pricebox">Custom Location</div>
            <div class="pricebox">Unlimited Text Time</div>
            <div class="pricebox">Aditional Stats</div>
          </div>
          
          
          <div class="pricecol">
            <div class="pricetitle">Basic</div>
            <div class="pricebox">Free</div>
            <div class="pricebox">1</div>
            <div class="pricebox">5</div>
            <div class="pricebox">N</div>
            <div class="pricebox">N</div>
            <div class="pricebox">N</div>
            <div class="pricebox">N</div>
            <div class="pricebox">N</div>
          </div>
          
          
          <div class="pricecol">
            <div class="pricetitle">Premium</div>
            <div class="pricebox">$4.99 one time</div>
            <div class="pricebox">5</div>
            <div class="pricebox">20</div>
            <div class="pricebox">Y</div>
            <div class="pricebox">N</div>
            <div class="pricebox">Y</div>
            <div class="pricebox">N</div>
            <div class="pricebox">N</div>
          </div>
          
          
          <div class="pricecol">
            <div class="pricetitle">Premium+</div>
            <div class="pricebox">$19.99 one time</div>
            <div class="pricebox">&infin;</div>
            <div class="pricebox">&infin;</div>
            <div class="pricebox">Y</div>
            <div class="pricebox">Y</div>
            <div class="pricebox">Y</div>
            <div class="pricebox">Y</div>
            <div class="pricebox">Y</div>
          </div>
        </div>
      </div>
      <div class="break"></div>
    </div>
    <footer><?php echo $footercontent; ?></footer>
  </body>
  <script src="./common.js"></script>
</html>

