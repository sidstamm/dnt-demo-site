<?php
require_once('./config/config.php');

// do-not-track PoC.

$dnt = isset($_SERVER['HTTP_DNT']);
$dntval = $_SERVER['HTTP_DNT'];

?>

<html>
<head>
<title>Mozilla: Do-Not-Track</title>
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
    <script src="http://www-fx4-cdn.stage.mozilla.com/js/jquery/jquery-css-transform.js"></script>
    <script src="http://www-fx4-cdn.stage.mozilla.com/js/jquery/jquery-animate-css-rotate-scale.js"></script>

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
<div style="text-align:center;margin-bottom:70px;margin-top:60px;">
<img style="border:1px solid blue;"
     src="/dnt_status.php"
     alt="Do-Not-Track Indicator"
     title="Mozilla's Do-Not-Track Indicator."/>
</div>

<div class='sidebar-box' style="margin-bottom:50px;">
<h3>Enable this header in<span/>Firefox 4</span></h3>
<p style="text-align:center;">
<a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">
<img alt="Options window - Advanced panel - Do not track" 
	 class="frameless" 
	 src="images/dnt-config-screenshot-thumb.jpg" 
	 title="Turning on Do-not-track">
<br/>
Click for Instructions
</a>
</p>
</div>

<? if (strchr($_SERVER['HTTP_USER_AGENT'], "MSIE 9.0")) { ?>

<div class="sidebar-box">
<h3>DNT in Your<span>browser</span></h3>
  <? if ($dnt && $dntval == "1") { ?>
  <p>You're using Internet Explorer 9, and your browser is sending the DNT header because you've enabled Tracking Protection!  This means you're using one or more Tracking Protection Lists, and as a result, Internet Explorer is asking all sites to stop tracking you.</p>
  <? } else { ?>
  <p>To turn on Do-not-track, you need to enable IE 9's Tracking Protection feature. The easiest way to do that is to install Mozilla's Simple Tracking Protection List. <a href="javascript:window.external.msAddTrackingProtectionList('dnt-enabler.tpl', 'Mozilla\'s DNT Helper for IE');  window.location.reload()">Click Here to install</a> and enable the DNT header.</p>
  <? } ?>
</div>
<? } else { ?>
<div class="sidebar-box">
<h3>Enable this header in <span>Internet Explorer</span></h3>
  <p>To turn on Do-not-track in IE 9, you need to enable IE 9's Tracking Protection feature. The easiest way to do that is to install <a href="./dnt-enabler.tpl">Mozilla's Simple Tracking Protection List</a>. If you view this page in IE 9, there will be instructions right here.</p>
</div>
<? } ?>

</div><!-- end sidebar -->

<div id="main-feature">
<h2><span>Do Not Track</span></h2>
<p>Firefox 4 or later contains a feature that lets you express a preference not to be tracked by web sites. If you enable this feature you will gain more Internet privacy, but some web interactions will no longer be personalized. The choice is yours!</p>
</div>

<div id="main-content">

      <h3>Frequently asked <span>Questions</span></h3>
      <div class="expander expander-odd"> 
        <div class="expander-content"> 
          <p>Different people have different privacy preferences. The Do-not-track feature helps you express yourself to web sites.</p>
		</div>
	   </div>

      <div class="expander expander-odd">
	    <h4 class="expander-header">What is the Do-not-track feature?</h4>
		<div class="expander-content"> 
          <p>Asking web sites not to track you expresses a preference to web site owners. As of Spring, 2011, this is a brand new feature. Initially, Do-not-track allows you to be counted as having a preference for privacy, but it does not create changes in your web browsing experience until companies support it. You can follow our RSS feed (coming soon!) to learn which sites have announced they will honor Do-not-track soon, and to see which sites already have Do-not-track support now. </p>

          <p>Other Firefox privacy options focus on managing data that can be stored on your computer. Do-not-track focuses on data stored on computers you do not have access to. For example, when you visit a web site you have to send an IP address so it can communicate back to you.  IP addresses can give clues to your general geographic location. You cannot visit a web site without sending an IP address, but you can request that web sites not track you over time in their databases.</p>
        </div>
	   </div>
	   
	         <div class="expander expander-odd">
	    <h4 class="expander-header">What isn't the Do-not-track feature?</h4>
		<div class="expander-content"> 
          <p>Do-not-track is not an ad blocker. You will still see as many ads with Do-not-track enabled as without. The difference is the type of ads you see. For example, behavioral ads are targeted to your interests based on the web sites you visit and the search terms you use. If you request that web sites do not track you, you will see more generic ads in place of behavioral ads.</p>
          <p>Do-not-track does not enforce your privacy preferences. Sites can ignore your request not to be tracked. Do-not-track will not protect you from bad actors or malicious sites. Do-not-track is not a security mechanism. </p>
        </div>
	   </div>
	   
	   <div class="expander expander-odd">
          <h4 class="expander-header">Why Might I Want to Use the Do-not-track 
            Preference?</h4>
          
        <div class="expander-content"> 
          <p>Do-not-track is useful for people who would like more Internet privacy.  Do-not-track was initially envisioned to allow people to choose not to have their data collected and used for behavioral advertising, but it can apply to many situations. Different web sites could handle requests not to track you differently. Sites may interact with you first and get your permission to use or collect data, which gives sites an opportunity to explain their data practices. Do-not-track does not block access to sites, and does not block content from loading.  Consequently, asking sites not to track you should not break the web sites you visit. </p>
            
          <p>Do-not-track does not depend on any specific type of technology used in tracking. Requesting companies not track you means you shouldn't have to know how to manage cookies, Flash cookies (LSOs), Javascript, beacons, Silverlight, cache cookies, or innovative technologies yet to be invented. You can just indicate you would prefer not to be tracked and let the web sites figure out how to stop collecting or using data.</p>
            
          <p>Privacy advocates see privacy as a human right. If that is your view, you may want to enable Do-not-track. As more people enable Do-not-track, people with serious privacy concerns will stand out less for asking not to be tracked.</p>
          </div>
          </div>
	   
	  <div class="expander expander-odd"> 
        <h4 class="expander-header">Why Might I Not Want to Use the Do-not-track 
          Preference?</h4>
        <div class="expander-content"> 
          <p>If you prefer ads tailored to your interests, and do not want to see ads that are irrelevant to you, then enabling Do-not-track might not be the right choice for you. You might prefer to leave Do-not-track off if you would like a profile of your Internet use to show you more interesting ads.</p>
          <p>Do-not-track may block personalized services you enjoy. For example, a Do-not-track request might mean you would have to type in your zip code each time you want to view a weather report, rather than seeing the weather automatically displayed. Personalization can save you time and repetitive typing, but it requires data.</p>
          <p>Advertisers are concerned that too many people requesting no tracking would reduce profits in behavioral ads, which could limit free content or development of new features. Just as some advertisers think it is wrong to let viewers skip ads on TV, advertisers are concerned about a &quot;free rider&quot; problem online threatening web sites' ability to make money. If that is your view, you may want to keep Do-not-track disabled.</p>
        </div>
		</div>
		
          <div class="expander expander-odd"> 
		  <h4 class="expander-header">What, Exactly, is Tracking?</h4>
        <div class="expander-content"> 
          <p>As of Spring, 2011, this is still an evolving area. Different definitions are emerging from different groups, ranging from government, to non-profits, to first-party sites, to advertising platforms. Two different standards bodies, the W3C and the IETF, are both working on definitions, too.  Most definitions define tracking in relation to limiting data collection and / or data use. </p>
        </div>
		</div>
		
		  <div class="expander expander-odd"> 
	<h4 class="expander-header">How Do I Enable the Do-not-track Feature?</h4>
	<div class="expander-content">
		  <p>This feature is turned off by default. You can find the Do-not-track 
            request on the Advanced pane. <span id="platform-note">On Windows, 
            go to Tools &gt; Options… &gt; Advanced.</span></p>
		<noscript>
          <p>On Mac OS X, go to Firefox &gt; Preferences… &gt; Advanced. On Linux, go to Tools &gt; Options &gt; Advanced.</p>
          </noscript>
          Click to check the box next to &quot;Tell web sites I do not want to 
          be tracked&quot;. For more information, see the help file on 
		  <a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">how to stop web sites from tracking you</a>.</p>  
		  </div>
	</div>

		  <div class="expander expander-odd"> 
	<h4 class="expander-header">Will Companies Honor My Do-not-track Preference?</h4>
	<div class="expander-content">
	The short answer is yes, but not yet. Thirty advertising companies 
	<a href="http://online.wsj.com/article/SB10001424052748704662604576202971768984598.html">committed</a>
	to implement Do-not-track, including Exponential Interactive Inc., Burst Media Corp., 
	Audience Science Inc., Casale Media Inc. and Specific Media LLC. However, because Do-not-track
	is so new, they will need time to change their software and their business practices. If you enable
	Do-not-track, right now your experience on the Internet will be unchanged. You will send you preference
	not to be tracked, but companies are not ready to do more than record how many people prefer privacy 
	to personalization. Over time, companies will implement changes and your preference not to be tracked
	will be honored. 
		</div>
	</div>

        <div class="expander expander-odd"> 
		  <h4 class="expander-header">Where Can I Learn More?</h4>
          
        <div class="expander-content"> If you are interested in the Do-not-track preference, you might also be interested in... 
          <ul>
            <li><a href="http://support.mozilla.com/en-US/kb/Private%20Browsing">Private 
              browsing</a> in Firefox</li>
            <li><a href="http://support.mozilla.com/en-US/kb/Enabling%20and%20disabling%20cookies">Managing 
              cookies</a> in Firefox</li>
            <li>Stanford's <a href="http://donottrack.us/">Do Not Track</a> project</li>
            <li>Mozilla and Stanford's Do Not Track <a href="http://datatracker.ietf.org/doc/draft-mayer-do-not-track/">submission 
              to the IETF</a> standards body</li>
            <li>Learn which sites are tracking you with <a href="file:///aleecia/Library/Mail%20Downloads/www.ghostery.com">Ghostery</a></li>
            <li>See the Future of Privacy Forum's graphical depiction of <a href="http://www.futureofprivacy.org/wp-content/uploads/2009/11/data.gif">where 
              your data goes</a> before you click</li>
          </ul>
		
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
