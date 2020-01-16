var recall = function() {

  var now = new Date();
  var year = now.getFullYear();
  var month = now.getMonth();
  var date = now.getDate();
  var day = now.getDay();
  var hour = now.getHours();
  var min = now.getMinutes();
  var sec = now.getSeconds();

  if (day === 1) {
    day = "一";
  }
  if (day === 2) {
    day = "二";
  }
  if (day === 3) {
    day = "三";
  }
  if (day === 4) {
    day = "四";
  }
  if (day === 5) {
    day = "五";
  }
  if (day === 6) {
    day = "六";
  }
  if (day === 7) {
    day = "日";
  }

  if (hour > 12) {
    hour = "下午" + (hour - 12);
  } else {
    hour = "早上" + hour;
  }

  var output = year + "年" + (month + 1) + "月" + date + "日" + "星期" + day + " " + hour + "時" + min + "分" + sec + "秒";

  document.getElementById("time").textContent = output;
  refresh();
};


var refresh = function() {
  setTimeout(recall, 1000);
};

recall();
