var img = document.getElementById("card_img_status_1");
img.onclick = function(){
	var modal = document.getElementById("modal_card_status_1");
	var modalImg = document.getElementById("modal_img_status_1");
	var captionText = document.getElementById("modal_content_status_1");
	modal.style.display = "block";
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
};
var div = document.getElementsByClassName("close_card_btn")[0];
div.onclick = function() {
	var modal = document.getElementById("modal_card_status_1");
  	modal.style.display = "none";
};

var img = document.getElementById("card_img_performance_1");
img.onclick = function(){
	var modal = document.getElementById("modal_card_performance_1");
	var modalImg = document.getElementById("modal_img_performance_1");
	var captionText = document.getElementById("modal_content_performance_1");
	modal.style.display = "block";
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
};
var div = document.getElementsByClassName("close_card_btn")[1];
div.onclick = function() {
	var modal = document.getElementById("modal_card_performance_1");
  	modal.style.display = "none";
};
