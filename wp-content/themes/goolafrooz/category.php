<?php get_header(); ?>
<?php
if (is_category()) {
    $category = get_queried_object();
    //echo 'This is the category: ' . $category->slug;

    $page = get_page_by_title('محصولات'); // 'عنوان صفحه' را با عنوان واقعی صفحه خود جایگزین کنید
    $product = get_permalink( $page->ID);
?>



<!-- Breadcrumb -->
<nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    <li class="inline-flex items-center">
      <a href="<?php echo home_url(); ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        خانه
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>

        <a href="<?php echo home_url()."/محصولات/"; ?>" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
            محصولات
        </a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"><?php echo $category->name; ?></span>
      </div>
    </li>
  </ol>
</nav>


<?php
    $cat_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'category_name' => $category->slug
    ));

    if ($cat_post->have_posts()) { ?>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .card {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            }

            .card1:hover {
                transform: rotate(-2deg) scale(1.05);
            }

            .card2:hover {
                transform: rotate(2deg) scale(1.05);
            }

            .card3:hover {
                transform: scale(1.05);
            }

            .card4:hover {
                transform: skewY(-5deg);
            }
        </style>

        <div class="bg-gray-100 flex justify-center items-center h-screen">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <?php while ($cat_post->have_posts()) {
                    $cat_post->the_post(); ?>
                    <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-lg card card3">
                    <?PHP if (has_post_thumbnail()) { ?>
                        <img class="w-full" src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>">
                    <?PHP } ?>
                    <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800"><?PHP the_title(); ?></h3>
                            <p class="text-gray-600 mt-2"><?PHP the_excerpt(); ?></p>
                            <a href="<?PHP the_permalink(); ?>">
                                <button  class="bg-blue-500 text-white font-semibold py-2 px-4 mt-4 rounded-lg hover:bg-blue-600 transition-all duration-300">
                                    اطلاعات بیشتر
                                </button>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
}

?>
<?php get_footer(); ?>
