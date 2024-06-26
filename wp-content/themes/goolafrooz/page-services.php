<?PHP // Template Name: services
get_header();
?>

<div class="overflow-hidden relative py-16 bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">

    <div aria-hidden="true"
        class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
        <div class="blur-[106px] h-56 bg-gradient-to-br from-teal-500 to-purple-400 dark:from-blue-700"></div>
        <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="relative">

            <div class="flex items-center justify-center -space-x-2">
                <img loading="lazy" width="400" height="400" src="<?php echo get_template_directory_uri().'/img/employees/1.jpg' ?>" alt="employees" class="h-8 w-8 rounded-full object-cover">
                <img loading="lazy" width="200" height="200" src="<?php echo get_template_directory_uri().'/img/employees/2.jpg' ?>" alt="member photo" class="h-12 w-12 rounded-full object-cover">
                <img loading="lazy" width="200" height="200" src="<?php echo get_template_directory_uri().'/img/employees/3.jpg' ?>" alt="member photo" class="z-10 h-16 w-16 rounded-full object-cover">
                <img loading="lazy" width="200" height="200" src="<?php echo get_template_directory_uri().'/img/employees/4.jpg' ?>" class="relative h-12 w-12 rounded-full object-cover">
                <img loading="lazy" width="200" height="200" src="<?php echo get_template_directory_uri().'/img/employees/5.jpg' ?>" alt="member photo" class="h-8 w-8 rounded-full object-cover">
            </div>

            <div class="mt-6 m-auto space-y-6 md:w-8/12 lg:w-7/12">
                <h1 class="text-center text-4xl font-bold text-gray-800 dark:text-white md:text-5xl">
                    مشاوران ما آماده اند
                </h1>
                <p class="text-center text-xl text-gray-600 dark:text-gray-300">
                    با ما خواهید فهمید که از کجا شروع کنید و چه گلخانه و مصالحه ای مناسب اقلیم شهر شماست!
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="<?php echo home_url()."/مشاوران/"; ?>"
                        class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:bg-gray-900 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                        <span class=" relative text-base font-semibold text-white dark:text-dark">
                            تماس با مشاوران
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------------------------------------------- -->
<!-- inspired by tailwindcss.com -->
<ul class="w-full grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8">
    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
        <div class="order-1 sm:ml-6 xl:ml-0">
            <h3 class="mb-1 text-slate-900 font-semibold">
                <span class="mb-1 block text-sm leading-6 text-indigo-500">مشاوره حضوری یا غیر حضوری</span>
                مشاوره صفر تا صد گلخانه
            </h3>
            <div class="prose prose-slate prose-sm text-slate-600">
                <p>مشاوره حضوری تنها با وقت قبلی صورت می گیرد و مبلغ ان سه میلیون تومان  در هر یک ساعت می باشد</p>
                <p>مشاوره تلفنی فقط از ساعت 21 به بعد میسر است و هزینه آن یک میلیون و پانصد هزارتومان در هر یک ساعت می باشد. </p>
            </div>
        </span>
                <svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400"
                    width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M0 0L3 3L0 6"></path>
                </svg></a>
        </div>
        <img src="<?php echo get_template_directory_uri().'/img/service-card/1.webp' ?>" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
    </li>
    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
        <div class="order-1 sm:ml-6 xl:ml-0">
            <h3 class="mb-1 text-slate-900 font-semibold">
                <span class="mb-1 block text-sm leading-6 text-purple-500">وام گلخانه سازی</span>مشاوره تسهیلات گلخانه سازی
            </h3>
            <div class="prose prose-slate prose-sm text-slate-600">
            <p>مشاوره حضوری تنها با وقت قبلی صورت می گیرد و مبلغ ان سه میلیون تومان  در هر یک ساعت می باشد</p>
            <p>مشاوره تلفنی فقط از ساعت 21 به بعد میسر است و هزینه آن یک میلیون و پانصد هزارتومان در هر یک ساعت می باشد. </p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri().'/img/service-card/2.webp' ?>" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
    </li>
    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
        <div class="order-1 sm:ml-6 xl:ml-0">
            <h3 class="mb-1 text-slate-900 font-semibold">
                <span class="mb-1 block text-sm leading-6 text-cyan-500">تسهیلات اعطایی</span>
                تسهیلات اعطایی معادل پنجاه درصد قرارداد
            </h3>
            <div class="prose prose-slate prose-sm text-slate-600">
                <p>وثیقه : برای تضمین تعهدات مالی, وثیقه ای معادل 6 دانگ ملک غیر منقول با کاربری مسکونی مورد نیاز می باشد</p>
                <p> و همینطور یک فقره چک صیادی معتبر جهت تضمین به اندازه مبلغ تسهیلات بعلاوه بیست درصد مورد نیاز می باشد</p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri().'/img/service-card/3.webp' ?>" alt="" class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
    </li>
</ul>
<?PHP get_footer();  ?>