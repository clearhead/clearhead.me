<?php
/**
 * The template for displaying search results pages.
 *
 * @package clearhead
 */

get_header(); ?>

	<div class="light-line"></div>

	<div class="container clearfix">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'clearhead' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
