<?php
header("Access-Control-Allow-Origin: *");

$datafile = "data.txt";
$timestampfile = "timestamp.txt";
$now = time();

$timestamp = fopen($timestampfile,"r+");
$last = fread($timestamp,"100");
fclose($timestamp);

exec("python3 test.py");
$data = fopen($datafile, "r") or die("Unable to open file!");
echo fread($data,filesize($datafile));
fclose($data);

// if ($now - $last > 60) {
//   echo "這是if裡面//";
//   exec("python3 news.py");
//   echo "已啟用python//";
//
//   $timestamp = fopen($timestampfile,"w+");
//   fwrite($timestamp,$now);
//   fclose($timestamp);
//   echo "新檔案ok時間標已經換好了//";
//
//   // $data = fopen($datafile, "r") or die("Unable to open file!");
//   // echo fread($data,filesize($datafile));
//   // fclose($data);
//
// //   if (!file_exists($datafile)) {
// //     echo "如果時間超過且檔案不在，就執行原有的//";
// //     $data = fopen($datafile, "r") or die("Unable to open file!");
// //     echo fread($data,filesize($datafile));
// //     fclose($data);
// //   }
// //   else{
// //     echo "如果時間超過且檔案在就把他刪除//";
// //     // 1.刪除data
// //     unlink($datafile);
// //     echo "已刪除完成//";
// //
// //     // 2.啟用python-會建立新的data
// //     exec("python3 news.py");
// //     echo "已啟用python建立新的data//";
// //
// //     // 3.讀取新data資料
// //     sleep(10);
// //     echo "睡了10秒有抓到嗎？//";
// //
// //     $data = fopen($datafile, "r") or die("Unable to open file!可惡//");
// //     echo fread($data,filesize($datafile));
// //     fclose($data);
// //
// //     $timestamp = fopen($timestampfile,"w+");
// //     fwrite($timestamp,$now);
// //     fclose($timestamp);
// //     echo "新檔案ok時間標已經換好了//";
// //   }
// }
// // else {
// //   // 如果時間沒超過，就執行原有的
// //   echo "這是else裡面且後面緊接著data//";
// //   $data = fopen($datafile, "r") or die("Unable to open file!");
// //   echo fread($data,filesize($datafile));
// //   fclose($data);
// // }
//
// else {
//   echo "這是else裡面//";
//   $data = fopen($datafile, "r") or die("Unable to open file!");
//   echo fread($data,filesize($datafile));
//   fclose($data);
// }
?>

<!-- if (!file_exists($datafile)) {

 exec("python3 news.py");
}

$countDown = 10;
while(!file_exists($datafile) && $countDown >= 0) {
 sleep(3);
 $countDown -= 1;
}

if ($countDown < 0) {
 echo "[error]";
 exit(1);
} -->
