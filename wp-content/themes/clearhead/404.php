<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package clearhead
 */

get_header(); ?>

  <style>
    /* custom jp - a collab by hm & tf <3 */
    .jellassic-park {
      background-image: url(/wp-content/themes/clearhead/images/4jello4.gif);
      background-size: 100%;
      background-repeat: no-repeat;
      height: 550px;
      background-position: center center;
    }
    .jellassic-park .page-title {
      margin-top: 200px;
      color: #fff;
    }
    @media (max-width: 1024px) {
      .jellassic-park { height: 310px;}
      .jellassic-park .page-title {
        margin-top: 5rem;
      }
    }
    @media (max-width: 600px) {
      .jellassic-park { background-size: 200%;}
      .jellassic-park .page-title {
        margin-top: 1rem;
      }
    }
  </style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header jellassic-park">
          <div class="container">
            <h1 class="page-title"><?php esc_html_e( '4-jello-4 page not found - don&rsquo;t be scared', 'clearhead' ); ?></h1>
          </div>
				</header><!-- .page-header -->

				<div class="page-content container clearfix mt3">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'clearhead' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( clearhead_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'clearhead' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'clearhead' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
