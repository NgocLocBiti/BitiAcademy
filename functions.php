<?php

require get_template_directory() . '/inc/init.php';

function add_favicon()
{
    echo '<link rel="shortcut icon" type="image/png" href="' . get_theme_mod('html_favicon_icon') . '" />';
}
add_action('wp_head', 'add_favicon');

add_filter('woocommerce_currency_symbol', 'change_currency_symbol', 10, 2);
function change_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'VND':
            $currency_symbol = ' VNĐ';
            break;
    }
    return $currency_symbol;
}


// Đăng ký

add_action('wp_ajax_RegisterAction', 'hk_handle_register_form');
add_action('wp_ajax_nopriv_RegisterAction', 'hk_handle_register_form');

function hk_handle_register_form()
{
    $userData = [];
    if (isset($_POST['userData']) && is_array($_POST['userData'])) {
        $userData = $_POST['userData'];
    }

    if (isset($userData['_wpnonce']) && wp_verify_nonce($userData['_wpnonce'], 'form_register')) {
        $arr_signup = [];
        $arr_error  = [];

        if (isset($userData['email']) && $userData['email']) {
            $arr_signup['email'] = sanitize_text_field($userData['email']);

            if (email_exists($arr_signup['email'])) {
                $arr_error['email'] = 'Địa chỉ email đã tồn tại';
            }
        } else {
            $arr_error['email'] = 'Bạn chưa nhập địa chỉ email';
        }

        if (isset($userData['username']) && $userData['username']) {
            $arr_signup['username'] = sanitize_text_field($userData['username']);

            if (username_exists($arr_signup['username'])) {
                $arr_error['username'] = 'Username đã tồn tại';
            }
        } else {
            $arr_error['username'] = 'Bạn chưa nhập username';
        }

        if (isset($userData['password']) && $userData['password']) {
            $arr_signup['password'] = sanitize_text_field($userData['password']);
        } else {
            $arr_error['password'] = 'Bạn chưa nhập password';
        }

        if (isset($userData['repassword']) && $userData['repassword']) {
            $arr_signup['repassword'] = sanitize_text_field($userData['repassword']);

            if ($arr_signup['password'] != $arr_signup['repassword']) {
                $arr_error['repassword'] = 'Xác nhận password chưa trùng nhau';
            }
        } else {
            $arr_error['repassword'] = 'Bạn chưa nhập xác nhận password';
        }


        if (count($arr_error)) {
            echo '<ul>';
            foreach ($arr_error as $key => $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
        } else {
            $user_id = wp_create_user($arr_signup['username'], $arr_signup['password'], $arr_signup['email']);
            if ($user_id) {
                $arr_signup = [];
                echo 'success';
            }
        }
    }
    die();
}

// Lấy số điện thoại

// add_action('wp_ajax_save_phone', 'save_phone');
// add_action('wp_ajax_nopriv_save_phone', 'save_phone');
// function save_phone()
// {
//     $phoneNumber  = $_POST['phone_number'];
//     if (is_user_logged_in()) {
//         $user_id = get_current_user_id();
//         update_field('phone', $phoneNumber, 'user_' . $user_id);
//     } else {
//         wp_send_json_error('User is not logged in.');
//     }
//     wp_die();
// }