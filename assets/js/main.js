(function ($) {
  $(document).ready(function () {
    /* AOS Animate */
    AOS.init({ once: true });
  });

  //lướt chuột cố định menu
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.header').addClass('header_active');
    }
    else {
      $('.header').removeClass('header_active');
    }
  });



})(jQuery);

