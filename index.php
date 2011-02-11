<?php
// do-not-track PoC.

$dnt = isset($_SERVER['HTTP_DNT']);
$dntval = $_SERVER['HTTP_DNT'];
$cky = $_COOKIE['trackingcookie'];

// if user hasn't opted out and doesn't have a cookie, set one.
if (!$dnt and $dntval != 1 and !isset($cky)) {
  $value = base64_encode(rand(1000000000,9999999999));
  setcookie('trackingcookie', $value, time()+3600000);
  $cky = $value;
}
?>

<html>
<head>
<title>Do-Not-Track Example Application</title>
<link rel="stylesheet" href="styles.css" />
</head>
<body class="main">
<h1>Do-Not-Track Example Application</h1>
<div class="innercontent roundedcorners">
<div class="sidebar">

<a href="http://dnt.sidstamm.com">
<img style="border:1px solid blue;"
     src="http://dnt.sidstamm.com/track.php"
     alt="Do-Not-Track demo"
     title="This image may be tracking you.  Click for more info and to opt out."/>
</a>
<br/>

<h1>How to Opt Out</h1>
<p>If you have a browser that supports the <a href="http://donottrack.us">DNT header</a>, you can enable it.  More information on how to enable it in Firefox <a href="http://blog.sidstamm.com/2011/01/try-out-do-not-track-http-header.html">is available here</a>.  If you'd prefer to opt-out from this site's tracking using a cookie-based method, or aren't using Firefox 4, <a href="./optout.php">click here to get the opt-out cookie</a>.

<h1>Join the Experiment!</h1>
<p>To participate in the example, embed a graphic on your own web page and watch as your visitors get tracked!  Copy and paste this code into your page:</p>

<textarea id="samplecode" rows=7 cols=35>
<a href="http://dnt.sidstamm.com">
<img style="border:1px solid blue;"
     src="http://dnt.sidstamm.com/track.php"
     alt="Do-Not-Track demo"
     title="This image may be tracking you.  Click for more info and to opt out."/>
</a>
</textarea>

</div>
<p>As an example, this application shows how you can be tracked around the web.  You'll see images like the one to the right on a variety of sites across the web.
Every time you see them, they are phoning home to say what page showed them to you.  This is how various web services track where you visit on the web and then do things like customize the content they show you.

  If you are being tracked, you can see below the list of sites where we've seen you in the past. While we don't know who you are, we've assigned you a random number (using cookies) and you send our servers that number when you load the image -- no matter which site you're on when you load this image.

If you'd like to avoid the tracking, simply turn on the "Do Not Track" feature in your Firefox 4 pre-release, or <a href="optout.php">click here</a> to opt out by setting an "opt out" cookie.</p>

<h3>WHERE HAVE YOU BEEN?</h3>
 
<? if($dnt and $dntval == 1) { ?>

<p>You've enabled the "DNT" header in your browser, so we haven't watched where you go.  
If you want to see this site in action, you need to turn it off and then visit some of the <a href="siteslist.php">sites</a> that have our tracking image on them.</p>

<? } elseif(!isset($cky)) { ?>

<p>You've not enabled the "DNT" header in your browser, but you've disabled the cookie feature we use to track people.  This is a more effective anti-tracking technique than employing the do-not-track header, but it can make it difficult to use the web in other ways.
If you want to see this site in action, you need to turn it off and then visit some of the <a href="siteslist.php">sites</a> that have our tracking image on them.

<? } elseif($cky == "optout") { ?>

<p>You've chosen to opt-out of our tracking using the opt-out cookie method.  If you'd like to play with the demonstration, please clear the cookies set for "dnt.sidstamm.com" and then visit some of the <a href="siteslist.php">sites</a> that have our tracking image on them.

<? } else { ?>

<p>Because you haven't enabled the do-not-track ("DNT") header in your browser, and we were able to set a cookie in your browser, we know a little bit about your browsing history.  Here's a list of sites that we think you've visited, including when:</p>

<iframe id="resultslist" src="./results.php"></iframe>

<? } ?>

<h3>PRIVACY NOTICE</h3>
<p>This web site, <tt>dnt.sidstamm.com</tt> tracks you across other web sites as you browse.  The sites we know about are only the sites that have chosen to participate in the study.  We do not know who you are, only a small sample of sites you have been to.  This data is not shared with anyone and is for illustrative purposes only.  The data collected is only retained for seven days.</p>

</div>

</body>
</html>
