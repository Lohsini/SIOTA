<!-- <?php
// $file_path = "news_data.txt";
// if(file_exists($file_path)){
// $fp = fopen($file_path,"r");
// $str = fread($fp,filesize($file_path));
// echo $str = str_replace("\r\n","<br />",$str);
// }
?> -->


<?php

$filename = "news_data.txt";

if (!file_exists($filename)) {
  exec("python3 news.py");
}

$countDown = 10;
while(!file_exists($filename) && $countDown >= 0) {
  sleep(3);
  $countDown -= 1;
}

if ($countDown < 0) {
  echo "[error]";
  exit(1);
}

$myfile = fopen($filename, "r") or die("Unable to open file!");
echo fread($myfile,filesize($filename));
fclose($myfile);
?>
