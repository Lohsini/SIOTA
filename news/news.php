<?php
header("Access-Control-Allow-Origin: *");

$datafile = "news_data.txt";
$timestampfile = "timestamp.txt";
$now = time();

$timestamp = fopen($timestampfile,"r+");
$last = fread($timestamp,"100");
fclose($timestamp);

echo "這是if之外";

if ($now - $last > 60) {
  $timestamp = fopen($timestampfile,"w+");
  fwrite($timestamp,$now);
  fclose($timestamp);

  echo "這是if裡面且表示時間標已經換好了";
  // 1.刪除data
  if(file_exists($datafile)){
    unlink($datafile);
    echo "已刪除完成";
    // 2.啟用python-會建立新的data
    exec("python3 news.py");
    echo "已啟用python";
    // 3.讀取新data資料
    echo "這是在if裡面抓到新的data後面就是新的";
    $data = fopen($datafile, "r") or die("Unable to open file!");
    echo fread($data,filesize($datafile));
    fclose($data);
  }
}
else {
  // 讀取一般data資料
  echo "這是else裡面且後面緊接著data";
  $data = fopen($datafile, "r") or die("Unable to open file!");
  echo fread($data,filesize($datafile));
  fclose($data);
}

// if (!file_exists($datafile)) {

//   exec("python3 news.py");
// }

// $countDown = 10;
// while(!file_exists($datafile) && $countDown >= 0) {
//   sleep(3);
//   $countDown -= 1;
// }

// if ($countDown < 0) {
//   echo "[error]";
//   exit(1);
// }
?>
