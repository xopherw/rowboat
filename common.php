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
<link href="./resources/css/'.strtolower($pagename).'.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
';

$headercontent = '
<a href="./"><div class="logo"><img src="./resources/media/logo.svg"></div></a>
<a href="./about.php">About</a>
<a href="./safety.php">Safety</a>
<a href="./privacy.php">Privacy</a>
<a href="./pricing.php">Plus Account</a>
';
