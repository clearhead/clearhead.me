<?php
/**
 * @package clearhead
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( has_post_thumbnail() ) {
		$hero = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	}
	?>

	<div class="entry-header py3"<?php if ( $hero ) { echo "style='background-image:url(" . esc_url( $hero ) . ")'";} ?>>
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

	<div class="layout-sidebar">
		<div class="layout-main">
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			<?php get_sidebar( 'post' ); ?>
		</div>
	</div>

	<div class="container prev-next mb4 clear">
		<div class="prev">
			<?php
			$prev_post = get_previous_post();
			if (!empty( $prev_post )): ?>
		  	<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
		  		<p class="label m0 mb1">previous</p>
		  		<p class="m0 mb1 date sm-show"><?php echo get_post_time('F j', true, $prev_post->ID); ?></p>
		  		<h2 class="h6 mt0 sm-show"><?php echo $prev_post->post_title; ?></h2>
		  	</a>
			<?php endif; ?>
		</div>
		<div class="next">
			<?php
			$next_post = get_next_post();
			if ( !empty( $next_post ) ): ?>
		  	<a href="<?php echo get_permalink( $next_post->ID ); ?>">
		  		<p class="label m0 mb1">next</p>
		  		<p class="m0 mb1 date sm-show"><?php echo get_post_time('F j', true, $next_post->ID); ?></p>
		  		<h2 class="h6 mt0 sm-show"><?php echo $next_post->post_title; ?></h2>
		  	</a>
			<?php endif; ?>
		</div>
	</div>

</article><!-- #post-## -->

<div class="author">
<div class="container narrow">

	<div class="activity py3 clearfix">

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

	<div class="info py3 clearfix mxn2 sm-center">
		<div class="sm-col sm-col-8 with-av px2">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 72 ); ?>
			<p class="label m0 mb1">posted by</p>
			<p class="m0 h3 name bold"><?php the_author(); ?></p>
			<p class="m0 h6"><?php echo get_user_meta( get_the_author_meta( 'ID' ), 'title', true ); ?></p>
			<p class="bio mt1"><?php the_author_meta( 'description' ); ?></p>
		</div>
		<div class="sm-col sm-col-4 px2 center">
			<a class="button block button-dark-blue" href="<?php echo get_user_meta( get_the_author_meta( 'ID' ), hi, true); ?>">say hi to <?php the_author_meta('first_name'); ?></a>
			<?php $twitter = get_user_meta( get_the_author_meta( 'ID' ), twitter, true ); if ($twitter) { ?>
			<a class="block mt2" href="http://twitter.com/<?php echo $twitter; ?>">@<?php echo $twitter; ?></a>
			<?php } ?>
			<?php $linked = get_user_meta( get_the_author_meta( 'ID' ), linked, true ); if ($linked) { ?>
			<a class="block mb1" href="<?php echo $linked; ?>">linkedin</a>
			<?php } ?>
		</div>
	</div>

</div>
</div>


<div class="more container clearfix">
	<h3 class="center h2 mt3 mb0">want to read more?</h3>
	<a href="/blog/all-posts" class="button button-blue inline-block" style="margin: 1em auto 4em; display: block; width: 120px;">see all posts</a>
	<h4 class="center mt1 sm-show">latest posts in the head</h4>

	<?php $others = new WP_Query(array('showposts'=> 3,'post__not_in' => array($post->ID))); ?>
	<?php while ($others->have_posts()) : $others->the_post(); ?>
		<a href="<?php the_permalink();?>">
		<div class="item mt3 clearfix">
			<h2 class="sm-col sm-col-8 mt0 h3">
				<?php the_title( ); ?></h2>
			<div class="meta sm-col sm-col-4">
				<div class="left">
				<div class="sm-show">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 72 ); ?>
				</div>
				</div>
				<div class="left">
				<p class="m0">posted <?php the_time('F j'); ?> by</p>
				<p class="m0"><?php the_author(); ?> </p>
				</div>
			</div>
		</div>
		</a>
	<?php endwhile; wp_reset_query(); ?>
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
