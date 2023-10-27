<style>
	.woocommerce {
		padding: 40px;
		background: #fff;
		border-radius: 10px;
		width: 60%;
		margin: 0 20%;
		box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.25);
	}

	.lost_reset_password h1 {
		color: #1388ED;
		font-style: normal;
		font-weight: 700;
		line-height: 29.925px;
		font-size: 30px;
		text-align: center;

		/* 106.875% */
	}

	.lost_reset_password .content {
		font-style: italic;
		font-weight: 400;
		font-size: 14px;
		text-align: center;
	}

	.lost_reset_password p {
		display: flex;
		width: 100% !important;
		flex-direction: column;
	}

	.lost_reset_password p label {
		color: var(--Black-4-Text, #404040);
		font-size: 18px;
		font-style: normal;
		font-weight: bold;
		/* width: 230px; */
	}

	.lost_reset_password p input {
		border-radius: 5px;
		color: #404040;
		font-size: 16px;
		padding: 5px;
		border: 2px solid #c1c1c1;
	}

	.lost_reset_password button {
		margin-top: 20px !important;
		border-radius: 8px !important;
		border: 2px solid #1388ED !important;
		color: #1388ed !important;
		background: #FFF !important;
		transition: transform 0.2s ease, box-shadow 0.2s ease;
		width: 40%;
	}

	.lost_reset_password button:hover {
		box-shadow: -5px 5px 5px 2px #aaa4a44d;
		transform: translateY(-4px);
		will-change: box-shadow, transform;
	}

	.woocommerce img {
		width: 100%;
		height: 100%;
	}
</style>

<?php

/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.5
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_reset_password_form');
?>
<div class="row">
	<div class="col-5">
		<img src="https://i.imgur.com/VB2U3Js.png" alt="">
	</div>
	<div class="col-7">
		<form method="post" class="woocommerce-ResetPassword lost_reset_password">

			<h1>ĐẶT LẠI MẬT KHẨU</h1>

			<p class="content"><?php echo apply_filters('woocommerce_reset_password_message', esc_html__('Vui lòng nhập lại mật khẩu mới ở bên dưới', 'woocommerce')); ?></p><?php // @codingStandardsIgnoreLine 
																																												?>

			<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<label for="password_1"><?php esc_html_e('New password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_1" id="password_1" autocomplete="new-password" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
				<label for="password_2"><?php esc_html_e('Re-enter new password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_2" id="password_2" autocomplete="new-password" />
			</p>

			<input type="hidden" name="reset_key" value="<?php echo esc_attr($args['key']); ?>" />
			<input type="hidden" name="reset_login" value="<?php echo esc_attr($args['login']); ?>" />

			<div class="clear"></div>

			<?php do_action('woocommerce_resetpassword_form'); ?>

			<p class="woocommerce-form-row form-row">
				<input type="hidden" name="wc_reset_password" value="true" />
				<button type="submit" class="woocommerce-Button button" value="<?php esc_attr_e('Save', 'woocommerce'); ?>"><?php esc_html_e('Cập nhật', 'woocommerce'); ?></button>
			</p>

			<?php wp_nonce_field('reset_password', 'woocommerce-reset-password-nonce'); ?>

		</form>
	</div>
</div>

<?php
do_action('woocommerce_after_reset_password_form');
