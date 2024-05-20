<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/logo/golafrooz.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        screens: {
          xs: '320px',
          sm: '480px',
          md: '768px',
          lg: '976px',
          xl: '1440px',
        },
        extend: {

        },
        animation: {
          rotate: 'rotate 30s linear infinite',
        }
      }
    }
  </script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500&display=swap');

    .font-roboto {
      font-family: Manrope, sans-serif;
    }

    .rounded-large {
      border-radius: 4rem;
    }

    .bg-card {
      background-image: url('https://lh3.googleusercontent.com/gIrG8AMwLDarHJMs68aoBE327dT_O74kyQe5rVddstbe_ndAk5PXSf0UrzCI1PbZlPDhLN0TFWuIb7CkpNuZghX4VRgX3wOjzNeg5axIz8ISTI5CZQ=w1200-rj');
      background-size: cover;
    }

    .bg-card-b {
      background-image: url('https://lh3.googleusercontent.com/CAW8df0-OQi3LCK0yKewayBIXwGEJl3RceztrFQtQ1uDk-qv1cStc4PlPfscT408dRnqz20f43XkRoIa_5nom0bVJR4VFNF1crJ-6sOnQzbW-DlNrSjF=w1200-rj');
      background-size: cover;
    }


    :root {
      --blue-color: #3490dc;
      --green-color: #38a169;
    }

    #color-changing-button {
      transition: background-color 0.3s ease;
    }

    #color-changing-button.blue {
      background-color: var(--blue-color);
    }

    #color-changing-button.green {
      background-color: var(--green-color);
    }

    .container {
      padding-top: 2rem;
      /* padding-top برابر با 2rem */
      padding-right: 0;
      /* padding-right برابر با 0 */
      padding-bottom: 0;
      /* padding-bottom برابر با 0 */
      padding-left: 0;
      /* padding-left برابر با 0 */
    }


    .slider-wrapper {
      position: relative;
      width: 100%;

      margin: 0 auto;
    }

    .slider {
      display: flex;
      aspect-ratio: 16/9;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      box-shadow: 0 1.5rem 3rem -0.7rem hsla(0, 0%, 0%, 0.25);
      border-radius: 0.5rem;
      max-height: 500px;
      /* حداکثر ارتفاع 500 پیکسل */
      width: 100%;
      /* ارتفاع 100% */
    }

    .slider img {
      flex: 1 0 100%;
      scroll-snap-align: start;
      object-fit: cover;
      width: 100%;
      height: auto;
    }

    .slider-nav {
      display: flex;
      column-gap: 1rem;
      position: absolute;
      bottom: 1.25rem;
      left: 50%;
      transform: translateX(-50%);
      z-index: 1;
    }

    .slider-nav a {
      width: 0.5rem;
      height: 0.5rem;
      border-radius: 50%;
      background-color: #fff;
      opacity: 0.75;
      transition: opacity ease 250ms;
    }

    .slider-nav a:hover {
      opacity: 1;
    }
  </style>
</head>

<body>
  <header class="fixed sticky z-50 top-0 flex w-full  flex-row justify-between items-center bg-gray-900 px-8 py-3 text-white shadow-md lg:px-10">
    <script>
      const logos = [
        "<?php echo get_template_directory_uri() ?>/img/logo/golafrooz.png",
        "<?php echo get_template_directory_uri() ?>/img/logo/golafrooz-1.png"
      ];
      let currentLogoIndex = 0;

      setInterval(() => {
        const logoElement = document.querySelector('.logo-image');
        currentLogoIndex = (currentLogoIndex + 1) % logos.length;
        logoElement.src = logos[currentLogoIndex];
      }, 2000);
    </script>
    <div class=" flex flex-row items-center justify-between">
      <a href="https://golafrooz.com" class="flex items-center space-x-3 rtl:space-x-reverse m-2">
        <img class="logo-image w-24 h-24 rounded-full mx-auto" src="https://golafrooz.com/wp-content/uploads/2024/04/golafrooz.png" alt="logo" width="384" height="512">
        <span class="self-center text-sm lg:text-2xl font-semibold whitespace-nowrap text-white">GOLAFROOZ CO</span>
      </a>
    </div>
    <label for="menu-toggle" class="block cursor-pointer md:hidden">
      <span class="sr-only">Open main menu</span>
      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </label>
    <input type="checkbox" id="menu-toggle" class="hidden" />
    <div class="text-right font-bold  md:text-sm hidden md:flex md:items-center md:w-auto w-full" id="menu">
      <nav class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center justify-between pt-4 text-base md:flex md:pt-0">
          <?PHP wp_nav_menu(array(
            'theme_location' => 'Main_Menu',
            'depth' => '1',
            'menu'           => false,
            'container'      => 'div',
            'menu_class'  => ' !text-white items-start justify-start gap-x-5 px-10 w-full flex flex-row ',
          )); ?>
          <div>
            <script>
              setInterval(() => {
                const button = document.getElementById('color-changing-button');
                if (button.classList.contains('blue')) {
                  button.classList.remove('blue');
                  button.classList.add('green');
                } else {
                  button.classList.remove('green');
                  button.classList.add('blue');
                }
              }, 2000);
            </script>
            <button id="color-changing-button" class="text-sm md:text-xl rounded-lg bg-blue-700 px-12 py-4 text-center font-bold text-black hover:bg-blue-900">محصولات و تجهیزات</button>
          </div>
        </div>
      </nav>
    </div>
    <div class=" mx-10 md:mx-0"></div>
    <style>
  @keyframes wiggle {
    0% {
      transform: rotate(0deg);
    }
    25% {
      transform: rotate(10deg);
    }
    50% {
      transform: rotate(0deg);
    }
    75% {
      transform: rotate(-10deg);
    }
    100% {
      transform: rotate(0deg);
    }
  }

  .animate-wiggle {
    animation: wiggle 4s infinite;
  }
</style>

    <div class="fixed flex flex-col bottom-0 right-8 w-full">
      <a href="tel:+989147281416">
        <div class="flex flex-col items-center justify-center float-right my-1 rounded-full bg-[#3490dc] px-4 py-4 text-sm font-bold tracking-wide text-white focus:outline-none">
          <svg class="animate-wiggle" width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.833 4h4.49L9.77 7.618l-2.325 1.55A1 1 0 0 0 7 10c.003.094 0 .001 0 .001v.021a2.026 2.026 0 0 0 .006.134c.006.082.016.193.035.33.039.27.114.642.26 1.08.294.88.87 2.019 1.992 3.141 1.122 1.122 2.261 1.698 3.14 1.992.439.146.81.22 1.082.26a4.43 4.43 0 0 0 .463.04l.013.001h.008s.112-.006.001 0a1 1 0 0 0 .894-.553l.67-1.34 4.436.74v4.32c-2.111.305-7.813.606-12.293-3.874C3.227 11.813 3.527 6.11 3.833 4zm5.24 6.486l1.807-1.204a2 2 0 0 0 .747-2.407L10.18 3.257A2 2 0 0 0 8.323 2H3.781c-.909 0-1.764.631-1.913 1.617-.34 2.242-.801 8.864 4.425 14.09 5.226 5.226 11.848 4.764 14.09 4.425.986-.15 1.617-1.004 1.617-1.913v-4.372a2 2 0 0 0-1.671-1.973l-4.436-.739a2 2 0 0 0-2.118 1.078l-.346.693a4.71 4.71 0 0 1-.363-.105c-.62-.206-1.481-.63-2.359-1.508-.878-.878-1.302-1.739-1.508-2.36a4.59 4.59 0 0 1-.125-.447z" fill="#ffff" />
          </svg>
        </div>
      </a>
      <a href="https://api.whatsapp.com/send?phone=+989147281416">
        <div class="flex flex-col items-center justify-center float-right my-4  rounded-full bg-[#38a169] px-4 py-4 text-sm font-bold tracking-wide text-white focus:outline-none">
        <svg class="animate-wiggle" width="50px" height="50px" viewBox="0 0 24 24" version="1.1" fill="#fff" id="svg8" inkscape:version="0.92.4 (5da689c313, 2019-01-14)" sodipodi:docname="1881161.svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  xml:space="preserve"><path id="path4" inkscape:connector-curvature="0" d="M16.6,14c-0.2-0.1-1.5-0.7-1.7-0.8c-0.2-0.1-0.4-0.1-0.6,0.1c-0.2,0.2-0.6,0.8-0.8,1c-0.1,0.2-0.3,0.2-0.5,0.1c-0.7-0.3-1.4-0.7-2-1.2c-0.5-0.5-1-1.1-1.4-1.7c-0.1-0.2,0-0.4,0.1-0.5c0.1-0.1,0.2-0.3,0.4-0.4c0.1-0.1,0.2-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0-0.4c-0.1-0.1-0.6-1.3-0.8-1.8C9.4,7.3,9.2,7.3,9,7.3c-0.1,0-0.3,0-0.5,0C8.3,7.3,8,7.5,7.9,7.6C7.3,8.2,7,8.9,7,9.7c0.1,0.9,0.4,1.8,1,2.6c1.1,1.6,2.5,2.9,4.2,3.7c0.5,0.2,0.9,0.4,1.4,0.5c0.5,0.2,1,0.2,1.6,0.1c0.7-0.1,1.3-0.6,1.7-1.2c0.2-0.4,0.2-0.8,0.1-1.2C17,14.2,16.8,14.1,16.6,14 M19.1,4.9C15.2,1,8.9,1,5,4.9c-3.2,3.2-3.8,8.1-1.6,12L2,22l5.3-1.4c1.5,0.8,3.1,1.2,4.7,1.2h0c5.5,0,9.9-4.4,9.9-9.9C22,9.3,20.9,6.8,19.1,4.9 M16.4,18.9c-1.3,0.8-2.8,1.3-4.4,1.3h0c-1.5,0-2.9-0.4-4.2-1.1l-0.3-0.2l-3.1,0.8l0.8-3l-0.2-0.3C2.6,12.4,3.8,7.4,7.7,4.9S16.6,3.7,19,7.5C21.4,11.4,20.3,16.5,16.4,18.9"/></svg>
        </div>
      </a>
    </div>
  </header>