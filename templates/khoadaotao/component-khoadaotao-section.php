<section class="khoadaotao-section">
    <div class="container">
        <div class="bg">
            <div class="container">
                <ul class="nav nav-pills" id="pills-tab" role="tablist" style="padding: 10px 0;">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active after" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">Tất cả khóa học</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link after" id="pills-laptrinh-tab" data-bs-toggle="pill" data-bs-target="#pills-laptrinh" type="button" role="tab" aria-controls="pills-laptrinh" aria-selected="false">Khóa lập trình</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link after" id="pills-marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing" aria-selected="false">Khóa marketing</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link " id="pills-doanhnghiep-tab" data-bs-toggle="pill" data-bs-target="#pills-doanhnghiep" type="button" role="tab" aria-controls="pills-doanhnghiep" aria-selected="false">Khóa kỹ năng doanh nghiệp</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <!-- TẤT CẢ KHÓA HỌC -->
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <!-- KHÓA LẬP TRÌNH -->
                    <div class="row">
                        <div class="tatcakhoahoc">
                            <div class="top">
                                <h3>KHÓA LẬP TRÌNH</h3>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <?php $args = array('post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'khoa-lap-trinh'); ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                            <div class="item">
                                                <?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
                                                    <?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
                                                        $hinh_thuc_hoc         = get_sub_field('hinh-thuc-hoc');
                                                        $thoi_han              = get_sub_field('thoi-han');
                                                        $so_binh_chon         = get_sub_field('so-binh-chon');
                                                        $danh_gia              = get_sub_field('danh-gia');
                                                    ?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                                        </a>
                                                        <div class="info">
                                                            <a href="<?php the_permalink() ?>">
                                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                                            </a>
                                                            <div class="star">
                                                                <?php echo $danh_gia ?>
                                                                <p><?php echo $so_binh_chon ?></p>
                                                            </div>
                                                            <div class="course_time">
                                                                <p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
                                                                <p>Thời hạn: <?php echo $thoi_han ?></p>
                                                            </div>
                                                            <p>Khối ngành:
                                                                <?php
                                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                                    foreach ($product_categories as $product_category) {
                                                                        echo $product_category->name;
                                                                    }
                                                                } else {
                                                                    echo 'Không có tên danh mục';
                                                                }
                                                                ?>
                                                            </p>
                                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- KHÓA MARKETING -->
                    <div class="row">
                        <div class="tatcakhoahoc">
                            <div class="top">
                                <h3>KHÓA MARKETING</h3>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <?php $args = array('post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'khoa-marketing'); ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                            <div class="item">
                                                <?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
                                                    <?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
                                                        $hinh_thuc_hoc         = get_sub_field('hinh-thuc-hoc');
                                                        $thoi_han              = get_sub_field('thoi-han');
                                                        $so_binh_chon         = get_sub_field('so-binh-chon');
                                                        $danh_gia              = get_sub_field('danh-gia');
                                                    ?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                                        </a>
                                                        <div class="info">
                                                            <a href="<?php the_permalink() ?>">
                                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                                            </a>
                                                            <div class="star">
                                                                <?php echo $danh_gia ?>
                                                                <p><?php echo $so_binh_chon ?></p>
                                                            </div>
                                                            <div class="course_time">
                                                                <p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
                                                                <p>Thời hạn: <?php echo $thoi_han ?></p>
                                                            </div>
                                                            <p>Khối ngành:
                                                                <?php
                                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                                    foreach ($product_categories as $product_category) {
                                                                        echo $product_category->name;
                                                                    }
                                                                } else {
                                                                    echo 'Không có tên danh mục';
                                                                }
                                                                ?>
                                                            </p>
                                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- KHÓA KỸ NĂNG DOANH NGHIỆP -->
                    <div class="row">
                        <div class="tatcakhoahoc">
                            <div class="top">
                                <h3>KHÓA KỸ NĂNG DOANH NGHIỆP</h3>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <?php $args = array('post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'khoa-ky-nang-doanh-nghiep'); ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                            <div class=" item">
                                                <?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
                                                    <?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
                                                        $hinh_thuc_hoc         = get_sub_field('hinh-thuc-hoc');
                                                        $thoi_han              = get_sub_field('thoi-han');
                                                        $so_binh_chon         = get_sub_field('so-binh-chon');
                                                        $danh_gia              = get_sub_field('danh-gia');
                                                    ?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                                        </a>
                                                        <div class="info">
                                                            <a href="<?php the_permalink() ?>">
                                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                                            </a>
                                                            <div class="star">
                                                                <?php echo $danh_gia ?>
                                                                <p><?php echo $so_binh_chon ?></p>
                                                            </div>
                                                            <div class="course_time">
                                                                <p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
                                                                <p>Thời hạn: <?php echo $thoi_han ?></p>
                                                            </div>
                                                            <p>Khối ngành:
                                                                <?php
                                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                                    foreach ($product_categories as $product_category) {
                                                                        echo $product_category->name;
                                                                    }
                                                                } else {
                                                                    echo 'Không có tên danh mục';
                                                                }
                                                                ?>
                                                            </p>
                                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KHÓA LẬP TRÌNH -->
                <div class="tab-pane fade" id="pills-laptrinh" role="tabpanel" aria-labelledby="pills-laptrinh-tab" tabindex="0">
                    <div class="row">
                        <div class="tatcakhoahoc">
                            <div class="top">
                                <h3>KHÓA LẬP TRÌNH</h3>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'khoa-lap-trinh'); ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                            <div class="item">
                                                <?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
                                                    <?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
                                                        $hinh_thuc_hoc         = get_sub_field('hinh-thuc-hoc');
                                                        $thoi_han              = get_sub_field('thoi-han');
                                                        $so_binh_chon         = get_sub_field('so-binh-chon');
                                                        $danh_gia              = get_sub_field('danh-gia');
                                                    ?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                                        </a>
                                                        <div class="info">
                                                            <a href="<?php the_permalink() ?>">
                                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                                            </a>
                                                            <div class="star">
                                                                <?php echo $danh_gia ?>
                                                                <p><?php echo $so_binh_chon ?></p>
                                                            </div>
                                                            <div class="course_time">
                                                                <p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
                                                                <p>Thời hạn: <?php echo $thoi_han ?></p>
                                                            </div>
                                                            <p>Khối ngành:
                                                                <?php
                                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                                    foreach ($product_categories as $product_category) {
                                                                        echo $product_category->name;
                                                                    }
                                                                } else {
                                                                    echo 'Không có tên danh mục';
                                                                }
                                                                ?>
                                                            </p>
                                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KHÓA MARKETING -->
                <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab" tabindex="0">
                    <div class="row">
                        <div class="tatcakhoahoc">
                            <div class="top">
                                <h3>KHÓA MARKETING</h3>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'khoa-marketing'); ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                            <div class="item">
                                                <?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
                                                    <?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
                                                        $hinh_thuc_hoc         = get_sub_field('hinh-thuc-hoc');
                                                        $thoi_han              = get_sub_field('thoi-han');
                                                        $so_binh_chon         = get_sub_field('so-binh-chon');
                                                        $danh_gia              = get_sub_field('danh-gia');
                                                    ?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                                        </a>
                                                        <div class="info">
                                                            <a href="<?php the_permalink() ?>">
                                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                                            </a>
                                                            <div class="star">
                                                                <?php echo $danh_gia ?>
                                                                <p><?php echo $so_binh_chon ?></p>
                                                            </div>
                                                            <div class="course_time">
                                                                <p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
                                                                <p>Thời hạn: <?php echo $thoi_han ?></p>
                                                            </div>
                                                            <p>Khối ngành:
                                                                <?php
                                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                                    foreach ($product_categories as $product_category) {
                                                                        echo $product_category->name;
                                                                    }
                                                                } else {
                                                                    echo 'Không có tên danh mục';
                                                                }
                                                                ?>
                                                            </p>
                                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KHÓA KỸ NĂNG DOANH NGHIỆP -->
                <div class="tab-pane fade" id="pills-doanhnghiep" role="tabpanel" aria-labelledby="pills-doanhnghiep-tab" tabindex="0">
                    <div class="row">
                        <div class="tatcakhoahoc">
                            <div class="top">
                                <h3>KHÓA KỸ NĂNG DOANH NGHIỆP</h3>
                            </div>
                            <div class="bottom">
                                <div class="row">
                                    <?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'khoa-ky-nang-doanh-nghiep'); ?>
                                    <?php $getposts = new WP_query($args); ?>
                                    <?php global $wp_query;
                                    $wp_query->in_the_loop = true; ?>
                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                        <?php global $product; ?>
                                        <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                            <div class="item">
                                                <?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
                                                    <?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
                                                        $hinh_thuc_hoc         = get_sub_field('hinh-thuc-hoc');
                                                        $thoi_han              = get_sub_field('thoi-han');
                                                        $so_binh_chon         = get_sub_field('so-binh-chon');
                                                        $danh_gia              = get_sub_field('danh-gia');
                                                    ?>
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                                        </a>
                                                        <div class="info">
                                                            <a href="<?php the_permalink() ?>">
                                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                                            </a>
                                                            <div class="star">
                                                                <?php echo $danh_gia ?>
                                                                <p><?php echo $so_binh_chon ?></p>
                                                            </div>
                                                            <div class="course_time">
                                                                <p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
                                                                <p>Thời hạn: <?php echo $thoi_han ?></p>
                                                            </div>
                                                            <p>Khối ngành:
                                                                <?php
                                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                                    foreach ($product_categories as $product_category) {
                                                                        echo $product_category->name;
                                                                    }
                                                                } else {
                                                                    echo 'Không có tên danh mục';
                                                                }
                                                                ?>
                                                            </p>
                                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="select-mobi">
            <div class="list-mobile">
                <?php echo do_shortcode('[yith_wcan_filters slug="list-khoa-hoc"]') ?>
            </div>

            <div class="khoa-hoc-mobile">
                <div class="tatcakhoahoc">
                    <div class="bottom">
                        <div class="row">
                            <?php $args = array('post_type' => 'product', 'posts_per_page' => -1); ?>
                            <?php $getposts = new WP_query($args); ?>
                            <?php global $wp_query;
                            $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php global $product; ?>
                                <div class="col-lg-4 col-md-4 col-12 mb-3  ">
                                    <div class="item">
                                        <a href="<?php the_permalink() ?>">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'thumnail')); ?>
                                        </a>
                                        <div class="info">
                                            <a href="<?php the_permalink() ?>">
                                                <h4><?php echo wp_trim_words(get_the_title()) ?></h4>
                                            </a>
                                            <div class="star">
                                                <i class="fas fa-star" style="color: #FFD300;"></i>
                                                <i class="fas fa-star" style="color: #FFD300;"></i>
                                                <i class="fas fa-star" style="color: #FFD300;"></i>
                                                <i class="fas fa-star" style="color: #FFD300;"></i>
                                                <i class="fas fa-star" style="color: #FFD300;"></i>
                                                <p> 4.9 (100)</p>
                                            </div>
                                            <div class="course_time">
                                                <p>Hình thức học: Online</p>
                                                <p>Thời hạn: 2 năm</p>
                                            </div>
                                            <p>Khối ngành:
                                                <?php
                                                $product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
                                                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                                                    foreach ($product_categories as $product_category) {
                                                        echo $product_category->name;
                                                    }
                                                } else {
                                                    echo 'Không có tên danh mục';
                                                }
                                                ?>
                                            </p>
                                            <p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>