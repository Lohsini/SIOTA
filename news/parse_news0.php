<?php
$ugly_date = "2018年1月20日";

$year_index = strpos($ugly_date,"年");
$month_index = strpos($ugly_date,"月");
$day_index = strpos($ugly_date,"日");

$year = substr($ugly_date, 0, $year_index-0);
$year_int = (int)$year;
  echo "[year:".$year." "."type:".gettype($year)." ";
  echo "year_int:".$year_int." "."type:".gettype($year_int)."] ";

$month = substr($ugly_date, $year_index+3, $month_index-($year_index+3));
$month_int = (int)$month;
  echo "[month:".$month." "."type:".gettype($month)." ";
  echo "month_int:".$month_int." "."type:".gettype($month_int)."] ";

$day = substr($ugly_date, $month_index+3, $day_index-($month_index+3));
$day_int = (int)$day;
  echo "[day:".$day." "."type:".gettype($day)." ";
  echo "day_int:".$day_int." "."type:".gettype($day_int)."] ";


if ($month>9) {
  if ($day>9) {
    $new_date = $year."年" .$month."月" .$day."日";
    echo "大月大日";
    echo $new_date;
  } else{
    $new_date = $year."年" .$month."月0" .$day."日";
    echo "大月小日";
    echo $new_date;
  }
} elseif ($day>10) {
  $new_date = $year."年0" .$month."月" .$day."日";
  echo "小月大日";
  echo $new_date;
} else{
  $new_date = $year."年0" .$month."月0" .$day."日";
  echo "小月小日";
  echo $new_date;
}
?>
