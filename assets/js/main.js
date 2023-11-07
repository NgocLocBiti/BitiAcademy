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

// DARK MODE
const body = document.querySelector('body');
const toggle = document.querySelector('#toggle');

toggle.addEventListener('change', () => {
  body.classList.toggle('dark');
});


