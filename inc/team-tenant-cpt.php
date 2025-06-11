<?php
#------------------------------------
# Custom Post Type for Team & Tenant
#------------------------------------
function custom_post_type() {

 $custom_post_type_array = array(
    array('post_type' => 'team',    'singular_name' => 'Team',   'plural_name' => 'Teams', 'menu_position' => 5),
	// array('post_type' => 'property',    'singular_name' => 'Property',   'plural_name' => 'Properties', 'menu_position' => 5),
    array('post_type' => 'tenant',    'singular_name' => 'Tenant',   'plural_name' => 'Tenants', 'menu_position' => 5),
);

 foreach($custom_post_type_array as $key => $value) {
  $labels = array(
   'name'                  => _x( $value['plural_name'], 'Post Type General Name', 'text_domain' ),
   'singular_name'         => _x( $value['singular_name'], 'Post Type Singular Name', 'text_domain' ),
   'menu_name'             => __( $value['plural_name'], 'text_domain' ),
   'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
   'parent_item_colon'     => __( 'Parent '.$value['singular_name'].':', 'text_domain' ),
   'all_items'             => __( 'All '.$value['plural_name'].'', 'text_domain' ),
   'add_new_item'          => __( 'Add New '.$value['singular_name'].'', 'text_domain' ),
   'add_new'               => __( 'New '.$value['singular_name'].'', 'text_domain' ),
   'new_item'              => __( 'New Item', 'text_domain' ),
   'edit_item'             => __( 'Edit '.$value['singular_name'].'', 'text_domain' ),
   'update_item'           => __( 'Update '.$value['singular_name'].'', 'text_domain' ),
   'view_item'             => __( 'View '.$value['singular_name'].'', 'text_domain' ),
   'search_items'          => __( 'Search '.$value['singular_name'].'', 'text_domain' ),
   'not_found'             => __( 'No '.strtolower($value['singular_name']).' found', 'text_domain' ),
   'not_found_in_trash'    => __( 'No '.strtolower($value['singular_name']).' found in Trash', 'text_domain' ),
   'items_list'            => __( 'Items list', 'text_domain' ),
   'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
   'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
   'label'                 => __( $value['singular_name'], 'text_domain' ),
   'description'           => __( $value['singular_name'].' information pages', 'text_domain' ),
   'labels'                => $labels,
   'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
   'hierarchical'          => false,
   'public'                => true,
   'show_ui'               => true,
   'show_in_menu'          => true,
   'menu_position'         => $value['menu_position'],
   'show_in_admin_bar'     => true,
   'show_in_nav_menus'     => true,
   'can_export'            => true,
   'has_archive'           => true,
   'exclude_from_search'   => false,
   'publicly_queryable'    => true,
   'capability_type'       => 'page',
   'show_in_graphql' => true,
    'graphql_single_name' => $value['singular_name'],
    'graphql_plural_name' => $value['plural_name'],
  );
  register_post_type( $value['post_type'], $args );
 }
}
add_action( 'init', 'custom_post_type', 0 );