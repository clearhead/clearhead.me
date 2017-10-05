<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package clearhead-2016
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<section class="legacy-styles blog-content">
			<div class="main-content">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-single', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</div><!-- /.main-content -->
		</section>
	</main><!-- /#main -->

<?php
get_footer();
