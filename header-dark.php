<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="<?php body_class() ?>">
  <header class="group/header">
    <div class="absolute inset-x-0 top-0 z-50 flex flex-row items-center justify-between h-28 px-6 py-8 overflow-hidden transition-all duration-500 ease-in-out bg-transparent lg:flex-col hover:lg:bg-white hover:drop-shadow-md group/menu hover:bg-transparent group group-[.menu-open]/header:h-[400px] group-[.menu-open]/header:lg:bg-white ">
      <div class="relative flex items-center justify-between w-full">
        <a class="hidden lg:block group-hover/menu:opacity-100 transition-opacity group-[.menu-open]/header:lg:block group-[.menu-open]/header:lg:opacity-100" href="/">
          <img
            alt="Properties & Pathways"
            width="175"
            height="48"
            class="h-auto w-36 lg:w-44"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/P&P_LOGO_blue_orange.webp"
          />
        </a>
        <a class="block lg:absolute group-hover/menu:lg:opacity-0 transition-opacity group-[.menu-open]/header:lg:hidden group-[.menu-open]/header:lg:opacity-0 lg:opacity-100" href="/">
          <img
            alt="Properties & Pathways"
            width="144"
            height="48"
            class="h-auto w-36 lg:w-44"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/P&P_LOGO_white_orange.webp"
          />
        </a>
        <?php get_template_part('parts/desktop-nav', null, ['dark'=>true]); ?>
      </div>
      <div class="lg:hidden">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
          </svg>
        </button>
      </div>
    </div>
    <nav class="absolute inset-0 z-40 block bg-brand lg:hidden" style="opacity: 0; transform: translateX(-100%) translateZ(0px);">
      <div class="p-6 mt-36">
        <ul class="flex flex-col items-start right grow">
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <div class="flex flex-row items-center justify-between">
              <div class="font-sans text-lg text-orange">Investments</div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                class="w-4 h-4 text-white transition-transform duration-200 ease-linear rotate-0"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
              </svg>
            </div>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);">
              <li class="py-2"><div class="text-white">Overview</div></li>
              <li class="py-2"><div class="text-white">Income Focused Investments</div></li>
              <li class="py-2"><div class="text-white">Capital Growth Funds</div></li>
              <li class="py-2"><div class="text-white">Balanced Property Funds</div></li>
            </ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <div class="flex flex-row items-center justify-between">
              <div class="font-sans text-lg text-orange">Investors</div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                class="w-4 h-4 text-white transition-transform duration-200 ease-linear rotate-0"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
              </svg>
            </div>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);">
              <li class="py-2"><div class="text-white">Overview</div></li>
              <li class="py-2"><div class="text-white">New to Investing</div></li>
              <li class="py-2"><div class="text-white">Private Investors</div></li>
              <li class="py-2"><div class="text-white">Family Office</div></li>
              <li class="py-2"><div class="text-white">Institutional Investors</div></li>
            </ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <div class="flex flex-row items-center justify-between">
              <div class="font-sans text-lg text-orange">Assets</div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                class="w-4 h-4 text-white transition-transform duration-200 ease-linear rotate-0"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
              </svg>
            </div>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);">
              <li class="py-2"><div class="text-white">Overview</div></li>
              <li class="py-2"><div class="text-white">Current Assets</div></li>
              <li class="py-2"><div class="text-white">Past Performance</div></li>
            </ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <div class="flex flex-row items-center justify-between">
              <div class="font-sans text-lg text-orange">About</div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                class="w-4 h-4 text-white transition-transform duration-200 ease-linear rotate-0"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
              </svg>
            </div>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);">
              <li class="py-2"><div class="text-white">Overview</div></li>
              <li class="py-2"><div class="text-white">Our Story</div></li>
              <li class="py-2"><div class="text-white">Our Team</div></li>
              <li class="py-2"><div class="text-white">Why Choose Us</div></li>
            </ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <a class="font-sans text-lg text-orange" href="/faqs">FAQs</a>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);"></ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <div class="flex flex-row items-center justify-between">
              <div class="font-sans text-lg text-orange">Insights</div>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
                data-slot="icon"
                class="w-4 h-4 text-white transition-transform duration-200 ease-linear rotate-0"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
              </svg>
            </div>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);">
              <li class="py-2"><div class="text-white">Overview</div></li>
              <li class="py-2"><div class="text-white">Blog</div></li>
              <li class="py-2"><div class="text-white">Case Studies</div></li>
              <li class="py-2"><div class="text-white">Perth CBD White Paper</div></li>
            </ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <a class="font-sans text-lg text-orange" href="https://arche.propertiesandpathways.com.au/auth/login">Investor Login</a>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);"></ul>
          </li>
          <li class="relative flex flex-col w-full py-5 cursor-pointer group">
            <a class="font-sans text-lg text-orange" href="/contact">Contact</a>
            <ul class="mt-0" style="opacity: 0; height: 0px; transform: translateX(-100%) translateZ(0);"></ul>
          </li>
        </ul>
      </div>
    </nav>
    <div id="header-overlay" class="fixed inset-0 -z-40 w-screen h-screen bg-black/50 bg-blend-multiply group-[.menu-open]/header:z-40 opacity-0 group-[.menu-open]/header:opacity-100 transition-opacity hidden lg:block"></div>
  </header>
