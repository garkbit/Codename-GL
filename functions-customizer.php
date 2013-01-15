<?php

$prefix = hybrid_get_prefix();

function an_customize_register( $wp_customize ) {
	
	/* Add Settings */
	$wp_customize->add_setting( 'header_style', array(
		'default' => 'logo',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'navigation_color', array(
		'default' => '#c70000',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'body_color', array(
		'default' => '#fbfbfb',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'link_color', array(
		'default' => '#0252aa',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'footer_1_color', array(
		'default' => '#e4e4e4',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'footer_2_color', array(
		'default' => '#c4c4c4',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'footer_3_color', array(
		'default' => '#898989',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	/* Add Sections */
	$wp_customize->add_section( 'an-header', array(
		'title' => __('Header Style', 'an'),
		'priority' => 1000,
	));
	
	/* Add Sections */
	$wp_customize->add_section( 'an-basic-colors', array(
		'title' => __('Custom Colors', 'an'),
		'priority' => 1100,
	));
	
	/* Add Controls */
	$wp_customize->add_control( 'header_style', array(
		'label' => __( 'Header Style', 'an' ),
		'section' => 'an-header',
		'settings' => 'header_style',
		'type' => 'radio',
		'choices' => array(
			'logo' => 'Logo on the Left',
			'banner' => 'Full-Width Banner'
		),
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_color',
			array(
				'label' => 'Menu Color',
				'section' => 'an-basic-colors',
				'settings' => 'navigation_color',
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'body_color',
			array(
				'label' => 'Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'body_color',
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
				'label' => 'Link Color',
				'section' => 'an-basic-colors',
				'settings' => 'link_color',
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_1_color',
			array(
				'label' => 'Footer 1 Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_1_color',
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_2_color',
			array(
				'label' => 'Footer 2 Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_2_color',
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_3_color',
			array(
				'label' => 'Footer 3 Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_3_color',
			)
		)
	);
	
}

add_action( 'customize_register', 'an_customize_register' );


?>