$(document).ready(function() {
   $('.backtop').hide();
   $("body").scroll(function() {
     if ($(this).scrollTop() > 500) {
       $('.backtop').fadeIn();
     } else {
       $('.backtop').fadeOut();
     }
   });
   $('.backtop').on('click', function() {
     $('html,body').animate({
       scrollTop: 0
     }, 100);
   });
});
