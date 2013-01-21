<?php
class an_customize {
	public static function register( $wp_customize ) {
		
		/*
		 *  Add Header Style Setting
		 */
		$wp_customize->add_setting( 'header_style', array(
			'default' => 'logo',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		/*
		 *  Add Color Mode Settings
		 */
		 $wp_customize->add_setting( 'color_mode', array(
			'default' => 'scheme'
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
		
		$wp_customize->add_setting( 'body_color_advanced', array(
			'default' => 0,
			'type' => 'theme_mod',
			'transport' => 'refresh'
		));
		
		$wp_customize->add_setting( 'body_background_color', array(
			'default' => '#fbfbfb',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_text_color', array(
			'default' => '#7c7c7c',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_link_advanced_color', array(
			'default' => '#0252aa',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_headline_1_color', array(
			'default' => '#888888',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_headline_2_color', array(
			'default' => '#7c7c7c',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_table_header_color', array(
			'default' => '#7c7c7c',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_table_alternating_color', array(
			'default' => '#dedede',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_search_background_color', array(
			'default' => '#dedede',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_search_button_color', array(
			'default' => '#c6c6c6',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'body_line_color', array(
			'default' => '#c6c6c6',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		/*
		 *  Add Secondary Nav / Breadcrumb Color Settings
		 */
		$wp_customize->add_setting( 'breadcrumb_color_advanced', array(
			'default' => 0,
			'type' => 'theme_mod',
			'transport' => 'refresh'
		));
		
		$wp_customize->add_setting( 'breadcrumb_text_color', array(
			'default' => '#888888',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		$wp_customize->add_setting( 'breadcrumb_trail_color', array(
			'default' => '#c9c9c9',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		$wp_customize->add_setting( 'breadcrumb_line_color', array(
			'default' => '#c6c6c6',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		$wp_customize->add_setting( 'breadcrumb_highlight_color', array(
			'default' => '#dedede',
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
		
		$wp_customize->add_setting( 'footer_1_color_advanced', array(
			'default' => 0,
			'type' => 'theme_mod',
			'transport' => 'refresh'
		));
		
		$wp_customize->add_setting( 'footer_1_background_color', array(
			'default' => '#e4e4e4',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_1_text_color', array(
			'default' => '#868686',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_1_headline_color', array(
			'default' => '#727272',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_1_advanced_link_color', array(
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
		
		$wp_customize->add_setting( 'footer_2_color_advanced', array(
			'default' => 0,
			'type' => 'theme_mod',
			'transport' => 'refresh'
		));
		
		$wp_customize->add_setting( 'footer_2_background_color', array(
			'default' => '#c4c4c4',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_2_text_color', array(
			'default' => '#676767',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_2_headline_color', array(
			'default' => '#878787',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_2_advanced_link_color', array(
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
		
		$wp_customize->add_setting( 'footer_3_color_advanced', array(
			'default' => 0,
			'type' => 'theme_mod',
			'transport' => 'refresh'
		));
		
		$wp_customize->add_setting( 'footer_3_background_color', array(
			'default' => '#898989',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_3_text_color', array(
			'default' => '#3d3d3d',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_3_headline_color', array(
			'default' => '#505050',
			'type' => 'theme_mod',
			'transport' => 'refresh',
		));
		
		$wp_customize->add_setting( 'footer_3_advanced_link_color', array(
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
		
		$wp_customize->add_section( 'an-color-mode', array(
			'title' => __('Color Mode','an'),
			'priority' => 1100
		));
		
		$wp_customize->add_section( 'an-basic-colors', array(
			'title' => __('Custom Colors', 'an'),
			'priority' => 1200,
		));
		
		$wp_customize->add_section( 'an-advanced-colors-menu', array(
			'title' => __('Advanced Menu Colors', 'an'),
			'priority' => 1300,
		));
		
		$wp_customize->add_section( 'an-advanced-colors-body', array(
			'title' => __('Advanced Body Colors', 'an'),
			'priority' => 1400,
		));
		
		$wp_customize->add_section( 'an-advanced-colors-breadcrumb', array(
			'title' => __('Advanced Secondary Menu / Breadcrumbs Colors', 'an'),
			'priority' => 1500,
		));
		
		$wp_customize->add_section( 'an-advanced-colors-footer-1', array(
			'title' => __('Advanced Footer 1 Colors', 'an'),
			'priority' => 1600,
		));
		
		$wp_customize->add_section( 'an-advanced-colors-footer-2', array(
			'title' => __('Advanced Footer 2 Colors', 'an'),
			'priority' => 1700,
		));
		
		$wp_customize->add_section( 'an-advanced-colors-footer-3', array(
			'title' => __('Advanced Footer 3 Colors', 'an'),
			'priority' => 1800,
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
		 *  Add Color Mode Controls
		 */
		$wp_customize->add_control( 'color_mode', array(
			'label' => __( 'Header Style', 'an' ),
			'section' => 'an-color-mode',
			'settings' => 'color_mode',
			'type' => 'radio',
			'priority' => 100,
			'choices' => array(
				'scheme' => 'Choose a pre-built color scheme',
				'custom' => 'Custom colors'
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
					'label' => 'Background Gradient Start',
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
					'label' => 'Background Gradient End',
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
					'label' => 'Drop-downs Background Color',
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
		
		$wp_customize->add_control( 'body_color_advanced', array(
			'label' => __( 'Enable Advanced Control', 'an' ),
			'section' => 'an-advanced-colors-body',
			'settings' => 'body_color_advanced',
			'type' => 'checkbox',
			'priority' => 1
		));
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_background_color',
					'priority' => 100,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_text_color',
				array(
					'label' => 'Text Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_text_color',
					'priority' => 200,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_link_advanced_color',
				array(
					'label' => 'Link Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_link_advanced_color',
					'priority' => 300,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_headline_1_color',
				array(
					'label' => 'Page Title Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_headline_1_color',
					'priority' => 400,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_headline_2_color',
				array(
					'label' => 'Sub-Heading Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_headline_2_color',
					'priority' => 500,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_table_header_color',
				array(
					'label' => 'Table Header Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_table_header_color',
					'priority' => 600,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_table_alternating_color',
				array(
					'label' => 'Table Alternating Row Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_table_alternating_color',
					'priority' => 700,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_search_background_color',
				array(
					'label' => 'Search Field Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_search_background_color',
					'priority' => 800,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_search_button_color',
				array(
					'label' => 'Search Button Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_search_button_color',
					'priority' => 900,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_line_color',
				array(
					'label' => 'Line Color',
					'section' => 'an-advanced-colors-body',
					'settings' => 'body_line_color',
					'priority' => 1000,
				)
			)
		);
		
		/*
		 *  Add Secondary Menu / Breadcrumb Controls
		 */
		$wp_customize->add_control( 'breadcrumb_color_advanced', array(
			'label' => __( 'Enable Advanced Control', 'an' ),
			'section' => 'an-advanced-colors-breadcrumb',
			'settings' => 'breadcrumb_color_advanced',
			'type' => 'checkbox',
			'priority' => 1
		));
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'breadcrumb_text_color',
				array(
					'label' => 'Text Color',
					'section' => 'an-advanced-colors-breadcrumb',
					'settings' => 'breadcrumb_text_color',
					'priority' => 100,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'breadcrumb_trail_color',
				array(
					'label' => 'Breadcrumb Trail Color',
					'section' => 'an-advanced-colors-breadcrumb',
					'settings' => 'breadcrumb_trail_color',
					'priority' => 200,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'breadcrumb_line_color',
				array(
					'label' => 'Line Color',
					'section' => 'an-advanced-colors-breadcrumb',
					'settings' => 'breadcrumb_line_color',
					'priority' => 300,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'breadcrumb_highlight_color',
				array(
					'label' => 'Sub-Menu Highlight Color',
					'section' => 'an-advanced-colors-breadcrumb',
					'settings' => 'breadcrumb_highlight_color',
					'priority' => 400,
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
		
		$wp_customize->add_control( 'footer_1_color_advanced', array(
			'label' => __( 'Enable Advanced Control', 'an' ),
			'section' => 'an-advanced-colors-footer-1',
			'settings' => 'footer_1_color_advanced',
			'type' => 'checkbox',
			'priority' => 1
		));
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_1_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'an-advanced-colors-footer-1',
					'settings' => 'footer_1_background_color',
					'priority' => 100,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_1_text_color',
				array(
					'label' => 'Text Color',
					'section' => 'an-advanced-colors-footer-1',
					'settings' => 'footer_1_text_color',
					'priority' => 200,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_1_headline_color',
				array(
					'label' => 'Title Color',
					'section' => 'an-advanced-colors-footer-1',
					'settings' => 'footer_1_headline_color',
					'priority' => 300,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_1_advanced_link_color',
				array(
					'label' => 'Link Color',
					'section' => 'an-advanced-colors-footer-1',
					'settings' => 'footer_1_advanced_link_color',
					'priority' => 400,
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
		
		$wp_customize->add_control( 'footer_2_color_advanced', array(
			'label' => __( 'Enable Advanced Control', 'an' ),
			'section' => 'an-advanced-colors-footer-2',
			'settings' => 'footer_2_color_advanced',
			'type' => 'checkbox',
			'priority' => 1
		));
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_2_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'an-advanced-colors-footer-2',
					'settings' => 'footer_2_background_color',
					'priority' => 100,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_2_text_color',
				array(
					'label' => 'Text Color',
					'section' => 'an-advanced-colors-footer-2',
					'settings' => 'footer_2_text_color',
					'priority' => 200,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_2_headline_color',
				array(
					'label' => 'Title Color',
					'section' => 'an-advanced-colors-footer-2',
					'settings' => 'footer_2_headline_color',
					'priority' => 300,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_2_advanced_link_color',
				array(
					'label' => 'Link Color',
					'section' => 'an-advanced-colors-footer-2',
					'settings' => 'footer_2_advanced_link_color',
					'priority' => 400,
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
		
		$wp_customize->add_control( 'footer_3_color_advanced', array(
			'label' => __( 'Enable Advanced Control', 'an' ),
			'section' => 'an-advanced-colors-footer-3',
			'settings' => 'footer_3_color_advanced',
			'type' => 'checkbox',
			'priority' => 1
		));
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_3_background_color',
				array(
					'label' => 'Background Color',
					'section' => 'an-advanced-colors-footer-3',
					'settings' => 'footer_3_background_color',
					'priority' => 100,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_3_text_color',
				array(
					'label' => 'Text Color',
					'section' => 'an-advanced-colors-footer-3',
					'settings' => 'footer_3_text_color',
					'priority' => 200,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_3_headline_color',
				array(
					'label' => 'Title Color',
					'section' => 'an-advanced-colors-footer-3',
					'settings' => 'footer_3_headline_color',
					'priority' => 300,
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_3_advanced_link_color',
				array(
					'label' => 'Link Color',
					'section' => 'an-advanced-colors-footer-3',
					'settings' => 'footer_3_advanced_link_color',
					'priority' => 400,
				)
			)
		);
		
	}

	/**
	 * Outputs some javascript needed to control field visibility
	 * and color values on the customizer page
	 *
	 * Used by hook: 'customize_preview_init'
	 */
	public static function functionality() {
		wp_enqueue_script(
			'functionality',
			get_template_directory_uri().'/js/customizer-functionality.js',
			array( 'jquery' ),
			'',
			true
		);
	}
}

add_action( 'customize_register', array( 'an_customize', 'register'));
add_action( 'customize_controls_enqueue_scripts', array( 'an_customize', 'functionality') );


?>