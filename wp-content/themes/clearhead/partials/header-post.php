<?php
/**
 * Displays the header for blog posts
 *
 * @package Clearhead
 */
?>

<?php if ( has_post_thumbnail() ) {
	$hero = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
}
?>

<div class="entry-header py3"<?php if ($hero) { echo "style='background-image:url(" . esc_url( $hero ) . ")'";} ?>>
	<div class="container">

		<div class="cols clearfix">
			<div class="sm-col sm-col-8 mt4 m-mt1">
				<p class="date m0 h2 low"><?php the_time('F j, Y'); ?></p>
				<?php the_title( '<h1 class="entry-title mt1 mb1 bold h1">', '</h1>' ); ?>
			</div>

			<div class="sm-col sm-col-4 entry-meta m-mt1">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 46 ); ?>
				<p class="m0"><?php the_author(); ?></p>
				<p class="m0 italic low"><?php echo get_user_meta( get_the_author_meta( 'ID' ), 'title', true ); ?></p>
			</div><!-- .entry-meta -->
		</div>

		<div class="clearfix foot mt4 mb2">
			<div class="tagged sm-col sm-col-8 md-col-9 low">
				<?php $tags_list = get_the_tag_list( '', __( ' ', 'clearhead' ) );
				if ( $tags_list ) {
					printf( '<span class="tags-links">' . __( '%1$s', 'clearhead' ) . '</span>', $tags_list );
				} ?>
			</div>

			<div class="social sm-show sm-col sm-col-4 md-col-3 right-align low">
				<span>share</span>
				<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=clearheadme" target="_blank">
					<?php get_template_part( 'svg/twitter.svg' ); ?>
				</a>
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
					<?php get_template_part( 'svg/facebook.svg' ); ?>
				</a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
					<?php get_template_part( 'svg/linkedin.svg' ); ?>
				</a>
			</div>
		</div>

	</div><!-- .container -->
</div><!-- .entry-header -->