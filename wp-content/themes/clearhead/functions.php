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

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'clearhead_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // clearhead_setup
add_action( 'after_setup_theme', 'clearhead_setup' );

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
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'clearhead_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clearhead_scripts() {

	wp_enqueue_style( 'basscss', get_template_directory_uri() . '/css/basscss.min.css' array(), '20150629' );

	wp_enqueue_style( 'clearhead-style', get_stylesheet_uri() );

	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20120206', true);

	wp_enqueue_script( 'waypoints-inview', get_template_directory_uri() . '/js/inview.min.js', array(), '20120206', true);

	wp_enqueue_script( 'clearhead-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	if (is_front_page()){ wp_enqueue_script( 'clearhead-navigation-home', get_template_directory_uri() . '/js/home.nav.js', array(), '20120206', true ); }

	wp_enqueue_script( 'clearhead-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  if (!is_front_page()){
    wp_enqueue_style( 'prism-css', get_template_directory_uri() . '/bower_components/prism/themes/prism-okaidia.css', array(), '20150629');
    wp_enqueue_script( 'prism-js', get_template_directory_uri() . '/bower_components/prism/prism.js', array(), '20150629', true );
  }


}
add_action( 'wp_enqueue_scripts', 'clearhead_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

add_action( 'show_user_profile', 'ch_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'ch_show_extra_profile_fields' );

function ch_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="title">Title</label></th>

			<td>
				<input type="text" name="title" id="title" value="<?php echo esc_attr( get_the_author_meta( 'title', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your title.</span>
			</td>
		</tr>

		<tr>
			<th><label for="title">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter handle.</span>
			</td>
		</tr>

		<tr>
			<th><label for="title">LinkedIn</label></th>

			<td>
				<input type="text" name="linked" id="linked" value="<?php echo esc_attr( get_the_author_meta( 'linked', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your LinkedIn URL.</span>
			</td>
		</tr>

		<tr>
			<th><label for="hi">Hi Link</label></th>

			<td>
				<input type="text" name="hi" id="hi" value="<?php echo esc_attr( get_the_author_meta( 'hi', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your "Say Hi" URL.</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'ch_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'ch_save_extra_profile_fields' );

function ch_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	update_usermeta( $user_id, 'title', $_POST['title'] );
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
	update_usermeta( $user_id, 'linked', $_POST['linked'] );
	update_usermeta( $user_id, 'hi', $_POST['hi'] );
}


function remove_curly_quotes($text) {
    // First, replace UTF-8 characters.
    $text = str_replace(array("\xe2\x80\x98", "\xe2\x80\x99", "\xe2\x80\x9c", "\xe2\x80\x9d", "\xe2\x80\x93", "\xe2\x80\x94", "\xe2\x80\xa6"), array("'", "'", '"', '"', '-', '--',
        '...'), $text);
    // Next, replace their Windows-1252 equivalents.
    $text = str_replace(array(chr(145), chr(146), chr(147), chr(148), chr(150), chr(151), chr(133)), array("'", "'", '"', '"', '-', '--', '...'), $text);

    return $text;
}

function get_the_twitter_excerpt(){
$excerpt = get_the_excerpt();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = remove_curly_quotes($excerpt);
$the_str = substr($excerpt, 0, 118);
return $the_str.'...';
}

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});
