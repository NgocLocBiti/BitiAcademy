<!-- Begin Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="row">
            <div class="col-lg-3 col-7 mb-5 col-md-3">
                <div class="logo">
                    <img src="<?php echo esc_html(get_theme_mod('html_footer_header')); ?>" alt="">
                </div>
                <div class="info">
                    <h4>Theo dõi chúng tôi trên:</h4>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-5 mb-5 col-md-2 footer-item">
                <h3>Menu</h3>
                <?php
                $primarymenu = array(
                    'theme_location'  => 'footer',
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
                if (has_nav_menu('footer')) {
                    wp_nav_menu($primarymenu);
                }
                ?>
            </div>
            <div class="col-lg-3 col-7 mb-5 col-md-4 footer-item">
                <h3>Khóa học</h3>
                <?php
                $primarymenu = array(
                    'theme_location'  => 'max_mega_menu_1',
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
                if (has_nav_menu('max_mega_menu_1')) {
                    wp_nav_menu($primarymenu);
                }
                ?>
            </div>
            <div class="col-lg-3 col-5 mb-5 col-md-3 footer-item">
                <h3>Tin tức</h3>
                <?php
                $primarymenu = array(
                    'theme_location'  => 'max_mega_menu_2',
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
                if (has_nav_menu('max_mega_menu_2')) {
                    wp_nav_menu($primarymenu);
                }
                ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © 2023 BITI Academy</p>
    </div>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>
</div>
</body>

</html>