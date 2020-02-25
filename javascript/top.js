$(document).ready(function() {
   $('.backtop').hide();
   $(document).scroll(function() {
     if ($(this).scrollTop() > 500) {
       $('.backtop').fadeIn();
     } else {
       $('.backtop').fadeOut();
     }
   });
   $('.backtop').on('click', function() {
     $('html').animate({
       scrollTop: 0
     }, 100);
   });
});
