<?php
function firsttheme_customize_register($wp_customize){
     
	$wp_customize->add_panel( 'navbar_bg_color_setting', array( 
        'title'            => __( 'Header-Settings', 'firsttheme' ),
        'description'      => __( '' ), 
        'priority'         => 10,   
    ) );
	$wp_customize->add_panel( 'customHtml', array( 
        'title'            => __( 'Custom Html', 'firsttheme' ),
        'description'      => __( '' ), 
        'priority'         => 15,   
    ) );

    $wp_customize->add_section('themename_color_scheme', array(
        'title'    => __('Header color', 'firsttheme'),
        'description' => '',
        'priority' => 120,
		'panel' => 'navbar_bg_color_setting',
    ));
   
    $wp_customize->add_section('change_text', array(
        'title'    => __('CHange text', 'firsttheme'),
        'description' => '',
        'priority' => 120,
		'panel' => 'navbar_bg_color_setting',
    ));
  
    $wp_customize->add_section('thumbnail_feature', array(
        'title'    => __('thumbnail feature', 'firsttheme'),
        'description' => '',
        'priority' => 120,
		'panel' => 'navbar_bg_color_setting',
    ));
    $wp_customize->add_section('cust_logo', array(
        'title'    => __('cust_logo', 'firsttheme'),
        'description' => '',
        'priority' => 120,
		'panel' => 'navbar_bg_color_setting',
    ));
    $wp_customize->add_section('custom_html', array(
        'title'    => __('cus_html', 'firsttheme'),
        'description' => '',
        'priority' => 120,
		'panel' => 'customHtml',
    ));    
  
    //  =============================
    //  = Html Input              =
    //  =============================
        //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('themename_theme_options', array(
        'default'        => 'value_xyz',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Text Test', 'firsttheme'),
        'section'    => 'custom_html',
        'settings'   => 'themename_theme_options',
    ));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('header-bg-color', array(
        'default'           => '#222f3e',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_attr',
        'type'           => 'theme_mod',    
    ));
  
    $wp_customize->add_control( "header-bg-color", array(
        'label'    => __('Color scheme', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'header-bg-color',
        'type' => 'color',
        
    ));
	  //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('body-bg-color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control( "body-bg-color", array(
        'label'    => __('Body-bg-Color scheme', 'themename'),
        'section'  => 'themename_color_scheme',
        'settings' => 'body-bg-color',
        'type' => 'color',
        
    ));
	  //  =============================
    //  =Text change              =
    //  =============================
    $wp_customize->add_setting('change_text_id', array(
        'default'           => 'ABC',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
        'type'           => 'theme_mod',  
    ));
  
    $wp_customize->add_control( "change_text_id", array(
        'label'    => __('change text', 'themename'),
        'section'  => 'change_text',
        'settings' => 'change_text_id',
        'type' => 'text',        
    ));
	  //  =============================
    //  =Text color change              =
    //  =============================
    $wp_customize->add_setting('text_color_change', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'type'           => 'theme_mod',  
    ));
  
    $wp_customize->add_control( "text_color_change", array(
        'label'    => __('change text Color', 'themename'),
        'section'  => 'change_text',
        'settings' => 'text_color_change',
        'type' => 'color',        
    ));

     //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('thumbnail_feature_id', array(
        'default'        => 'yes',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
    ));
    
    $wp_customize->add_control('thumbnail_feature_id', array(
        'label'      => __('Thumbnail Hide Show', 'themename'),
        'section'    => 'thumbnail_feature',
        'settings'   => 'thumbnail_feature_id',
        'type'       => 'radio',
        'choices'    => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ));
    
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('logo_upload', array(
        'default'           => 'http://wp-learn/wp-content/uploads/2021/05/marvin-meyer-SYTO3xs06fU-unsplash-scaled.jpg',
        'capability'        => 'edit_theme_options',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_upload', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'cust_logo',
        'settings' => 'logo_upload',
    )));

}
	add_action('customize_register', 'firsttheme_customize_register');