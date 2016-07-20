<?php
/**
 * siteredesign functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clearhead-2016
 */


if ( ! function_exists( 'siteredesign_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function siteredesign_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on clearhead-2016, use a find and replace
	 * to change 'clearhead-2016' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'siteredesign', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'siteredesign_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'siteredesign_setup' );


// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );


/**
 * Enqueue scripts and styles.
 */
function siteredesign_scripts_and_styles() {

	wp_enqueue_style( 'siteredesign-style', get_stylesheet_uri(), false, filemtime(get_stylesheet_uri() );

	wp_deregister_style( 'grunion.css' ); // Grunion contact form

}
add_action( 'wp_enqueue_scripts', 'siteredesign_scripts_and_styles' );
