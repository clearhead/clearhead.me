<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package clearhead
 */

get_header(); ?>


	<?php if ( is_home() ) : ?>
		<?php get_template_part( 'partials/header', 'blog' ); ?>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<div class="more container clearfix mt3">

			<h3 class="center h2 mt3 mb0">latest posts</h3>
			<h4 class="center mt1 mb2 sm-show">from the clearhead team</h4>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

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

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>