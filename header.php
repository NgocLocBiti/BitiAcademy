<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class('mb-0'); ?>>
    <div id="wrapper">
        <!-- Begin Header -->
        <header class="header">
            <div class="header-top">
                <div class="header-top-menu">
                    <div class="header-top-left">
                        <div class="header-top-left-content">
                            <p>Chào mừng bạn đến với BITI Academy</p>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="instruct">
                            <a href="<?php echo get_home_url(); ?>/huong-dan-tai-khoan/" class="">Hướng dẫn tài khoản</a>
                        </div>
                        <!-- start account -->
                        <div class="Account text-center">
                            <a href="<?php echo get_home_url(); ?>/tai-khoan/" class="">
                                <button class="openBtn">
                                    <i class="fas fa-user" style="color: #ffff;"></i>
                                </button>
                            </a>
                        </div>
                        <!-- end account -->
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <!-- LOGO -->
                <div class="header-bottom-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo esc_html(get_theme_mod('html_logo_header')); ?>" alt="Logo Header">
                    </a>
                </div>
                <!-- MENU -->
                <div class="header-mega-menu" id="header-mega-menu">
                    <div class="container">
                        <?php
                        $primarymenu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'custom-menu',
                            'menu_id'         => 'my-custom-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker(),
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul  id="%1$s" class="list-unstyled mb-0">%3$s</ul>',
                            'depth'           => 0,
                        );
                        if (has_nav_menu('primary')) {
                            wp_nav_menu($primarymenu);
                        }
                        ?>
                    </div>
                </div>

                <div class="menu-mobile" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- MENU MOBILE -->
                <div id="mobile-overlay-menu" class="mobile-menu-overlay">
                    <div class="web-container">
                        <div class="logo_shop">
                            <img src="https://i.imgur.com/6vchPH7.png" alt="">
                        </div>
                        <ul class="nav-menu menu">
                            <li>
                                <a href="<?php echo get_home_url(); ?>/">Trang chủ</a>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url(); ?>/gioi-thieu">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url(); ?>/khoa-dao-tao">Khóa đào tạo</a>
                            </li>
                            <li>
                                <div class="item">
                                    <a href="<?php echo get_home_url(); ?>/tin-tuc">Tin tức & sự kiện</a>
                                    <i class="fas fa-angle-down" id="menu_td"></i>
                                </div>
                                <ul class="sub-menu menu" id="menu_td_con">
                                    <li><a href="<?php echo get_home_url(); ?>/danh-muc-tin-tuc/su-kien-hoi-thao/">Sự kiện - hội thảo</a></li>
                                    <li><a href="<?php echo get_home_url(); ?>/danh-muc-tin-tuc/ve-biti-academy/">Về BITI Academy</a></li>
                                    <li><a href="<?php echo get_home_url(); ?>/danh-muc-tin-tuc/lich-tuyen-sinh/">Lịch tuyển sinh</a></li>
                                    <li><a href="<?php echo get_home_url(); ?>/danh-muc-tin-tuc/chia-se-kien-thuc/">Chia sẻ kiến thức</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url(); ?>/lien-he">Liên hệ</a>
                            </li>
                        </ul>

                        <div class="account">
                            <button class="btn-9">
                                <a href="<?php echo get_home_url(); ?> /huong-dan-tai-khoan"><span style="color: #ffffff;">Hướng dẫn tài khoản</span></a>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="overlay" class="overlay">
                    <div class="close">
                        <i class="fas fa-times" style="color: #ffffff;"></i>
                    </div>
                </div>
                <!-- TÌM KIẾM -->
                <div class="search">
                    <div class="header-bottom-search" onclick="openSearchHero()" fdprocessedid="lcl5df">
                        <div class="background">
                            <i class="far fa-search" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    <div class="header-bottom-search-form">
                        <div id="FullScreenOverlay" class="overlay" style="display: none;">
                            <div id="background" style="display: none;"></div>
                            <div class="overlay-content">
                                <form action="<?php echo get_home_url(); ?>">
                                    <input name="s" autocomplete="off" type="text" placeholder="Nhập từ khóa" fdprocessedid="e4f9cj">
                                    <button class="timkiem" type="submit" fdprocessedid="9zrt5g">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        function openSearchHero() {
                            document.getElementById("FullScreenOverlay").style.display = "block";
                            document.getElementById("background").style.display = "block";
                        }

                        function closeSearchHero() {
                            document.getElementById("FullScreenOverlay").style.display = "none";
                        }

                        (function($) {
                            $(document).ready(function() {
                                $("#background").on("click", function(e) {
                                    $(this).css("display", "none");
                                    $("#FullScreenOverlay").css("display", "none");
                                    e.key()
                                })
                            });
                        })(jQuery);
                    </script>
                </div>
            </div>

            <!--MENU MOBILE BOTTOM  -->
            <nav class="menu-mobile-bottom">
                <div class="nav-box">
                    <ul class="nav-container">
                        <li class="nav__item active" id="home">
                            <a href="<?php echo get_home_url(); ?>" class="nav__item-link">
                                <div class="nav__item-icon">
                                    <i class="fas fa-home-lg" style="color: #012C4D;"></i>
                                </div>
                                <span class="nav__item-text"></span>
                            </a>
                        </li>
                        <li class="nav__item" id="about">
                            <a href="<?php echo get_home_url(); ?>/gioi-thieu" class="nav__item-link">
                                <div class="nav__item-icon">
                                    <i class="fas fa-info-circle" style="color: #012C4D;"></i>
                                </div>
                                <span class="nav__item-text"></span>
                            </a>
                        </li>
                        <li class="nav__item" id="course">
                            <a href="<?php echo get_home_url(); ?>/khoa-dao-tao" class="nav__item-link">
                                <div class="nav__item-icon">
                                    <i class="fas fa-book" style="color: #012C4D;"></i>
                                </div>
                                <span class="nav__item-text"></span>
                            </a>
                        </li>
                        <li class="nav__item" id="news">
                            <a href="<?php echo get_home_url(); ?>/tin-tuc" class="nav__item-link">
                                <div class="nav__item-icon">
                                    <i class="fas fa-newspaper" style="color: #012C4D;"></i>
                                </div>
                                <span class="nav__item-text"></span>
                            </a>
                        </li>
                        <li class="nav__item" id="login">
                            <a href="<?php echo get_home_url(); ?>/tai-khoan" class="nav__item-link">
                                <div class="nav__item-icon">
                                    <i class="fas fa-user-alt" style="color: #012C4D;"></i>
                                </div>
                                <span class="nav__item-text"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <!-- End Header -->

        <script>
            document.getElementById("menu-toggle").addEventListener("click", function() {
                var mobileMenu = document.getElementById("mobile-overlay-menu");
                var overlay = document.getElementById("overlay");
                mobileMenu.classList.add("show-mobile-menu");
                overlay.style.display = "block";
            });

            document.getElementById("overlay").addEventListener("click", function() {
                var mobileMenu = document.getElementById("mobile-overlay-menu");
                var overlay = document.getElementById("overlay");
                mobileMenu.classList.remove("show-mobile-menu");
                overlay.style.display = "none";
            });

            (function($) {
                $(document).ready(function() {
                    $('#menu_td').click(function(e) {
                        //   $('#menu_tp').hide(); // Hide the parent menu item
                        $('#menu_td_con').toggle('active'); // Show the submenu
                    });
                });
            })(jQuery);

            const list = document.querySelectorAll(".nav__item");
            list.forEach((item) => {
                item.addEventListener("click", () => {
                    list.forEach((item) => item.classList.remove("is_active"));
                    item.classList.add("is_active");
                });
            });
        </script>