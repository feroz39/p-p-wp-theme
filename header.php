<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="absolute inset-x-0 top-0 z-50 flex flex-row items-center justify-between h-auto px-6 py-8 overflow-hidden transition-all duration-500 ease-in-out bg-transparent lg:flex-col hover:lg:bg-white hover:drop-shadow-md group/menu hover:bg-transparent group">
          <div class="flex items-center justify-between w-full">
            <a class="hidden lg:block group-hover:lg:hidden group-hover:lg:opacity-0 group-hover:transition-opacity" href="/">
                <img
                  alt="Properties & Pathways"
                  width="175"
                  height="48"
                  class="h-auto w-36 lg:w-44"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/P&P_LOGO_white_orange.webp"
                />
            </a>
            <a class="block lg:hidden group-hover:lg:block group-hover:lg:opacity-100 group-hover:transition-opacity" href="/">
              <img
                alt="Properties & Pathways"
                width="144"
                height="48"
                class="h-auto w-36 lg:w-44"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/P&P_LOGO_blue_orange.webp"
              />
            </a>
            <div class="items-center hidden space-x-12 text-white transition-all duration-700 lg:flex ease group-hover/menu:text-brand">
              <div class="text-base font-normal cursor-pointer">
                <div class="flex items-center space-x-2">
                  Investments
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="text-base font-normal cursor-pointer">
                <div class="flex items-center space-x-2">
                  Investors
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="text-base font-normal cursor-pointer">
                <div class="flex items-center space-x-2">
                  Assets
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <div class="text-base font-normal cursor-pointer">
                <div class="flex items-center space-x-2">
                  About
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <a class="text-base font-normal cursor-pointer" target="" href="/faqs">FAQs</a>
              <div class="text-base font-normal cursor-pointer">
                <div class="flex items-center space-x-2">
                  Insights
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </div>
              <a class="text-base font-normal cursor-pointer" target="_blank" href="https://arche.propertiesandpathways.com.au/auth/login">Investor Login</a>
              <a class="flex items-center justify-center px-4 py-3 text-base font-normal transition-all border rounded-lg cursor-pointer text-orange border-orange hover:bg-orange hover:text-white" target="" href="/contact">
                Contact
              </a>
            </div>
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

    </header>
