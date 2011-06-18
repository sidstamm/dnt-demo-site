<?php

// dnt detection script
// Grabs the HTTP request (i.e., cookies and DNT header and referrer) then
// serves an appropriate image back.

$dnt = $_SERVER['HTTP_DNT'] == 1;

// Force no-caching
header("Expires: Thu, 19 Nov 1981 08:52:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");

// serve the appropriate image.
header("Content-Type: image/png");
if($dnt) {
  readfile("images/DNT-indicator-on.png");
} else {
  readfile("images/DNT-indicator-off.png");
}
