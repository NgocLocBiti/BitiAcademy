<style>
	.woocommerce-MyAccount-content {
		padding: 15px;
		border-radius: 10px;
		box-shadow: 8px 8px 5px 0px #8888;
		background: #FFF;
	}

	mark {
		padding: 0.2em;
		background-color: #ffffff;
		font-weight: bold;
		color: #1388ED;
	}

	h2 {
		color: #1388ED;
	}

	.woocommerce .woocommerce-order-details :last-child {
		font-weight: 100 !important;
	}

	.woocommerce table.shop_table td {
		color: #000000;
		font-weight: bold;
	}

	#goBack {
		border-radius: 8px;
		border: 1px solid #1388ED;
		color: #1388ed;
		background: #FFF;
		padding: 5px 15px;
	}

	#goBack:hover {
		background: #1388ed;
		color: #FFF;
	}

	.btn-xac-nhan {
		display: none;
		background: #1388ED;
		border: 1px solid;
		border-radius: 999px;
		color: #fff;
		font-weight: 900;
		-webkit-mask-image: none;
		overflow: hidden;
		padding: 15px;
		font-size: 13px;
		position: relative;
		text-transform: uppercase;
		transition: 0.2s;
		margin: 15px 40%;


	}

	@media screen and (max-width: 420px) {
		.btn-xac-nhan {
			width: 250px;
			margin: 15px 16%;
			padding: 7px;
		}
	}

	.btn-xac-nhan:hover {
		box-shadow: 0 6px 0 -4px #fff, 0 9px 0 -4px #aaa;
		transform: translateY(-5px);
	}
</style>

<a href="<?php echo get_home_url(); ?>/xac-nhan-thong-tin-chuyen-khoan/ ">
	<button class="btn-xac-nhan">Xác nhận đã chuyển khoản</button>
</a>

<?php
/**
 * Order details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.6.0
 */

defined('ABSPATH') || exit;

$order = wc_get_order($order_id); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited

if (!$order) {
	return;
}

$order_items           = $order->get_items(apply_filters('woocommerce_purchase_order_item_types', 'line_item'));
$show_purchase_note    = $order->has_status(apply_filters('woocommerce_purchase_note_order_statuses', array('completed', 'processing')));
$show_customer_details = is_user_logged_in() && $order->get_user_id() === get_current_user_id();
$downloads             = $order->get_downloadable_items();
$show_downloads        = $order->has_downloadable_item() && $order->is_download_permitted();

if ($show_downloads) {
	wc_get_template(
		'order/order-downloads.php',
		array(
			'downloads'  => $downloads,
			'show_title' => true,
		)
	);
}
?>
<section class="woocommerce-order-details">
	<?php do_action('woocommerce_order_details_before_order_table', $order); ?>

	<h2 class="woocommerce-order-details__title"><?php esc_html_e('Order details', 'woocommerce'); ?></h2>

	<table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

		<thead>
			<tr>
				<th class="woocommerce-table__product-name product-name"><?php esc_html_e('Product', 'woocommerce'); ?></th>
				<th class="woocommerce-table__product-table product-total"><?php esc_html_e('Total', 'woocommerce'); ?></th>
			</tr>
		</thead>

		<tbody>
			<?php
			do_action('woocommerce_order_details_before_order_table_items', $order);

			foreach ($order_items as $item_id => $item) {
				$product = $item->get_product();

				wc_get_template(
					'order/order-details-item.php',
					array(
						'order'              => $order,
						'item_id'            => $item_id,
						'item'               => $item,
						'show_purchase_note' => $show_purchase_note,
						'purchase_note'      => $product ? $product->get_purchase_note() : '',
						'product'            => $product,
					)
				);
			}

			do_action('woocommerce_order_details_after_order_table_items', $order);
			?>
		</tbody>

		<tfoot>
			<?php
			foreach ($order->get_order_item_totals() as $key => $total) {
			?>
				<tr>
					<th scope="row"><?php echo esc_html($total['label']); ?></th>
					<td><?php echo ('payment_method' === $key) ? esc_html($total['value']) : wp_kses_post($total['value']); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
						?></td>
				</tr>
			<?php
			}
			?>
			<?php if ($order->get_customer_note()) : ?>
				<tr>
					<th><?php esc_html_e('Note:', 'woocommerce'); ?></th>
					<td><?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?></td>
				</tr>
			<?php endif; ?>
		</tfoot>
	</table>

	<Button id="goBack">Quay lại</Button>
</section>
<script>
	document.getElementById("goBack").addEventListener("click", function() {
		// Sử dụng window.history để quay lại trang trước đó
		window.history.back();
	});
</script>