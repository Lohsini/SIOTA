$(document).ready(function() {
  getNewses();
});

function getNewses() {
	$.ajax({url: "https://siota.herokuapp.com/news/getNews.php",
		success: function(result) {
	    	links = JSON.parse(result);
	    	renderNews_page();
				renderNews();
	  	}
	  });
}

function renderNews_page() {
  var news_table = document.getElementById("news_table");
  var news_th = document.getElementById("news_th");
  news_table.appendChild(news_th);

  for (var i = 0; i < links.length; i++) {
    var newsTr = document.createElement("tr");
    // newsTr.setAttribute("onclick","location.href='"+links[i].href+"'");

    newsTr.href = links[i].href;
    newsTr.addEventListener("click", navigateToUrl, false);

    var newsTd_type = document.createElement("td");
    newsTd_type.innerHTML = links[i].type;
    newsTr.appendChild(newsTd_type);

    var newsTd_title = document.createElement("td");
    newsTd_title.innerHTML = links[i].title;
    newsTr.appendChild(newsTd_title);


    var newsTd_date = document.createElement("td");
    newsTd_date.innerHTML = links[i].day;
    newsTr.appendChild(newsTd_date);

    news_table.appendChild(newsTr);
  }

  function navigateToUrl(event) {
    // 參考：https://stackoverflow.com/questions/1226714/how-to-get-the-browser-to-navigate-to-url-in-javascript
    window.location.href = event.currentTarget.href;
  }
}
function renderNews() {
  var newsSection = document.getElementById("newsSection");

  for (var i = 0; i < 4; i++) {
    var newsWrapper = document.createElement("div");

    var newsicon = document.createElement("i");
    newsicon.setAttribute("class", "fas fa-dove");
    newsWrapper.appendChild(newsicon);

    var newstitle = document.createElement("a");
    newstitle.setAttribute("href", links[i].href);
    newstitle.innerHTML = links[i].title;
    newsWrapper.appendChild(newstitle);


    var newsdate = document.createElement("p");
    newsdate.innerHTML = links[i].day;
    newsWrapper.appendChild(newsdate);


    newsSection.appendChild(newsWrapper);
  }
}
