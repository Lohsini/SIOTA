<?php
$api = "https://www.googleapis.com/customsearch/v1/siterestrict";
$key = "AIzaSyDl7lKKeyRZLseiVKaz6Escr_vtcYTHFhs";
$searchId = "010230242516722102980:n0ssdaoccan";
$query = "黃能富%20農業%20清華大學%20科技";
$url = $api . "?key=" . $key . "&cx=" . $searchId . "&q=" . $query;

$result = file_get_contents($url);

$res_json = json_decode($result);

$news_list = [];


for ($i=0; $i < count($res_json->{'items'}); $i++) {
  $snippet= $res_json->{'items'}[$i]->{'snippet'};
  $number = strpos($snippet,"...");
  $new_date = mb_substr($snippet, 0, $number-6, "utf-8");
  echo $new_date;
  // $incoming_news = new News($res_json->{'items'}[$i]->{'title'}, $res_json->{'items'}[$i]->{'link'}, $res_json->{'items'}[$i]->{'snippet'});

  // $news_list[] = $incoming_news; // python的array.append()
}
?>
