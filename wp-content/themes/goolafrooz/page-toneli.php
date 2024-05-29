<?php
// Template Name: toneli
get_header();
?>

<div class="bg-blue-100 w-full py-30">
aa
</div>
<?php

// دریافت عنوان سئو با استفاده از متا فیلد Yoast SEO
$seo_title = get_post_meta(get_the_ID(), '_yoast_wpseo_title', true);

// دریافت توضیحات متا با استفاده از متا فیلد Yoast SEO
$meta_description = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);

// دریافت عنوان صفحه
$title = get_the_title();

// دریافت محتوای صفحه
$content = get_the_content();

// دریافت آدرس تصویر شاخص صفحه
$featured_image = get_the_post_thumbnail_url();

// دریافت alt تصویر (در صورت وجود)
$image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

// دریافت Focus Keyphrase از Yoast SEO
$focus_keyphrase = get_post_meta(get_the_ID(), '_yoast_wpseo_focuskw', true);

// ارسال داده‌ها به هدر
function custom_seo_meta_tags() {
    global $seo_title, $meta_description;
    if ($seo_title) {
        echo '<title>' . $seo_title . '</title>' . "\n";
    } else {
        echo '<title>' . get_the_title() . '</title>' . "\n";
    }
    if ($meta_description) {
        echo '<meta name="description" content="' . $meta_description . '">' . "\n";
    }
}
add_action('wp_head', 'custom_seo_meta_tags');

// نمایش داده‌ها به صورت متن ساده برای آزمایش
echo 'Title: ' . $title . '<br>';
echo 'Content: ' . $content . '<br>';
echo 'Featured image address: ' . $featured_image . '<br>';
echo 'Image alt: ' . ( $image_alt ? $image_alt : 'بدون توضیحات' ) . '<br>';
echo 'Focus keyphrase: ' . $focus_keyphrase . '<br>';
echo 'SEO title: ' . $seo_title . '<br>';
echo 'Meta description: ' . $meta_description . '<br>';

get_footer();
?>
