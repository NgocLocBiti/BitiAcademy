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

// Thay đổi hình dại diện
function hk_user_upload_image($file = array())
{
    require_once(ABSPATH . 'wp-admin/includes/admin.php');
    $file_return = wp_handle_upload($file, array('test_form' => false));

    if (isset($file_return['error']) || isset($file_return['upload_error_handler'])) {
        return false;
    } else {
        $filename = $file_return['file'];
        $attachment = array(
            'post_mime_type' => $file_return['type'],
            'post_title'     => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content'   => '',
            'post_status'    => 'inherit',
            'guid'           => $file_return['url']
        );
        $attachment_id = wp_insert_attachment($attachment, $file_return['url']);
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
        wp_update_attachment_metadata($attachment_id, $attachment_data);
        if (0 < intval($attachment_id)) {
            return array(
                'url' => $file_return['url'],
                'id'  => $attachment_id
            );
        }
    }
    return false;
}
// Xử lý ảnh trên server
add_action('wp_ajax_change_user_avatar', 'hk_change_user_avatar');
function hk_change_user_avatar()
{
    $file_upload = $_FILES['upload_avatar'];
    $user_id     = get_current_user_id();
    $avatar_data = array();

    if (isset($file_upload) && $file_upload) {
        $avatar_data = hk_user_upload_image($file_upload);

        if ($avatar_data) {

            $custom_avatar = get_user_meta($user_id, 'custom_avatar', true);
            if ($custom_avatar) {
                update_user_meta($user_id, 'custom_avatar', $avatar_data['url']);
            } else {
                add_user_meta($user_id, 'custom_avatar', $avatar_data['url']);
            }

            wp_send_json_success($avatar_data['url'], 200);
        }
    }

    die();
}

// Thay đổi avtar
add_filter("get_avatar", "hk_custom_user_avatar", 1, 5);
function hk_custom_user_avatar($avatar, $id_or_email, $size, $alt, $args)
{
    $user       = false;
    $user_id    = '';
    $avatar_url = '';

    if (is_numeric($id_or_email)) {

        $id   = (int) $id_or_email;
        $user = get_user_by('id', $id);
    } elseif (is_object($id_or_email)) {

        if (!empty($id_or_email->user_id)) {
            $id   = (int) $id_or_email->user_id;
            $user = get_user_by('id', $id);
        }
    } else {
        $user = get_user_by('email', $id_or_email);
    }

    if ($user && is_object($user)) {
        $user_id     = $user->data->ID;
        $avatar_url  = get_user_meta($user_id, 'custom_avatar', true);
        $replace_img = get_avatar_url($user_id);
        $output_img  = '';

        if (isset($avatar_url) && $avatar_url) {
            $output_img = $avatar_url;
        } else {
            $output_img = $replace_img;
        }

        $avatar = '<img class="avatar" src="' . $output_img . '" width="' . $size . '" height="' . $size . '" />';
    }

    return $avatar;
}

// Xóa các trường không cần thiết
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields', 99);
function custom_override_checkout_fields($fields)
{

    //Danh sách field cần xóa ở đây
    // shipping
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_postcode']);
    // billing
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_company']);

    return $fields;
}
