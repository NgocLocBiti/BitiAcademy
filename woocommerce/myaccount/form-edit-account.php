<?php

/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_edit_account_form'); ?>

<div class="thongtin-account">
	<div class="bg">
		<ul class="nav nav-pills" id="pills-tab" role="tablist">
			<li class="nav-item " role="presentation">
				<button class="nav-link active after" id="pills-info-account-tab" data-bs-toggle="pill" data-bs-target="#pills-info-account" type="button" role="tab" aria-controls="pills-info-account" aria-selected="true">Thông tin tài khoản</button>
			</li>
			<li class="nav-item " role="presentation">
				<button class="nav-link after" id="pills-avtar-tab" data-bs-toggle="pill" data-bs-target="#pills-avtar" type="button" role="tab" aria-controls="pills-avtar" aria-selected="false" style="border-right: 1px solid #dfd8d8; border-left: 1px solid #dfd8d8;">Hình đại diện</button>
			</li>
			<li class="nav-item " role="presentation">
				<button class="nav-link " id="pills-changepass-tab" data-bs-toggle="pill" data-bs-target="#pills-changepass" type="button" role="tab" aria-controls="pills-changepass" aria-selected="false">Thiết lập mật khẩu</button>
			</li>
		</ul>

		<div class="tab-content" id="pills-tabContent">

			<!-- Thông tin tài khoản -->
			<div class="tab-pane fade show active info" id="pills-info-account" role="tabpanel" aria-labelledby="pills-info-account-tab" tabindex="0">
				<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?>>
					<?php do_action('woocommerce_edit_account_form_start'); ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="account_id"><?php esc_html_e('Id tài khoản', 'woocommerce'); ?>&nbsp;</label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_id" id="account_id" autocomplete="family-name" value="<?php echo esc_attr($user->id); ?>" readonly />
					</p>
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="account_last_name"><?php esc_html_e('Last name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr($user->last_name); ?>" />
					</p>

					<div class="clear"></div>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="account_first_name"><?php esc_html_e('First name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr($user->first_name); ?>" />
					</p>

					<div class="clear"></div>

					<!-- <?php
							$user_id = get_current_user_id();
							$userPhone = get_field('phone', 'user_' . $user_id);

							?> -->
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="account_billing_phone"><?php esc_html_e('Số điện thoại', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="tel" class="woocommerce-Input woocommerce-Input--text input-text" name="account_phone" id="account_phone" autocomplete="given-name" value="<?php echo (isset($userPhone)) ? $userPhone  : ""; ?>" />

						<!-- <input type="text" name="account_phone" id="account_phone" value="<?php echo (isset($userPhone)) ? $userPhone  : ""; ?>" /> -->
					</p>

					<div class="clear"></div>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="account_display_name"><?php esc_html_e('Display name', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr($user->display_name); ?>" />
					</p>
					<span><em><?php esc_html_e('This will be how your name will be displayed in the account section and in reviews', 'woocommerce'); ?></em></span>

					<div class="clear"></div>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="account_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr($user->user_email); ?>" />
					</p>
					<div class="clear"></div>

					<?php do_action('woocommerce_edit_account_form'); ?>

					<p>
						<?php wp_nonce_field('save_account_details', 'save-account-details-nonce'); ?>
						<button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>"><?php esc_html_e('Cập nhật', 'woocommerce'); ?></button>
						<input type="hidden" name="action" value="save_account_details" />
					</p>

					<?php do_action('woocommerce_edit_account_form_end'); ?>
				</form>

				<?php do_action('woocommerce_after_edit_account_form'); ?>
			</div>
			<!-- Hình đại diện -->
			<div class="tab-pane fade avatar" id="pills-avtar" role="tabpanel" aria-labelledby="pills-avtar-tab" tabindex="0">

			</div>
			<!-- Thiết lập mật khẩu -->
			<div class="tab-pane fade changepass" id="pills-changepass" role="tabpanel" aria-labelledby="pills-changepass-tab" tabindex="0">
				<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action('woocommerce_edit_account_form_tag'); ?>>

					<!-- THAY ĐỔI MẬT KHẨU -->
					<fieldset>
						<legend><?php esc_html_e('Password change', 'woocommerce'); ?></legend>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="password_current"><?php esc_html_e('Current password (leave blank to leave unchanged)', 'woocommerce'); ?></label>
							<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="password_1"><?php esc_html_e('New password (leave blank to leave unchanged)', 'woocommerce'); ?></label>
							<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="password_2"><?php esc_html_e('Confirm new password', 'woocommerce'); ?></label>
							<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off" />
						</p>
					</fieldset>

					<div class="clear"></div>

					<?php do_action('woocommerce_edit_account_form'); ?>

					<p>
						<?php wp_nonce_field('save_account_details', 'save-account-details-nonce'); ?>
						<button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e('Save changes', 'woocommerce'); ?>"><?php esc_html_e('Save changes', 'woocommerce'); ?></button>
						<input type="hidden" name="action" value="save_account_details" />
					</p>

					<?php do_action('woocommerce_edit_account_form_end'); ?>
				</form>

				<?php do_action('woocommerce_after_edit_account_form'); ?>

			</div>
		</div>
	</div>
</div>

<!-- <script>
	(function($) {

		$("form.edit-account").on('submit', function(e) {
			e.preventDefault();
			let dataPhone = $("form.edit-account input[name='account_phone']").val();
			var fd = new FormData();
			fd.append("phone_number", dataPhone);
			fd.append("action", "save_phone");
			savePhone(fd);
		})



		function savePhone(fd) {
			$.ajax({
				type: "post",
				// dataType: "html", //Dạng dữ liệu trả về xml, json, script, or html
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				data: fd,
				contentType: false,
				processData: false,
				beforeSend: function() {},
				success: function(response) {
					setTimeout(function() {
						window.location.reload();
					}, 300)
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log('Error:', textStatus);
					console.log('Error Details:', errorThrown);
				}
			});
		}
	})(jQuery);
</script> -->

<style>
	.woocommerce-MyAccount-content {
		padding: 15px;
		border-radius: 10px;
		box-shadow: 8px 8px 5px 0px #8888;
		background: #FFF;
	}

	.thongtin-account {
		border-radius: 16px;
		background: #fff;
	}

	.thongtin-account .bg {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}

	.thongtin-account .bg ul {
		display: flex;
		align-items: flex-start;
		background: #F2F2F2;
	}

	.thongtin-account .bg ul li {
		width: 200px;
	}

	.thongtin-account .bg ul li .nav-link {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		color: #000000;
		font-weight: bold;
		font-size: 18px;
	}

	.thongtin-account .bg ul li .active {
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 10px;
		border-bottom: 2px solid #1388ED;
		background: #FFF;
		width: 100%;
		color: #1388ED;
		font-weight: bold;
		font-size: 18px;
		border-radius: none !important;
	}

	.thongtin-account .bg .tab-content {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		flex: 1 0 0;
		align-self: stretch;
		margin-top: 20px;
	}

	/* thông tin tài khoản */
	.thongtin-account .bg .tab-content .tab-pane {
		width: 100%;
	}

	.thongtin-account .bg .tab-content .info p {
		display: flex;
	}

	.thongtin-account .bg .tab-content .info p label {
		color: var(--Black-4-Text, #404040);
		font-size: 18px;
		font-style: normal;
		font-weight: 400;
		width: 170px;
	}

	.thongtin-account .bg .tab-content .info p input {
		border-radius: 5px;
		color: #404040;
		font-size: 16px;
		padding: 5px;
		border: 2px solid #c1c1c1;
	}

	.thongtin-account .bg .tab-content .info span em {
		margin-left: 140px;
		color: #68b0fb;
	}

	.thongtin-account .bg .tab-content .info p button {
		margin-top: 30px;
		border-radius: 8px;
		border: 2px solid #1388ED;
		color: #1388ed;
		background: #FFF;
		transition: transform 0.2s ease, box-shadow 0.2s ease;
	}

	.thongtin-account .bg .tab-content .info p button:hover {
		box-shadow: -5px 5px 5px 0px #8888;
		transform: translateY(-4px);
		will-change: box-shadow, transform;
	}
</style>