<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package clearhead
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function clearhead_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'clearhead_body_classes' );

/**
 * Returns excerpt with tags and curly quotes stripped.
 * Used in archive.php and footer.php.
 */
function clearhead_twitter_excerpt() {
	$excerpt = get_the_excerpt();
	$excerpt = strip_shortcodes( $excerpt );
	$excerpt = strip_tags( $excerpt );
	$excerpt = remove_curly_quotes( $excerpt );
	$the_str = substr( $excerpt, 0, 118 );
	return $the_str.'...';
}

/**
 * Filters the archive title.
 */
function clearhead_archive_title() {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	}
    return $title;
}
add_filter( 'get_the_archive_title', 'clearhead_archive_title' );

/**
 * Removes curly quotes.
 *
 * @TODO Where is this function called from?
 */
function remove_curly_quotes( $text ) {
    // First, replace UTF-8 characters.
    $text = str_replace(array("\xe2\x80\x98", "\xe2\x80\x99", "\xe2\x80\x9c", "\xe2\x80\x9d", "\xe2\x80\x93", "\xe2\x80\x94", "\xe2\x80\xa6"), array("'", "'", '"', '"', '-', '--',
        '...'), $text);
    // Next, replace their Windows-1252 equivalents.
    $text = str_replace(array(chr(145), chr(146), chr(147), chr(148), chr(150), chr(151), chr(133)), array("'", "'", '"', '"', '-', '--', '...'), $text);
    return $text;
}

function clearhead_excerpt_more( $more ) {
	return'&hellip; <a class="read-more" href="'. get_permalink() . '"> Read More &raquo;</a>';
}
add_filter( 'excerpt_more', 'clearhead_excerpt_more' );

function clearhead_remove_rp() {
    if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
        $jprp = Jetpack_RelatedPosts::init();
        $callback = array( $jprp, 'filter_add_target_to_dom' );
        remove_filter( 'the_content', $callback, 40 );
    }
}
add_filter( 'wp', 'clearhead_remove_rp', 20 );