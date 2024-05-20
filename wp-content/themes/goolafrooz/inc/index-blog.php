<?php
if ( is_front_page() ) {
    $index_posts = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3, // تغییر 'post_per_page' به 'posts_per_page'
        'post_status' => 'publish',
        'category_name' => 'green-house-blog'
    ));

    if ($index_posts->have_posts()) {
?>

    <div class="mx-auto max-w-screen-xl p-5 text-right sm:p-10 md:p-16">
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-3">
            <?php while ($index_posts->have_posts()) {
                $index_posts->the_post(); ?>
                <div class="shadow-2xl flex flex-col justify-between rounded-lg border-4 border-b border-gray-900 bg-gray-900 leading-normal lg:border-gray-900">
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="h-50 mb-3 h-full w-full rounded-lg" />
                    <?php } ?>
                    <div class="p-4 pt-2">
                        <div class="mb-8">
                            <p class="flex items-center text-sm text-gray-200">
                            </p>
                            <div href="#" class="mb-2 inline-block text-lg font-bold text-gray-100 "><?php the_title(); ?></div>
                            <div class="px-1 text-gray-100 text-sm"><?php echo get_the_date(); ?></div>
                            <div class="text-gray-100">
                                <p class="text-sm p-2"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <div class="flex items-center">

                            <div class="text-sm">
                                <a href="<?php the_permalink(); ?>">
                                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-gray-900 dark:focus:ring-gray-900">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        ادامه مطلب
                                    </span>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>

<?php
    }
}
?>
