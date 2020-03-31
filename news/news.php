<?php
header("Access-Control-Allow-Origin: *");
require("parse_news.php");

$datafile = "news_data.txt";
$timestampfile = "timestamp.txt";
$now = time();

$timestamp = fopen($timestampfile,"r+");
$last = fread($timestamp,"100");
fclose($timestamp);

// 下面這一塊換成php的code
get_news()
//
// $data = fopen($datafile, "r") or die("Unable to open file!");
// echo fread($data,filesize($datafile));
// fclose($data);

// 你可以寫成一個function, 比較彈性
// 呼叫google api, 拿回result <--要上網查

// 將result轉成json <--上網查

// 剩下的就是要用爬蟲來讀result_json, 取出你要的資訊, 存到你自己的class <- 上網查

//
// if ($now - $last > 60) {
//   exec("php parse_news.php");
//   echo "已啟用parse_news.php//";
//
//   $timestamp = fopen($timestampfile,"w+");
//   fwrite($timestamp,$now);
//   fclose($timestamp);
//   echo "新檔案ok時間標已經換好了//";
//

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
// }

// else {
//   exec("php parse_news.php");
// }
?>
