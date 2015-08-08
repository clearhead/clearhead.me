<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package clearhead
 */


if ( ! is_active_sidebar( 'sidebar-post' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-post' ); ?>
</div><!-- #secondary -->
