<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package clearhead-2016
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<section class="legacy-styles blog-content">
			<div class="container container-index">
				<div class="main-content">

					<div class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'clearhead-2016' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</div><!-- .page-header -->

					<?php
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );


					endif;

					?>
				</div>
				<?php get_sidebar(); ?>
			</div><!-- /.container -->
		</section>
	</main>

<?php
get_footer();
