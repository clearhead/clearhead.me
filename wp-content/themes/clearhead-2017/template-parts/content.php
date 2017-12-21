<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clearhead-2016
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<?php endif; ?>
	<?php
		// get subtitle field, if post doesn't have it then make variable empty (avoid)
		$subtitle = get_field('subtitle');
		if ($subtitle == NULL) {
			$subtitle = '';
		}

		$header_title = get_the_title() . ' ' . $subtitle;
	?>
		
	<div class="archive-entry-header">
		<h1 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php echo $header_title ?></a></h1>
	</div><!-- .archive-entry-header -->

	<div class="entry-content entry-content-archive">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<div class="author-meta clearfix">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 44 ); ?>
		<div class="author-information">
			<h3 class="m0"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h3>
			<?php clearhead_2016_posted_on(); ?>
		</div>
	</div>

</article>
