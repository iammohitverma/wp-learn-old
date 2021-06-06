<?php

// Register Custom Post Type Services
function create_services_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'firsttheme' ),
		'singular_name' => _x( 'Services', 'Post Type Singular Name', 'firsttheme' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'firsttheme' ),
		'name_admin_bar' => _x( 'Services', 'Add New on Toolbar', 'firsttheme' ),
		'archives' => __( 'Services Archives', 'firsttheme' ),
		'attributes' => __( 'Services Attributes', 'firsttheme' ),
		'parent_item_colon' => __( 'Parent Services:', 'firsttheme' ),
		'all_items' => __( 'All Services', 'firsttheme' ),
		'add_new_item' => __( 'Add New Services', 'firsttheme' ),
		'add_new' => __( 'Add New', 'firsttheme' ),
		'new_item' => __( 'New Services', 'firsttheme' ),
		'edit_item' => __( 'Edit Services', 'firsttheme' ),
		'update_item' => __( 'Update Services', 'firsttheme' ),
		'view_item' => __( 'View Services', 'firsttheme' ),
		'view_items' => __( 'View Services', 'firsttheme' ),
		'search_items' => __( 'Search Services', 'firsttheme' ),
		'not_found' => __( 'Not found', 'firsttheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'firsttheme' ),
		'featured_image' => __( 'Featured Image', 'firsttheme' ),
		'set_featured_image' => __( 'Set featured image', 'firsttheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'firsttheme' ),
		'use_featured_image' => __( 'Use as featured image', 'firsttheme' ),
		'insert_into_item' => __( 'Insert into Services', 'firsttheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Services', 'firsttheme' ),
		'items_list' => __( 'Services list', 'firsttheme' ),
		'items_list_navigation' => __( 'Services list navigation', 'firsttheme' ),
		'filter_items_list' => __( 'Filter Services list', 'firsttheme' ),
	);
	$args = array(
		'label' => __( 'Services', 'firsttheme' ),
		'description' => __( 'Custom post for Services', 'firsttheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'create_services_cpt', 0 );