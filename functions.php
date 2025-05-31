<?php

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/menu.php';

function pp_register_menus() {
	register_nav_menus([
		'header-menu'  => __('Header Menu', 'pp'),
		'sidebar-menu' => __('Sidebar Menu', 'pp'),
		'extra-menu'   => __('Extra Menu', 'pp'),
	]);
}
add_action('init', 'pp_register_menus');

// function mytheme_display_header_menu() {
// 	wp_nav_menu([
// 		'theme_location'  => 'header-menu',
// 		'container'       => 'div',
// 		'container_class' => 'menu-header-menu-container',
// 		'menu_class'      => 'menu',
// 		'fallback_cb'     => 'wp_page_menu',
// 		'items_wrap'      => '<ul>%3$s</ul>',
// 	]);
// }
