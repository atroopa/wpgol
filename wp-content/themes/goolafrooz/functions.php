<?php

function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'Main_Menu'=>'منوی اصلی',
        'footer_one'=>'منوس اول فوتر',
        'footer_two'=>'منوی دوم فوتر',
    ));
}

add_action("after_setup_theme", "theme_setup");


add_action('admin_post_my_contact_form', 'my_contact_form_handler');
add_action('admin_post_nopriv_my_contact_form', 'my_contact_form_handler');

function my_contact_form_handler() {
    // ثبت لاگ ورودی‌های فرم برای اشکال‌زدایی
    error_log(print_r($_POST, true));

    // اطمینان از اینکه درخواست از نوع POST است
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ضدعفونی کردن ورودی‌های فرم
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        // تنظیمات ایمیل
        $to = 'info@golafrooz.com';  // آدرس ایمیل خود را در اینجا قرار دهید
        $subject = 'پیام جدید از فرم تماس';
        $body = "نام: $name\nایمیل: $email\nپیام:\n$message";
        $headers = ['From: ' . $email, 'Reply-To: ' . $email];

        // ارسال ایمیل و بررسی نتیجه
        if (wp_mail($to, $subject, $body, $headers)) {
            // هدایت به صفحه "thank-you" در صورت موفقیت
            wp_redirect(home_url('/thank-you'));
            exit;
        } else {
            // هدایت به صفحه "error" در صورت شکست
            $error_message = urlencode('خطایی در ارسال ایمیل رخ داده است. لطفا دوباره تلاش کنید.');
                wp_redirect(home_url('/error?message=' . $error_message));
            exit;
        }
    }
}




?>