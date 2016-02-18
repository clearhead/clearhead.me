<?php
/**
 * @package clearhead
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<?php endif; ?>

	<header class="archive-entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<div class="author-meta clearfix">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 72 ); ?>
		<div class="author-information">
			<h3 class="m0"><a href="<?php echo get_user_meta( get_the_author_meta( 'ID' ), 'hi', true); ?>"><?php the_author(); ?></a></h3>
			<?php clearhead_posted_on(); ?>
		</div>
	</div>
</article><!-- #post-## -->