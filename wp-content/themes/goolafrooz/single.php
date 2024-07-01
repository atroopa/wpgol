<?php get_header(); ?>

<?php
// دریافت عنوان سئو با استفاده از متا فیلد Yoast SEO
$seo_title = get_post_meta(get_the_ID(), '_yoast_wpseo_title', true);
//error_log('SEO Title: ' . $seo_title);

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

// دریافت Focus Keyphrase از Yoast SEO
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

<div class="flex flex-col">
    <style>
        /* Import Tailwind base styles */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/base.min.css');

        /* Custom styles */
        h1 {
        font-size: 1.5rem; /* Tailwind's text-2xl */
        line-height: 2rem;
        }
        h2 {
        font-size: 1.25rem; /* Tailwind's text-xl */
        line-height: 1.75rem;
        }
        h3 {
        font-size: 1.125rem; /* Tailwind's text-lg */
        line-height: 1.5rem;
        }
        a {
        color: #2563eb; /* Tailwind's text-blue-600 */
        text-decoration: underline;
        }
        b {
        font-weight: 700; /* Tailwind's font-bold */
        }
        strong{
            font-weight: 700; /* Tailwind's font-bold */
        }
        span{
            font-size: 1.25rem; /* Tailwind's text-xl */
            line-height: 1.75rem;
        }
        img {
            height: auto !important;
        }

        /* Import Tailwind components and utilities */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/components.min.css');
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/utilities.min.css');

    </style>
    <div class="bg-gray-100 py-8">
        <?PHP while (have_posts()) {
            the_post(); ?>
            <div class="container mx-auto px-4">

                <h1 class="text-4xl font-bold text-gray-800 mb-2"><?PHP the_title(); ?></h1>
                <p class="text-gray-600 pb-2"><?PHP echo get_the_date(); ?></p>

                <span class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">
                    <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span class="sr-only">Icon description</span>
                </span>
                <span class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z" />
                        <path fill="#fff" d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z" />
                    </svg>
                    <span class="sr-only">Icon description</span>
                </span>
                <span class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                    <span class="sr-only">Icon description</span>
                </span>
                <span class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-gray-700 dark:text-blue-400">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Icon description</span>
                </span>

            </div>
    </div>
    <div class="bg-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row">
            <div class="w-full h-50 md:w-3/4 px-4">
                <?PHP if (has_post_thumbnail()) { ?>
                    <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="mb-8">
                <?PHP } ?>
                <div class="prose max-w-none  py-4 my-2">
                    <?PHP echo nl2br($content); ?>
                </div>
                    <?PHP the_tags('<ul class="p-2 mb-12 whitespace-nowrap no-scrollbar overflow-x-scroll overflow-y-hidden"><li class="w-fit inline-block mx-1 p-3 px-8 border-gray-900 border rounded">#', '</li><li class="w-fit inline-block mx-1 p-3 px-8 border-gray-900 border rounded">#', '</li></ul>'); ?>
            </div>
            <?PHP } ?>
                    <?PHP get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>