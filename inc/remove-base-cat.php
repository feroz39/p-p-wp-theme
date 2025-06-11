<?php
// Remove category base
add_filter('category_rewrite_rules', function ($category_rewrite) {
    $categories = get_categories(['hide_empty' => false]);
    $new_rules = [];

    foreach ($categories as $category) {
        // Only generate rules for the 'news-views' parent category and its children
        $parent = get_category($category->parent);

        if (
            $category->slug === 'news-views' ||
            ($parent && !is_wp_error($parent) && $parent->slug === 'news-views')
        ) {
            $slug = $category->slug;

            $new_rules[$slug . '/(.*)$'] = 'index.php?category_name=' . $slug . '/$matches[1]';
            $new_rules[$slug . '$'] = 'index.php?category_name=' . $slug;
        }

    }

    return $new_rules;
});

add_filter('request', function ($query_vars) {
    if (isset($query_vars['category_name'])) {
        // Disallow all except `news-views` path
        if (!preg_match('/^news-views(\/|$)/', $query_vars['category_name'])) {
            // Force 404 for anything else
            $query_vars['error'] = '404';
        } else {
            $query_vars['category_name'] = str_replace('category/', '', $query_vars['category_name']);
        }
    }

    return $query_vars;
});

add_action('init', function () {
    global $wp_rewrite;
    $wp_rewrite->use_verbose_page_rules = true;
    flush_rewrite_rules(); // Run once, then remove this line or wrap it in a condition
});
