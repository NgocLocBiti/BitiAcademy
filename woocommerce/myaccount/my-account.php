<div class="account-breadcrumb">
	<img src="https://s3-alpha-sig.figma.com/img/3188/4da6/15f1c7f0449c5987062c0341f4dd5d03?Expires=1699228800&Signature=bjUe0ZNySnKwA2oTa0RlAYcSvg-gld6T-YSg3j40bLo09xg~pmCfQwRP57kHCzv1H7FxO1p~Aartw0ui6RYllV1iV1J~SvgbEwIRb5ydV~fVLoPl8Pjo6WoZ88zZdMfip55qOfP5tUrE7JKMb-mVJg8Rc4o55HzKg3R7jvUdfr~PJ3KlhexOPCj-ZulHC~XVtJq8lPSyIa04kam~7Q0JYkU4u8aSzqj-cZqouFELKOpYS8QGWHvp6OFUTbqdxwrDmSAz3wX0Ts9Bkg1GF9W9EpsZ839M2R5RjiSdMusGLNu06c1VveE7ZrKgNV604yVNjH0QkPYMhiNzYLJw7VecUQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="">
	<?php
	if (is_user_logged_in()) {
		// Lấy thông tin của người dùng hiện tại
		$current_user = wp_get_current_user();

		// Sử dụng hàm get_avatar để lấy ảnh đại diện
		$avatar_url = get_avatar($current_user->ID, 96); // Thay đổi kích thước ảnh tại đây (ở đây là 96)

		// Hiển thị ảnh đại diện
		$avatar_url;
		// Lấy tên của người dùng
		$user_name = $current_user->display_name;

		// Hiển thị tên người dùng
		$user_name;
	}
	?>
	<div class="avatar-account">
		<div class="avatar_img">
			<?php echo $avatar_url; ?>
		</div>
	</div>
</div>

<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_navigation'); ?>

<div class="woocommerce-MyAccount-content">
	<?php
	/**
	 * My Account content.
	 *
	 * @since 2.6.0
	 */
	do_action('woocommerce_account_content');
	?>
</div>