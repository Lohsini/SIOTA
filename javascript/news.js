$(document).ready(function() {
  getNewses();
});

function getNewses() {
  $.ajax({
    url: "https://siota.herokuapp.com/news/getNews.php",
    success: function(result) {
      links = JSON.parse(result);
      renderNews();
    }
  });
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
