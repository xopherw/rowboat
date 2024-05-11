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
    <span style="text-align: center;">
      <p><img src="./resources/media/logo.svg" id="logo"/></p>
      <h1>Rowboat</h1>
    </span>
    <h2>A dating app that focuses on getting you off your island and into a 'ship!</h2>
    <p>Plus we're open source and privacy focused</p>

    <p><a href="./videochat.php">here</a> is a basic video chat interface</p>

    <p>My thinking is:</p>
    <ol>
      <li>user creates account</li>
    <li>user uploads some images</li>
    <li>user answers some questions about:</li>
    <ul>
      <li>why they're on the app</li>
      <li>what they want in a partner</li>
      <li>info about themselves</li>
    </ul>
    <li>the app will cross reference what the user wants with who others are and find the most compatible ones</li>
    <li>app gives 1 person to match with per day* and a 48 hour time limit for texting to have a video call (or they can take it off the app)</li>
    <li>Assume user has a video call, then at the scheduled time they get a notification and they can chat for as long as they like</li>
    <li>after the call, the users can rate their experience with the other</li>
    <ul>
     <li>if a person is consistently getting poor reviews, then that can trigger an investigation or something</li>
   </ul>
    <li>repeat 4 thru 7 until the user removes the app</li>


    <p>*this could be an opportunity for monetization, among other places such as increasing search radius, additional preferences to take into account (for better matches), a longer texting time limit, HD video, addiitonal stats like how many people are available on the app/heatmap of people, etc etc</p>

    <br>

    <h2>User Flow</h2>
    <ul>
      <li>create account</li>
      <li>add images</li>
      <li>provide reason for using the app (MUST give long-term or short-term, nothing in between)</li>
      <li>answer some questions</li>
      <li>get matched with folks</li>
      <li>have a countdown to schedule a video chat</li>
      <li>Video chat</li>
      <li>user reputation rating for text and video (were they inappropriate or spam?)</li>
      <li>periodic reminders to stay viligant about scams and such</li>
    </ul>
  

    <h2>server flow</h2>
    <ul>
      <li>user creates account</li>
      <li>user submits answers about who they are and what they want</li>
      <li>server applies filter to other users and gives compatibility suggestions (filters can include estimated BMI, age, MBTI/OCEAN, life goals, interests)</li>
      <li>user specifies how many they want every few days?</li>
      <li>server facilitates video chat/meetup time & place</li>
      <li>server records user ratings and can offer suggestions</li>
    </ul>

    <h2>How we monetize and what we do with your data</h2>
    <ul>
      <li>pro accounts</li>
      <li>free trial period</li>
      <li>ads - not personalized (can come from local shops?)</li>
      <li><b>no user data is to be sold. EVER.</b></li>
      <li>all data should be encrypted, so only users with valid keys can see the data (a la TLS, but we're the verifier)</li>
      <li>must be open source</li>
    </ul>

    <br>
    <br>
    <br>

    <h2>TODO List</h2>
    <h3>Triage</h3>
    
    <h4>L1 - HIGH PRIORITY</h4>
    <ul>
      <li>&#9989; Design logo & branding</li>
      <li>&#9989; build basic page structure</li>
      <li>build basic web app front end</li>
      <li>obtain domain (rowboatdating.com)</li>
      <li>obtain email address(es)</li>
      <li>&#9989 set up git - link to it <a href="https://github.com/steveman1123/rowboat">here</a></li>
      <li>set up web server</li>
      <li>set up db</li>
      <li>set up db interface & interface vetting (key verification, rate limiting, etc)</li>
    </ul>

    <h4>L2 - MID-HIGH PRIORITY</h4>
    <ul>
      <li>build full web app</li>
      <li>build android app</li>
      <li>build ios app</li>
      <li>set up video chat interface (webRTC)</li>
      <li>set up calendar planning poll</li>
      <li>set up location</li>
      <li>set up user profiles</li>
    </ul>

    <h4>L3 - MID PRIORITY</h4>
    <ul>
      <li>set up questionaires & preferences</li>
      <li>set up user filtering</li>
      <li>set up monetization avenues</li>
    </ul>
    
    <h4>L4 - MID-LOW PRIORITY</h4>
    <ul>
      <li>test with small group of people, test edge cases</li>
      <li>terms and conditions</li>
      <li>market and advertise (local at first)</li>
    </ul>
    
    <h4>L5 - LOW PRIORITY</h4>
    <ul>
      <li>display user stats to users (how many others are in the area, how many X seeking Y, tips to improve profile, user heatmap, etc)</li>
      <li>technical support & user reported spam/scams</li>
    </ul>

    <br>
    <br>
    <br>

    <h2>files</h2>
    <?php
    $files = array_filter(glob("./*"), 'is_file');
    foreach ($files as $v) {
      echo "<p><a href='".$v."'>".$v."</a></p>";
    }

    ?>
  </body>
</html>
