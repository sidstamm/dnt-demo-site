<?php

$mc = 'mdnt';
$mr = '/(android|fennec|iemobile|iphone|opera (mini|mobi))/i';
$ier = '/MSIE 9\.0/i';
$ua = $_SERVER['HTTP_USER_AGENT'];

if ($_GET['v'] == 'desktop') {
    setcookie($mc, 'off', time() + 30 * 86400);
    header('Location: /');
    exit();
} elseif ($_GET['v'] == 'mobile') {
    setcookie($mc, 'on', time() + 30 * 86400);
    header('Location: /');
    exit();
}

$dnt = $_SERVER['HTTP_DNT'] == '1';
$mobile = (($_COOKIE[$mc] != 'off' && preg_match($mr, $ua))
           || $_COOKIE[$mc] == 'on');
$ie9 = (bool)preg_match($ier, $ua);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Mozilla: Do Not Track</title>
  <meta name="og:image" content="http://mozcom-cdn.mozilla.net/img/firefox-100.jpg">
  <?php if ($mobile): ?>
    <meta content="width=device-width, initial-scale=1" name="viewport">
  <?php endif; ?>

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
  <link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/mozilla-expanders.css" media="screen" />
  <script src="http://mozcom-cdn.mozilla.net/js/mozilla-expanders.js"></script>
  <?php if ($mobile): ?>
    <link rel="stylesheet" href="mobile.css" media="screen" />
  <?php else: ?>
    <link rel="stylesheet" href="styles.css" media="screen" />
  <?php endif; ?>
</head>

<body>
<noscript><div id="no-js-feature"></div></noscript>
<div id="wrapper">
<div id="doc">

<?php include 'includes/header.php'; ?>

<?php
if ($mobile) {
    include 'mobile.php';
} else {
    include 'desktop.php';
}
?>

</div><!-- end doc -->
</div><!-- end wrapper -->

<div id="footer">
  <div id="footer-contents" role="contentinfo">
    <?php if ($mobile): ?>
      <a class="desktop-link" href="/?v=desktop">View Full Site</a>
    <?php endif; ?>
    <div id="copyright">
      <p>Except where otherwise <a href="http://www.mozilla.com/en-US/about/legal.html#site">noted</a>, content on this site is licensed under the <br /><a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.</p>
    </div>
  </div>
</div>

</body>
</html>
