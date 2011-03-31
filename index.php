<?php
require_once('./config/config.php');

// do-not-track PoC.

$dnt = isset($_SERVER['HTTP_DNT']);
$dntval = $_SERVER['HTTP_DNT'];

?>

<html>
<head>
<title>Mozilla: Do Not Track</title>
 	<meta name="og:image" content="http://www-fx4-cdn.stage.mozilla.com/img/firefox-100.jpg">

<style>
    /* MetaWebPro font family licensed from fontshop.com. WOFF-FTW! */
    @font-face {
        font-family: 'MetaBlack';
        src: url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.eot');
        src: local('☺'), url('http://mozcom-cdn.mozilla.net/img/fonts/MetaWebPro-Black.woff') format('woff');
        font-weight: bold;
    }
</style>
	<link href="http://www-fx4-cdn.stage.mozilla.com/includes/min/min.css?g=css" rel="stylesheet">
    <script src="http://www-fx4-cdn.stage.mozilla.com/includes/min/min.js?g=js"></script>
    <meta name="WT.ad" content="Do Not Track;Do-not-track;DNT;Privacy;Advertising;Tracking" />
    <link rel="stylesheet" href="http://www-fx4-cdn.stage.mozilla.com/style/covehead/home-fx.css" media="screen" />
    <link rel="stylesheet" href="styles.css" media="screen" />
    <link rel="stylesheet" href="http://www-fx4-cdn.stage.mozilla.com/style/covehead/mozilla-expanders.css" media="screen" />
    <script src="http://www-fx4-cdn.stage.mozilla.com/js/mozilla-expanders.js"></script>

</head>
<body class="">
<noscript><div id="no-js-feature"></div></noscript>
<div id="wrapper">
<div id="doc">

  <div id="header">
     <div>
        <h1><a href="http://www.mozilla.com/" title="Back to home page">Mozilla</a></h1>
        <a href="http://www.mozilla.org/" class="mozilla">visit <span>mozilla</span></a>
     </div>
  </div>
<!-- start breadcrumbs #breadcrumbs -->
<p id="breadcrumbs"><a href="http://www.mozilla.com/" class="home">Home</a> <b>&#187;</b>
<span>DNT FAQ</span>

</p>
<!-- end breadcrumbs #breadcrumbs -->


<div id='sidebar'>
<div style="text-align:center;margin-bottom:70px;margin-top:60px;">
<img style="border:1px solid blue;"
     src="/dnt_status.php"
     alt="Do Not Track Indicator"
     title="Mozilla's Do Not Track Indicator."/>
</div>

<div class='sidebar-box' style="margin-bottom:50px;">
<h3>Enable Do Not Track in<span/>Firefox 4</span></h3>
<p style="text-align:center;">
<a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">
<img alt="Options window - Advanced panel - Do Not Track" 
	 class="frameless" 
	 src="images/dnt-config-screenshot-thumb.jpg" 
	 title="Enabling Do Not Track">
<br/>
Click for Instructions
</a>
</p>
</div>

<? if (strchr($_SERVER['HTTP_USER_AGENT'], "MSIE 9.0")) { ?>

<div class="sidebar-box">
<h3>Do Not Track in Your<span>browser</span></h3>
  <? if ($dnt && $dntval == "1") { ?>
  <p>You're using Internet Explorer 9 (IE 9), and your browser is sending the DNT header because you've enabled Tracking Protection!  This means you're using one or more <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection Lists</a>, and as a result, Internet Explorer is asking all sites to stop tracking you.</p>
  <? } else { ?>
  <p>To enable Do Not Track, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install Mozilla's Simple Tracking Protection List. <a href="javascript:window.external.msAddTrackingProtectionList('dnt-enabler.tpl', 'Mozilla\'s DNT Helper for IE');  window.location.reload()">Click here to install</a> and enable the DNT header.</p>
  <? } ?>
</div>
<? } else { ?>
<div class="sidebar-box">
<h3>Enable Do Not Track in <span>Internet Explorer 9</span></h3>
  <p>To enable Do Not Track in IE 9, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install <a href="./dnt-enabler.tpl">Mozilla's Simple Tracking Protection List</a>. If you view this page in IE 9, there will be instructions right here.</p>
</div>
<? } ?>

</div><!-- end sidebar -->

<div id="main-feature" style="z-index:1">
<h2><span style="text-transform: capitalize">Do Not Track</span></h2>
<p>As a nonprofit organization, Mozilla's mission is to make the Web more open and 
participatory. We believe it is crucial to put you in control of your online experience. 
We are seeking ways to give you better insight and control into the ways your personal 
information is collected, used, stored and shared online.

<p>Firefox 4 offers a Do Not Track (DNT) feature that lets you express a preference not to be tracked by web sites. When the feature is enabled, Firefox will tell advertising networks and other web sites and applications that you want to opt-out
of tracking for purposes like behavioral advertising.</p>
</div>

<div id="main-content">

      <h3>Frequently Asked <span>Questions</span></h3>
          <p>Different people have different privacy preferences. The Do Not Track feature helps you express yourself to web sites.</p>

<div>
      <div class="expander expander-odd expander-first">
	    <h4 class="expander-header">What is Do Not Track?</h4>
		<div class="expander-content"> 
          <p>Do Not Track is a step toward putting you in control of the way your 
information is collected and used online. Do Not Track is a feature in Firefox 4 that 
allows you to let a website know you would like to opt-out of third-party tracking for 
purposes including behavioral advertising. It does this by transmitting a Do Not Track 
HTTP header every time your data is requested from the Web.</p>
        </div>
	   </div>
	   
	         <div class="expander expander-even">
	    <h4 class="expander-header">Does Do Not Track block ads?</h4>
		<div class="expander-content"> 
          <p>No, you will still see ads with Do Not Track enabled. However, Do Not Track 
may change the type of ads you see. For example, behavioral ads are targeted to your 
interests based on the web sites you visit and the search terms you use. If you request
that web sites Do Not Track you, and the sites respect your privacy preferences, you 
will see more generic ads in place of behavioral ads.</p>
        </div>
	   </div>

	         <div class="expander expander-odd">
	    <h4 class="expander-header">How does Do Not Track work with other privacy tools?</h4>
		<div class="expander-content"> 
	   <p>Do Not Track is one of many privacy solutions. DNT does not replace your 
anti-virus software, will not encrypt data, and is not a security mechanism. There are
several other <a href="http://www.mozilla.com/firefox/security">privacy and 
security</a> features within Firefox.
        </div>
	   </div>
	   
	  <div class="expander expander-even"> 
        <h4 class="expander-header">Will Do Not Track affect the rest of my Web experience?</h4>
        <div class="expander-content"> 
          <p>Do Not Track may interfere with some personalized services you enjoy. For example, a Do Not Track request might mean you would have to type in your zip code each time you want to view a weather report, rather than seeing the weather automatically displayed. Personalization on web sites can save you time and repetitive typing, but it requires data.</p>
        </div>
		</div>
		
		  <div class="expander expander-odd"> 
	<h4 class="expander-header">How do I enable Do Not Track in Firefox 4?</h4>
	<div class="expander-content">
		  <p>This feature is not enabled by default. You can find the Do Not Track 
            request on the Advanced pane. <span id="platform-note">On Windows, 
            go to Tools &gt; Options... &gt; Advanced.</span></p>
		<noscript>
          <p>On Mac OS X, go to Firefox &gt; Preferences… &gt; Advanced. On Linux, go to Tools &gt; Options &gt; Advanced.</p>
          </noscript>
          Click to check the box next to &quot;Tell web sites I do not want to 
          be tracked&quot;. For more information, see the help file on 
		  <a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">how to stop web sites from tracking you</a>.</p>  
		  </div>
	</div>

		  <div class="expander expander-even"> 
	<h4 class="expander-header">Will companies honor my Do Not Track preference?</h4>
	<div class="expander-content">
          <p>Companies are starting to support DNT, but you may not notice any changes initially. We are actively working with companies that have started to implement DNT, with others who have committed to doing so soon.</p>
		</div>
	</div>

        <div class="expander expander-odd"> 
		  <h4 class="expander-header">Where can I learn more?</h4>
          
        <div class="expander-content"> Other interesting work about Do Not Track and online privacy:
          <ul style='list-style-position:inside'>
            <li><a href="http://support.mozilla.com/en-US/kb/Private%20Browsing">Private 
              browsing</a> in Firefox &#8212; limits saving data about which sites and pages you have visited online</li>
            <li><a href="http://support.mozilla.com/en-US/kb/Enabling%20and%20disabling%20cookies">Managing 
              cookies</a> in Firefox &#8212; lets you control how <a href="http://support.mozilla.com/kb/Cookies">cookies</a> are saved on your computer</li>
            <li><a href="http://donottrack.us/">donotrack.us</a> project &#8212; Stanford researchers working on the ideas behind Do Not Track</li>
            <li>Mozilla and Stanford's Do Not Track <a href="http://datatracker.ietf.org/doc/draft-mayer-do-not-track/">submission 
              to the IETF</a> &#8212; IETF is a standards body that helps define how the Web works, regardless of which Internet browser you use</li>
            <li><a href="http://www.ghostery.com">Ghostery</a> &#8212; a tool that lets you learn which sites are tracking you online</li>
            <li>See <a href="http://www.futureofprivacy.org/wp-content/uploads/2009/11/data.gif">where your data goes</a> before you click &#8212; an image from the Future of Privacy Forum</li>
          </ul>
		
		  </div>
	    </div>
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
