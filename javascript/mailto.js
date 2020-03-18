function sendEmail() {
  var name = $("[name='name']").val(),
    email = $("[name='email']").val(),
    number = $("[name='phonenumber']").val(),
    message = $("[name='message']").val(),
    body = "您好，以下是我的資料與我提供的意見"+"%0a%0d"+
    "姓名：%0a" + name + "%0a%0d" +
    "電子信箱：%0a" + email + "%0a%0d" +
    "連絡電話：%0a" + number + "%0a%0d" +
    "意見內容：%0a" + message + "%0a%0d"+
    "謝謝" + "%0a%0d";
  $("#mailto").attr("href", "mailto:Lohi3152@gmail.com?body=" +
    body);
    document.getElementById("mailto").click();
}



  document.getElementById("window_alart").onclick = function() {
    if (window.confirm("將寄信給SIoTA智慧物聯網與科技藝術應用研究中心")) {
      // $("#window_alart").click(sendEmail);
      sendEmail();
    } else{
      window.alert("需要聯絡我們，也可以直接撥打電話，謝謝！");
    }
  };
