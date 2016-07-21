<?php
/**
 * clearhead-2016 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clearhead-2016
 */


if ( ! function_exists( 'clearhead_2016_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clearhead_2016_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on clearhead-2016, use a find and replace
	 * to change 'clearhead-2016' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'clearhead-2016', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enables support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	function clearhead_register_image_sizes() {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 800, 350, true );
		add_image_size( 'clearhead-archive', 400, 175, true );
	}
	add_action( 'after_setup_theme', 'clearhead_register_image_sizes' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'clearhead-2016' ),
		'footer' => esc_html__( 'Footer Menu', 'clearhead-2016' ),
		'featured-posts' => esc_html__( 'Featured Posts', 'clearhead-2016' ),
		'featured-categories' => esc_html__( 'Featured Categories', 'clearhead-2016' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'clearhead_2016_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'clearhead_2016_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clearhead_2016_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clearhead_2016_content_width', 800 );
}
add_action( 'after_setup_theme', 'clearhead_2016_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clearhead_2016_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clearhead-2016' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'clearhead-2016' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'clearhead_2016_widgets_init' );

// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );


/**
 * Enqueue scripts and styles.
 */
function clearhead_2016_scripts_and_styles() {

	wp_enqueue_style( 'clearhead-2016-style', get_stylesheet_uri() );

	wp_deregister_style( 'grunion.css' ); // Grunion contact form

	wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), '20160716', true);


	wp_enqueue_script( 'clearhead-2016-navigation', get_template_directory_uri() . '/js/site.js', array(), '20151215', true );


	// scripts from previous clearhead theme
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20120206', true);
	wp_enqueue_script( 'waypoints-inview', get_template_directory_uri() . '/js/inview.min.js', array(), '20120206', true);


	wp_enqueue_script( 'clearhead-2016-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// script from previous clearhead theme
	if ( is_front_page() ) :
		wp_enqueue_script( 'parallax-background', get_template_directory_uri() . '/js/parallax-background.js', array('jquery'), '20160716', true);
		wp_enqueue_script( 'clearhead-navigation-home', get_template_directory_uri() . '/js/home.nav.js', array('jquery', 'parallax-background'), '20120206', true );
	endif;


	wp_enqueue_script( 'clearhead-2016-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// script from previous clearhead theme
	if ( ! is_front_page() ) :
		wp_enqueue_style( 'prism-css', get_template_directory_uri() . '/js/themes/prism-okaidia.css', array(), '20150629');
		wp_enqueue_script( 'prism-js', get_template_directory_uri() . '/js/prism.js', array(), '20150629', true );
	endif;


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clearhead_2016_scripts_and_styles' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Adds a body class to indicate sidebar position
 */
function clearhead_body_class_options( $classes ) {

	// Layout options
	if ( is_home() || is_archive() || is_search() ) {
		$classes[] = 'sidebar-right';
		$classes[] = 'archive-view';
	}
	return $classes;

}
add_filter( 'body_class', 'clearhead_body_class_options' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
