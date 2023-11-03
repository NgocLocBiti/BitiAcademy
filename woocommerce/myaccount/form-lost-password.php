<script>
	var elements = document.querySelectorAll('.is_active');
	elements.forEach(function(element) {
		element.classList.remove('is_active');
	});
	document.getElementById("login").classList.add('is_active');
</script>
<style>
	.lost_reset_password {
		padding: 40px;
		background: #fff;
		border-radius: 10px;
		width: 60%;
		margin: 0 20%;
		box-shadow: 8px 8px 5px 0px #8888;
		text-align: center;
	}

	.lost_reset_password h1 {
		color: #1388ED;
		font-style: normal;
		font-weight: 700;
		line-height: 29.925px;
		font-size: 35px;
		/* 106.875% */
	}

	.lost_reset_password p {
		color: var(--Black-4-Text, #404040);
		font-weight: 400;
		line-height: 18.4px;
		margin-top: 15px;
		font-style: italic;
	}

	.woocommerce form .form-row {
		width: 100%;
	}

	.lost_reset_password p input {
		border-radius: 5px;
		color: #404040;
		font-size: 16px;
		padding: 5px;
		border: 2px solid #c1c1c1;
		width: 80% !important;
		margin-top: 10px !important;
	}

	.lost_reset_password button {
		margin-top: 20px !important;
		border-radius: 8px !important;
		border: 2px solid #1388ED !important;
		color: #1388ed !important;
		background: #FFF !important;
		transition: transform 0.2s ease, box-shadow 0.2s ease;
	}

	.lost_reset_password button:hover {
		box-shadow: -5px 5px 5px 2px #aaa4a44d;
		transform: translateY(-4px);
		will-change: box-shadow, transform;
	}

	div.woocommerce form .form-row input[type=text]:focus {
		padding: 5px;
		border-radius: 2px;
		border: 0.5px solid #00000063;
	}

	/* MOBILE */
	@media screen and (max-width: 420px) {
		.lost_reset_password {
			padding: 15px 10px;
			width: 80%;
			margin: -10px 10% -15px;
		}

		.lost_reset_password h1 {
			font-size: 17px !important;
		}

		.lost_reset_password p {
			font-size: 10px !important;
			margin: 0px !important;
		}

		.lost_reset_password button {
			margin-top: 10px !important;
		}

		.lost_reset_password p input {
			font-size: 11px !important;
		}
	}
</style>

<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_lost_password_form');
?>

<form method="post" class="woocommerce-ResetPassword lost_reset_password">
	<h1>KHÔI PHỤC MẬT KHẨU</h1>
	<p><?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Vui lòng nhập địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.', 'woocommerce')); ?></p><?php // @codingStandardsIgnoreLine 
																																																	?>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<input class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="user_login" id="user_login" autocomplete="username" placeholder="Email" />
	</p>

	<div class="clear"></div>

	<?php do_action('woocommerce_lostpassword_form'); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="woocommerce-Button button" value="<?php esc_attr_e('Reset password', 'woocommerce'); ?>"><?php esc_html_e('Reset password', 'woocommerce'); ?></button>
	</p>

	<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce'); ?>

</form>
<?php
do_action('woocommerce_after_lost_password_form');
