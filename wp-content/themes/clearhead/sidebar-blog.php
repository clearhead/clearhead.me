<?php
/**
 * The sidebar containing the blog widget area.
 *
 * @package clearhead
 */


if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div><!-- #secondary -->
