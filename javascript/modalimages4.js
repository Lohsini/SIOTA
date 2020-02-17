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
var img = document.getElementById("myImg3_1");
img.onclick = function(){
	var modal = document.getElementById("myModal3_1");
	var modalImg = document.getElementById("img3_1");
	var captionText = document.getElementById("caption3_1");
	modal.style.display = "block";
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
};
var div = document.getElementsByClassName("closex")[1];
div.onclick = function() {
	var modal = document.getElementById("myModal3_1");
  	modal.style.display = "none";
};
