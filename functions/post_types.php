<?php

// Register Custom Client
function clients() {
	$labels = array(
		'name'                  => _x( 'Clients', 'Client General Name', 'broody' ),
		'singular_name'         => _x( 'Client', 'Client Singular Name', 'broody' ),
		'menu_name'             => __( 'Clients', 'broody' ),
		'name_admin_bar'        => __( 'Client', 'broody' ),
		'archives'              => __( 'Client Archives', 'broody' ),
		'attributes'            => __( 'Client Attributes', 'broody' ),
		'parent_item_colon'     => __( 'Parent Client:', 'broody' ),
		'all_items'             => __( 'All Clients', 'broody' ),
		'add_new_item'          => __( 'Add New Client', 'broody' ),
		'add_new'               => __( 'Add New', 'broody' ),
		'new_item'              => __( 'New Client', 'broody' ),
		'edit_item'             => __( 'Edit Client', 'broody' ),
		'update_item'           => __( 'Update Client', 'broody' ),
		'view_item'             => __( 'View Client', 'broody' ),
		'view_items'            => __( 'View Clients', 'broody' ),
		'search_items'          => __( 'Search Item', 'broody' ),
		'not_found'             => __( 'Not found', 'broody' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'broody' ),
		'featured_image'        => __( 'Featured Image', 'broody' ),
		'set_featured_image'    => __( 'Set featured image', 'broody' ),
		'remove_featured_image' => __( 'Remove featured image', 'broody' ),
		'use_featured_image'    => __( 'Use as featured image', 'broody' ),
		'insert_into_item'      => __( 'Insert into item', 'broody' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'broody' ),
		'items_list'            => __( 'Items list', 'broody' ),
		'items_list_navigation' => __( 'Items list navigation', 'broody' ),
		'filter_items_list'     => __( 'Filter items list', 'broody' ),
	);
	$args = array(
		'label'                 => __( 'Client', 'broody' ),
		'description'           => __( 'Clients', 'broody' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'client', $args );
}
add_action( 'init', 'clients', 0 );

function people() {
	$labels = array(
		'name'                  => _x( 'People', 'People General Name', 'broody' ),
		'singular_name'         => _x( 'People', 'People Singular Name', 'broody' ),
		'menu_name'             => __( 'People', 'broody' ),
		'name_admin_bar'        => __( 'People', 'broody' ),
		'archives'              => __( 'People Archives', 'broody' ),
		'attributes'            => __( 'Person Attributes', 'broody' ),
		'parent_item_colon'     => __( 'Parent Person:', 'broody' ),
		'all_items'             => __( 'All People', 'broody' ),
		'add_new_item'          => __( 'Add New Person', 'broody' ),
		'add_new'               => __( 'Add New', 'broody' ),
		'new_item'              => __( 'New Person', 'broody' ),
		'edit_item'             => __( 'Edit Person', 'broody' ),
		'update_item'           => __( 'Update Person', 'broody' ),
		'view_item'             => __( 'View Person', 'broody' ),
		'view_items'            => __( 'View People', 'broody' ),
		'search_items'          => __( 'Search Item', 'broody' ),
		'not_found'             => __( 'Not found', 'broody' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'broody' ),
		'featured_image'        => __( 'Featured Image', 'broody' ),
		'set_featured_image'    => __( 'Set featured image', 'broody' ),
		'remove_featured_image' => __( 'Remove featured image', 'broody' ),
		'use_featured_image'    => __( 'Use as featured image', 'broody' ),
		'insert_into_item'      => __( 'Insert into item', 'broody' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'broody' ),
		'items_list'            => __( 'Items list', 'broody' ),
		'items_list_navigation' => __( 'Items list navigation', 'broody' ),
		'filter_items_list'     => __( 'Filter items list', 'broody' ),
	);
	$args = array(
		'label'                 => __( 'People', 'broody' ),
		'description'           => __( 'People', 'broody' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'					=> array('slug' => 'who-we-are', 'with_front' => false)
	);
	register_post_type( 'people', $args );
}
add_action( 'init', 'people', 0 );

// Register Custom Taxonomy
function client_categories() {

	$labels = array(
		'name'                       => _x( 'Types', 'Taxonomy General Name', 'broody' ),
		'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'broody' ),
		'menu_name'                  => __( 'Client Types', 'broody' ),
		'all_items'                  => __( 'All Items', 'broody' ),
		'parent_item'                => __( 'Parent Item', 'broody' ),
		'parent_item_colon'          => __( 'Parent Item:', 'broody' ),
		'new_item_name'              => __( 'New Item Name', 'broody' ),
		'add_new_item'               => __( 'Add New Item', 'broody' ),
		'edit_item'                  => __( 'Edit Item', 'broody' ),
		'update_item'                => __( 'Update Item', 'broody' ),
		'view_item'                  => __( 'View Item', 'broody' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'broody' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'broody' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'broody' ),
		'popular_items'              => __( 'Popular Items', 'broody' ),
		'search_items'               => __( 'Search Items', 'broody' ),
		'not_found'                  => __( 'Not Found', 'broody' ),
		'no_terms'                   => __( 'No items', 'broody' ),
		'items_list'                 => __( 'Items list', 'broody' ),
		'items_list_navigation'      => __( 'Items list navigation', 'broody' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
		'rewrite'					=> array('slug' => 'clients', 'with_front' => false)
	);
	register_taxonomy( 'type', array( 'client' ), $args );

}
add_action( 'init', 'client_categories', 0 );