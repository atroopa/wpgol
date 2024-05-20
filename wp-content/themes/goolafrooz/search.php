<?php get_header(); ?>



<div class="flex flex-col">
    <div class="bg-gray-100 py-8">

        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            _e("<h2 class='items-center justify-center mx-14 text-2xl font-bold text-gray-900'>نتیجه جستجو: " . get_query_var('s') . "</h2>");
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>

            <?php
            }
        } else {
            ?>
            <h2 style='font-weight:bold;color:#000' class="mx-14">نتیجه موجود نیست</h2>
            <div class="alert alert-info mx-14">
            </div>
        <?php } ?>
        <div class="bg-white py-8">
            <div class="container mx-auto px-4 flex flex-col md:flex-row">
                <div class="w-full h-50 md:w-3/4 px-4">
                    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
                        <!-- --------------------------------------------------------- -->




                        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                            <!-- ------------------------------------------------------------------- -->
                            <?php
                            $s = get_search_query();
                            $args = array(
                                's' => $s
                            );
                            // The Query
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) {

                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                            ?>
                                    <div class="border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                                        <?PHP if (has_post_thumbnail()) { ?>
                                            <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-full mb-3">
                                        <?PHP } ?>
                                        <div class="p-4 pt-2">
                                            <div class="mb-8">
                                                <p class="text-sm text-gray-600 flex items-center">
                                                </p>
                                                <a href="<?php the_permalink(); ?>" class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">
                                                    <?php the_title(); ?></a>
                                                <div class="text-gray-700 text-sm"><?php the_excerpt(); ?></div>
                                            </div>
                                            <div class="flex items-center">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -------------------------------------------------------- -->
                                <?php
                                }
                            } else {
                                ?>
                                <h2 style='font-weight:bold;color:#000'>نتیجه ای یافت نشد</h2>
                                <div class="alert alert-info">
                                    <p>لطفا برای جستجو بهتر از کلمات صحیح استفاده کنید</p>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>

                <?PHP get_sidebar(); ?>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>