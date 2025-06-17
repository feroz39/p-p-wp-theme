<?php
function mytheme_enqueue_assets() {
    $theme_dir = get_template_directory();
    $main_css = $theme_dir . '/assets/css/main.css';
    $main_js = $theme_dir . '/assets/js/scripts.js';
    $google_maps_key = $_ENV['GOOGLE_MAPS_API_KEY'];

    /* Enqueue Styles */
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/style.css', array(), file_exists($main_css) ? filemtime($main_css) : null, 'all');
    wp_enqueue_style('splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), file_exists($main_css) ? filemtime($main_css) : null, 'all');

    /* Enqueue Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/scripts.js', array('jquery'), file_exists($main_js) ? filemtime($main_js) : null, true);
    wp_enqueue_script('splidejs-scripts', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), file_exists($main_js) ? filemtime($main_js) : null, true);
    wp_enqueue_script('alpine-scripts', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), file_exists($main_js) ? filemtime($main_js) : null, true);
    wp_enqueue_script('candly-scripts', 'https://assets.calendly.com/assets/external/widget.js', array(), file_exists($main_js) ? filemtime($main_js) : null, true);
    wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key='.$google_maps_key, null, null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
