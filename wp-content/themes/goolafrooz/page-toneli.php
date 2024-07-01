<?php
// Template Name: toneli
get_header();
?>

<?php
// دریافت عنوان سئو با استفاده از متا فیلد Yoast SEO
$seo_title = get_post_meta(get_the_ID(), '_yoast_wpseo_title', true);
error_log('SEO Title: ' . $seo_title);

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

function custom_seo_meta_tags() {
    global $seo_title, $meta_description, $focus_keyphrase;
    if ($seo_title) {
        echo '<title>' . esc_html($seo_title) . '</title>' . "\n";
    } else {
        echo '<title>' . get_the_title() . '</title>' . "\n";
    }
    if ($meta_description) {
        echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . "\n";
    } else {
        print("<div>ERROR: meta description is not exist!</div>");
    }
    if($focus_keyphrase){
        echo '<meta name="keywords" content="' . esc_attr($focus_keyphrase) . '">' . "\n";
    } else {
        print("<div>ERROR: meta keyword is not exist !</div>");
    }
}
add_action('wp_head', 'custom_seo_meta_tags');

?>

<!-- Blog post with featured image -->
 <style>
    img {
        height: auto !important;
}
 </style>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Blog post header -->
        <div class="py-8">
            <h1 class="text-5xl font-bold mb-2"><?php echo esc_html($title); ?></h1>
        </div>

        <!-- Featured image -->
        <img src="<?php echo esc_url($featured_image); ?>"
             alt="<?php echo esc_attr($image_alt ? $image_alt : 'بدون توضیحات'); ?>"
             class="w-full h-auto mb-8">

        <!-- Blog post content -->
        <div class="py-5 text-2xl prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
            <?php echo wpautop($content); ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>
