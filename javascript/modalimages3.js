var img = document.getElementById("myImg1");
img.onclick = function(){
	var modal = document.getElementById("myModal1");
	var modalImg = document.getElementById("img1");
	var captionText = document.getElementById("caption1");
	modal.style.display = "block";
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
};
var div = document.getElementsByClassName("closex")[0];
div.onclick = function() {
	var modal = document.getElementById("myModal1");
  	modal.style.display = "none";
};
