<?php

function get_vimeo_id($url) {
    if (preg_match('/vimeo\.com\/(?:video\/)?(\d+)/', $url, $matches)) {
        return $matches[1];
    }
    return false;
}

// Method 1: Filter.
// function enqueue_google_maps_api() {
//     wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDg0ElJgumVma58m5pNuBWHd83cL5VmD-c', null, null, true);
// }
// add_action('wp_enqueue_scripts', 'enqueue_google_maps_api');

// Method 2: Setting.
// function my_acf_init() {
//     acf_update_setting('google_api_key', 'xxx');
// }
// add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDg0ElJgumVma58m5pNuBWHd83cL5VmD-c');
}
add_action('acf/init', 'my_acf_init');