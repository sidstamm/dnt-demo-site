<?php

require_once('./config/config.php');

// tracking script
// Grabs the HTTP request (i.e., cookies and DNT header and referrer) then 
// serves an appropriate image back.

$ref = $_SERVER['HTTP_REFERER'];
if(!isset($ref)) { $ref = "unknown"; }
$dnt = isset($_SERVER['HTTP_DNT']) and $_SERVER['HTTP_DNT'] == 1;
$cky = $_COOKIE[$cfg['cookiename']];

if($dnt) {
  // DNT is on... stop tracking, clear cookie, and purge database
  setcookie($cfg['cookiename'], 'optout', time()-10000);
  //clear from DB
  $dbh = new PDO($cfg['dbconnectstring'], $cfg['dbuser'], $cfg['dbpassword']);
  $stmt = $dbh->prepare("DELETE FROM tracked_sessions WHERE tracking_id LIKE ?");
  $stmt->bindParam(1, $cky);
  $stmt->execute();
  $dbh = null;
} elseif(isset($cky) and $cky == "optout") {
  //opted out via cookie.  Do nothing (don't log the request)
} else {
  //user didn't opt out, so log the hit.
  if(!isset($cky)) {
    $value = base64_encode(rand(1000000000,9999999999));
    setcookie('trackingcookie', $value, time()+3600000);
  }
  //log $cky -> ref
  $dbh = new PDO($cfg['dbconnectstring'], $cfg['dbuser'], $cfg['dbpassword']);
  $stmt = $dbh->prepare("INSERT INTO tracked_sessions (tracking_id, referrer) VALUES (?, ?)");
  $stmt->bindParam(1, $cky);
  $stmt->bindParam(2, $ref);
  $stmt->execute();
  $dbh = null;

}


// then, serve the appropriate image.
header("Content-Type: image/png");
if($dnt) {
  readfile("images/dnt-big-on.png");
} else {
  readfile("images/dnt-big-off.png");
}
?>
