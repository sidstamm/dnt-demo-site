<?php

require_once('./config/config.php');

// tracking results script
// Grabs the HTTP request (i.e., cookies and DNT header and referrer) then
// serves a list of places where the user has been tracked by the tracking
// script.

if(!isset($ref)) { $ref = "unknown"; }
$dnt = isset($_SERVER['HTTP_DNT']) and $_SERVER['HTTP_DNT'] == 1;
$cky = $_COOKIE[$cfg['cookiename']];

?>
<html>
<head>
<title>DNT tracking data</title>
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<?php

if(!$dnt && isset($cky)) {
  $dbh = new PDO($cfg['dbconnectstring'], $cfg['dbuser'], $cfg['dbpassword']);
  $stmt = $dbh->prepare("SELECT referrer, time FROM tracked_sessions WHERE tracking_id LIKE ? ORDER BY time DESC");
  $stmt->bindParam(1,$cky);
  $stmt->execute();

  print("<table>");
  foreach ($stmt->fetchAll() as $row) {
    ?>
      <tr>
       <td><?php echo $row['time']?></td>
       <td><a href="<?php echo $row['referrer']?>"><?php echo $row['referrer']?></a></td>
      </tr>
    <?php
  }

  // clean up older-than-a-week records
  $stmt = $dbh->prepare("DELETE FROM `tracked_sessions` WHERE to_days(now()) - to_days(`time`) > 7");
  $stmt->execute();
  $dbh = null;
}
?>
</body>
</html>
