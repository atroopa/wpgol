<?PHP // Template Name: catalog

get_header();




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
    global $seo_title, $meta_description, $focus_keyphrase;
    if ($seo_title) {
        echo '<title>' . $seo_title . '</title>' . "\n";
    } else {
        echo '<title>' . get_the_title() . '</title>' . "\n";
    }
    if ($meta_description) {
        echo '<meta name="description" content="' . $meta_description . '">' . "\n";
    } else {
        print("<div>ERROR: meta description is not exist!</div>");
    }
    if($focus_keyphrase){
        echo '<meta name="keywords" content="' . $focus_keyphrase . '">' . "\n";
    } else {
        print("<div>ERROR: meta keyword is not exist !</div>");
    }
}
add_action('wp_head', 'custom_seo_meta_tags');

// // نمایش داده‌ها به صورت متن ساده برای آزمایش
// echo 'Title: ' . $title . '<br>';
// echo 'Content: ' . $content . '<br>';
// echo 'Featured image address: ' . $featured_image . '<br>';
// echo 'Image alt: ' . ( $image_alt ? $image_alt : 'بدون توضیحات' ) . '<br>';
// echo 'Focus keyphrase: ' . $focus_keyphrase . '<br>';
// echo 'SEO title: ' . $seo_title . '<br>';
// echo 'Meta description: ' . $meta_description . '<br>';s
?>


<!-- component -->
<!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
  <div class="w-full items-center mx-auto max-w-screen-lg">
    <div class="group grid w-full grid-cols-2">
       <div>
        <div class="pr-3 md:pr-12">
          <p class="peer text-sm md:text-xl mb-6 text-gray-900">
          <?php echo $content;?>
        </p>

          <h3 class="mb-4 font-semibold text-xl text-gray-600">برای دانلود کاتالوگ ها رو لینک مورد نظر کلیک کنید</h3>
          <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-700">
            <li>کاتالوگ شماره یک</li>
            <li>کاتالوگ شماره دو</li>
            <li>کاتالوگ شماره سه</li>
            <li>کاتالوگ شماره یک</li>
            <li>کاتالوگ شماره دو</li>
            <li>کاتالوگ شماره سه</li>
          </ul>
        </div>
      </div>
      <div class="pr-16 relative flex flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-[#3490dc] before:bottom-0 before:right-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
        <div class="absolute top-0 right-0 bg-blue-500 w-4/6 px-3 md:px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-[#38a169] transition-all ">
          <span class="block mb-10 font-bold group-hover:text-orange-300">ما اینجا هستیم</span>
          <h2 class="text-white font-bold text-sm md:text-3xl">
              <?php echo $title; ?>
          </h2>
        </div>
        <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="">
          <span class="hidden md:block">MORE ABOUT US</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
        </a>
        <div class="rounded-xl overflow-hidden">
          <img class="px-1" src="<?php echo $featured_image; ?>" alt=<?php ( $image_alt ? $image_alt : 'بدون توضیحات' );?>>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>