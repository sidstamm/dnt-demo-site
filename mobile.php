<!DOCTYPE html>
<html>
<head>
<title>Mozilla: Do Not Track</title>
<meta name="og:image" content="http://mozcom-cdn.mozilla.net/img/firefox-100.jpg">
<meta content="width=device-width, initial-scale=1" name="viewport">
<style>
    /* MetaWebPro font family licensed from fontshop.com. WOFF-FTW! */
    @font-face {
        font-family: 'MetaBlack';
        src: url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.eot');
        src: local('☺'), url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.woff') format('woff');
        font-weight: bold;
    }
</style>
<link href="http://mozcom-cdn.mozilla.net/includes/min/min.css?g=css" rel="stylesheet">
<script src="http://mozcom-cdn.mozilla.net/includes/min/min.js?g=js"></script>
<meta name="WT.ad" content="Do Not Track;Do-not-track;DNT;Privacy;Advertising;Tracking" />
<link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/home-fx.css" media="screen" />
<link rel="stylesheet" href="mobile.css" media="screen" />
<link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/mozilla-expanders.css" media="screen" />
<script src="http://mozcom-cdn.mozilla.net/js/mozilla-expanders.js"></script>
</head>
<body>

<div id="wrapper">
<div id="doc">

<?php include 'includes/header.php'; ?>

<?php include 'includes/description.php'; ?>

<p style="text-align: center;">
  <img style="border:1px solid blue;"
       src="/dnt_status.php"
       alt="Do Not Track Indicator"
       title="Mozilla's Do Not Track Indicator."/>
</p>

<h3>How to Enable Do Not Track</h3>

<ul class="listview">
  <li class="expander">
    <h4 class="expander-header">In Firefox 4</h4>
    <div class="expander-content">
      <p style="text-align:center;">
        <a href="images/dnt-mobile-config-screenshot.png">
          <img alt="Settings panel - Do Not Track"
             class="frameless"
             src="images/dnt-mobile-config-screenshot-thumb.png"
             title="Enabling Do Not Track"></a>
          <br/>
          Open the settings window, then set &quot;Tell sites not to track me&quot; to Yes.
        </a>
      </p>
    </div>
  </li>
  <li class="expander expander-even">
    <h4 class="expander-header">In Internet Explorer 9</h4>
    <div class="expander-content">
      <?php if ($ie9): ?>
        <?php if ($dnt): ?>
          <p>You're using Internet Explorer 9 (IE 9), and your browser is sending the DNT header because you've enabled Tracking Protection!  This means you're using one or more <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection Lists</a>, and as a result, Internet Explorer is asking all sites to stop tracking you.</p>
        <?php else: ?>
          <p>To enable Do Not Track, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install Mozilla's Simple Tracking Protection List. <a href="javascript:window.external.msAddTrackingProtectionList('dnt-enabler.tpl', 'Mozilla\'s DNT Helper for IE');  window.location.reload()">Click here to install</a> and enable the DNT header.</p>
        <?php endif; ?>
      <?php else: ?>
        <p>To enable Do Not Track in IE 9, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install <a href="./dnt-enabler.tpl">Mozilla's Simple Tracking Protection List</a>. If you view this page in IE 9, there will be instructions right here.</p>
      <?php endif; ?>
    </div>
  </li>
</ul>

<h3>Frequently Asked Questions</h3>
<?php include 'includes/faq.php'; ?>
</div><?php # end #doc ?>
</div><?php # end #wrapper ?>

<div id="footer">
  <div id="footer-contents" role="contentinfo">
    <a class="desktop-link" href="/?v=desktop">View Full Site</a>
    <div id="copyright">
      <p>Except where otherwise <a href="http://www.mozilla.com/en-US/about/legal.html#site">noted</a>, content on this site is licensed under the <br /><a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.</p>
    </div>
  </div>
</div>

</body>
</html>
