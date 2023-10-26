<?php

/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

do_action('woocommerce_before_account_navigation');
?>

<nav class="woocommerce-MyAccount-navigation">
	<ul id="sidebar_accout">
		<?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?>">
				<a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><?php echo esc_html($label); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action('woocommerce_after_account_navigation'); ?>

<script>
	var icons = [
		'far fa-user',
		'far fa-shopping-cart',
		'far fa-download',
		'far fa-map-marked-alt',
		'far fa-user-edit',
		'far fa-sign-out-alt'
	];

	var menuItems = document.querySelectorAll('#sidebar_accout li');

	menuItems.forEach(function(item, index) {
		if (index < icons.length) {
			var iconElement = document.createElement('i');
			iconElement.className = icons[index];
			item.insertBefore(iconElement, item.firstChild);
		}
	});
</script>