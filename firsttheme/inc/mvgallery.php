<?php
// Register Custom Post Type Mv Gallery
function create_mvgallery_cpt() {

	$labels = array(
		'name' => _x( 'Mv-Galleries', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Mv-Gallery', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Mv-Galleries', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Mv-Gallery', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Mv-Gallery Archives', 'textdomain' ),
		'attributes' => __( 'Mv-Gallery Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Mv-Gallery:', 'textdomain' ),
		'all_items' => __( 'All Mv-Galleries', 'textdomain' ),
		'add_new_item' => __( 'Add New Mv-Gallery', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Mv-Gallery', 'textdomain' ),
		'edit_item' => __( 'Edit Mv-Gallery', 'textdomain' ),
		'update_item' => __( 'Update Mv-Gallery', 'textdomain' ),
		'view_item' => __( 'View Mv-Gallery', 'textdomain' ),
		'view_items' => __( 'View Mv-Galleries', 'textdomain' ),
		'search_items' => __( 'Search Mv-Gallery', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Mv-Gallery', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Mv-Gallery', 'textdomain' ),
		'items_list' => __( 'Mv-Galleries list', 'textdomain' ),
		'items_list_navigation' => __( 'Mv-Galleries list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Mv-Galleries list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Mv-Gallery', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array('title', 'custom-fields'),
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
	register_post_type( 'mvgallery', $args );

}
add_action( 'init', 'create_mvgallery_cpt', 0 );