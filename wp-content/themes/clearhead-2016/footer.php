<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clearhead-2016
 */

?>

	</div><!-- #content -->

	<footer role="contentinfo">
		<div class="main-footer">
			<div class="container">
				<div class="contact" id="contact" >
					<?php $the_query = new WP_Query( 'page_id=22' );
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							the_content();
							endwhile;
						wp_reset_postdata();?>



					<div class="contact-info">
						<div>
							<h3>Our Location</h3>
							<p>
								3601 S. Congress Ave., C302<br>
								Austin, TX 78704
							</p>
						</div>
						<figure></figure>
					</div>
				</div>
				<div class="info cap-3c-2g">
					<h2>Clearhead</h2>
					<h5>The Digital Optimization Company</h5>
					<nav role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'small list-reset mt2 ml0 dual-m' ) ); ?>
					</nav>

					<div class="post-embed">
						<h3>Recently Published</h3>

						<?php $recently = new WP_Query(array('showposts'=> 1,'post__not_in' => array($post->ID))); ?>
						<?php while ($recently->have_posts()) : $recently->the_post(); ?>

						<p>“<?php echo clearhead_twitter_excerpt( ); ?>”</p>
						<a href="<?php the_permalink();?>">Read Post</a>

						<?php endwhile; wp_reset_query(); ?>

					</div>
					<div class="info-action">
						<h3>Follow Us</h3>
						<a href="https://twitter.com/clearheadme" class="button button-reduced button-twitter">
							<div class="">
								<figure></figure>
								<span>@clearheadme</span>
							</div>
						</a>
					</div>
					<div class="info-action">
						<h3>Think you’d fit in?</h3>
						<a href="." class="button button-reduced">Apply Here</a>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="closing-text">
					Simple, sustainable optimization solutions. Designed by Humans in Austin, TX.
				</div>
				<div class="site-info">
					&copy; <?php echo date("Y") ?> Clearhead
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
