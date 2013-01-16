<?php

$prefix = hybrid_get_prefix();

function an_customize_register( $wp_customize ) {
	
	/*
	 *  Add Header Style Setting
	 */
	$wp_customize->add_setting( 'header_style', array(
		'default' => 'logo',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	
	/*
	 *  Add Navigation Color Settings
	 */
	$wp_customize->add_setting( 'navigation_color', array(
		'default' => '#c70000',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'navigation_color_advanced', array(
		'default' => 0,
		'type' => 'theme_mod',
		'transport' => 'refresh'
	));
	
	$wp_customize->add_setting( 'navigation_gradient_start', array(
		'default' => '#d84d4d',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'navigation_gradient_end', array(
		'default' => '#c70000',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'navigation_drop', array(
		'default' => '#a90000',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'navigation_text', array(
		'default' => '#e68d8d',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'navigation_text_hover', array(
		'default' => '#fdf5f5',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	
	/*
	 *  Add Body Color Settings
	 */
	$wp_customize->add_setting( 'body_color', array(
		'default' => '#fbfbfb',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'body_link_color', array(
		'default' => '#0252aa',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	
	/*
	 *  Add Footer 1 Color Settings
	 */
	$wp_customize->add_setting( 'footer_1_color', array(
		'default' => '#e4e4e4',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'footer_1_link_color', array(
		'default' => '#0252aa',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	
	/*
	 *  Add Footer 2 Color Settings
	 */
	$wp_customize->add_setting( 'footer_2_color', array(
		'default' => '#c4c4c4',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'footer_2_link_color', array(
		'default' => '#0252aa',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	
	/*
	 *  Add Footer 3 Color Settings
	 */
	$wp_customize->add_setting( 'footer_3_color', array(
		'default' => '#898989',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting( 'footer_3_link_color', array(
		'default' => '#0252aa',
		'type' => 'theme_mod',
		'transport' => 'refresh',
	));
	
	
	/*
	 *  Add Sections
	 */
	$wp_customize->add_section( 'an-header', array(
		'title' => __('Header Style', 'an'),
		'priority' => 1000,
	));
	
	$wp_customize->add_section( 'an-basic-colors', array(
		'title' => __('Custom Colors', 'an'),
		'priority' => 1100,
	));
	
	$wp_customize->add_section( 'an-advanced-colors-menu', array(
		'title' => __('Advanced Menu Colors', 'an'),
		'priority' => 1200,
	));
	
	
	/*
	 *  Add Header Style Control
	 */
	$wp_customize->add_control( 'header_style', array(
		'label' => __( 'Header Style', 'an' ),
		'section' => 'an-header',
		'settings' => 'header_style',
		'type' => 'radio',
		'priority' => 100,
		'choices' => array(
			'logo' => 'Logo on the Left',
			'banner' => 'Full-Width Banner'
		),
	));
	
	
	/*
	 *  Add Navigation Color Controls
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_color',
			array(
				'label' => 'Primary Menu Color',
				'section' => 'an-basic-colors',
				'settings' => 'navigation_color',
				'priority' => 100,
			)
		)
	);
	
	$wp_customize->add_control( 'navigation_color_advanced', array(
		'label' => __( 'Enable Advanced Control', 'an' ),
		'section' => 'an-advanced-colors-menu',
		'settings' => 'navigation_color_advanced',
		'type' => 'checkbox',
		'priority' => 1
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_gradient_start',
			array(
				'label' => 'Menu Gradient Start',
				'section' => 'an-advanced-colors-menu',
				'settings' => 'navigation_gradient_start',
				'priority' => 100,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_gradient_end',
			array(
				'label' => 'Menu Gradient End',
				'section' => 'an-advanced-colors-menu',
				'settings' => 'navigation_gradient_end',
				'priority' => 200,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_drop',
			array(
				'label' => 'Menu Drop-downs Background Color',
				'section' => 'an-advanced-colors-menu',
				'settings' => 'navigation_drop',
				'priority' => 250,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_text',
			array(
				'label' => 'Text Color',
				'section' => 'an-advanced-colors-menu',
				'settings' => 'navigation_text',
				'priority' => 300,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'navigation_text_hover',
			array(
				'label' => 'Text Color on Hover',
				'section' => 'an-advanced-colors-menu',
				'settings' => 'navigation_text_hover',
				'priority' => 400,
			)
		)
	);
	
	
	/*
	 *  Add Body Color Controls
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'body_color',
			array(
				'label' => 'Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'body_color',
				'priority' => 200,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'body_link_color',
			array(
				'label' => 'Main Link Color',
				'section' => 'an-basic-colors',
				'settings' => 'body_link_color',
				'priority' => 300,
			)
		)
	);
	
	
	/*
	 *  Add Footer 1 Color Controls
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_1_color',
			array(
				'label' => 'Footer 1 Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_1_color',
				'priority' => 400,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_1_link_color',
			array(
				'label' => 'Footer 1 Link Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_1_link_color',
				'priority' => 500,
			)
		)
	);
	
	
	/*
	 *  Add Footer 2 Color Controls
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_2_color',
			array(
				'label' => 'Footer 2 Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_2_color',
				'priority' => 600,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_2_link_color',
			array(
				'label' => 'Footer 2 Link Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_2_link_color',
				'priority' => 700,
			)
		)
	);
	
	
	/*
	 *  Add Footer 3 Color Controls
	 */
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_3_color',
			array(
				'label' => 'Footer 3 Background Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_3_color',
				'priority' => 800,
			)
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_3_link_color',
			array(
				'label' => 'Footer 3 Link Color',
				'section' => 'an-basic-colors',
				'settings' => 'footer_3_link_color',
				'priority' => 900,
			)
		)
	);
	
}

add_action( 'customize_register', 'an_customize_register' );


?>