<?php
// Register Custom Post Type mv-posts
function create_mvposts_cpt() {

	$labels = array(
		'name' => _x( 'all-mv-posts', 'Post Type General Name', 'firsttheme' ),
		'singular_name' => _x( 'mv-posts', 'Post Type Singular Name', 'firsttheme' ),
		'menu_name' => _x( 'all-mv-posts', 'Admin Menu text', 'firsttheme' ),
		'name_admin_bar' => _x( 'mv-posts', 'Add New on Toolbar', 'firsttheme' ),
		'archives' => __( 'mv-posts Archives', 'firsttheme' ),
		'attributes' => __( 'mv-posts Attributes', 'firsttheme' ),
		'parent_item_colon' => __( 'Parent mv-posts:', 'firsttheme' ),
		'all_items' => __( 'All-mv-posts', 'firsttheme' ),
		'add_new_item' => __( 'Add New mv-posts', 'firsttheme' ),
		'add_new' => __( 'Add New', 'firsttheme' ),
		'new_item' => __( 'New mv-posts', 'firsttheme' ),
		'edit_item' => __( 'Edit mv-posts', 'firsttheme' ),
		'update_item' => __( 'Update mv-posts', 'firsttheme' ),
		'view_item' => __( 'View mv-posts', 'firsttheme' ),
		'view_items' => __( 'View all-mv-posts', 'firsttheme' ),
		'search_items' => __( 'Search mv-posts', 'firsttheme' ),
		'not_found' => __( 'Not found', 'firsttheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'firsttheme' ),
		'featured_image' => __( 'Featured Image', 'firsttheme' ),
		'set_featured_image' => __( 'Set featured image', 'firsttheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'firsttheme' ),
		'use_featured_image' => __( 'Use as featured image', 'firsttheme' ),
		'insert_into_item' => __( 'Insert into mv-posts', 'firsttheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this mv-posts', 'firsttheme' ),
		'items_list' => __( 'all-mv-posts list', 'firsttheme' ),
		'items_list_navigation' => __( 'all-mv-posts list navigation', 'firsttheme' ),
		'filter_items_list' => __( 'Filter all-mv-posts list', 'firsttheme' ),
	);
	$args = array(
		'label' => __( 'mv-posts', 'firsttheme' ),
		'description' => __( 'This post type is used for mv-post', 'firsttheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array('category', 'post_tag'),
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
	register_post_type( 'mvposts', $args );

}
add_action( 'init', 'create_mvposts_cpt', 0 );