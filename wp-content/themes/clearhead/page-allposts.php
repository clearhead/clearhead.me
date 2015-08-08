<?php
/*
Template Name: All Posts
*/

/* @TODO: This template should be removed. Querying all posts is intense */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $query = new WP_Query( 'posts_per_page=-1' ); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
