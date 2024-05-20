<?PHP // Template Name: contract

get_header();

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
        <div class="pr-12">
          <p class="peer mb-6 text-gray-900">
          گلخانه سازی: راه حلی برای کم آبی و افزایش بهره‌وری در ایران
با توجه به کمبود آب در ایران، گلخانه‌سازی می‌تواند راه‌حلی ایده‌آل برای افزایش بهره‌وری کشاورزی و صرفه‌جویی در مصرف آب باشد. گلخانه‌ها با ایجاد محیطی کنترل‌شده، از هدر رفتن آب جلوگیری می‌کنند و به شما این امکان را می‌دهند که در تمام طول سال، فارغ از شرایط آب و هوایی، محصولات کشاورزی با کیفیت بالا تولید کنید.

علاوه بر صرفه‌جویی در آب، گلخانه‌ها مزایای دیگری نیز دارند. با استفاده از گلخانه‌ها می‌توانید:

</p>

          <h3 class="mb-4 font-semibold text-xl text-gray-600">برای دانلود کاتالوگ ها رو لینک مورد نظر کلیک کنید</h3>
          <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-700">
            <li>قرارداد شماره یک</li>
            <li>قرارداد شماره دو</li>
            <li>قرارداد شماره سه</li>
            <li>قرارداد شماره یک</li>
            <li>قرارداد شماره دو</li>
            <li>قرارداد شماره سه</li>
          </ul>
        </div> 
      </div>
      <div class="pr-16 relative flex flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-[#38a169] before:bottom-0 before:right-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
        <div class="absolute top-0 right-0 bg-blue-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-[#3490dc] transition-all ">
          <span class="block mb-10 font-bold group-hover:text-orange-300">ما اینجا هستیم</span>
          <h2 class="text-white font-bold text-3xl">
          قرارداد های شرکت گلخانه سازی گل افروز
          </h2>
        </div>
        <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="">
          <span>MORE ABOUT US</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
        </a>
        <div class="rounded-xl overflow-hidden">
          <img src="<?php echo get_template_directory_uri().'/img/another/contract.webp' ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>