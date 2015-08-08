<?php
/**
 * The template for displaying all single posts.
 *
 * @package clearhead
 */

get_header(); ?>

	<?php get_template_part( 'partials/header', 'post' ); ?>

	<div class="col-width">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar( 'post' ); ?>

	</div>

<?php get_footer(); ?>