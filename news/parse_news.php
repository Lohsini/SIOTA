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
  // $query = "確診%20肺炎";
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
    $snippet= $res_json->{'items'}[$i]->{'snippet'};
    $number = strpos($snippet,"...");
    $ugly_date = substr($snippet, 0, $number-1);

    $year_index = strpos($ugly_date,"年");
    $month_index = strpos($ugly_date,"月");
    $day_index = strpos($ugly_date,"日");

    $year = substr($ugly_date, 0, $year_index-0);
    $month = substr($ugly_date, $year_index+3, $month_index-($year_index+3));
    $day = substr($ugly_date, $month_index+3, $day_index-($month_index+3));
    if ($month>9) {
      if ($day>9) {
        $new_date = $year."-" .$month."-" .$day;
      } else{
        $new_date = $year."-" .$month."-0" .$day;
      }
    } elseif ($day>9) {
      $new_date = $year."-0" .$month."-" .$day;
    } else{
      $new_date = $year."-0" .$month."-0" .$day;
    }

    $new_title = $res_json->{'items'}[$i]->{'pagemap'}->{'metatags'}[0]->{'og:title'};
    $new_link = $res_json->{'items'}[$i]->{'link'};



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
