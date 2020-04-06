<?php
header("Access-Control-Allow-Origin: *");
require("parse_news.php");

$datafile = "news_data.txt";
$timestampfile = "timestamp.txt";
$now = time();

$timestamp = fopen($timestampfile,"r+");
$last = fread($timestamp,"100");
fclose($timestamp);

if ($now - $last > 30) {
  get_news();

  $timestamp = fopen($timestampfile,"w+");
  fwrite($timestamp,$now);
  fclose($timestamp);
}

else {
  $data = fopen($datafile, "r") or die("Unable to open file!");
  echo fread($data,filesize($datafile));
  fclose($data);
}
?>
