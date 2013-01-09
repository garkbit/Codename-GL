<?php

/* Load the core theme framework. */
require_once( trailingslashit( get_template_directory() ) . 'lib/hybrid.php' );
new Hybrid();

/* Do theme setup on the 'after_setup_theme' hook. */
add_action ('after_setup_theme', 'hybrid_test_theme_setup', 10);

/*Define path constants*/
//define('TEMPPATH', get_bloginfo('stylesheet_directory'));
//define('IMAGES', TEMPPATH . "/images");

/*
 * Theme setup function. This function adds support for theme features, actions and filters
 * @since 0.9.0
*/
function hybrid_test_theme_setup() {
	
	/* Load theme includes. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/customize.php' );
	require_once( trailingslashit( THEME_DIR ) . 'includes/media.php' );
	require_once( trailingslashit( THEME_DIR ) . 'includes/post-formats.php' );
	require_once( trailingslashit( THEME_DIR ) . 'includes/shortcodes.php' );
	
	/*Add theme support for Hybrid Core features*/
	add_theme_support('hybrid-core-menus', array('primary', 'secondary', 'subsidiary'));
	add_theme_support('hybrid-core-sidebars', array( 'primary', 'secondary', 'subsidiary', 'header', 'before-content', 'after-content', 'after-singular' ) );
	add_theme_support('hybrid-core-widgets');
	add_theme_support('hybrid-core-shortcodes');
	add_theme_support('hybric-core-post-meta-box');
	add_theme_support('hybrid-core-drop-downs');
	add_theme_support('hybrid-core-template-hierarchy');
	
	/*Add theme support for Hybrid Core extensions*/
	add_theme_support('post-layouts');
	add_theme_support('post-stylesheets');
	add_theme_support('loop-pagination');
	add_theme_support('get-the-image');
	add_theme_support('breadcrumb-trail');
	add_theme_support('cleaner-gallery');
	
	/*Add theme support for Wordpress features*/
	add_theme_support('automatic-feed-links');
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' ) );
	
	/*Register sidebars*/
	
	/*Filter sidebar widgets*/
	
	/*Add HTML5 Shim for IE*/
	add_action('wp_head', 'add_ie_html5_shim');
}

function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}

?>