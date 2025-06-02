<?php

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/menu.php';
require_once get_template_directory() . '/inc/assets-cpt.php';
require_once get_template_directory() . '/inc/testimonials-cpt.php';

function pp_register_menus() {
	register_nav_menus([
		'header-menu'  => __('Header Menu', 'pp'),
		'sidebar-menu' => __('Sidebar Menu', 'pp'),
		'extra-menu'   => __('Extra Menu', 'pp'),
	]);
}
add_action('init', 'pp_register_menus');

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('card-tall', 400, 524, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
	add_image_size('featured-post-thumb',632,402);
	add_image_size('archive-post-thumb',622,402);
	add_image_size('portfolio-post-thumb',485,450);
	
	add_post_type_support( 'page', 'excerpt' );
	
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    // load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}



// Remove 'category' base
// add_filter('category_rewrite_rules', function($category_rewrite) {
//     $category_rewrite = [];
//     $categories = get_categories(['hide_empty' => false]);
//     foreach ($categories as $category) {
//         $category_nicename = $category->slug;
//         if ($category->parent == $category->cat_ID) {
//             $category->parent = 0;
//         } elseif ($category->parent != 0) {
//             $category_nicename = get_category_parents($category->parent, false, '/', true) . $category_nicename;
//         }
//         $category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
//         $category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
//     }
//     return $category_rewrite;
// });

// add_filter('generate_rewrite_rules', function($wp_rewrite) {
//     $wp_rewrite->rules = array_merge(apply_filters('category_rewrite_rules', []), $wp_rewrite->rules);
// });

// add_filter('category_link', function($catlink, $category_id) {
//     $category = get_category($category_id);
//     return home_url(user_trailingslashit($category->slug));
// }, 10, 2);