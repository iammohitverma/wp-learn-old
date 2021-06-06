<?php
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	<h1><?php the_title();?></h1>
	<p><?php the_content();?></p>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>



<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <?php wp_footer(); ?>
</body>
</html>

/*call template parts*/
<?php get_template_part( "template-parts/home", "featured" )?>
<?php get_template_part( "template-parts/homefeatured")?>


/*THE LOOP */
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	<h1><?php the_title();?></h1>
	<p><?php the_content();?></p>
	<?php endwhile; ?>
<?php endif; ?>



<?php echo get_stylesheet_directory();?> /*return theme path*/ <br/>
<?php echo get_template_directory_uri();?> /*return theme path*/ <br/>
<?php echo get_stylesheet_uri();?> /*return theme's default css path*/ <br/>
<?php echo get_stylesheet_directory_uri();?> /*return theme's default css path*/ <br/>
<?php echo get_theme_file_uri();?> /*return theme's default css path*/



// Enqueue script function
function firsttheme_theme_scripts(){
	
	wp_enqueue_style( 'bootstrap-5-css', get_theme_file_uri("assets/bootstrap-5.0.0/css/bootstrap.min.css"));
	
	wp_enqueue_style( 'custom-css', get_theme_file_uri("assets/css/custom-style.css"));
	
	wp_enqueue_script("jquery");
	
	wp_enqueue_script( 'bootstrap-5-js', get_theme_file_uri( 'assets/bootstrap-5.0.0/js/bootstrap.min.js' ), '', '5.0', true);
	
	wp_enqueue_script( 'custom-script-js', get_theme_file_uri( 'assets/js/custom-script.js' ), '', '1.0', true);
}
add_action("wp_enqueue_scripts","firsttheme_theme_scripts");


// Theme setup function
function firsttheme_setup() {

	// where you can see firsttheme there will be your textdomain

	// Title support
	add_theme_support( 'title-tag' );  

	// post-thumbnails support (Featured Image)
	add_theme_support( 'post-thumbnails' );
	// call featured image
	// <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid responsive--full', 'title' => 'Feature image']);?>

	// automatic-feed-links support (RSS FEED rss feed is the data of another website which you want to show it on your website then you need to find XML code of that website's for rss feed using plugin you can show it on your website rss feed plugin).
	add_theme_support( 'automatic-feed-links' );

	// under array you can set crop area.. Hard crop left top.. all this size on thubmbnail using <?php the_post_thumbnail('custom-size');
	// add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); 
	add_image_size( 'custom-size', 220, 220 ); 

	// Logo support
	add_theme_support('custom-logo', array(
		'header-text' => array( 'site-title', 'site-description' ),
		'height'               => 100,
		'width'                => 300,
		'flex-width'           => true,
		'flex-height'          => true
	)
);
	// call logo
	// <?php 
	// 	if ( function_exists( 'the_custom_logo' ) ) {
	// 		the_custom_logo();
	// 	}
	// ?>
// change class of logo + add attr on logo element by av
add_filter( 'get_custom_logo', function( $html, $blog_id ) {
    $html = str_replace( 'class="custom-logo"', 'class="logo-img" title="'.get_bloginfo("name").'" alt="'.get_bloginfo("name").'"', $html );
    $html = str_replace( 'custom-logo-link', 'logo', $html );
    return $html;
}, 10, 2 );

// change class of logo 
// add_filter( 'get_custom_logo', 'change_logo_class' );
// function change_logo_class( $html ) {
    //     $html = str_replace( 'custom-logo', 'your-custom-class', $html );
    //     $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );
    //     return $html;
    // }


	// register_nav_menus Support
	register_nav_menus( array(
		'primary_menu' => __( 'Primary Menu', 'firsttheme' ),
		'footer_menu'  => __( 'Footer Menu', 'firsttheme' ),
		) );
		
		
		// call_nav_menus Support
	// <?php
    //     wp_nav_menu(  array(
    //         'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
    //         'menu_class'        => "main-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
    //         'menu_id'           => "primary-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
    //         'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
    //         // 'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
    //         // 'container_id'      => "", // (string) The ID that is applied to the container.
    //         // 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
    //         // 'before'            => "", // (string) Text before the link markup.
    //         // 'after'             => "", // (string) Text after the link markup.
    //         // 'link_before'       => "", // (string) Text before the link text.
    //         // 'link_after'        => "", // (string) Text after the link text.
    //         // 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
    //         // 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
    //         // 'walker'            => "", // (object) Instance of a custom walker class.
    //         'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
    //         // 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
    //         // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
    //     ) );
    // ?>
		
	
}
add_action( 'after_setup_theme', 'firsttheme_setup' );
	

// register_sidebar 
function firsttheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'firsttheme' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'firsttheme' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'firsttheme_widgets_init');

// call sidebar
// <?php get_sidebar();?> /*access sidebar.php*/
// under sidebar
// <?php dynamic_sidebar("main-sidebar"); ?>

// THE LOOP
// <?php if ( have_posts() ) : ?>
// 	<?php while ( have_posts() ) : the_post(); ?>    
// 	<h1><?php the_title();?></h1>
// 	<p><?php the_content();?></p>
// 	<?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid responsive--full', 'title' => 'Feature image']);?>
	
// 	<?php endwhile; ?>
// <?php endif; ?>


//featured image as background image on pages
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="post" class="your-class" style="background-image: url('<?php echo $thumb['0'];?>')">
<p>your text demo</p>
</div>