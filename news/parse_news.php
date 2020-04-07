<?php
// define News structure
class News {
    // property declaration
    public $date;
    public $type;
    public $title;
    public $href;

    // constructor(一般都是叫這個名稱), 相當於python的__init__()
    function __construct($date, $title, $href) {
      $this->type = "新聞";
      $this->title = " ".$title;
      $this->href = $href;
      $this->date = $date;
    }
}

function get_news(){
  // $api = "https://www.googleapis.com/customsearch/v1/siterestrict";
  $api = "https://www.googleapis.com/customsearch/v1/";
  $key = "AIzaSyDl7lKKeyRZLseiVKaz6Escr_vtcYTHFhs";
  $searchId = "010230242516722102980:n0ssdaoccan";
  // $query = "陳時中%20確診%20肺炎";
  $query = "黃能富%20農業%20清華大學%20科技%20-質疑%20-利益勾結";
  $url = $api . "?key=" . $key . "&cx=" . $searchId . "&q=" . $query;
  // echo $url . "\n";

  // 這個相當於python的requests.get(url)
  $result = file_get_contents($url);

  // parse parse result
  $res_json = json_decode($result);

  // 初始化成空的array
  $news_list = [];

  for ($i=0; $i < count($res_json->{'items'}); $i++) {
    $new_title = $res_json->{'items'}[$i]->{'pagemap'}->{'metatags'}->{'og:title'};
    $new_link = $res_json->{'items'}[$i]->{'link'};

    $snippet= $res_json->{'items'}[$i]->{'snippet'};
    $number = strpos($snippet,"...");
    $new_date = substr($snippet, 0, $number-1);

    $incoming_news = new News($new_date, $new_title, $new_link);
    $news_list[] = $incoming_news; // python的array.append()
  }

  rsort($news_list);
  // 把結果印出來
  $json_result = json_encode($news_list);
  // echo $json_result;

  // 寫檔案
  $data = fopen("news_data.txt","w+");
  fwrite($data,$json_result);
  fclose($data);
}
?>
