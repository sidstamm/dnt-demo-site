<?php

require_once('./config/config.php');

// dnt detection script
// Grabs the HTTP request (i.e., cookies and DNT header and referrer) then 
// serves an appropriate image back.

$dnt = isset($_SERVER['HTTP_DNT']) and $_SERVER['HTTP_DNT'] == 1;

// serve the appropriate image.
header("Content-Type: image/png");
if($dnt) {
  readfile("images/DNT-indicator-on.png");
} else {
  readfile("images/DNT-indicator-off.png");
}
?>
