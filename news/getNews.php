<?php
header("Access-Control-Allow-Origin: *");

class News{
  var $type;
  var $href;
  var $title;
  var $day;

  function __construct($type, $href, $title, $day){
    $this->type = (string)$type;
    $this->href = (string)$href;
    $this->title = (string)$title;
    $this->day = (string)$day;
  }
}

$newsList = [];

array_push(
	$newsList,
	new News(
    "公告",
		"https://www.ithome.com.tw/news/134182",
		"【iThome】AI趨勢周報第109期 ： 11公頃火龍果園靠AIoT和無人機來照顧，清大揭精準農業關鍵技術",
		"2019.11.14")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://www.agriharvest.tw/?p=6243",
		"【農傳媒】翱翔農業－「無人機於智慧農業應用研討會」紀要",
		"2019.11.13")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://udn.com/news/story/7266/4157737",
		"【智高點】農業智慧大應用 區塊鏈查產銷履歷",
		"2019.11.11")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://www.ithome.com.tw/news/134138",
		"【iThome】11公頃火龍果園靠AIoT和無人機來照顧，清大揭精準農業關鍵技術",
		"2019.11.11")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://anntw.com/articles/20191111-XMiZ",
		"【台灣醒報】農業智慧大應用 區塊鏈查產銷履歷",
		"2019.11.11")
);

echo json_encode($newsList);
?>
