<?php
header("Access-Control-Allow-Origin: *");

$now = time();

$file = fopen("timestamp.txt","r+");
$last = fread($file,"100");
fclose($file);
// echo "now".$now;
// echo "last".$last;

if ($now - $last > 10) {
  $file = fopen("timestamp.txt","w+");
  fwrite($file,$now);
  fclose($file);
  exec("python3 news.py");

  // $filename = "news_data.txt";
  //
  // if (!file_exists($filename)) {
  //   exec("python3 news.py");
  // }
  //
  // $countDown = 10;
  // while(!file_exists($filename) && $countDown >= 0) {
  //   sleep(3);
  //   $countDown -= 1;
  // }
  //
  // if ($countDown < 0) {
  //   echo "[error]";
  //   exit(1);
  // }

  $myfile = fopen($filename, "r") or die("Unable to open file!");
  echo fread($myfile,filesize($filename));
  fclose($myfile);
}
// else {
//  echo "目前狀態：尚未更新";
// }
?>
