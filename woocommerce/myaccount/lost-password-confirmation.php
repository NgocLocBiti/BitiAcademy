<script>
    var elements = document.querySelectorAll('.active');
    elements.forEach(function(element) {
        element.classList.remove('active');
    });
    document.getElementById("login").classList.add('active');
</script>
<style>
    .woocommerce {
        background: #fff;
        border-radius: 10px;
        width: 60%;
        margin: 0 20%;
        box-shadow: 8px 8px 5px 0px #8888;
        text-align: center;
        border: 2px solid #8fae1b;
    }

    .woocommerce-message {
        padding: 1em 2em 1em 3.5em;
        margin: 0 0 1em;
        position: relative;
        background-color: #8fae1b;
        color: #fff;
        border-top-right-radius: 8px;
        list-style: none outside;
        width: auto;
        word-wrap: break-word;
        border-top-left-radius: 8px;
        font-size: 18px;
        font-weight: bold;
    }

    .woocommerce-message::before {
        content: "\e015";
        color: #ffffff;
    }

    p {
        padding: 1px 20px;
    }

    @media screen and (max-width: 420px) {
        .woocommerce-message::before {
            display: none;
        }

        .woocommerce-message {
            padding: 1em 1em 1em 1em;
        }

        .woocommerce {
            width: 99%;
            margin: -50px 0% -15px 0%;
        }
    }

    /* Máy tính bản */
    @media screen and (max-width: 990px) {

        .woocommerce {
            margin: 0 20% 15%;
        }
    }
</style>
<?php
/**
 * Lost password confirmation text.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/lost-password-confirmation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.9.0
 */

defined('ABSPATH') || exit;

wc_print_notice(esc_html__('Password reset email has been sent.', 'woocommerce'));
?>

<?php do_action('woocommerce_before_lost_password_confirmation_message'); ?>

<p><?php echo esc_html(apply_filters('woocommerce_lost_password_confirmation_message', esc_html__('A password reset email has been sent to the email address on file for your account, but may take several minutes to show up in your inbox. Please wait at least 10 minutes before attempting another reset.', 'woocommerce'))); ?></p>

<?php do_action('woocommerce_after_lost_password_confirmation_message'); ?>