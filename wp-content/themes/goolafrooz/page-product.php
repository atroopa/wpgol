<?php
// Template Name: products
get_header(); ?>

<div class="flex flex-col items-center justify-center bg-gray-900  w-ful">
    <h1 class="font-extrabold text-transparent text-8xl py-10 bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
        گل افروز
    </h1>
    <h1 class=" bg-gradient-to-r from-blue-600 via-green-500 py-5 to-indigo-400 inline-block text-transparent bg-clip-text">
        از تمامی محصولات شرکت گلخانه سازی گل افروز دیدن بفرمایید
    </h1>
</div>


<?php
$parent_term_slug = 'green-house-products';
$parent_term = get_term_by('slug', $parent_term_slug, 'category');

$args = array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'parent' => $parent_term->term_id,
);

$slides = array(
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/hitter-slider_3_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/navdani-slider_2_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/fan-slider_1_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/pipe-slider_11zon.png"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/mashal-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/profeel-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/sarsoton-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/poshesh-slider_11zon.png"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/generator-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/tajhizat-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/bast-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/abyari-slider_11zon.webp"),
    array("IMAGE_URL" => get_template_directory_uri() . "/img/slider/webp/sarmayeshi-slider_11zon.webp"),
);

$icons = array(
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/flame.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/navdani.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/fan.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/pipe.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/mashal.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/profeel.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/sarsoton.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/poshesh.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/generator.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/tajhizat.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/bast.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/abyari.png"),
    array("ICON_URL" => get_template_directory_uri() . "/img/slider/icons/sarmayeshi.png"),
);

$sub_terms = get_terms($args);

if ($sub_terms) {
    $imageMap = array(
        "greenhouse-sarmayeshi" => array($slides[12]["IMAGE_URL"], $icons[12]["ICON_URL"]),
        "greenhouse-abyari" => array($slides[11]["IMAGE_URL"], $icons[11]["ICON_URL"]),
        "greenhouse-bast" => array($slides[10]["IMAGE_URL"], $icons[10]["ICON_URL"]),
        "greenhouse-tajhizat" => array($slides[9]["IMAGE_URL"], $icons[9]["ICON_URL"]),
        "greenhouse-generator" => array($slides[8]["IMAGE_URL"], $icons[8]["ICON_URL"]),
        "greenhouse-poshesh" => array($slides[7]["IMAGE_URL"], $icons[7]["ICON_URL"]),
        "greenhouse-sarsoton" => array($slides[6]["IMAGE_URL"], $icons[6]["ICON_URL"]),
        "greenhouse-profeel" => array($slides[5]["IMAGE_URL"], $icons[5]["ICON_URL"]),
        "greenhouse-mashal" => array($slides[4]["IMAGE_URL"], $icons[4]["ICON_URL"]),
        "greenhouse-pipe" => array($slides[3]["IMAGE_URL"], $icons[3]["ICON_URL"]),
        "greenhouse-fan" => array($slides[2]["IMAGE_URL"], $icons[2]["ICON_URL"]),
        "greenhouse-boilers" => array($slides[1]["IMAGE_URL"], $icons[1]["ICON_URL"]),
        "greenhouse-heater" => array($slides[0]["IMAGE_URL"], $icons[0]["ICON_URL"]),
    );

    echo '<ul>'; // Open the unordered list outside the loop for better structure

    foreach ($sub_terms as $sub_term) {
        if (isset($imageMap[$sub_term->slug])) {
            list($imageURL, $iconURL) = $imageMap[$sub_term->slug];
            $slide = array('IMAGE_URL' => $imageURL);
?>
            <a href="<?php echo get_term_link($sub_term); ?>">
                <li>
                    <!-- ----------- TITLE CAT -------------- -->
                    <div class=" w-full dark:bg-slate-800 gap-6 flex items-center justify-center">
                        <div class="md:w-full lg:w-1/2 bg-gray-100 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
                            <div class="flex items-center gap-4">
                                <img src="<?php echo $iconURL; ?>" class="bg-gray-200 p-5 w-32 group-hover:w-36 group-hover:h-36 object-contain rounded-xl transition-all duration-500 delay-500 transform" />
                                <div class="w-fit transition-all transform duration-500">
                                    <h1 class="text-gray-600 dark:text-gray-200 font-bold">
                                        <a href="<?php echo get_term_link($sub_term); ?>"><?php echo $sub_term->name; ?></a>
                                    </h1>
                                    <div class="text-gray-400"><?PHP echo $sub_term->description; ?></div>

                                </div>
                                <div class=" w-1/2 h-20 flex flex-row items-center justify-center ">
                                    <a href="<?php echo get_term_link($sub_term); ?>">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/slider/icons/arrow.png" class="bg-gray-200 w-20 h-20 group-hover:w-30 group-hover:h-30 object-contain rounded-full transition-all duration-500 delay-500 transform" />
                                    </a>
                                </div>
                            </div>
                            <div class="absolute group-hover:bottom-1 delay-300 -bottom-16 transition-all duration-500 bg-gray-600 dark:bg-gray-100 right-1 rounded-lg">
                                <div class="flex justify-evenly items-center gap-2 p-1 text-2xl text-white dark:text-gray-800">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------ SLIDER --------- -->
                    <?php get_template_part("inc/product", "slide", $slide); ?>

                </li>
            </a>

<?php // Close the PHP tag within the loop for proper syntax
        }
    }

    echo '</ul>'; // Close the unordered list outside the loop
}

get_footer();
?>