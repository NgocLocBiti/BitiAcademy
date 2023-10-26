(function ($) {
  $(document).ready(function () {
    /* AOS Animate */
    AOS.init({ once: true });
  });

  //lướt chuột cố định menu
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.header-bottom').addClass('header-bottom_active');
    }
    else {
      $('.header-bottom').removeClass('header-bottom_active');
    }
  });



})(jQuery);

