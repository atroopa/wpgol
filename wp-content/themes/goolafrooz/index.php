<?php get_header(); ?>

<?PHP

$index1_post = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => '2',
  'post_status' => 'publish',
  'category_name' => 'green-house-blog'
));

if ($index1_post->have_posts()) {

?>

  <!-- component -->


  <div class="flex justify-center items-center">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
      <div role="main" class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-semibold leading-9 text-center text-gray-900 dark:text-gray-900">به دنیای شگفت انگیز گلخانه داری خوش آمدید!</h1>
        <p class="text-base leading-normal text-center text-gray-600 dark:text-gray-900 mt-4 lg:w-1/2 md:w-10/12 w-11/12">در این صفحه، مجموعه ای از مقالات جامع و کاربردی در زمینه ی گلخانه داری گردآوری شده است. چه یک گلخانه دار باتجربه باشید و چه تازه کار، در اینجا می توانید اطلاعات و راهنمایی های ارزشمندی برای ارتقای مهارت های خود و پرورش گل ها و گیاهان تان به بهترین نحو پیدا کنید.</p>
      </div>
      <div class="lg:flex items-stretch md:mt-12 mt-8">
        <div class="lg:w-1/2">
          <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
            <?PHP while ($index1_post->have_posts()) {
              $index1_post->the_post();  ?>
              <div class="sm:w-1/2 relative">
                <div>
                  <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0 backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP echo get_the_date(); ?></p>
                  <div class="absolute bottom-0 left-0 p-6">
                    <h2 class="text-xl font-semibold 5 text-white backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP the_title(); ?></h2>
                    <div class="text-base leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-2 rounded-lg hidden lg:block"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></div>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                      <div class="pr-2 text-sm font-medium leading-none text-white "><a href="<?PHP the_permalink(); ?>" class="font-bold backdrop-blur-sm bg-black/30 p-2 rounded-lg"> ادامه مطلب</a></div>
                    </a>
                  </div>
                </div>
                <?PHP if (has_post_thumbnail()) { ?>
                  <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-ful h-80" />
                <?PHP } ?>
              </div>
            <?PHP } // end if
            ?>
          <?PHP } //end while
          ?>
          </div>
          <!-- ----------------------------------حالت اول ----------------------------------------------- -->

          <div class="relative">
            <?PHP
            $index2_post = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => '1',
              'offset' => '2',
              'post_status' => 'publish',
              'category_name' => 'green-house-blog'
            ));

            if ($index2_post->have_posts()) {
              while ($index2_post->have_posts()) {
                $index2_post->the_post();
            ?>
                <div>
                  <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0 backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP echo get_the_date(); ?></p>
                  <div class="absolute bottom-0 left-0 md:p-10 p-6">
                    <h2 class="text-xl font-semibold 5 text-white backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP the_title(); ?></h2>
                    <p class="text-base leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-2 rounded-lg hidden lg:block"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                      <div class="pr-2 text-sm font-medium leading-none text-white"><a href="<?PHP the_permalink(); ?>" class="font-bold backdrop-blur-sm bg-black/30 p-2 rounded-lg"> ادامه مطلب</a></div>

                    </a>
                  </div>
                </div>
                <?PHP if (has_post_thumbnail()) { ?>
                  <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-full mt-8 md:mt-6 hidden sm:block" />
                  <img class="w-full mt-4 sm:hidden" src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" />
                <?PHP } ?>
          </div>
        </div>
    <?PHP
              }
            }
    ?>
    <!-- ----------------------------------حالت دوم ----------------------------------------------- -->
    <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
      <div class="relative">
        <?PHP
        $index3_post = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => '1',
          'offset' => '3',
          'post_status' => 'publish',
          'category_name' => 'green-house-blog'
        ));

        if ($index3_post->have_posts()) {
          while ($index3_post->have_posts()) {
            $index3_post->the_post();
        ?>
            <div>
              <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0 backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP echo get_the_date(); ?></p>
              <div class="absolute bottom-0 left-0 md:p-10 p-6">
                <h2 class="text-xl font-semibold 5 text-white backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP the_title(); ?></h2>
                <p class="text-base leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-2 rounded-lg hidden lg:block"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <div class="pr-2 text-sm font-medium leading-none text-white"><a href="<?PHP the_permalink(); ?>" class="font-bold backdrop-blur-sm bg-black/30 p-2 rounded-lg"> ادامه مطلب</a></div>
                </a>
              </div>
            </div>
            <?PHP if (has_post_thumbnail()) { ?>
              <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-full sm:block hidden" />
              <img class="w-full sm:hidden" src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" />
            <?PHP } ?>
      </div>
  <?PHP
          }
        }
  ?>
  <!-- ----------------------------------حالت سوم ----------------------------------------------- -->
  <div class=" sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
    <!-- ------------------------------------------------------------------------------------------- -->
    <?PHP
    $index4_post = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => '1',
      'offset' => '4',
      'post_status' => 'publish',
      'category_name' => 'green-house-blog'
    ));

    if ($index4_post->have_posts()) {
      while ($index4_post->have_posts()) {
        $index4_post->the_post();
    ?>
        <div class="relative w-full">
          <div>
            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0 backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP echo get_the_date(); ?></p>
            <div class="absolute bottom-0 left-0 p-6">
              <h2 class="text-xl font-semibold 5 text-white backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP the_title(); ?></h2>
              <p class="text-base leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-2 rounded-lg hidden lg:block"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <div class="pr-2 text-sm font-medium leading-none text-white"><a href="<?PHP the_permalink(); ?>" class="font-bold backdrop-blur-sm bg-black/30 p-2 rounded-lg"> ادامه مطلب</a></div>

              </a>
            </div>
          </div>
          <?PHP if (has_post_thumbnail()) { ?>
            <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-full h-80" />
          <?PHP } ?>
        </div>
    <?PHP
      }
    }
    ?>
    <!-- --------------------------------------------------------حالت چهارم-------------------------------------------------------------- -->
    <?PHP
    $index5_post = new WP_Query(array(
      'post_type' => 'post',
      'posts_per_page' => '1',
      'offset' => '5',
      'post_status' => 'publish',
      'category_name' => 'green-house-blog'
    ));

    if ($index5_post->have_posts()) {
      while ($index5_post->have_posts()) {
        $index5_post->the_post();
    ?>
        <div class="relative w-full">
          <div>
            <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0 backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP echo get_the_date(); ?></p>
            <div class="absolute bottom-0 left-0 p-6">
              <h2 class="text-xl font-semibold 5 text-white backdrop-blur-sm bg-black/30 p-2 rounded-lg"><?PHP the_title(); ?></h2>
              <p class="text-base leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-2 rounded-lg hidden lg:block"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <div class="pr-2 text-sm font-medium leading-none text-white"><a href="<?PHP the_permalink(); ?>" class="font-bold backdrop-blur-sm bg-black/30 p-2 rounded-lg"> ادامه مطلب</a></div>

              </a>
            </div>
          </div>
          <?PHP if (has_post_thumbnail()) { ?>
            <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-full h-80" />
          <?PHP } ?>
        </div>
    <?PHP
      }
    }
    ?>
    <!-- ------------------------------حالت پنجم--------------------------------------------- -->
  </div>
    </div>
      </div>
    </div>
  </div>
  <!-- ################################################################################################################ -->
  <section class="dark:bg-gray-100 dark:text-gray-800">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
      <!-- ----------------------------------------------------------------------------- -->
      <?PHP
      $index6_post = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => '1',
        'offset' => '6',
        'post_status' => 'publish',
        'category_name' => 'green-house-blog'
      ));

      if ($index6_post->have_posts()) {
        while ($index6_post->have_posts()) {
          $index6_post->the_post();
      ?>
          <a href="<?PHP the_permalink(); ?>" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-50">
            <?PHP if (has_post_thumbnail()) { ?>
              <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
            <?PHP } ?>
            <div class="p-6 space-y-2 lg:col-span-5">
              <h3 class="text-xl font-semibold sm:text-3xl group-hover:underline group-focus:underline"><?PHP the_title(); ?></h3>
              <span class="text-xs dark:text-gray-600"><?PHP echo get_the_date(); ?></span>
              <div><?php echo wp_trim_words(get_the_excerpt(), 72); ?></div>
            </div>
          </a>
      <?PHP
        }
      }
      ?>
      <!-- ------------------------------------حالت ششم --------------------------------------------- -->
      <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- ------------------------------------------------------- -->
        <?PHP
        $index7_post = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => '6',
          'offset' => '7',
          'post_status' => 'publish',
          'category_name' => 'green-house-blog'
        ));

        if ($index7_post->have_posts()) {
          while ($index7_post->have_posts()) {
            $index7_post->the_post();
        ?>
            <a href="<?PHP the_permalink(); ?>" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
              <?PHP if (has_post_thumbnail()) { ?>
                <img class="object-cover w-full rounded h-44 dark:bg-gray-500" src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>">
              <?PHP } ?>
              <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline"><?PHP the_title(); ?></h3>
                <span class="text-xs dark:text-gray-600"><?PHP echo get_the_date(); ?></span>
                <div><?php echo wp_trim_words(get_the_excerpt(), 72); ?></div>
              </div>
            </a>
        <?PHP
          }
        }
        ?>
        <!-- -------------------------------------حالت هفتم  ------------------------------ -->
      </div>
      <div class="flex justify-center">
        <?PHP
        $args = [
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;',
        ];
        echo str_replace("<ul class='page-numbers'>", '<ul class="pagination">', paginate_links($args));
        ?>

      </div>
    </div>

  </section>
  <?php get_footer(); ?>