<?php
require_once('./config/config.php');

// do-not-track PoC.

$dnt = isset($_SERVER['HTTP_DNT']);
$dntval = $_SERVER['HTTP_DNT'];

?>

<html>
<head>
<title>Mozilla: Do-Not-Track Status Indicator</title>
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
     src="/dnt_status.php"
     alt="Do-Not-Track Indicator"
     title="Mozilla's Do-Not-Track Indicator.  Click for more info on web tracking."/>
</a>
</div>

<div class='sidebar-box'>
<h3>Why we made this <span>Example</span></h3>
<p>This indicator and information site has been put together to show how it can <em>very easy</em> to detect and honor the new DNT header.</p>
</div>

<div class='sidebar-box'>
<h3>How to<span>Get Involved</span></h3>
<p>If you'd like your site to be part of this demo, put this code on your own web page to show your visitors if they've enabled it</p>

<textarea id="samplecode" rows=8 readonly>
<a href="http://<?php echo $_SERVER['SERVER_NAME']?>">
<img style="border:1px solid blue;"
     src="http://<?php echo $_SERVER['SERVER_NAME']?>/dnt_status.php"
     alt="Do-Not-Track Indicator"
     title="Mozilla's Do-Not-Track Indicator.  Click for more info on web tracking."/>
</a>
</textarea>
</div>

</div><!-- end sidebar -->

<div id="main-feature">
<h2><span>Do Not Track</span> Information Page</h2>
</div>

<div id="main-content">
<p>Many companies track where you go as you browse from site to site.  Often this is done by placing ads on a wide variety of sites: if my advertisement is on a thousand sites, then I can figure out which of those thousand sites you've been to.</p>

<p>Lots of people don't like this.  In Firefox 4, we've added a feature called the "DNT Header" that lets you tell these "trackers" that you don't like it.  We created this site to show you how easy it is for sites to honor a DNT header, and how to enable it.</p>

<h3>How to Opt Out</h3>
<p>If you'd like to ask sites to stop tracking you, you can send the DNT header:</p>
<dl>
<dt><b>In Firefox 4:</b></dt>
<dd><a href="http://blog.sidstamm.com/2011/01/try-out-do-not-track-http-header.html">Enable DNT</a>.</dd>
<dt><b>In Earlier versions of Firefox:</b></dt>
<dd> Install a DNT-enabling add-on (like <a href="https://addons.mozilla.org/en-US/firefox/addon/universal-behavioral-advertisi/">UBAO</a>).</dd>
</dl>
</ul>

<div class="sidebar-menu">
<h3>What does it mean?</h3>
For more information, check out Alex and Sid's blog entries on this new feature:
<ul style="list-style-position: inside; margin-left:2em">
<li><a href="http://firstpersoncookie.wordpress.com/2011/01/31/dnt-1-tell-sites-i-do-not-want-to-be-tracked/">DNT: 1 = "Tell sites I do not want to be tracked</a>
<li><a href="http://firstpersoncookie.wordpress.com/2011/01/23/more-choice-and-control-over-online-tracking/">More Choice and Control Over Online Tracking</a>
<li><a href="http://blog.sidstamm.com/2011/01/try-out-do-not-track-http-header.html">Try out the "Do Not Track" HTTP Header</a>
<li><a href="http://blog.sidstamm.com/2011/01/opting-out-of-behavioral-ads.html">Technical details</a>
</ul>
</div>


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
