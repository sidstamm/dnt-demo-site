<?php
require_once('./config/config.php');

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
<title>Mozilla: Do-Not-Track Example Application</title>
<link rel="stylesheet" href="styles.css">
<link href="http://mozcom-cdn.mozilla.net/includes/min/min.css?g=css" rel="stylesheet">

<style>
    /* MetaWebPro font family licensed from fontshop.com. WOFF-FTW! */
    @font-face {
        font-family: 'MetaBlack';
        src: url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.eot');
        src: local('☺'), url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.woff') format('woff');
        font-weight: bold;
    }
</style>

</head>
<body class="">
<div id="wrapper">
<div id="doc">

  <div id="header">
     <div>
        <h1><a href="http://www.mozilla.com/" title="Back to home page">MozillaBLAH</a></h1>
        <a href="http://www.mozilla.org/" class="mozilla">visit <span>mozilla</span></a>
     </div>
  </div>
<!-- start breadcrumbs #breadcrumbs -->
<p id="breadcrumbs"><a href="http://www.mozilla.com/" class="home">Home</a> <b>&#187;</b>
<span>DNT Example</span>

</p>
<!-- end breadcrumbs #breadcrumbs -->


<div id='sidebar'>
<div style="text-align:center;margin-bottom:50px;">
<a href="/">
<img style="border:1px solid blue;"
     src="/track.php"
     alt="Do-Not-Track demo"
     title="This image may be tracking you.  Click for more info and to opt out."/>
</a>
</div>

<div class='sidebar-box'>
<h3>Why we made this <span>Example</span></h3>
<p>We don't usually track people!  This demo is put together to show how a simple tracking application can be created and how it can <em>very easily</em> honor the new DNT header.</p>
</div>

<div class='sidebar-box'>
<h3>How to <span>Opt Out</span></h3>
<p>This site will stop tracking you if you do either of the following:
<ul>
<li><a href="http://blog.sidstamm.com/2011/01/try-out-do-not-track-http-header.html">Enable the DNT header in Firefox</a>.
<li><a href="./optout.php">Set an opt-out cookie</a>.
</ul>
</div>

<div class='sidebar-box'>
<h3>How to<span>Get Involved</span></h3>
<p>If you'd like your site to be part of this demo, put this code on your own web page to tell us when people visit your site:</p>

<textarea id="samplecode" rows=8 readonly>
<a href="http://<?php echo $_SERVER['SERVER_NAME']?>">
<img style="border:1px solid blue;"
     src="http://<?php echo $_SERVER['SERVER_NAME']?>/track.php"
     alt="Do-Not-Track demo"
     title="This image may be tracking you.  Click for more info and to opt out."/>
</a>
</textarea>
</div>

</div><!-- end sidebar -->

<div id="main-feature">
<h2><span>Do Not Track</span> Example Application</h2>
</div>

<div id="main-content">
<p>Many companies track where you go as you browse from site to site.  Often this is done by placing ads on a wide variety of sites: if my advertisement is on a thousand sites, then I can figure out which of those thousand sites you've been to.</p>

<p>Lots of people don't like this.  In Firefox 4, we've added a feature called the "DNT Header" that lets you tell these "trackers" that you don't like it.  We created this demonstration since we don't do this type of tracking at Mozilla.</p>

<h3>What's This Demo Doing?</span></h3>
<p>This application shows how you can be tracked around the web.  You'll see images like the one on the top right of this site on a variety of other sites across the web too.  Every time you see them, your browser loads them from our server.  In the process, we're told what pages were showing them to you.  This is how various web services track where you visit on the web and then do things like customize the content they show you.</p>

<p>If you are being tracked, this page will show you the sites we've seen you visit in the past. While we don't know <em>who</em> you are, we've given your browser a random number (using cookies) and you send us that number when you load the image.</p>

<h3>Where Have You Been? </h3>

<? if($dnt and $dntval == 1) { ?>

<p>You've enabled the do-not-track ("DNT") header in your browser, so we aren't tracking you!
If you want to see this site in action, you need to let us track you buy turning the feature off and then visit some of the sites that have our tracking image on them.</p>

<? } elseif(!isset($cky)) { ?>

<p>You've not enabled the "DNT" header in your browser, but you've disabled the cookie feature we use to track people.  This is a more effective anti-tracking technique than employing the do-not-track header, but it can make it difficult to use the web in other ways.
If you want to see this site in action, you need to turn it off and then visit some of the sites that have our tracking image on them.

<? } elseif($cky == "optout") { ?>

<p>You browser has opt-out cookies!  This means we're not tracking you.  If you'd like to play with the demonstration, please clear the cookies set for this site ("<?php echo $_SERVER['SERVER_NAME']?>") and then visit some of the sites that have our tracking image on them.

<? } else { ?>

<p>Because you haven't enabled the do-not-track ("DNT") header in your browser, and we were able to set a cookie in your browser, we know a little bit about your browsing history.</p>

<p>If you'd like us to stop tracking you, simply turn on the "Do Not Track" feature in Firefox 4, or <a href="optout.php">click here</a> to opt out by setting an "opt out" cookie.</p>

<p>Here's a list of sites that we think you've visited, and when we saw you there:</p>

<div style="margin:0;padding:0;width:70%">
<iframe id="resultslist" src="./results.php"></iframe>
</div>

<? } ?>

<h3>Privacy Notice</h3>
<p>This web site, <tt><?php echo $_SERVER['SERVER_NAME']?></tt> tracks you across other web sites as you browse.  The sites we know about are only the sites that have chosen to participate in the study.  We do not know who you are, only a small sample of sites you have been to.  We promise not to share information about your browsing habits with anyone else without your permission.  In fact, we really don't want the data, so we'll delete any tracking data after seven days.</p>

</div><!-- end main-content -->

</div><!-- end doc -->
</div><!-- end wrapper -->

        <div id="footer">
        <div id="footer-contents" role="contentinfo">

                <div id="copyright">
                        <p>Except where otherwise <a href="http://www.mozilla.com/en-US/about/legal.html#site">noted</a>, content on this site is licensed under the <br /><a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.</p>

                </div>

        </div>
        </div>


</body>
</html>
