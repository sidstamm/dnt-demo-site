<?php

require_once('./config/config.php');

// opt-out script
// If user has a cookie set, it deletes any relevant data from the database and 
// then sets an opt-out cookie.

$cky = $_COOKIE[$cfg['cookiename']];

if(isset($cky) and $cky != 'optout') {
  $dbh = new PDO($cfg['dbconnectstring'], $cfg['dbuser'], $cfg['dbpassword']);
  $stmt = $dbh->prepare("DELETE FROM tracked_sessions WHERE tracking_id LIKE ?");
  $stmt->bindParam(1, $cky);
  $stmt->execute();
  $dbh = null;
}
// opt-out for a month.
setcookie($cfg['cookiename'], 'optout', time()+2592000);
?>

<html>
<head>
<title>Do-Not-Track Example Application</title>
<link rel="stylesheet" href="styles.css" />
<link href="http://mozcom-cdn.mozilla.net/includes/min/min.css?g=css" rel="stylesheet">
<meta http-equiv="REFRESH" content="7; URL=http://<?=$_SERVER['SERVER_NAME']?>/"></meta>
</head>
<body>
<h1>Do-Not-Track Example Application OPT OUT</h1>
<p>You've been successfully opted out of tracking via our opt-out cookie.  If you're not returned to the main page shortly, <a href="/">click here</a> to get there.</p>
</body>
</html>
