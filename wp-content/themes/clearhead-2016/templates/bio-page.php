<?php
/*
Template Name: Bio Page
*/

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<section class="legacy-styles bio-page">
			<div class="main-content">

				<article id="post-<?php the_ID(); ?> bio-page" <?php post_class(); ?>>
					<!-- Entry Header -->
					<div class="entry-header">
						<div class="container">
							<div>
								<?php the_title( '<h1 class="entry-title mt1 mb1 bold h1">', '</h1>' ); ?>
							</div>
							<div class="foot">
								<div class="social sm-show sm-col sm-col-4 md-col-3 right-align low">
									<span>share</span>
									<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo urlencode( html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8') ); ?>&via=clearheadme" target="_blank">
										<?php get_template_part( 'svg/twitter.svg' ); ?>
									</a>
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
										<?php get_template_part( 'svg/facebook.svg' ); ?>
									</a>
									<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo urlencode( html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8') ); ?>" target="_blank">
										<?php get_template_part( 'svg/linkedin.svg' ); ?>
									</a>
								</div>
							</div>

						</div><!-- .container -->
					</div><!-- .entry-header -->
					<!-- Entry Image -->
					<div class="entry-image">
						<div class="container">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<!-- Entry Content -->
					<div class="entry-content container">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clearhead-2016' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<!-- Origin Stories -->
					<section class="theme-purple">
						<div class="container">
							<div class="origin-stories">
								<h3>more stories</h3>
								<ul>
									<li>
										<a href="/meet-matty/">
											<figure>
												<div class="photo" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/img/founders/matty.jpg');"></div>
												<figcaption>
													<div>Read Matty’s Story</div>
													<span>
														<?php get_template_part( 'img/icons/target.svg' ); ?>
													</span>
												</figcaption>
											</figure>
										</a>
									</li>
									<li>
										<a href="/meet-ryan/">
											<figure>
												<div class="photo" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/img/founders/ryan.jpg');"></div>
												<figcaption>
													<div>Read Ryan’s Story</div>
													<span>
														<?php get_template_part( 'img/icons/target.svg' ); ?>
													</span>
												</figcaption>
											</figure>
										</a>
									</li>
									<li>
										<a href="/meet-sam/">
											<figure>
												<div class="photo" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/img/founders/sam.jpg');"></div>
												<figcaption>
													<div>Read Sam’s Story</div>
													<span>
														<?php get_template_part( 'img/icons/target.svg' ); ?>
													</span>
												</figcaption>
											</figure>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</section>

				</article>

			</div><!-- /.main-content -->
		</section>
	</main><!-- /#main -->

	<script src="https://boards.greenhouse.io/embed/job_board/js?for=clearhead"></script>

<?php
get_footer();
