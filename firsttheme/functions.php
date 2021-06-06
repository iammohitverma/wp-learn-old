<?php

	
	// Enqueue script function
function firsttheme_theme_scripts(){
	
	wp_enqueue_style( 'bootstrap-5-css', get_theme_file_uri("assets/bootstrap-5.0.0/css/bootstrap.min.css"));
	
	wp_enqueue_style( 'slick-css', get_theme_file_uri("assets/slick/slick.css"));

	wp_enqueue_style( 'slick-custom-css', get_theme_file_uri("assets/css/slick-style.css"));
	
	wp_enqueue_style( 'lightgallery-css', get_theme_file_uri("assets/lightgallery/lightgallery.css"));

	wp_enqueue_style( 'custom-css', get_theme_file_uri("assets/css/custom-style.css"));
	
	wp_enqueue_script("jquery");
	
	wp_enqueue_script( 'bootstrap-5-js', get_theme_file_uri( 'assets/bootstrap-5.0.0/js/bootstrap.min.js' ), '', '5.0', true);

	wp_enqueue_script( 'slick-js', get_theme_file_uri( 'assets/slick/slick.min.js' ), '', '1.0', true);

	wp_enqueue_script( 'lightgallery-js', get_theme_file_uri( 'assets/lightgallery/lightgallery-all.min.js' ), '', '1.0', true);
	
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
	// custom header support
	add_theme_support( 'custom-header', array(
			'default-image'      => get_template_directory_uri() . '/assets/images/default-image.jpg',
			'default-text-color' => '000',
			'width'              => 1920,
			'height'             => 250,
			'flex-width'         => true,
			'flex-height'        => true,
		) 
	);
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
	
}
add_action( 'after_setup_theme', 'firsttheme_setup' );
	

// register_sidebar 
function firsttheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'firsttheme' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'firsttheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
// register_sidebar 
    register_sidebar( array(
        'name'          => __( 'footer 1 ', 'firsttheme' ),
        'id'            => 'footer',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'firsttheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'firsttheme_widgets_init');

// set the_excerpt() Length
function firsttheme_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'firsttheme_excerpt_length', 999 );

// for include files
require_once get_template_directory() . "/inc/customizer.php";
require_once get_template_directory() . "/inc/customizer-style.php";
require_once get_template_directory() . "/inc/plugins/kirki/kirki.php";
require_once get_template_directory() . "/inc/plugins/kirki/kirki-config.php";
require_once get_template_directory() . "/inc/mv-custompost.php";
require_once get_template_directory() . "/inc/mv-metabox.php";
require_once get_template_directory() . "/inc/slider.php";
require_once get_template_directory() . "/inc/globalsliderQuery.php";
require_once get_template_directory() . "/inc/mvgallery.php";
require_once get_template_directory() . "/inc/globalGalleryQuery.php";
require_once get_template_directory() . "/inc/services-post.php";


// Custom post page not found error Solved by using code on function.php (WP)
flush_rewrite_rules( false );




// tgm plugin activation
// require_once get_template_directory() . "/inc/plugins/class-tgm-plugin-activation.php";
// require get_template_directory() . "/inc/plugins/install-plugins.php";


//[Creating Shortcode]
// function foobar_func( $atts ){
	
	// 	$a=shortcode_atts(array(
		//         'width' => '400',
		//         'height' => '400',
		//     ), $atts);
		
		// 	$imgUrl = get_theme_file_uri( 'assets/images/default-image.jpg' );	
		// 	return '<img src="'.$imgUrl.'" width="'.$a['width'].'" height="'.$a['height'].'" />';
		// }
		// add_shortcode( 'foobar', 'foobar_func' );
		
		
		// function my_form_shortcode() {
			//     ob_start();
			//     get_template_part('slider-query');
			// 	// require get_template_directory() . 'inc/slider-query.php';
			//     return ob_get_clean();   
			// } 
			// add_shortcode( 'slider', 'my_form_shortcode' );
			
			
			
?>
<?php
	// function map_shortcode() {				
		// ob_start();
		// require_once get_template_directory() . "/inc/globalsliderQuery.php";
	?>  

	<?php
		// return ob_get_clean();
	// }
	// add_shortcode("slider", "map_shortcode");
?>

