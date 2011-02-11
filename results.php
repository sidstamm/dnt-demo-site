<?php
// tracking results script
// Grabs the HTTP request (i.e., cookies and DNT header and referrer) then 
// serves an appropriate image back.

if(!isset($ref)) { $ref = "unknown"; }
$dnt = isset($_SERVER['HTTP_DNT']) and $_SERVER['HTTP_DNT'] == 1;
$cky = $_COOKIE['trackingcookie'];

?>
<html>
<head>
<title>DNT tracking data</title>
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<?

if(!$dnt && isset($cky)) {
  $dbh = new PDO('mysql:host=localhost;dbname=sidstamm_dnt', 'sidstamm_dnt', 'donottrackme');
  $stmt = $dbh->prepare("SELECT referrer, time FROM tracked_sessions WHERE tracking_id LIKE ? ORDER BY time DESC");
  $stmt->bindParam(1,$cky);
  $stmt->execute();

  print("<table>");
  foreach ($stmt->fetchAll() as $row) {
    ?>
      <tr>
       <td><?=$row['time']?></td>
       <td><a href="<?=$row['referrer']?>"><?=$row['referrer']?></a></td>
      </tr>
    <?
  }

  // clean up older-than-a-week records
  $stmt = $dbh->prepare("DELETE FROM `tracked_sessions` WHERE to_days(now()) - to_days(`time`) > 7");
  $stmt->execute();
  $dbh = null;
} 
?>
</body>
</html>
