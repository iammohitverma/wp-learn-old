<?php
Kirki::add_config( 'firsttheme_config_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_panel( 'header_settings', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header Settings', 'kirki' ),
    'description' => esc_html__( 'Header Settings description', 'kirki' ),
) );
Kirki::add_section( 'header_layout_settings', array(
    'title'          => esc_html__( 'header_layout_settings', 'kirki' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );
Kirki::add_section( 'menu_settings', array(
    'title'          => esc_html__( 'menu_settings', 'kirki' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
) );
Kirki::add_section( 'typo_settings', array(
    'title'          => esc_html__( 'typo_settings', 'kirki' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'header_settings',
    'priority'       => 160,
    'icon'     => 'dashicons-editor-spellcheck',
) );
Kirki::add_field( 'firsttheme_config_id', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'header_layout_settings',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'header',
		],
	],
] );
Kirki::add_field( 'firsttheme_config_id', [
	'type'        => 'background',
	'settings'    => 'menu_active_background_setting',
	'label'       => esc_html__( 'Menu Active and Hover', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'header_layout_settings',
	'default'     => [
		'background-color'      => '#000',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'header li.current-menu-item, header li:hover ',
		],
	],
] );
Kirki::add_field( 'first_config_id', [
	'type'        => 'typography',
	'settings'    => 'typography_setting',
	'label'       => esc_html__( 'Control Label', 'kirki' ),
	'section'     => 'typo_settings',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body, h3',
		],
	],
] );
Kirki::add_field( 'first_config_id', [
	'type'        => 'switch',
	'settings'    => 'switch_setting',
	'label'       => esc_html__( 'This is the label', 'kirki' ),
	'section'     => 'typo_settings',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'kirki' ),
		'off' => esc_html__( 'Disable', 'kirki' ),
	],
] );
Kirki::add_field( 'first_config_id', [
	'type'     => 'text',
	'settings' => 'text_setting',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'typo_settings',
	'default'  => esc_html__( 'This is a default value', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'first_config_id', [
	'type'        => 'text',
	'settings'    => 'custom_setting',
	// 'label'       => esc_html__( 'This is the label', 'kirki' ), // optional
	'section'     => 'typo_settings',
		'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Headline', 'kirki' ) . '</h3>',
	'priority'    => 10,
] );
Kirki::add_field( 'first_config_id', [
	'type'     => 'dashicons',
	'settings' => 'dashicons_setting',
	'label'    => esc_html__( 'Dashicons Control', 'kirki' ),
	'section'  => 'typo_settings',
	'default'  => 'menu',
	'priority' => 10,
] );


