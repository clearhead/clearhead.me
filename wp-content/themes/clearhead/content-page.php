<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package clearhead
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content container mt4">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'clearhead' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
