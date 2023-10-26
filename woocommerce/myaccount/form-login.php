<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>

	<div class="u-columns col2-set" id="customer_login">

		<div class="u-column1 col-1">

		<?php endif; ?>

		<div class="login_main">
			<div class="login_wrap">
				<div class="row">
					<!-- ĐĂNG KÝ -->
					<div class="col-lg-4" id="id_dangki">
						<main id="site-content">
							<div class="section-inner">
								<?php
								$home_url = get_home_url();
								if (is_user_logged_in()) {

									echo 'Bạn đã đăng nhập rồi. <a href="' . wp_logout_url($home_url) . '">Đăng xuất</a> ?';
								} else {
								?>
									<h1>Đăng ký</h1>
									<form id="hk-registerform" action="<?php echo get_home_url() . '/dang-ky'; ?>">
										<?php wp_nonce_field('form_register'); ?>
										<div id="hk-message"></div>
										<p style="display:none" id="hk-success">
											Đăng ký người dùng thành công. Mời bạn nhập thông tin vào form đăng nhập.
										</p>

										<p>
											<label class="lb_user lb">Tên đăng nhập&nbsp;<span class="required">*</span></label>
											<input type="text" name="username" id="username" placeholder="VD: ngocloc2001">
										</p>

										<p>
											<label class="lb_email lb">Email&nbsp;<span class="required">*</span></label>
											<input type="email" name="email" id="email" placeholder="Địa chỉ email...">
										</p>
										<p>
											<label class="lb_pass lb">Mật khẩu&nbsp;<span class="required">*</span></label>
											<!-- <input type="password" name="password" id="password" placeholder="**********"> -->
										<div class="pass">
											<input class="password" type="password" name="password" id="password" placeholder="**********">
											<span class="show-btn"><i class="fas fa-eye"></i></span>
										</div>
										</p>
										<p>
											<label class="lb_repass lb">Xác nhận lại mật khẩu&nbsp;<span class="required">*</span></label>
											<!-- <input type="password" name="repassword" id="repassword" placeholder="**********"> -->
										<div class="pass">
											<input class="password" type="password" name="repassword" id="repassword" placeholder="**********">
											<span class="show-btn"><i class="fas fa-eye"></i></span>
										</div>
										</p>
										<p class="text-center mb-0">
											<button class="form-submit" type="submit">Đăng ký</button>
											<span id="btn_dangnhap">Đăng nhập <i class="fas fa-long-arrow-alt-right" style="color: #012C4D;"></i></span>
										</p>
									</form>
								<?php } ?>
							</div>
						</main>
					</div>
					<!-- ĐĂNG NHẬP -->
					<div class="col-lg-4" id="id_dangnhap">
						<div class="dang_nhap_main">
							<h2><?php esc_html_e('Login', 'woocommerce'); ?></h2>
							<form class="woocommerce-form woocommerce-form-login login" method="post">
								<?php do_action('woocommerce_login_form_start'); ?>
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="username"><?php esc_html_e('Username or email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
									<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																				?>
								</p>
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
									<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
								</p>
								<?php do_action('woocommerce_login_form'); ?>
								<p class="form-row">
									<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
										<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
									</label>
									<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
									<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
								</p>
								<div class="dangnhap_bt">
									<p class="woocommerce-LostPassword lost_password">
										<a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
									</p>
									<p id="bt_create"> Tạo tài khoản</p>
								</div>
								<?php do_action('woocommerce_login_form_end'); ?>
							</form>
						</div>
					</div>
					<!-- HÌNH ẢNH -->
					<div class="col-lg-8">
						<img src="https://s3-alpha-sig.figma.com/img/8ef2/caab/b31504048bb0b9ba2c787fd4e183368d?Expires=1698624000&Signature=DPa8p85E~pOcvC-s0CyN~g3NlRAsirCPrK6A~NuE9yAm2OesjZieAfUVSw3kY0j0qsmtAbUQnN93DrxRdzKS4AjER1cH4QSiMdza-wOCFI0KuIHEEaeDKAEf06ZU~eowwPZGzQRcGxkCchu0iHM-3Pl9~3cRqEPsacW34y5hv9goyLrAJLynRB8jpLJS0INAkzCFTqNB4bZXTrLOgzQ8-F4nod6TssuJT8TsSk8ZOUn7lmEXLuij4p1vP7-unawpjUMuJsY1gj3ZHkvKiMe3kNyvvir4vVZTvm1lrfD-gnyBePQRj5n4GghxodWWu2r2ETtf-y1RvfNhY1Yq7g9oKA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" width="100%" height="100% !important">
					</div>
				</div>
			</div>
		</div>
		<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
		</div>ZF

		<!-- Quên mật khẩu -->

		<div class="u-column2 col-2">

			<h2><?php esc_html_e('Register', 'woocommerce'); ?></h2>

			<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>

				<?php do_action('woocommerce_register_form_start'); ?>

				<?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="reg_username"><?php esc_html_e('Username', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																																		?>
					</p>

				<?php endif; ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_email"><?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
					<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																																														?>
				</p>

				<?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="reg_password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
						<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
					</p>

				<?php else : ?>

					<p><?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?></p>

				<?php endif; ?>

				<?php do_action('woocommerce_register_form'); ?>

				<p class="woocommerce-form-row form-row">
					<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
					<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>
				</p>

				<?php do_action('woocommerce_register_form_end'); ?>

			</form>

		</div>

	</div>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>

<style>
	.woocommerce {
		padding-top: 120px;
	}

	#username {
		width: 100%;
		padding: 5px;
		border-bottom: 2px solid #012C4D;
		font-size: 14px;
		color: #333;
	}

	#username:focus {
		outline: none;
		border-color: #012C4D;
		/* Change the border color on focus */
		box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
		/* Add a subtle box shadow on focus */
	}

	#email {
		width: 100%;
		padding: 5px;
		border-bottom: 2px solid #012C4D;
		font-size: 14px;
		color: #333;
	}

	#email:focus {
		outline: none;
		border-color: #012C4D;
		/* Change the border color on focus */
		box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
		/* Add a subtle box shadow on focus */
	}

	#password {
		width: 100%;
		padding: 5px;
		border-bottom: 2px solid #012C4D;
		font-size: 14px;
		color: #333;
	}

	#password:focus {
		outline: none;
		border-color: #012C4D;
		/* Change the border color on focus */
		box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
		/* Add a subtle box shadow on focus */
	}

	#repassword {
		width: 100%;
		padding: 5px;
		border-bottom: 2px solid #012C4D;
		font-size: 14px;
		color: #333;
	}

	#repassword:focus {
		outline: none;
		border-color: #012C4D;
		/* Change the border color on focus */
		box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
		/* Add a subtle box shadow on focus */
	}

	.tintuc-main {
		background-color: #ffff;
	}

	.form-submit {
		background-color: #012C4D;
	}

	.dangnhap_bt {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.dangnhap_bt p {
		margin-top: 10px;
	}

	/* form login  */
	.login_main {
		padding: 50px 0px 50px 0px;
	}

	.text-center {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.text-center span {
		color: #012C4D;
		cursor: pointer;

	}

	.login_wrap {
		background-color: #fff;
		box-shadow: 0 0 40px 0 rgba(0, 0, 0, 1.2);
		max-width: 850px;
		margin: 0 auto;
	}

	.login_wrap img {
		height: 100% !important;
		width: 100%;
	}


	.section-inner h1 {
		font-size: 35px;
		margin-bottom: 15px;
		color: #012C4D;
	}

	label {
		color: #012C4D;
	}

	/* ddawng nhap
	 */
	.dang_nhap_main {
		max-width: 400px;
		margin: 0 auto;
		padding: 20px 0px 20px 20px;
		background-color: #ffffff;
		border-radius: 5px;

	}

	.dang_nhap_main h2 {
		/* padding-bottom: 20px; */
		font-size: 35px;
		margin-bottom: 15px;
		color: #012C4D;
	}

	.dang_nhap_main form.login {
		display: flex;
		flex-direction: column;
		border: none;
	}

	.dang_nhap_main label {
		font-weight: bold;
		margin-bottom: 10px;
	}

	.dang_nhap_main input[type="text"],
	.dang_nhap_main input[type="password"] {
		width: 100%;
		padding: 5px;
		margin-bottom: 15px;
		border: 1px solid #fff;

	}

	.dang_nhap_main input[type="checkbox"] {
		margin-right: 5px;
	}

	.dang_nhap_main button.woocommerce-button {
		margin: 5% 20% 0% 20%;
		letter-spacing: 1px;
		border: none;
		width: 140px;
		height: 42px;
		border-radius: 23.5px;
		cursor: pointer;
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 0;
		background: linear-gradient(90deg, #04C 0%, #006EFF 100%);
		font-size: 14px;
		color: #fff;
		text-transform: uppercase;

		-webkit-transform: perspective(1px) translateZ(0);
		transform: perspective(1px) translateZ(0);
		box-shadow: 0 0 1px transparent;
	}

	.dang_nhap_main button.woocommerce-button:hover {
		-webkit-animation: hvr-wobble-horizontal 1s ease-in-out 1;
		animation: hvr-wobble-horizontal 1s ease-in-out 1;
		background: linear-gradient(90deg, #04C 0%, #006EFF 100%);
		color: #fff;
	}



	.dang_nhap_main .woocommerce-LostPassword {
		margin-top: 10px;
	}

	.dang_nhap_main a {
		color: #012C4D;
		text-decoration: none;
	}

	#bt_create {
		cursor: pointer;
		color: #012C4D;

	}

	#bt_create:hover {
		color: #006EFF;
		font-weight: bold;
		cursor: pointer;
	}


	.dang_nhap_main a:hover {
		text-decoration: underline;
	}

	.woocommerce-form-login.login {
		margin: 0 !important;
		padding: 0 !important;
	}

	/* ddawng kis */
	#site-content {
		background-color: #fff;
		border-radius: 5px;
	}

	.section-inner {
		max-width: 400px;
		margin: 0 auto;
		padding: 20px 0px 20px 20px;
		background-color: #fff;
		border-radius: 5px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

	}

	h1 {
		font-size: 24px;
		margin-bottom: 20px;
	}

	form#hk-registerform {
		margin-top: 20px;
	}

	#hk-success {
		color: green;
		margin-top: 10px;
		font-weight: bold;
	}

	form input[type="text"],
	form input[type="email"],
	form input[type="password"] {
		width: 100%;
		padding: 5px;
		margin: 10px 0;
		border: 2px solid #fff;
	}

	.form-submit {
		padding: 5px 20px;
		border-radius: 5px;
		font-weight: bold;
		letter-spacing: 2px;
		border: none;
		width: 133px;
		height: 47px;
		margin-right: 15px;
		border-radius: 23.5px;
		cursor: pointer;
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 0;
		background: linear-gradient(90deg, #04C 0%, #006EFF 100%);
		font-size: 14px;
		color: #fff;
		text-transform: uppercase;

		-webkit-transform: perspective(1px) translateZ(0);
		transform: perspective(1px) translateZ(0);
		box-shadow: 0 0 1px transparent;


	}

	.form-submit:hover {
		-webkit-animation: hvr-wobble-horizontal 1s ease-in-out 1;
		animation: hvr-wobble-horizontal 1s ease-in-out 1;
	}

	@-webkit-keyframes hvr-wobble-horizontal {
		16.65% {
			-webkit-transform: translateX(8px);
			transform: translateX(8px);
		}

		33.3% {
			-webkit-transform: translateX(-6px);
			transform: translateX(-6px);
		}

		49.95% {
			-webkit-transform: translateX(4px);
			transform: translateX(4px);
		}

		66.6% {
			-webkit-transform: translateX(-2px);
			transform: translateX(-2px);
		}

		83.25% {
			-webkit-transform: translateX(1px);
			transform: translateX(1px);
		}

		100% {
			-webkit-transform: translateX(0);
			transform: translateX(0);
		}
	}

	@keyframes hvr-wobble-horizontal {
		16.65% {
			-webkit-transform: translateX(8px);
			transform: translateX(8px);
		}

		33.3% {
			-webkit-transform: translateX(-6px);
			transform: translateX(-6px);
		}

		49.95% {
			-webkit-transform: translateX(4px);
			transform: translateX(4px);
		}

		66.6% {
			-webkit-transform: translateX(-2px);
			transform: translateX(-2px);
		}

		83.25% {
			-webkit-transform: translateX(1px);
			transform: translateX(1px);
		}

		100% {
			-webkit-transform: translateX(0);
			transform: translateX(0);
		}
	}


	/* p .form-submit:hover {
		background-color: #0059b3;
	} */

	.lb {
		display: flex;
		color: #012C4D;
		font-weight: 700;
	}

	.required {
		color: red;
	}

	.meta-data {
		display: none;
	}

	#hk-message ul li {
		color: red;
		list-style-type: none;
	}

	p {
		margin: 0;
	}

	#btn_dangnhap {
		display: flex;
		align-items: center;
		gap: 3px;
		font-weight: bold;
	}

	.pass {
		position: relative;
	}

	.pass span {
		position: absolute;
		right: 15px;
		top: 50%;
		transform: translateY(-50%);
		font-size: 14;
		color: #000000;
		cursor: pointer;
		display: none;

		@media screen and (max-width: 420px) {
			top: 55%;
			font-size: 14px;
		}
	}

	.pass input:valid~span {
		display: block;
	}

	.pass span i.hide-btn::before {
		content: "\f070";
	}

	.woocommerce form .form-row label {
		margin: 0 !important;
		line-height: 1.5 !important;
	}
</style>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Get the elements and buttons
		const dangkiDiv = document.getElementById("id_dangki");
		const dangnhapDiv = document.getElementById("id_dangnhap");
		const createButton = document.getElementById("bt_create");
		const loginButton = document.getElementById("btn_dangnhap");

		// Function to show the registration form and hide the login form
		function showRegistrationForm() {
			dangkiDiv.style.display = "block";
			dangnhapDiv.style.display = "none";
		}

		// Function to show the login form and hide the registration form
		function showLoginForm() {
			dangkiDiv.style.display = "none";
			dangnhapDiv.style.display = "block";
		}

		// Initially, show the login form and hide the registration form
		showLoginForm();

		// Add a click event listener to the "Tạo tài khoản" button
		createButton.addEventListener("click", function() {
			showRegistrationForm();
		});

		// Add a click event listener to the "Đăng nhập" button
		loginButton.addEventListener("click", function() {
			showLoginForm();
		});

		var elements = document.querySelectorAll('.active');
		elements.forEach(function(element) {
			element.classList.remove('active');
		});
		document.getElementById("login").classList.add('active');
	});

	//Hiện mắt của mật khẩu
	const passFields = document.querySelectorAll(".password");
	const showBtns = document.querySelectorAll("span i");
	showBtns.forEach((showBtn, index) => {
		showBtn.addEventListener("click", () => {
			if (passFields[index].type === "password") {
				passFields[index].type = "text";
				showBtn.classList.add("hide-btn");
			} else {
				passFields[index].type = "password";
				showBtn.classList.remove("hide-btn");
			}
		});
	});
</script>