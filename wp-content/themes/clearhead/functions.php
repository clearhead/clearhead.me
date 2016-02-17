<?php
/**
 * clearhead functions and definitions
 *
 * @package clearhead
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'clearhead_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clearhead_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on clearhead, use a find and replace
	 * to change 'clearhead' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'clearhead', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'clearhead' ),
		'footer' => __( 'Footer Menu', 'clearhead' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'clearhead_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // clearhead_setup
add_action( 'after_setup_theme', 'clearhead_setup' );

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

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function clearhead_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'clearhead' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'clearhead_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clearhead_scripts() {

	wp_enqueue_style( 'basscss', get_template_directory_uri() . '/css/basscss.min.css', array(), '20150629' );

	wp_enqueue_style( 'clearhead-style', get_stylesheet_uri() );

	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20120206', true);

	wp_enqueue_script( 'waypoints-inview', get_template_directory_uri() . '/js/inview.min.js', array(), '20120206', true);

	wp_enqueue_script( 'clearhead-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	if ( is_front_page() ) :
		wp_enqueue_script( 'clearhead-navigation-home', get_template_directory_uri() . '/js/home.nav.js', array(), '20120206', true );
	endif;

	wp_enqueue_script( 'clearhead-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( ! is_front_page() ) :
		wp_enqueue_style( 'prism-css', get_template_directory_uri() . '/bower_components/prism/themes/prism-okaidia.css', array(), '20150629');
		wp_enqueue_script( 'prism-js', get_template_directory_uri() . '/bower_components/prism/prism.js', array(), '20150629', true );
	endif;

}
add_action( 'wp_enqueue_scripts', 'clearhead_scripts' );

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
 * Adds additional fields to the user profile
 */
require get_template_directory() . '/inc/profile.php';