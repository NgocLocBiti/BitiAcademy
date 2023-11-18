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

  // Đổi Log out thành Đăng xuất
  var logoutLink = document.querySelector('li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--customer-logout a');

  // Kiểm tra xem thẻ <a> có tồn tại không
  if (logoutLink) {
    // Thay đổi nội dung của thẻ <a>
    logoutLink.textContent = 'Đăng xuất';
  }

  // Lướt chuôt hiển thị hiệu ứng
  document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".section");

    function checkScroll() {
      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const scrollY = window.scrollY;

        if (scrollY > sectionTop - sectionHeight / 2 && scrollY < sectionTop + sectionHeight / 2) {
          section.classList.add("active");
        }
      });
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll(); // Kiểm tra khi trang được tải
  });


})(jQuery);


