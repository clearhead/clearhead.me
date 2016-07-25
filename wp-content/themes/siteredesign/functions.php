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

function send_mail_via_wordpress() {
	if ( isset($_POST['action']) && $_POST['action'] == "send_mail_via_wordpress" ){
			//Loop through each field add to string to send to user
			$bodyString = "";
			foreach ($_POST as $field => $value) {
					if($field != "action" && $value )
					{
						$bodyString .= $field . ": " . sanitize_text_field($value) . "\n";
					}
			}
			//Set the reply to header
			$headers = array( 'Reply-To: '.sanitize_text_field($_POST['email']));
			$user_email = get_option('admin_email');
			//send off the message
	    wp_mail($user_email,'Survey Redesign Report', $bodyString, $headers);
	    echo 'success';
	    die();
    }
	echo 'fail';
	die();
}

// if you want only logged in users to access this function use this hook
add_action('wp_ajax_send_mail_via_wordpress', 'send_mail_via_wordpress');

// if you want none logged in users to access this function use this hook
add_action('wp_ajax_nopriv_send_mail_via_wordpress', 'send_mail_via_wordpress');


add_action( 'after_setup_theme', 'siteredesign_setup' );


// First, make sure Jetpack doesn't concatenate all its CSS
add_filter( 'jetpack_implode_frontend_css', '__return_false' );


/**
 * Enqueue scripts and styles.
 */
function siteredesign_scripts_and_styles() {

	wp_enqueue_style( 'siteredesign-style', get_stylesheet_uri(), false, '201607221310');

	wp_deregister_style( 'grunion.css' ); // Grunion contact form

	wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), '20160716', true);

	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/js/site.js', array('jquery'), '20160725', true);

	wp_enqueue_script( 'email-ajax', get_template_directory_uri() . '/js/emailSubmit.js', array('jquery', 'jquery-validate'), '20160725', true );
	wp_localize_script( 'email-ajax', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );


}
add_action( 'wp_enqueue_scripts', 'siteredesign_scripts_and_styles' );
