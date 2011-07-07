<?php # start breadcrumbs #breadcrumbs ?>
<p id="breadcrumbs"><a href="http://www.mozilla.com/" class="home">Home</a> <b>&#187;</b>
  <span>Do Not Track FAQ</span>
</p>
<?php # end breadcrumbs #breadcrumbs ?>


<?php # start #sidebar ?>
<div id='sidebar'>
<div style="text-align:center;margin-bottom:70px;margin-top:60px;">
  <img style="border:1px solid blue;"
       src="/dnt_status.php"
       alt="Do Not Track Indicator"
       title="Mozilla's Do Not Track Indicator."/>
</div>

<div class='sidebar-box' style="margin-bottom:50px;">
  <?php if ($mobile): ?>
    <h3>Enable Do Not Track in <span style="text-transform: capitalize">Firefox Mobile</span></h3>
    <p style="text-align:center;">
      <a href="images/dnt-mobile-config-screenshot.png">
        <img alt="Settings panel - Do Not Track"
           class="frameless"
           src="images/dnt-mobile-config-screenshot-thumb.png"
           title="Enabling Do Not Track">
      </a>
      <br/>
      Open the settings window, then set &quot;Tell sites not to track me&quot; to Yes.
    </p>
  <?php else: ?>
    <h3>Enable Do Not Track in <span style="text-transform: capitalize">Firefox</span></h3>
    <p style="text-align:center;">
      <a href="https://support.mozilla.com/en-US/kb/how-do-i-stop-websites-tracking-me">
        <img alt="Options window - Advanced panel - Do Not Track"
           class="frameless"
           src="images/fx5-dnt.png"
           title="Enabling Do Not Track">
        <br/>
        Click for Instructions
      </a>
    </p>
  <?php endif; ?>
</div>

<div class="sidebar-box">
  <?php if ($ie9): ?>
    <h3>Do Not Track in your<span style="text-transform: capitalize">browser</span></h3>
    <?php if ($dnt): ?>
      <p>You're using Internet Explorer 9 (IE 9), and your browser is sending the DNT header because you've enabled Tracking Protection!  This means you're using one or more <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection Lists</a>, and as a result, Internet Explorer is asking all sites to stop tracking you.</p>
    <?php else: ?>
      <p>To enable Do Not Track, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install Mozilla's Simple Tracking Protection List. <a href="javascript:window.external.msAddTrackingProtectionList('dnt-enabler.tpl', 'Mozilla\'s DNT Helper for IE');  window.location.reload()">Click here to install</a> and enable the DNT header.</p>
    <?php endif; ?>
  <?php else: ?>
    <h3>Enable Do Not Track in <span style="text-transform: capitalize">Internet Explorer 9</span></h3>
    <p>To enable Do Not Track in IE 9, you need to enable IE 9's <a href="http://ie.microsoft.com/testdrive/Browser/TrackingProtectionLists/faq.html">Tracking Protection</a> feature. The easiest way to do that is to install <a href="./dnt-enabler.tpl">Mozilla's Simple Tracking Protection List</a>. If you view this page in IE 9, there will be instructions right here.</p>
  <?php endif; ?>
</div>

</div>
<?php # end #sidebar ?>

<div id="main-feature" style="z-index:1">
  <?php include 'includes/description.php'; ?>
</div>

<div id="main-content">
  <h3>Frequently Asked <span>Questions</span></h3>
  <?php include 'includes/faq.php'; ?>
</div><!-- end main-content -->
