<?php
/**
 * @package clearhead
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-header">
		<div class="container clearfix">

			<div class="cols clearfix">
				<div class="cap-6c-5g">
					<p class="date m0 h2 low"><?php the_time('F j, Y'); ?></p>
					<?php the_title( '<h1 class="entry-title mt1 mb1 bold h1">', '</h1>' ); ?>
				</div>
			</div>

			<div class="foot mt3 mb3">
				<div class="tagged sm-col sm-col-8 md-col-9 low">
					<?php $tags_list = get_the_tag_list( '', __( ' ', 'clearhead' ) );
					if ( $tags_list ) {
						printf( '<span class="tags-links">' . __( '%1$s', 'clearhead' ) . '</span>', $tags_list );
					} ?>
				</div>

				<div class="social sm-show sm-col sm-col-4 md-col-3 right-align low">
					<span>share</span>
					<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode( html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8') ); ?>&via=clearheadme" target="_blank">
						<?php get_template_part( 'svg/twitter.svg' ); ?>
					</a>
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
						<?php get_template_part( 'svg/facebook.svg' ); ?>
					</a>
					<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo urlencode( html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8') ); ?>" target="_blank">
						<?php get_template_part( 'svg/linkedin.svg' ); ?>
					</a>
				</div>
			</div>

		</div><!-- .container -->
	</div><!-- .entry-header -->

	<?php
	if ( has_post_thumbnail() ) : ?>
	<div class="entry-image">
		<div class="container">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="entry-meta container author-top mt3 mb3">
		<div class="clearfix">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 72 ); ?>
			<div class="author-information">
				<h3 class="m0"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h3>
				<p class="m0 job-title"><?php echo get_user_meta( get_the_author_meta( 'ID' ), 'title', true ); ?></p>
			</div>

			<?php
			$authorInfo = get_user_meta( get_the_author_meta( 'ID' ), 'hi', true);
			$isAuthorEmpty = empty($authorInfo);
			if(!$isAuthorEmpty): ?>
				<div class="author-contact">
					<a class="button button-reduced" href="<?php echo $authorInfo ?>">
						say hi to <?php the_author_meta( 'first_name' ); ?>
					</a>
				</div>

			<?php endif; ?>

		</div>
	</div><!-- .entry-meta -->

	<div class="entry-content container">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<?php
$related_posts = array();
$query = array();
$query['showposts'] = 3;

if ( class_exists( 'Jetpack_RelatedPosts' ) && method_exists( 'Jetpack_RelatedPosts', 'init_raw' ) ) :
	$related = Jetpack_RelatedPosts::init_raw()
		->set_query_name( 'clearhead-custom' ) // Optional, name can be anything
		->get_for_post_id( get_the_ID(), array( 'size' => 3 )
	);
	if ( $related ) :
        foreach ( $related as $result ) :
        	$related_posts[] = $result[ 'id' ];
        endforeach;
    endif;
endif;

if ( $related_posts ) {
	$query['post__in'] = $related_posts;
	$query['orderby'] = 'post__in';
	$title = __( 'related posts', 'clearhead' );
} else {
	$query['post__not_in'] = array( $post->ID );
	$title = __( 'recent posts', 'clearhead' );
}
?>
<div class="related-posts">
	<div class="container clearfix">
	<h3><?php esc_attr_e( $title ); ?></h3>
	<?php $related = new WP_Query( $query ); ?>
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
		<div class="related-post clearfix">
			<div class="related-image">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'clearhead-archive' ); ?></a>
			</div>
			<div class="related-content">
				<h3><a href="<?php the_permalink();?>"><?php the_title( ); ?></a></h3>
				<p>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
			</div>
		</div>
	<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<div class="share">
	<div class="container">

		<div class="activity py3">

			<div class="social sm-col sm-col-5 sm-center">
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

			<div class="sm-col sm-col-7 right-align sm-show">
				<span class="count"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></span>
				<a href="#comments" class="button button-blue inline-block">join the conversation</a>
			</div>

		</div>
	</div>
</div>

<div id="comments" class="container narrow clearfix">
	<div class="py4">
	<?php
	// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>
	</div>
</div>
