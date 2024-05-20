<?PHP // Template Name: greenhouse
get_header();
?>

<div>

    <div class="flex flex-col justify-center items-center h-400 drop-shadow-lg">
        <div class=" bg-cover bg-no-repeat w-full" style="background-image: url(<?php echo get_template_directory_uri().'/img/another/gallexy.webp' ?>);">
            <h1 class=" py-10 font-black text-7xl md:text-8xl bg-gray-100 mix-blend-lighten uppercase text-center">
                گلخانه سازی <br>
                گل افروز <br>

            </h1>
        </div>
    </div>

    <!---
            // Loop through the features array to render each feature dynamically.
            //
            // Apply dynamic background color using the bgColor property from the feature object. Also, make the background slightly transparent on hover to
            // reveal the background image more clearly.
            //
            // The title's color changes on hover, using the titleColor property from the feature object. This demonstrates how to dynamically apply Tailwind
            // CSS classes based on component state or properties.
            //
            //  {String(index + 1).padStart(2, "0") + "⏤"} Converts the current index (from iterating over the features array) to a string and adds 1 to it,
            // and adds a dash at the end of the number
    -->

    <div class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">
        <div class=" bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% dark:bg-gray-800 h-full py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                    <div class="flex flex-row items-center justify-center gap-12">
                        <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">گلخانه ها</h2>

                        <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block">
                            برای آشنایی بیشتر با گلخانه های گل خانه سازی گل افروز بر روی عکس ها کلیک بفرمایید
                        </p>
                    </div>

                    <a href="#" class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                        بیشتر
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-center justify-center text-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="<?php echo get_template_directory_uri().'/img/greenhouse/1.webp' ?>" loading="lazy" alt="golafrooz" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>
                        <div class="text-2xl font-bold leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-4 rounded-lg hidden lg:block w-full">
                            گلخانه تونلی
                        </div>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-center justify-center text-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="<?php echo get_template_directory_uri() . '/img/greenhouse/2.webp' ?>" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <div class="text-2xl font-bold leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-4 rounded-lg hidden lg:block w-full">
                            گلخانه اسپانیایی تیپ اول
                        </div>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-center justify-center text-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="<?php echo get_template_directory_uri() . '/img/greenhouse/3.webp' ?>" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <div class="text-2xl font-bold leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-4 rounded-lg hidden lg:block w-full">
                            گلخانه اسپانیایی تیپ دوم
                        </div>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#" class="group relative flex h-48 items-center justify-center text-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="<?php echo get_template_directory_uri() . '/img/greenhouse/4.webp' ?>" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <div class="text-2xl font-bold leading-4 text-white mt-2 backdrop-blur-sm bg-black/30 p-4 rounded-lg hidden lg:block w-full">
                            گلخانه هلندی
                        </div>
                    </a>
                    <!-- image - end -->
                </div>
            </div>
        </div>
    </div>

</div>

    <!-- --------------------------------------- -->
    <div class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% relative h-[400px] ">
        <div class="flex flex-col gap-4 justify-center items-center w-full h-full px-1 md:px-0">

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white">
                جستوجو
            </h1>
            <p class="text-gray-300">
                برای جستجو بیشتر در مورد نوع گلخانه کلمه مورد نظر را وارد کنید 
            </p>

            <form role="search" class="w-full max-w-md mx-auto" action="<?PHP bloginfo("home"); ?>" method="get">
            <div class="relative p-3 border border-gray-200 rounded-lg w-full max-w-lg">
                <input value="<?php the_search_query(); ?>" name="s" type="search" type="text" class="rounded-md w-full p-3 " placeholder="گلخانه ...">


                <button type="submit" class="absolute left-6 top-6">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>

            </div>
            </form>
        </div>

    </div>

<?PHP get_footer();  ?>