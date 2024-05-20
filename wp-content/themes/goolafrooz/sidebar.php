<div class="w-full md:w-1/4 px-4">
    <div class="py-2">
        <form role="search" class="max-w-md mx-auto" action="<?PHP bloginfo("home"); ?>" method="get">
            <label for="default-search" class=" mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input value="<?php the_search_query(); ?>" name="s" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="جستجو در ..." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">جستجو</button>
            </div>
        </form>
    </div>

    <div class="bg-gray-100 p-4">
        <h2 class="text-xl font-bold text-gray-800 mb-4">مطالب مرتبط</h2>
        <ul class="list-none">
            <?php
            // Display related posts
            $related_posts = get_posts(array(
                'posts_per_page' => 4,
                'post__not_in' => array(get_the_ID()),
                'category__in' => wp_get_post_categories(get_the_ID()),
                'orderby' => 'rand',
            ));
            foreach ($related_posts as $post) : setup_postdata($post); ?>
                <li class="mb-2">
                    <a href="<?php the_permalink(); ?>" class="text-gray-700 hover:text-gray-900"><?php the_title(); ?></a>
                </li>
            <?php endforeach;
            wp_reset_postdata(); // Reset the post data query 
            ?>
        </ul>
    </div>
    <div class="bg-gray-100 p-4 mt-4">
        <h2 class="text-xl font-bold text-gray-800 mb-4">دسته ها</h2>
        <ul class="list-none">
            <li class="mb-2">
                <a href="#" class="text-gray-700 hover:text-gray-900"><?PHP the_category(); ?></a>
            </li>
        </ul>
    </div>
</div>