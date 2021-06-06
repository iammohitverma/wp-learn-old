<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php include get_template_directory() . "/inc/customizer-style.php";?>
</head>
<body>
    
<header>
    <div class="logoBx">
        <img src="<?php echo get_theme_mod( "logo_upload" )?>"/>

    </div>

    
        <!-- <?php 
            // if ( function_exists( 'the_custom_logo' ) ) {
            //     the_custom_logo();
            // }
        ?> -->

    <h1 class="dynamic_text"><?php echo get_theme_mod( "change_text_id", "CAT2" )?></h1>
    <div class="toggle"></div>
    <?php
        wp_nav_menu(  array(
            'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
            'menu_class'        => "main-menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
            'menu_id'           => "primary-menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
            'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
            // 'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
            // 'container_id'      => "", // (string) The ID that is applied to the container.
            // 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
            // 'before'            => "", // (string) Text before the link markup.
            // 'after'             => "", // (string) Text after the link markup.
            // 'link_before'       => "", // (string) Text before the link text.
            // 'link_after'        => "", // (string) Text after the link text.
            // 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
            // 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
            // 'walker'            => "", // (object) Instance of a custom walker class.
            'theme_location'    => "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            // 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
            // 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
        ) );
    ?>
</header>

<?php $thumbFeatureVal = get_theme_mod( "thumbnail_feature_id", "yes" )?>
<!-- <?php if($thumbFeatureVal == "yes"): ?>
<div class="header-image">
    <img alt="header-img" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
</div> 
<?php endif; ?> -->

<?php if ( true == get_theme_mod( 'switch_setting', true ) ) : ?>
    <div class="header-image">
        <img alt="header-img" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
    </div> 
<?php else : ?>
	<p>Switch is OFF</p>
<?php endif; ?>

<p><?php echo get_theme_mod( 'text_setting', true ); ?></p>
<?php echo get_theme_mod( 'custom_setting', true ); ?>
<?php $icon = get_theme_mod( 'dashicons_setting', 'menu' ); ?>
<span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>




