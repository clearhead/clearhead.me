<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package clearhead
 */
?>

	</div><!-- #content -->

	<div id="contact" class="footer clearfix py3">
		<div class="container">
		  <div class="form sm-col sm-col-right sm-col-8">
		  	<?php
				$include = get_pages('include=22');
				$content = apply_filters('the_content',$include[0]->post_content);
				echo $content;
			?>
		  </div>
		  <div class="sm-col sm-col-4">
		  	<img width="170" src="<?php bloginfo('template_directory') ?>/images/ch-type-white.svg" />
		  	<h2 class="h6 small mt0">the digital optimization<span class="sm-show sm-show-inline"> & validation</span> agency</h2>

		  	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'small list-reset mt2 ml0 dual-m' ) ); ?>

		  	<h2 class="h6 mt3">recently published</h2>
		  	<?php $recently = new WP_Query(array('showposts'=> 1,'post__not_in' => array($post->ID))); ?>
				<?php while ($recently->have_posts()) : $recently->the_post(); ?>
					<span class="small title mb1">
						<?php echo clearhead_twitter_excerpt( ); ?>
						</span>
						<a class="small m-button-trans" href="<?php the_permalink();?>">read post</a>
				<?php endwhile; wp_reset_query(); ?>

			<h2 class="h6 mt3">follow us</h2>
			<a class="small button button-trans m-button-trans button-icon" href="http://twitter.com/clearheadme"><svg width="20" class="js-geomicon geomicon" data-icon="twitter" viewBox="0 0 32 32" style="fill:currentcolor"><title>twitter icon</title><path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"></path></svg>@clearheadme</a>

			<h2 class="h6 mt3">think you'd fit in?</h2>
			<a class="button button-trans m-button-trans" href="http://clearhead.theresumator.com/apply">apply here</a>

		  </div>
		</div>
	</div>

	<div class="bottom clearfix">
		<div class="container">
			<div class="py2 clearfix">
			<div class="sm-col sm-col-8 white small sm-show">simple, sustainable optimization solutions. designed by humans in austin, tx</div>
			<div class="copy sm-col sm-col-4 white small sm-show">&copy; <?php the_date(Y); ?> clearhead</div>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
