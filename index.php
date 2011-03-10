<?php
require_once('./config/config.php');

// do-not-track PoC.

$dnt = isset($_SERVER['HTTP_DNT']);
$dntval = $_SERVER['HTTP_DNT'];

?>

<html>
<head>
<title>Mozilla: Do-Not-Track</title>
<link rel="stylesheet" href="styles.css">
<link href="http://mozcom-cdn.mozilla.net/includes/min/min.css?g=css" rel="stylesheet">
    <script src="http://mozcom-cdn.mozilla.net/includes/min/min.js?g=js"></script>
    <link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/phishing-page.css" media="screen" />
    <link rel="stylesheet" href="http://mozcom-cdn.mozilla.net/style/covehead/mozilla-expanders.css" media="screen" />
<!-- %% Replace phishing-page.css before going live! -->

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
<h2><span>Do Not Track</span></h2>
<p>Firefox 4 or later contains a feature that lets you express a preference not to be tracked by web sites. If you enable this feature you will gain more Internet privacy, but some web interactions will no longer be personalized. The choice is yours!</p>
</div>

<div id="main-content">

      <h3>Frequently asked <span>Questions</span></h3>
      <div class="expander expander-odd"> 
        <div class="expander-content"> 
          <p>Different people have different privacy preferences. The Do Not Track feature helps you express yourself to web sites.</p>
		</div>
	   </div>

      <div class="expander expander-odd">
	    <h4 class="expander-header">What is the Do Not Track feature?</h4>
		<div class="expander-content"> 
          <p>Asking web sites not to track you expresses a preference to web site owners. As of Spring, 2011, this is a brand new feature. Initially, Do Not Track allows you to be counted as having a preference for privacy, but it does not create changes in your web browsing experience until companies support it. You can follow our RSS feed to learn which sites have announced they will honor Do Not Track soon, and to see which sites already have Do Not Track support now. </p>

          <p>Other Firefox privacy options focus on managing data that can be stored on your computer. Do Not Track focuses on data stored on computers you do not have access to. For example, when you visit a web site you have to send an IP address so it can communicate back to you.  IP addresses can give clues to your general geographic location. You cannot visit a web site without sending an IP address, but you can request that web sites not track you over time in their databases.</p>
        </div>
	   </div>
	   
	         <div class="expander expander-odd">
	    <h4 class="expander-header">What isn't the Do Not Track feature?</h4>
		<div class="expander-content"> 
          <p>Do Not Track is not an ad blocker. You will still see as many ads with Do Not Track enabled as without. The difference is the type of ads you see. For example, behavioral ads are targeted to your interests based on the web sites you visit and the search terms you use. If you request that web sites do not track you, you will see more generic ads in place of behavioral ads.</p>
          <p>Do Not Track does not enforce your privacy preferences. Sites can ignore your request not to be tracked. Do Not Track will not protect you from bad actors or malicious sites. Do Not Track is not a security mechanism. </p>
        </div>
	   </div>
	   
	   <div class="expander expander-odd">
          <h4 class="expander-header">Why Might I Want to Use the Do Not Track 
            Preference?</h4>
          
        <div class="expander-content"> 
          <p>Do Not Track is useful for people who would like more Internet privacy.  Do Not Track was initially envisioned to allow people to choose not to have their data collected and used for behavioral advertising, but it can apply to many situations. Different web sites could handle requests not to track you differently. Sites may interact with you first and get your permission to use or collect data, which gives sites an opportunity to explain their data practices. Do Not Track does not block access to sites, and does not block content from loading.  Consequently, asking sites not to track you should not break the web sites you visit. </p>
            
          <p>Do Not Track does not depend on any specific type of technology used in tracking. Requesting companies not track you means you shouldn't have to know how to manage cookies, Flash cookies (LSOs), Javascript, beacons, Silverlight, cache cookies, or innovative technologies yet to be invented. You can just indicate you would prefer not to be tracked and let the web sites figure out how to stop collecting or using data.</p>
            
          <p>Privacy advocates see privacy as a human right. If that is your view, you may want to enable Do Not Track. As more people enable Do Not Track, people with serious privacy concerns will stand out less for asking not to be tracked.</p>
          </div>
          </div>
	   
	  <div class="expander expander-odd"> 
        <h4 class="expander-header">Why Might I Not Want to Use the Do Not Track 
          Preference?</h4>
        <div class="expander-content"> 
          <p>If you prefer ads tailored to your interests, and do not want to see ads that are irrelevant to you, then enabling Do Not Track might not be the right choice for you. You might prefer to leave Do Not Track off if you would like a profile of your Internet use to show you more interesting ads.</p>
          <p>Do Not Track may block personalized services you enjoy. For example, a Do Not Track request might mean you would have to type in your zip code each time you want to view a weather report, rather than seeing the weather automatically displayed. Personalization can save you time and repetitive typing, but it requires data.</p>
          <p>Advertisers are concerned that too many people requesting no tracking would reduce profits in behavioral ads, which could limit free content or development of new features. Just as some advertisers think it is wrong to let viewers skip ads on TV, advertisers are concerned about a &quot;free rider&quot; problem online threatening web sites' ability to make money. If that is your view, you may want to keep Do Not Track disabled.</p>
        </div>
		</div>
		
          <div class="expander expander-odd"> 
		  <h4 class="expander-header">What, Exactly, is Tracking?</h4>
        <div class="expander-content"> 
          <p>As of Spring, 2011, this is still an evolving area. Different definitions are emerging from different groups, ranging from government, to non-profits, to first-party sites, to advertising platforms. Two different standards bodies, the W3C and the IETF, are both working on definitions, too.  Most definitions define tracking in relation to limiting data collection and / or data use. </p>
        </div>
		</div>
		
		  <div class="expander expander-odd"> 
	<h4 class="expander-header">How Do I Enable the Do Not Track feature?</h4>
	<div class="expander-content">
		  <p>This feature is turned off by default . You can find the Do Not Track request on the Advanced pane. <span id="platform-note">On Windows, go to Tools &gt; Options… &gt; Advanced.</span></p>
		<noscript>
          <p>On Mac OS X, go to Firefox &gt; Preferences… &gt; Advanced. On Linux, go to Tools &gt; Options &gt; Advanced.</p>
          </noscript>
          Click to check the box next to &quot;Tell web sites I do not want to 
          be tracked&quot;</p> 
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
