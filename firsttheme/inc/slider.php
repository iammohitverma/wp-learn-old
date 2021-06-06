<?php
// Register Custom Post Type Slider
function create_slider_cpt() {

	$labels = array(
		'name' => _x( 'slides', 'Post Type General Name', 'firsttheme' ),
		'singular_name' => _x( 'Slider', 'Post Type Singular Name', 'firsttheme' ),
		'menu_name' => _x( 'slides', 'Admin Menu text', 'firsttheme' ),
		'name_admin_bar' => _x( 'Slider', 'Add New on Toolbar', 'firsttheme' ),
		'archives' => __( 'Slider Archives', 'firsttheme' ),
		'attributes' => __( 'Slider Attributes', 'firsttheme' ),
		'parent_item_colon' => __( 'Parent Slider:', 'firsttheme' ),
		'all_items' => __( 'All slides', 'firsttheme' ),
		'add_new_item' => __( 'Add New Slider', 'firsttheme' ),
		'add_new' => __( 'Add New', 'firsttheme' ),
		'new_item' => __( 'New Slider', 'firsttheme' ),
		'edit_item' => __( 'Edit Slider', 'firsttheme' ),
		'update_item' => __( 'Update Slider', 'firsttheme' ),
		'view_item' => __( 'View Slider', 'firsttheme' ),
		'view_items' => __( 'View slides', 'firsttheme' ),
		'search_items' => __( 'Search Slider', 'firsttheme' ),
		'not_found' => __( 'Not found', 'firsttheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'firsttheme' ),
		'featured_image' => __( 'Featured Image', 'firsttheme' ),
		'set_featured_image' => __( 'Set featured image', 'firsttheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'firsttheme' ),
		'use_featured_image' => __( 'Use as featured image', 'firsttheme' ),
		'insert_into_item' => __( 'Insert into Slider', 'firsttheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'firsttheme' ),
		'items_list' => __( 'slides list', 'firsttheme' ),
		'items_list_navigation' => __( 'slides list navigation', 'firsttheme' ),
		'filter_items_list' => __( 'Filter slides list', 'firsttheme' ),
	);
	$args = array(
		'label' => __( 'Slider', 'firsttheme' ),
		'description' => __( '', 'firsttheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title'),
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
	register_post_type( 'slider', $args );

}
add_action( 'init', 'create_slider_cpt', 0 );