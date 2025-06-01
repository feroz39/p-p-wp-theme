<?php

#------------------------------------
# Custom Post Type for Assets
#------------------------------------

function create_post_type_assets()
{
	register_post_type('assets',
		array(
		'labels' => array(
			'name' => __('Assets', 'assets'),
			'singular_name' => __('Asset', 'assets'),
			'plural_name' => __('Assets', 'assets'),
			'add_new' => __('Add New', 'assets'),
			'add_new_item' => __('Add New Assets', 'assets'),
			'edit' => __('Edit', 'assets'),
			'edit_item' => __('Edit Assets', 'assets'),
			'new_item' => __('New Assets', 'assets'),
			'view' => __('View Assets', 'assets'),
			'view_item' => __('View Assets', 'assets'),
			'search_items' => __('Search Assets', 'assets'),
			'not_found' => __('No assets found', 'assets'),
			'not_found_in_trash' => __('No assets found in Trash', 'assets')
		),
		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'  => array( 'slug' => 'assets', 'with_front' => false ),
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'category',
			'page-attributes'
		),
		'can_export' => true,
		'taxonomies' => array(
			'category',
		),
		'menu_position' => 5,
		'graphql_single_name' => 'asset',
		'graphql_plural_name' => 'assets',
		'publicly_queryable' => true,
		'show_in_graphql' => true,
	));
}

add_action('init', 'create_post_type_assets');