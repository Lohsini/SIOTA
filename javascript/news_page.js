var links = [{
    type: "公告",
    href: "https://www.digitimes.com.tw/iot/article.asp?cat=158&cat1=20&cat2=&id=0000576035_YEW194PQ2TJEYF6CHS4YR",
    title: "【物聯網報報-DIGITIMES】區塊鏈金融卡上路！可支援150種數位與法定貨幣",
    day: "2020-01-13"
  },
  {
    type: "公告",
    href: "https://www.digitimes.com.tw/iot/article.asp?cat=158&cat1=20&cat2=&id=0000575564_HYS6IUTU5S0KYJ5N5WVMT",
    title: "【物聯網報報-DIGITIMES】5家西班牙銀行聯合運用智慧合約進行跨行支付作業測試",
    day: "2020-01-10"
  },
  {
    type: "公告",
    href: "https://technews.tw/2020/01/04/sky-shepherds-the-farmers-using-drones-to-watch-their-flocks-by-flight/",
    title: "【物聯網報報-科技新報】無人機牧羊、AI 養豬，可能就是農業的未來",
    day: "2020-01-08"
  },
  {
    type: "公告",
    href: "https://www.digitimes.com.tw/iot/article.asp?cat=158&cat1=20&cat2=&id=0000575940_EN48IKJI5D0EIULK4K8XU",
    title: "【物聯網報報-DIGITIMES】AI、區塊鏈和邊緣運算在工業4.0中的關鍵作用",
    day: "2020-01-06"
  },
  {
    type: "公告",
    href: "https://city.gvm.com.tw/article.html?id=70544&utm_source=edm&utm_medium=email&utm_campaign=daily&utm_content=city_post",
    title: "【物聯網報報-城市學】5G釋照標破天價！前中華電信董事長呂學錦告訴你為什麼",
    day: "2019-12-31"
  }
];

var newsTable = document.getElementById("newsTable");
var newsTh = document.getElementById("newsTh");
newsTable.appendChild(newsTh);

for (var i = 0; i < links.length; i++) {
  var newsTr = document.createElement("tr");

  var newsTd_type = document.createElement("td");
  newsTd_type.innerHTML = links[i].type;
  newsTr.appendChild(newsTd_type);

  var newsTd_title = document.createElement("td");
  newsTd_title.innerHTML = links[i].title;
  newsTr.appendChild(newsTd_title);


  var newsTd_date = document.createElement("td");
  newsTd_date.innerHTML = links[i].day;
  newsTr.appendChild(newsTd_date);

  newsTable.appendChild(newsTr);
}
