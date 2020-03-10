$(document).ready(function() {
   $('.back_to_top').hide();
   $("body").scroll(function() {
     if ($(this).scrollTop() > 500) {
       $('.back_to_top').fadeIn();
     } else {
       $('.back_to_top').fadeOut();
     }
   });
   $('.back_to_top').on('click', function() {
     $('html,body').animate({
       scrollTop: 0
     }, 100);
   });
});
