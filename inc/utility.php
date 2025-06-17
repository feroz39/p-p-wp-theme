<?php

function get_vimeo_id($url) {
    if (preg_match('/vimeo\.com\/(?:video\/)?(\d+)/', $url, $matches)) {
        return $matches[1];
    }
    return false;
}


function my_acf_init() {
    $google_maps_key = $_ENV['GOOGLE_MAPS_API_KEY'];
    acf_update_setting('google_api_key', $google_maps_key);
}
add_action('acf/init', 'my_acf_init');