<?PHP //Template Name: Contact Us
?>
<?php get_header(); ?>
<script src="https://cdn.tailwindcss.com"></script>
<section class="mb-32 bg-gray-100">
  <div id="map" class=" relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3234.6227926002107!2d51.0057053!3d35.8337295!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dbf9b5e10235b%3A0xadc2aff3d54f937b!2z2KfYs9iq2KfZhiDYp9mE2KjYsdiy2Iwg2qnYsdis2Iwg2LnYuNuM2YXbjNmH2Iwg2KjZhNmI2KfYsSDYt9in2YTZgtin2YbbjCDYtNmF2KfZhNuM2Iwg2KjYsdisINmC2KfYptmF!5e0!3m2!1sfa!2s!4v1714566354377!5m2!1sfa!2s" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
  <div class="container px-6 md:px-12 ">
    <div class="bg-white block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px] border border-gray-300">
      <!-- ---------------------------- -->
      <!-- component -->
      <div class="py-16 bg-white">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
          <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="md:5/12 lg:w-5/12">
              <img src="<?php echo get_template_directory_uri() . '/img/contact-us/contact-us.png' ?>" alt="image" loading="lazy" width="" height="">
            </div>
            <div class="md:7/12 lg:w-6/12">
              <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">شرکت گلخانه سازی گل افروز با هدف ارتقای سطح کشاورزی و ارائه راه‌حل‌های نوین برای کشت گل و گیاه، تأسیس شده است.</h2>
              <p class="mt-6 text-gray-600">ما با بهره‌گیری از دانش روز دنیا، تجهیزات مدرن و هوش مصنوعی، به دنبال ایجاد گلخانه‌هایی هوشمند و پربازده هستیم که ضمن افزایش کیفیت و کمیت محصولات، به حفظ منابع طبیعی و محیط زیست نیز کمک می‌کنند.

                مزایای گلخانه نسبت به کشاورزی سنتی:

                افزایش راندمان تولید: در گلخانه‌ها، شرایط محیطی به طور کامل کنترل می‌شود و این امر منجر به افزایش قابل توجه راندمان تولید و برداشت محصول در طول سال می‌شود.
                کاهش مصرف آب: سیستم‌های آبیاری نوین در گلخانه‌ها، مصرف آب را به طور چشمگیری کاهش می‌دهند و این امر در شرایط کم‌آبی، یک مزیت بزرگ محسوب می‌شود.
                کنترل آفات و بیماری‌ها: با کنترل دقیق شرایط محیطی در گلخانه‌ها، می‌توان از شیوع آفات و بیماری‌ها جلوگیری کرد و به این ترتیب از مصرف بی‌رویه سموم شیمیایی پرهیز نمود.
                تولید محصولات با کیفیت: گلخانه‌ها شرایط ایده‌آلی برای پرورش گل‌ها و گیاهان با کیفیت بالا فراهم می‌کنند و این امر منجر به افزایش رضایت مشتریان می‌شود.</p>
              <p class="mt-4 text-gray-600"> ما در شرکت گلخانه سازی گل افروز متعهد هستیم که با ارائه راه‌حل‌های نوین و به‌کارگیری فناوری‌های روز دنیا، به توسعه پایدار کشاورزی و ارتقای سطح زندگی مردم کمک کنیم.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- ---------------------------- -->
      <div class="flex flex-wrap ">
        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">

          <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="my_contact_form">
            <p>
              <label>نام:</label>
              <input name="name" type="text" class="mt-1 mb-3 peer block min-h-[auto] w-full rounded border-2 bg-transparent border-gray-900 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none" />
            </p>
            <p>
              <label>ایمیل:</label>
              <input style="cursor: pointer;" name="email" type="text" class="mt-1 mb-3 peer block min-h-[auto] w-full rounded border-2 bg-transparent border-gray-900 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none" />
            </p>
            <p>
              <label>پیام:</label>
              <textarea name="message" class="mt-1 mb-3 peer block min-h-[auto] w-full rounded border-2 bg-transparent border-gray-900 py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none"></textarea>
            </p>
            <p>
              <input type="submit" value="ارسال" class="mb-6 py-2 w-full rounded bg-gray-900 text-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal lg:mb-0" />
            </p>
          </form>


        </div>

        <div class=" mt-6 w-full shrink-0 grow-0 basis-auto lg:w-7/12">
          <div class="flex flex-wrap">
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
              <div class="flex items-start">
                <div class="shrink-0">
                  <div class="inline-block rounded-md bg-gray-900 p-4 text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                    </svg>
                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="px-4 mb-2 text-right font-bold ">
                    پل ارتباطی
                  </p>
                  <p class="px-4 text-right text-sm text-neutral-500">
                    info@golafrooz.com
                  </p>
                  <p class="px-4 text-right text-sm text-neutral-500">
                    02632543645
                  </p>
                </div>
              </div>
            </div>
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
              <div class="flex items-start">
                <div class="srink-0">
                  <div class="inline-block rounded-md bg-gray-900 p-4 text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                    </svg>
                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="px-4 text-right mb-2 font-bold ">
                    آدرس
                  </p>
                  <p class="text-right px-4 text-sm text-neutral-500">
                    استان البرز - کرج - عظیمیه <br>
                    بالاتر از پل آزادگان ساختمان قائم <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:mb-12 lg:w-full lg:px-6 xl:w-6/12">
              <div class="align-start flex">
                <div class="shrink-0">
                  <div class="inline-block rounded-md bg-gray-900 p-4 text-white">
                    <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 304.999 304.999" xml:space="preserve" stroke="#ffffff">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <g id="XMLID_16_">
                          <path id="XMLID_17_" d="M160.662,19.47c-18.934,0-37.323,3.668-54.693,10.881L76.353,0.732c-0.819-0.82-2.094-0.967-3.082-0.359 C44.436,18.201,19.773,42.865,1.947,71.699c-0.61,0.986-0.462,2.262,0.358,3.082l28.39,28.383 c-8.491,18.637-12.808,38.5-12.808,59.074c0,78.719,64.049,142.762,142.775,142.762c78.721,0,142.765-64.043,142.765-142.762 C303.427,83.515,239.383,19.47,160.662,19.47z M217.225,148.664l9.943,42.082l9.543,44.395l-44.337-9.533l-42.055-9.893 L36.712,102.111c14.252-29.338,38.339-52.619,68.114-65.832L217.225,148.664z"></path>
                          <path id="XMLID_20_" d="M221.76,187.396l-7.522-33.023c-25.891,11.889-46.404,32.402-58.283,58.295l33.023,7.52 C195.989,206.165,207.747,194.41,221.76,187.396z"></path>
                        </g>
                      </g>
                    </svg>


                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="mb-2 px-4 text-right font-bold ">فکس</p>
                  <p class="text-neutral-500 text-right px-4"> 02632543645
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:mb-12 xl:w-6/12">
              <div class="align-start flex">
                <div class="shrink-0">
                  <div class="inline-block rounded-md bg-gray-900 p-4 text-gray-100 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                  </div>
                </div>
                <div class="ml-6 grow">
                  <p class="mb-2 font-bold px-4 text-right ">موبایل</p>
                  <p class="text-neutral-500 px-4 text-right"> 989147281416+
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>