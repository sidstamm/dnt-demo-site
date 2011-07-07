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
    <h4 class="expander-header">In Firefox</h4>
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
