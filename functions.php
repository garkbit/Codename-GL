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
	add_theme_support( 'entry-views' );
	
	/*Add theme support for Wordpress features*/
	add_theme_support('automatic-feed-links');
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' ) );
	
	/*Register sidebars*/
	add_action( 'widgets_init', 'an_register_sidebars' );
	
	/*Register additional widgets*/
	add_action( 'widgets_init', 'an_register_widgets' );
	
	/*Filter sidebar widgets*/
	
	/*Add HTML5 Shim for IE*/
	add_action('wp_head', 'add_ie_html5_shim');
}

/**
 * Function to inser the HTML 5 Shim, a utility that permits HTML 5 in versions of IE prior to IE9.
 *
 * @since 0.1.0
 * @access public
 * @return void
 */
function add_ie_html5_shim () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<![endif]-->';
}

/**
 * Function for registering sidebars.
 *
 * @since 0.1.0
 * @access public
 * @return void
 */
function an_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'The Primary sidebar appears to the left of the content on all pages, posts and archives.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div><!-- .widget -->',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'footer-1' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-1',
			'name' => __( 'Footer 1' ),
			'description' => __( 'The first of three widget areas that appear at the bottom of all pages, posts and archives. Four columns wide.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s col">',
			'after_widget' => '</div><!-- .widget -->',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'footer-2' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-2',
			'name' => __( 'Footer 2' ),
			'description' => __( 'The second of three widget areas that appear at the bottom of all pages, posts and archives. Three columns wide.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s col">',
			'after_widget' => '</div><!-- .widget -->',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'footer-3' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-3',
			'name' => __( 'Footer 3' ),
			'description' => __( 'The third of three widget areas that appear at the bottom of all pages, posts and archives. Three columns wide.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s col">',
			'after_widget' => '</div><!-- .widget -->',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}

/**
 * Loads extra widget files and registers the widgets.
 * 
 * @since 0.1.0
 * @access public
 * @return void
 */
function an_register_widgets() {

	/* Load and register the image stream widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-image-stream.php' );
	register_widget( 'AN_Widget_Image_Stream' );

	/* Load and register the newsletter widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-newsletter.php' );
	register_widget( 'AN_Widget_Newsletter' );

	/* Load and register the list sub-pages widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-list-sub-pages.php' );
	register_widget( 'AN_Widget_List_Sub_Pages' );

	/* Load and register the user profile widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-user-profile.php' );
	register_widget( 'AN_Widget_User_Profile' );

	/* Load and register the most-commented posts widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-most-commented.php' );
	register_widget( 'AN_Widget_Most_Commented' );

	/* Load and register the most-viewed posts widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-most-viewed.php' );
	register_widget( 'AN_Widget_Most_Viewed' );

	/* Load and register the image widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-image.php' );
	register_widget( 'AN_Widget_Image' );

	/* Load and register the gallery posts widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-gallery-posts.php' );
	register_widget( 'AN_Widget_Gallery_Posts' );

	/* Load and register the image posts widget. */
	require_once( trailingslashit( THEME_DIR ) . 'includes/widget-image-posts.php' );
	register_widget( 'AN_Widget_Image_Posts' );
}

?>