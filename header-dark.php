<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>

<body <?php body_class('overflow-x-hidden') ?>>
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
        <button id="mobile-nav" class="cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
          </svg>
        </button>
      </div>
    </div>
    <?php get_template_part('parts/mobile-nav', null, []); ?>
    <div id="header-overlay" class="fixed inset-0 -z-40 w-screen h-screen bg-black/50 bg-blend-multiply group-[.menu-open]/header:z-40 opacity-0 group-[.menu-open]/header:opacity-100 transition-opacity hidden lg:block"></div>
  </header>
