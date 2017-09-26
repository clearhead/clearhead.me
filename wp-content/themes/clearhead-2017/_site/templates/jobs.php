<?php
/*
Template Name: Jobs Page
*/

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<section class="legacy-styles blog-content blog-content-page">
			<div class="main-content">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-header">
						<div class="container">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</div>
					</div><!-- .entry-header -->

					<div class="entry-content container">
						<div id="grnhse_app"></div>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			</div><!-- /.main-content -->
		</section>
	</main><!-- /#main -->

	<script src="https://boards.greenhouse.io/embed/job_board/js?for=clearhead"></script>

<?php
get_footer();
