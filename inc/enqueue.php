<?php
function mytheme_enqueue_assets() {
    $theme_dir = get_template_directory();
    $main_css = $theme_dir . '/assets/css/main.css';
    $main_js = $theme_dir . '/assets/js/scripts.js';

    /* Enqueue Styles */
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/style.css', array(), file_exists($main_css) ? filemtime($main_css) : null, 'all');

    /* Enqueue Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/scripts.js', array('jquery'), file_exists($main_js) ? filemtime($main_js) : null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
