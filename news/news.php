<?php
header("Access-Control-Allow-Origin: *");
require("parse_news.php");

$datafile = "news_data.txt";
$timestampfile = "timestamp.txt";
$now = time();

$timestamp = fopen($timestampfile,"r+");
$last = fread($timestamp,"100");
fclose($timestamp);



if ($now - $last > 60) {
  get_news();
  echo "已過了60秒";

  $timestamp = fopen($timestampfile,"w+");
  fwrite($timestamp,$now);
  fclose($timestamp);
  // echo "新檔案ok時間標已經換好了";

//   if (!file_exists($datafile)) {
//     echo "如果時間超過且檔案不在，就執行原有的//";
//     exec("php parse_news.php");
//   }
//   else{
//     exec("python3 news.py");
//     echo "已啟用python建立新的data//";
//
//     $timestamp = fopen($timestampfile,"w+");
//     fwrite($timestamp,$now);
//     fclose($timestamp);
//     echo "新檔案ok時間標已經換好了//";
//   }
// }
// else {
//   // 如果時間沒超過，就執行原有的
//   exec("php parse_news.php");
}

else {
  $hey = fopen($datafile, "r") or die("Unable to open file!");
  echo fread($hey,filesize($datafile));
  fclose($hey);
}
?>
