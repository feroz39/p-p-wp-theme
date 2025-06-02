<?php

#------------------------------------
# Custom Post Type for Testimonials
#------------------------------------

function create_post_type_testimonials()
{
    register_post_type('testimonials',
        array(
        'labels' => array(
            'name' => __('Testimonials', 'testimonials'),
            'singular_name' => __('Testimonial', 'testimonial'),
            'add_new' => __('Add New', 'testimonial'),
            'add_new_item' => __('Add New Testimonial', 'testimonial'),
            'edit' => __('Edit', 'testimonial'),
            'edit_item' => __('Edit Testimonial', 'testimonial'),
            'new_item' => __('New Testimonial', 'testimonial'),
            'view' => __('View Testimonial', 'testimonial'),
            'view_item' => __('View Testimonial', 'testimonial'),
            'search_items' => __('Search Testimonial', 'testimonial'),
            'not_found' => __('No Testimonial found', 'testimonial'),
            'not_found_in_trash' => __('No Testimonial found in Trash', 'testimonial')
        ),
        'public' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite'  => array( 'slug' => 'testimonials', 'with_front' => false ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'page-attributes'
        ),
        'can_export' => true,
        'menu_icon'   => 'dashicons-testimonial',
        'taxonomies' => array(),
        'graphql_single_name' => 'testimonial',
        'graphql_plural_name' => 'testimonials',
        'publicly_queryable' => true,
        'show_in_graphql' => true,
    ));
}

add_action('init', 'create_post_type_testimonials');