var slideIndex = 1;
showSlides(slideIndex);

var timeid = 0;
timer();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("picture");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1;}
  if (n < 1) {slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function timer() {
  timeid = setInterval(plusSlides, 3000, 1);
}

function stoptimer(n) {
  plusSlides(n);
  clearInterval(timeid);
  timer();
}

function stoptimer_dot(n){
  currentSlide(n);
  clearInterval(timeid);
  timer();
}
