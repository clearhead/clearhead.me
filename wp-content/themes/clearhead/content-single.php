<?php
/**
 * @package clearhead
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php

if ( has_post_thumbnail() ) {
	$hero = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
}

?>

	<header class="entry-header py3"<?php if ($hero) { echo "style='background-image:url(".$hero.")'";} ?>>
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
			<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=clearheadme"><svg width="20" height="20" class="geomicon" data-icon="twitter" viewBox="0 0 32 32" style="fill:currentcolor"><path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4 "></path></svg></a>
			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><svg width="20" height="20" class="geomicon" data-icon="facebook" viewBox="0 0 32 32" style="fill:currentcolor"><path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z "></path></svg></a>
			<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><svg width="20px" height="20px" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"><path d="M17.5,1 C8.36376953,1 1,8.36376953 1,17.5 C1,26.6362305 8.36376953,34 17.5,34 C26.6362305,34 34,26.6362305 34,17.5 C34,8.36376953 26.6362305,1 17.5,1 L17.5,1 Z M12.6821289,25.75 L8.55712891,25.75 L8.55712891,14.0678711 L12.6821289,14.0678711 L12.6821289,25.75 Z M10.6196289,12.0053711 L10.5874023,12.0053711 C8.94384766,12.0053711 7.88037109,10.9257812 7.88037109,9.58837891 C7.88037109,8.21875 8.97607422,7.1875 10.6196289,7.1875 C12.3115234,7.1875 13.3427734,8.21875 13.375,9.58837891 C13.375,10.9257812 12.3115234,12.0053711 10.6196289,12.0053711 L10.6196289,12.0053711 Z M27.8125,25.75 L23.6875,25.75 L23.6875,19.5625 C23.6875,17.4677734 22.8496094,16.8071289 21.5927734,16.8071289 C20.3198242,16.8071289 19.5625,17.8867188 19.5625,19.5625 L19.5625,25.75 L15.4375,25.75 L15.4375,16.8071289 C15.4375,16.8071289 15.3569336,14.519043 15.324707,14.0678711 L19.4174805,14.0678711 L19.5625,15.8564453 C20.0942383,14.3740234 21.3188477,13.375 22.9946289,13.375 C25.9433594,13.375 27.8125,15.7758789 27.8125,19.5625 L27.8125,25.75 Z" style="fill:currentcolor"></path></svg></a>
		</div>
</div>

		</div>
	</header><!-- .entry-header -->

	<div class="entry-content container mt4">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="container prev-next mb4 clearfix">
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
			if (!empty( $next_post )): ?>
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
			<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=clearheadme"><svg width="20" height="20" class="geomicon" data-icon="twitter" viewBox="0 0 32 32" style="fill:#ffffff"><path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4 "></path></svg></a>
			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><svg width="20" height="20" class="geomicon" data-icon="facebook" viewBox="0 0 32 32" style="fill:#ffffff"><path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z "></path></svg></a>
			<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><svg width="20px" height="20px" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg"><path d="M17.5,1 C8.36376953,1 1,8.36376953 1,17.5 C1,26.6362305 8.36376953,34 17.5,34 C26.6362305,34 34,26.6362305 34,17.5 C34,8.36376953 26.6362305,1 17.5,1 L17.5,1 Z M12.6821289,25.75 L8.55712891,25.75 L8.55712891,14.0678711 L12.6821289,14.0678711 L12.6821289,25.75 Z M10.6196289,12.0053711 L10.5874023,12.0053711 C8.94384766,12.0053711 7.88037109,10.9257812 7.88037109,9.58837891 C7.88037109,8.21875 8.97607422,7.1875 10.6196289,7.1875 C12.3115234,7.1875 13.3427734,8.21875 13.375,9.58837891 C13.375,10.9257812 12.3115234,12.0053711 10.6196289,12.0053711 L10.6196289,12.0053711 Z M27.8125,25.75 L23.6875,25.75 L23.6875,19.5625 C23.6875,17.4677734 22.8496094,16.8071289 21.5927734,16.8071289 C20.3198242,16.8071289 19.5625,17.8867188 19.5625,19.5625 L19.5625,25.75 L15.4375,25.75 L15.4375,16.8071289 C15.4375,16.8071289 15.3569336,14.519043 15.324707,14.0678711 L19.4174805,14.0678711 L19.5625,15.8564453 C20.0942383,14.3740234 21.3188477,13.375 22.9946289,13.375 C25.9433594,13.375 27.8125,15.7758789 27.8125,19.5625 L27.8125,25.75 Z" style="fill:#ffffff"></path></svg></a>
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
