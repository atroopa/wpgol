<?php get_header(); ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.slider');
    let slideIndex = 0;

    function showSlides() {
      const slides = slider.querySelectorAll('img');
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }

      slides[slideIndex - 1].style.display = "block";
    }

    setInterval(showSlides, 2000);
  });
</script>

<section class="w-full">
  <div class="slider-wrapper">
    <div class="slider">
      <img id="slide-1" src="<?php echo get_template_directory_uri().'/img/home-slider/1.webp' ?>" alt="golafrooz">
      <img id="slide-2" src="<?php echo get_template_directory_uri().'/img/home-slider/2.webp' ?>" alt="golafrooz">
      <img id="slide-3" src="<?php echo get_template_directory_uri().'/img/home-slider/3.webp' ?>" alt="golafrooz">
      <img id="slide-4" src="<?php echo get_template_directory_uri().'/img/home-slider/4.webp' ?>" alt="golafrooz">
    </div>
    <div class="slider-nav">
      <a href="#slide-1"></a>
      <a href="#slide-2"></a>
      <a href="#slide-3"></a>
      <a href="#slide-4"></a>
      <a href="#slide-5"></a>
    </div>
  </div>
</section>
<!-- <div>--------------------------------------------</div> -->

<!-- <div>--------------------------------------------</div> -->
<section id="features" class=" px-2 space-y-6 py-8 md:py-12 lg:py-24 max-w-5xl mx-auto">
  <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">
    <h2 class="font-heading text-green-800 text-3xl leading-[1.1] sm:text-3xl md:text-6xl pb-8 font-bold">شرکت گلخانه سازی گل افروز...</h2>
    <p class="pb-8 max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
    شرکت گل‌افروز پس از سال‌ها فعالیت در زمینه ساخت گلخانه‌های مدرن و صنعتی در سال ۱۳۹۸ با شماره ۴۴۶۲۳ در تهران بزرگ به ثبت رسید. این شرکت در طول بیش از یک دهه فعالیت، سالانه مساحتی بالغ بر ۹۵ هکتار از اراضی کشورمان را به گلخانه‌های صنعتی و مدرن تبدیل نموده است. همچنین، از مرحله طراحی تا عرضه محصولات، با بالاترین کیفیت ممکن، تجهیزات و سازه‌های گلخانه‌ای را تولید نموده و در بازارهای داخلی و خارجی فعالیت موثر و موفقی داشته است.   </div>
  <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">
    <div class=" relative overflow-hidden rounded-lg border border-gray-900 bg-gray-100/50 p-2">
      <div class="items-end text-right bg-blue-200 flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
          <polygon points="12 2 19 21 12 17 5 21 12 2"></polygon>
        </svg>
        <div class="space-y-2">
          <h3 class="font-bold">مشاوره رایگان</h3>
          <p class="text-sm text-muted-foreground">قبل از هرکاری با متخصصان ما مشاوره بگیرید
          </p>
        </div>
      </div>
    </div>
    <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2 border-gray-900">
      <div class="items-end text-right bg-blue-200 flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="16"></line>
          <line x1="12" y1="16" x2="16" y2="12"></line>
          <line x1="12" y1="16" x2="8" y2="12"></line>
        </svg>
        <div class="space-y-2">
          <h3 class="font-bold">خدمات</h3>
          <p class="text-sm text-muted-foreground">گل افروز با سال ها تجربه در کنار شماست</p>
        </div>
      </div>
    </div>
    <div class="relative overflow-hidden rounded-lg border border-gray-900 bg-gray-100/50 p-2">
      <div class="items-end text-right bg-blue-200 flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
          <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
          <line x1="3" y1="9" x2="21" y2="9"></line>
          <line x1="3" y1="15" x2="21" y2="15"></line>
          <line x1="9" y1="3" x2="9" y2="21"></line>
          <line x1="15" y1="3" x2="15" y2="21"></line>
        </svg>
        <div class="space-y-2">
          <h3 class="font-bold">محصولات</h3>
          <p class="text-sm text-muted-foreground">بالاترین کیفیت نازلترین قیمت.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <div>---------------------شش-----------------------</div> -->

<div class="p-1 flex flex-wrap items-center justify-center">

  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
    <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
      <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
      <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
    </svg>
    <div class="relative pt-10 px-10 flex items-center justify-center">
      <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
      </div>
      <img class="relative w-40" src="<?php echo get_template_directory_uri().'/img/gol/1.png' ?>" alt="">
    </div>
    <div class="relative text-white px-6 pb-6 mt-6">

      <span class="block opacity-75 mb-1 text-right">راهنمای</span>
      <div class="flex justify-between">
        <span class="block font-semibold text-l p-1">گلخانه اسپانیایی تیپ یک</span>
          <a href="<?php echo home_url()."/گلخانه-اسپانیایی-تیپ-یک/"; ?>" class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</a>
      </div>
    </div>
  </div>
  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
    <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
      <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
      <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
    </svg>
    <div class="relative pt-10 px-10 flex items-center justify-center">
      <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
      </div>
      <img class="relative w-40" src="<?php echo get_template_directory_uri().'/img/gol/2.png' ?>" alt="">
    </div>
    <div class="relative text-white px-6 pb-6 mt-6">
      <span class="block opacity-75 mb-1 text-right">راهنمای</span>
      <div class="flex justify-between">
        <span class="block font-semibold text-l p-1">گلخانه اسپانیایی تیپ دو</span>
        <a href="<?php echo home_url()."/گلخانه-اسپانیایی-تیپ-دو/"; ?>" class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</a>
      </div>
    </div>
  </div>


  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-amber-500 rounded-lg max-w-xs shadow-lg">
    <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
      <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
      <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
    </svg>
    <div class="relative pt-10 px-10 flex items-center justify-center">
      <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
      </div>
      <img class="relative w-40 h-48" src="<?php echo get_template_directory_uri().'/img/gol/3.png' ?>" alt="">
    </div>
    <div class="relative text-white px-6 pb-6 mt-6">
      <span class="block opacity-75 mb-1 text-right">راهنمای</span>
      <div class="flex justify-between">
        <span class="block font-semibold text-l p-1 ">گلخانه شیشه ای هلندی</span>
        <a href="<?php echo home_url()."/گلخانه-شیشه-ای-هلندی/"; ?>" class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</a>
      </div>
    </div>
  </div>

  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-pink-500 rounded-lg max-w-xs shadow-lg">
    <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
      <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
      <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
    </svg>
    <div class="relative pt-10 px-10 flex items-center justify-center">
      <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
      </div>
      <img class="relative w-40 h-48" src="<?php echo get_template_directory_uri().'/img/gol/4.png' ?>" alt="">
    </div>
    <div class="relative text-white px-6 pb-6 mt-6">
      <span class="block opacity-75 mb-1 text-right">راهنمای</span>
      <div class="flex justify-between">
        <span class="block font-semibold text-l ">گلخانه تونلی</span>
        <a href="<?php echo home_url()."/گلخانه-تونلی/"; ?>" class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</a>
      </div>
    </div>
  </div>

  <div class=" m-1 h-100 md:h-300  w-full">

  </div>
  <!-- ------------------------------------------------------------------- -->
  <section class=" bg-red-100 relative flex h-[50vh] md:h-[500px] w-full isolate items-center justify-center overflow-hidden py-5 md:py-10 video-container">
    <video src="<?php echo get_template_directory_uri().'/img/video/robot-5.mp4' ?>" autoplay loop playsinline muted class="absolute left-0 top-0 z-0 h-[50vh] md:h-full w-full object-cover"></video>
    <!-- <div class="absolute inset-0 z-10 backdrop-blur bg-gray/30  p-5 rounded-2xl h-[50vh] md:h-full"></div>
    <div class="z-20 text-right">
      <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
        aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div>
      <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
        aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
          style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
      </div> -->
      <!-- <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-sm md:text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">شرکت گلخانه سازی گل افروز</h2>
          <p class="mt-6 text-sm md:text-lg leading-8 text-gray-900 font-bold">
            شرکت گل‌افروز پس از سال‌ها فعالیت در زمینه ساخت گلخانه‌های مدرن و صنعتی در سال ۱۳۹۸ با شماره ۴۴۶۲۳ در تهران بزرگ به ثبت رسید. این شرکت در طول بیش از یک دهه فعالیت، سالانه مساحتی بالغ بر ۹۵ هکتار از اراضی کشورمان را به گلخانه‌های صنعتی و مدرن تبدیل نموده است. همچنین، از مرحله طراحی تا عرضه محصولات، با بالاترین کیفیت ممکن، تجهیزات و سازه‌های گلخانه‌ای را تولید نموده و در بازارهای داخلی و خارجی فعالیت موثر و موفقی داشته است.
          </p>
        </div>
        <div class="mx-auto mt-2 max-w-2xl lg:mx-0 lg:max-w-none">
          <div class="text-sm md:text-xl grid grid-cols-1 gap-x-8 gap-y-7 text-base font-semibold leading-7 font-bold text-gray-900 sm:grid-cols-2 md:flex lg:gap-x-10">
            <a href="#"><span class="p-1">⇚</span>قبل از هرچیزی بخوانید </a>
            <a href="#"><span class="p-1">⇚</span>نکات مهم گلخانه سازی</a>
            <a href="#"><span class="p-1">⇚</span>چرا مشاوره مهم است</a>
            <a href="#"><span class="p-1">⇚</span>چه چیزی مناسب اقلیم شماست</a>
          </div>
          <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-2 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col-reverse">
              <dt class=" md:text-base leading-7 text-gray-900 font-bold">بهترین طرح ها را داریم</dt>
              <dd class="hidden md:text-2xl font-bold leading-9 tracking-tight text-900">پیشرو</dd>
            </div>
            <div class="flex flex-col-reverse">
              <dt class="hidden md:text-base leading-7 text-gray-900 font-bold">در هرکجای ایران </dt>
              <dd class="hidden md:text-2xl font-bold leading-9 tracking-tight text-900">وسیع</dd>
            </div>
            <div class="flex flex-col-reverse">
              <dt class="hidden md:text-base leading-7 text-gray-900 font-bold">بیشتریم بهره وری</dt>
              <dd class="hidden md:text-2xl font-bold leading-9 tracking-tight text-900">خلاق</dd>
            </div>
            <div class="flex flex-col-reverse">
              <dt class="hidden md:text-base leading-7 text-gray-900 font-bold">انتخاب همیشه شما خواهیم شد</dt>
              <dd class="hidden md:text-2xl font-bold leading-9 tracking-tight text-900">مسئول</dd>
            </div>
          </dl> -->
        </div>
      </div>
    </div>
  </section>


  <!-- <div>------------------نمونه کار-----------------</div> -->


  <div class="m-5 w-full">
  </div>
  <div class=" flex flex-row justify-center items-center text-lg md:text-2xl font-bold p-10 w-full">
    <div class="px-3 hidden md:block"> ----------------------------------- </div>
     محصولات
    <div class="px-3 hidden md:block"> ----------------------------------- </div>
  </div>
  <?PHP get_template_part("inc/product", "boxes"); ?>

  <div class="flex flex-row justify-center items-center text-lg md:text-2xl font-bold p-10 w-full">
    <div class="px-3 hidden md:block "> ----------------------------------- </div>
     وبلاگ
    <div class="px-3 hidden md:block "> ----------------------------------- </div>
  </div>

  <?PHP get_template_part("inc/index", "blog"); ?>

  <!-- <div>-----------------------------------------------</div> -->
  <section class="container p-4 mx-auto text-right ">
    <div class="container mx-auto bg-card p-4 rounded-large shadow-2xl">
      <h2 class="px-4 text-2xl lg:text-6xl pt-4 pb-4 mb-2 text-black font-bold font-roboto">کاتالوگ</h2>
      <p class="px-4 text-sm lg:text-2xl text-black pb-4 md:pr-10 font-roboto">
        تمامی کاتالوگ هایی که در این بخش قرار گرفته توسط شرکت گل افروز طراحی و جهت افزایش دانش گلخانه سازان عزیز خدمت شما ارائه شده است و شامل انواع سازه نمونه کار ، انواع سازه گلخانه، تجهیزات و اطلاعات تکمیلی در مورد گلخانه می باشد.
      </p>
      <div class="flex items-end justify-end  ">
          <a href="<?php echo home_url()."/محصولات/"; ?>"  class="mx-10 bg-gradient-to-r from-purple-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 tetx-center p-3 rounded-lg">
            دریافت کاتالوگ
          </a>
      </div>
    </div>
</div>
</section>

<section class="container p-4 mx-auto text-right">
  <div class="bg-gray-100 bg-card-b p-6 rounded-large shadow-2xl">
    <h2 class="px-4 text-2xl lg:text-6xl font-medium pt-4 pb-4 mb-2 font-roboto text-white">قرار داد</h2>
    <p class="px-4 text-sm lg:text-2xl text-white pb-4 md:pr-10 font-roboto">
      برای شروع ساخت گلخانه باید هزینه های مربوط به ساخت سازه و تجهیز کردن ان براورد شود که ما دراین بخش هزینه های مربوط به ساخت سازه و و تجهیز ان (صفرتا صد ) انواع سازه گلخانه را برآورد کرده ایم تا شما با آگاهی بیشتری سازه ی مد نظرتان را انتخاب کنید .
    </p>
    <div class="flex items-end justify-end  ">
      <a href="<?php echo home_url()."/قرارداد/"; ?>">
        <button type="button" class="text-sm lg:text-lg mx-10 text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:ring-lime-300 dark:focus:ring-lime-800 hover:from-pink-500 hover:to-yellow-500 tetx-center p-3 rounded-lg">
          دریافت نمونه قرارداد
        </button>
      </a>
    </div>
  </div>
  </div>
</section>

<div class="flex flex-row items-center justify-center">
  <div class="hidden lg:block">-----------------------------------------------</div>
  <p class="justify-center items-center text-xl lg:text-4xl font-bold p-10">گالری</p>
  <div class="hidden lg:block">-----------------------------------------------</div>
</div>
<div class="flex flex-col min-h-screen items-center justify-center bg-gray-900">
  <ul class="flex flex-col md:grid grid-cols-3 gap-5  text-redis-neutral-800 max-w-2xl mx-auto p-10 mt-10">
    <li class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
      <span class="mb-1 text-teal-400 font-display text-5xl text-center">95</span>
      <div class="text-right">هکتار کارشده از سال 98 تا امروز</div>
    </li>
    <li class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
      <span class="mb-1 text-teal-400 font-display text-5xl text-center">78K+</span>
      <div class="text-right">نفر بازدیدکننده تا به امروز</div>
    </li>
    <li class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
      <span class="mb-1 text-teal-400 font-display text-5xl text-center">34</span>
      <div class="text-right">پروژه از سال 98 تا امروز</div>
    </li>
  </ul>
  <span class="absolute mx-auto py-4 flex border w-fit bg-gradient-to-r blur-xl from-blue-500 via-teal-500 to-pink-500 bg-clip-text text-xl lg:text-6xl box-content font-extrabold text-transparent text-center select-none">
    گالری تصاویر مجموعه گل افروز
  </span>
  <h1 class="relative top-0 w-fit h-auto py-4 justify-center flex bg-gradient-to-r items-center from-blue-500 via-teal-500 to-pink-500 bg-clip-text text-xl text-6xl font-extrabold text-transparent text-center select-auto">
    گالری تصاویر مجموعه گل افروز
  </h1>
  <div class="mx-auto max-w-6xl px-6 p-8 ">
    <div class="flex">
      <div class="group relative h-96 w-24 hover:w-[6rem]  md:hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-100 md:duration-200">
        <img src="<?php echo get_template_directory_uri().'/img/front-gallery/1.webp' ?>" alt="golafrooz"  class="h-full max-w-300 object-cover group-hover:rotate-5 md:group-hover:rotate-12 group-hover:scale-125 transition-all" alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white">
            <a href="<?php echo home_url()."/گالری/"; ?>">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              </a>
              <div>
                <p class="hidden md:block font-semibold text-xl text-gray-100">گل افروز، سرزمین گل‌های شاداب!</p>
                <p class="hidden md:block text-gray-300">Better Design</p>
                </div1>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="group relative h-96 w-24  hover:w-[6rem]  md:hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-100 md:duration-200">
        <img src="<?php echo get_template_directory_uri().'/img/front-gallery/2.webp' ?>" class="h-full object-cover group-hover:rotate-5 md:group-hover:rotate-12 group-hover:scale-125 transition-all"  alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8 ">
            <div class="flex gap-3 text-white">
            <a href="<?php echo home_url()."/گالری/"; ?>">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              </a>
              <div>
                <p class="hidden md:block font-semibold text-xl text-gray-100">گل افروز، انتخابی ایده‌آل برای عاشقان گل و گیاه</p>
                <p class="hidden md:block text-gray-300">Better Design</p>
                </div1>
              </div>
            </div>
            <div class="flex justify-end gap-3 text-gray-200">
            </div>
          </div>
        </div>
      </div>
      <div class="group relative h-96 w-24  hover:w-[6rem]  md:hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-100 md:duration-200">
        <img src="<?php echo get_template_directory_uri().'/img/front-gallery/3.webp' ?>" class="h-full object-cover group-hover:rotate-5 md:group-hover:rotate-12 group-hover:scale-125 transition-all"  alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white content-end items-end">
            <a href="<?php echo home_url()."/گالری/"; ?>">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              </a>
              <div>
                <p class="hidden md:block font-semibold text-xl text-gray-100">گلخانه سازی گل افروز، متخصص طراحی و ساخت گلخانه‌های رویایی</p>
                <p class="hidden md:block text-gray-300">Better Design</p>
                </div1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden lg:block group relative h-96 w-24 hover:w-[6rem]  md:hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-100 md:duration-200">
        <img src="<?php echo get_template_directory_uri().'/img/front-gallery/5.webp' ?>" class="h-full object-cover group-hover:rotate-5 md:group-hover:rotate-12 group-hover:scale-125 transition-all"  alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white">
            <a href="<?php echo home_url()."/گالری/"; ?>">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              </a>
              <div>
                <p class="hidden md:block font-semibold text-xl text-gray-100">گل افروز، جایی که گل‌ها به شکوفایی می‌رسند</p>
                <p class="hidden md:block text-gray-300">Better Design</p>
                </div1>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="hidden lg:block group relative h-96 w-24 hover:w-[6rem]  md:hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-100 md:duration-200">
        <img src="<?php echo get_template_directory_uri().'/img/front-gallery/4.webp' ?>" class="h-full object-cover group-hover:rotate-5 md:group-hover:rotate-12 group-hover:scale-125 transition-all"  alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white">
              <a href="<?php echo home_url()."/گالری/"; ?>">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              </a>
              <div>
                <p class="hidden md:block font-semibold text-xl text-gray-100">با گل افروز، به طبیعت نزدیک‌تر شوید</p>
                <p class="hidden md:block text-gray-300">Better all Design</p>
                </div1>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ---------------------------------------------------------------- -->
<div class="flex flex-row items-center justify-center">

</div>
<section class="text-gray-900 dark:text-neutral-300">
  <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
    <h3 class="mb-6 pt-10 text-3xl font-bold text-gray-900">رضایت شما ارزشمندترین دارایی ماست </h3>
    <p class="mb-6 pb-2 md:mb-12 md:pb-0 text-gray-900">تیم ما سخت در تلاش است تا بهترین را در حداقل زمان ممکن به شما رائه دهد و ما در شرکت گل افروز بی صبرانه منتظر شنیدن نظرات شما هستیم . </p>
  </div>

  <?php
ob_start();
include 'customers.php';

// بررسی آیا کوکی مربوط به گروه وجود دارد
if (!isset($_COOKIE['random_group'])) {
    // اگر کوکی وجود ندارد، یک گروه تصادفی انتخاب کنید
    $randomGroupIndex = rand(0, count($groups) - 1);
    $currentGroup = $groups[$randomGroupIndex]['customers'];

    // ذخیره آی دی گروه در کوکی
    setcookie('random_group', $randomGroupIndex, time() + (86400 * 30), "/"); // کوکی را برای 30 روز ذخیره می‌کنیم
} else {
    // اگر کوکی وجود دارد، گروه مربوطه را از کوکی بخوانید
    $randomGroupIndex = $_COOKIE['random_group'];
    $currentGroup = $groups[$randomGroupIndex]['customers'];
}
ob_end_flush();
?>

<div id="customer-grid" class="grid gap-6 text-center md:grid-cols-3 p-10">
    <?php foreach ($currentGroup as $customer): ?>
        <div class="block rounded-lg bg-white shadow-lg dark:bg-gray-800 dark:shadow-black/30">
            <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r from-blue-500 via-teal-500 to-pink-500"></div>
            <div class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                <img src="<?php echo $customer['image']; ?>" alt="<?php echo $customer['name']; ?>" />
            </div>
            <div class="p-6">
                <h4 class="mb-4 text-2xl font-semibold"><?php echo $customer['name']; ?></h4>
                <h2 class="mb-4 text-xl font-semibold"><?php echo $customer['city']; ?></h2>
                <hr />
                <p class="mt-4">
                    <span class="inline-block pe-2 [&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/>
                        </svg>
                    </span>
                    <?php echo $customer['review']; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</section>
</div>

<?php get_footer(); ?>