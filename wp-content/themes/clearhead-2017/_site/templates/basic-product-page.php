<?php
/*
Template Name: Basic Product Page
*/

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<section class="legacy-styles blog-content blog-content-page">
			<div class="main-content">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</div><!-- /.main-content -->
		</section>
		<section style="padding-top: 0;">
			<div class="container entry-content-size">
				<div class="contact-cta contact-cta-product">
					<hr>
					<h5>Ready to get started?</h5>
					<a href="#contact" class="button contact-focus">Let’s Talk</a>
				</div>
			</div>
		</section>
	</main><!-- /#main -->

<?php
get_footer();
