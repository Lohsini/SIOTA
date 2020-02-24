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
		"https://www.digitimes.com.tw/iot/article.asp?cat=158&cat1=20&cat2=&id=0000576035_YEW194PQ2TJEYF6CHS4YR",
		"【物聯網報報-DIGITIMES】區塊鏈金融卡上路！可支援150種數位與法定貨幣",
		"2020-01-13")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://www.digitimes.com.tw/iot/article.asp?cat=158&cat1=20&cat2=&id=0000575564_HYS6IUTU5S0KYJ5N5WVMT",
		"【物聯網報報-DIGITIMES】5家西班牙銀行聯合運用智慧合約進行跨行支付作業測試",
		"2020-01-10")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://technews.tw/2020/01/04/sky-shepherds-the-farmers-using-drones-to-watch-their-flocks-by-flight/",
		"【物聯網報報-科技新報】無人機牧羊、AI 養豬，可能就是農業的未來",
		"2020-01-08")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://www.digitimes.com.tw/iot/article.asp?cat=158&cat1=20&cat2=&id=0000575940_EN48IKJI5D0EIULK4K8XU",
		"【物聯網報報-DIGITIMES】AI、區塊鏈和邊緣運算在工業4.0中的關鍵作用",
		"2020-01-06")
);
array_push(
	$newsList,
	new News(
    "公告",
		"https://city.gvm.com.tw/article.html?id=70544&utm_source=edm&utm_medium=email&utm_campaign=daily&utm_content=city_post",
		"【物聯網報報-城市學】5G釋照標破天價！前中華電信董事長呂學錦告訴你為什麼",
		"2019-12-31")
);

echo json_encode($newsList);
?>
