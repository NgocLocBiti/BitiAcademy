	<?php

	/**
	 * The template for displaying product content in the single-product.php template
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://docs.woocommerce.com/document/template-structure/
	 * @package WooCommerce\Templates
	 * @version 3.6.0
	 */

	defined('ABSPATH') || exit;

	global $product;

	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 */
	do_action('woocommerce_before_single_product');

	if (post_password_required()) {
		echo get_the_password_form(); // WPCS: XSS ok.
		return;
	}
	?>
	<div class="chitietkhoahoc" id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12">
					<div class="top">
						<!-- IMAGE -->
						<?php
						/**
						 * Hook: woocommerce_before_single_product_summary.
						 *
						 * @hooked woocommerce_show_product_sale_flash - 10
						 * @hooked woocommerce_show_product_images - 20
						 */
						do_action('woocommerce_before_single_product_summary');
						?>
						<!-- THÔNG TIN -->
						<div class="thongtin">
							<?php if (have_rows('chi-tiet-khoa-hoc')) : ?>
								<?php while (have_rows('chi-tiet-khoa-hoc')) : the_row();
									$giang_vien 	 	= get_sub_field('giang-vien');
									$hinh_thuc_hoc 		= get_sub_field('hinh-thuc-hoc');
									$thoi_han  			= get_sub_field('thoi-han');
									$dia_diem  			= get_sub_field('dia-diem');
									$so_binh_chon 		= get_sub_field('so-binh-chon');
									$danh_gia  			= get_sub_field('danh-gia');
								?>
									<h2> <?php the_title(); ?></h2>
									<div class="info1">
										<?php echo $danh_gia ?>
										<p><?php echo $so_binh_chon ?></p>
									</div>
									<div class="info2">
										<p>Học phí: <span> <?php echo $product->get_price_html(); ?></span></p>
										<a href="<?php echo get_home_url(); ?>/thanh-toan/?add-to-cart=<?php the_ID(); ?>">
											<!-- <button class="btn-101" id="myButton"> -->
											<button class="btn-101">
												Đăng ký khóa học
												<svg>
													<defs>
														<filter id="glow">
															<fegaussianblur result="coloredBlur" stddeviation="5"></fegaussianblur>
															<femerge>
																<femergenode in="coloredBlur"></femergenode>
																<femergenode in="coloredBlur"></femergenode>
																<femergenode in="coloredBlur"></femergenode>
																<femergenode in="SourceGraphic"></femergenode>
															</femerge>
														</filter>
													</defs>
													<rect />
												</svg>
											</button>
										</a>
									</div>
									<div class="info3">
										<p>Hình thức học: <?php echo $hinh_thuc_hoc ?></p>
										<p>Thời hạn: <?php echo $thoi_han ?></p>
										<p>Địa điểm: <?php echo $dia_diem ?></p>
									</div>
									<div class="info4">
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
										<p>Giảng viên: <?php echo $giang_vien ?></p>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="bottom mt-5 mb-5">
						<div class="bg">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item " role="presentation">
									<button class="nav-link active after" id="pills-introduce-tab" data-bs-toggle="pill" data-bs-target="#pills-introduce" type="button" role="tab" aria-controls="pills-introduce" aria-selected="true">Tổng quan</button>
								</li>
								<li class="nav-item " role="presentation">
									<button class="nav-link after" id="pills-achievement-tab" data-bs-toggle="pill" data-bs-target="#pills-achievement" type="button" role="tab" aria-controls="pills-achievement" aria-selected="false" style="border-right: 1px solid #dfd8d8; border-left: 1px solid #dfd8d8;">Chương trình đào tạo</button>
								</li>
								<li class="nav-item " role="presentation">
									<button class="nav-link " id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-active" type="button" role="tab" aria-controls="pills-active" aria-selected="false">Thông tin giảng viên</button>
								</li>
							</ul>

							<div class="tab-content" id="pills-tabContent">
								<!--TỔNG QUAN -->
								<div class="tab-pane fade show active" id="pills-introduce" role="tabpanel" aria-labelledby="pills-introduce-tab" tabindex="0">
									<div class="content">
										<?php if (have_rows('tong-quan')) : ?>
											<?php while (have_rows('tong-quan')) : the_row();
												$content1 	 	= get_sub_field('content1');
												$content2 		= get_sub_field('content2');
											?>
												<input type="checkbox" class="read-more-state jcf-hidden" id="tong-quan-content">
												<p class="read-more-wrap"><?php echo $content1 ?></p>
												<!-- read more goes here -->
												<p class="read-more-target"><?php echo $content2 ?></p>
												<label for="tong-quan-content" class="read-more-trigger"></label>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
								<!-- CHƯƠNG TRÌNH ĐÀO TẠO -->
								<div class="tab-pane fade" id="pills-achievement" role="tabpanel" aria-labelledby="pills-achievement-tab" tabindex="0">
									<div class="content">
										<?php if (have_rows('chuong-trinh-dao-tao')) : ?>
											<?php while (have_rows('chuong-trinh-dao-tao')) : the_row();
												$content1 	 	= get_sub_field('content1');
												$content2 		= get_sub_field('content2');
											?>
												<input type="checkbox" class="read-more-state jcf-hidden" id="chuong-trinh-content">
												<p class="read-more-wrap"><?php echo $content1 ?></p>
												<!-- read more goes here -->
												<p class="read-more-target"><?php echo $content2 ?></p>
												<label for="chuong-trinh-content" class="read-more-trigger"></label>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
								<!-- THÔNG TIN GIẢNG VIÊN -->
								<div class="tab-pane fade" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab" tabindex="0">
									<div class="content">
										<?php if (have_rows('thong-tin-giang-vien')) : ?>
											<?php while (have_rows('thong-tin-giang-vien')) : the_row();
												$content1 	 	= get_sub_field('content1');
												$content2 		= get_sub_field('content2');
											?>
												<input type="checkbox" class="read-more-state jcf-hidden" id="giang-vien-content">
												<p class="read-more-wrap"><?php echo $content1 ?></p>
												<!-- read more goes here -->
												<p class="read-more-target"><?php echo $content2 ?></p>
												<label for="giang-vien-content" class="read-more-trigger"></label>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-12 col-12 ">
					<div class="right">
						<div class="image">
							<?php
							$image = get_field('img-sidebar', 2);
							if (!empty($image)) : ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="" />
							<?php endif; ?>
						</div>
						<div class="comment">
							<div class="row">
								<?php if (have_rows('binh-luan-danh-gia', 2)) : ?>
									<?php while (have_rows('binh-luan-danh-gia', 2)) : the_row();
										$ho_ten  			= get_sub_field('ho-ten');
										$image  			= get_sub_field('img');
										$so_sao  			= get_sub_field('so-sao');
										$ngay_thang_nam  	= get_sub_field('ngay-thang-nam');
										$binh_luan  		= get_sub_field('binh-luan');
									?>
										<div class="col-12">
											<div class="item">
												<div class="title">
													<img src="<?php echo $image['url']; ?>" alt="">
													<div class="title-info">
														<div class="title-info-star">
															<?php echo $so_sao ?>
														</div>
														<h3><?php echo $ho_ten ?></h3>
														<p><?php echo $ngay_thang_nam ?></p>
													</div>
												</div>
												<div class="content">
													<p><?php echo $binh_luan ?></p>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
	<?php get_template_part('templates/block/component', 'home-to-top'); ?>
	<style>
		.tintuc-related {
			display: none;
		}

		.woocommerce-tabs {
			display: none;
		}
	</style>

	<script>
		document.getElementById('myButton').onclick = function() {
			document.getElementById('myModal').style.display = 'block';
		};

		document.getElementById('closeButton').onclick = function() {
			document.getElementById('myModal').style.display = 'none';
		};

		window.onclick = function(event) {
			if (event.target == document.getElementById('myModal')) {
				document.getElementById('myModal').style.display = 'none';
			}
		};
	</script>

	<script>
		var elements = document.querySelectorAll('.active');
		elements.forEach(function(element) {
			element.classList.remove('active');
		});
		document.getElementById("course").classList.add('active');
	</script>