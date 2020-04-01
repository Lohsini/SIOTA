<?php
// define News structure
class News {
    // property declaration
    public $type;
    public $title;
    public $href;
    public $day;

    // constructor(一般都是叫這個名稱), 相當於python的__init__()
    function __construct($title, $href) {
        $this->type = "新聞";
        $this->title = $title;
        $this->href = $href;
        $this->day = time();
    }
}

function get_news(){
  $api = "https://www.googleapis.com/customsearch/v1";
  $key = "AIzaSyDl7lKKeyRZLseiVKaz6Escr_vtcYTHFhs";
  $searchId = "010230242516722102980:n0ssdaoccan";
  $query = "美國%20死亡";
  $url = $api . "?key=" . $key . "&cx=" . $searchId . "&q=" . $query;
  // echo $url . "\n";

  // 這個相當於python的requests.get(url)
  $result = file_get_contents($url);

  // parse parse result
  $res_json = json_decode($result);

  // 初始化成空的array
  $news_list = [];

  for ($i=0; $i < count($res_json->{'items'}); $i++) {
    $incoming_news = new News($res_json->{'items'}[$i]->{'title'}, $res_json->{'items'}[$i]->{'link'}); // 先試試看News有沒有寫對
    $news_list[] = $incoming_news; // python的array.append()
  }
  // 有點像print的功能 把結果印出來
  $json_result = json_encode($news_list);
  echo $json_result;

  // // 寫檔案
  $data = fopen("news_data.txt","w+");
  fwrite($data,$json_result);
  fclose($data);
}

?>
