<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if ($related_products) : ?>

	<section class="khoa-hoc-lien-quan">
		<div class="container">
			<div class="title">
				<i class="far fa-books" style="color: #1388ED;"></i>
				<h2>KHÓA HỌC LIÊN QUAN</h2>
			</div>
			<div class="content">
				<div id="khoahoclienquan" class="owl-carousel owl-theme">
					<?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'khoa-lap-trinh'); ?>
					<?php $getposts = new WP_query($args); ?>
					<?php global $wp_query;
					$wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<?php global $product; ?>
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
											<p>Hình thức học:<span>  <?php echo $hinh_thuc_hoc ?> </span></p>
											<p>Thời hạn: <span>  <?php echo $thoi_han ?> </span></p>
										</div>
										<p>Khối ngành: <span>
												<?php
												$product_categories = wp_get_post_terms(get_the_ID(), 'product_cat');
												if (!empty($product_categories) && !is_wp_error($product_categories)) {
													foreach ($product_categories as $product_category) {
														echo $product_category->name;
													}
												} else {
													echo 'Không có tên danh mục';
												}
												?></span>
										</p>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
<?php
endif;
wp_reset_postdata();
?>

<script>
	(function($) {
		$(document).ready(function() {
			/* AOS Animate */
			AOS.init({
				once: true
			});

			$('#khoahoclienquan').owlCarousel({
				loop: true,
				margin: 30,
				nav: false,
				dots: false,
				autoplay: true,
				autoplayHoverPause: true,
				slideTransition: 'linear',
				autoplayTimeout: 5000,
				autoplaySpeed: 1000,
				responsive: {
					0: {
						items:1
					},
					600: {
						items: 2
					},
					1000: {
						items: 4
					},
				}
			})
		});
	})(jQuery);
</script>