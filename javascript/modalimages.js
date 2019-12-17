// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
};

var div = document.getElementsByClassName("closex")[0];

div.onclick = function() {
  modal.style.display = "none";
};

// ------------------------------------------

// Get the modal
var modal = document.getElementById("myModal1_2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1_2");
var modalImg = document.getElementById("img1_2");
var captionText = document.getElementById("caption1_2");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
};

var div = document.getElementsByClassName("closex")[0];

div.onclick = function() {
  modal.style.display = "none";
};
