<?php
/*
Template Name: Case Study
Template Post Type: post
*/

get_header(); ?>
<?php 
while ( have_posts() ) : the_post();// while 1 ?>
	<article class="case-study">
		<section class="article-intro">
			<div class="container">
				<h1>
					<?php the_title() ?>
				</h1>
				<?php
				$subtitle = get_field('subtitle');
				if($subtitle):?>
				<h2>
					<?php echo $subtitle; ?>
				</h2>
				<?php endif;
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				if ($feat_image ):// if 1 ?>
					<figure>
						<img src="<?php echo $feat_image; ?>">
					</figure>
				<?php endif; // end if 1 ?>
			</div>
		</section>
		<?php
			if( have_rows('intro_section') ): // if 2
		?>
		<!-- INTRO -->
		<?php
			while( have_rows('intro_section') ) : the_row(); // while 2
				if( get_row_layout() == 'testimonial_block'): // if 3 ?>
					<section class="article-testimony">
						<div class="container">
							<?php
							$avatar = get_sub_field('source_avatar');
							if(!empty($avatar)): // if 4?>
								<figure class="source-photo">
									<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>">
								</figure>
							<?php
							endif; // end if 4?>
							<blockquote><?php the_sub_field('testimony') ?></blockquote>
							<cite><?php the_sub_field('source_name_and_description') ?></cite>
						</div>
					</section>
				<?php
				elseif( get_row_layout() == 'content_block'): // if 3 - elseif?>
					<section>
						<div class="container">
							<div class="cap-7c-6g cap-7c-6g-centered">
								<?php echo the_sub_field('content'); ?>
							</div>
						</div>
					</section> <?php
				endif; // en if 3
			endwhile;// end while 2
			?>
			<!-- END INTRO -->
		<?php
		endif; // end if 2
		$experiments = get_field_object('experiments_section');
		$experimentCount = count($experiments['value']);
			//Check to seee if we have greater than one experiment, then show the section
			if( $experimentCount > 1 ): // if 5 ?>
			
			<section class="section-jump">
				<div class="container">
					<p>Ready to learn more about how <?php the_field('client_name'); ?> uses data and testing to drive business results?</p>
					<ul>
						<?php
							$count = 1;
							while ( have_rows('experiments_section')): the_row();// while 3 ?>
							<li>
								<a class="smooth-scroll" href="#experiment-<?php echo $count; ?>">
									<span>Experiment <?php echo $count ?></span>
									<strong><?php the_sub_field('subtitle'); ?></strong>
									<?php get_template_part( 'img/icons/down-arrow.svg' ); ?>
								</a>
							</li>
						<?php
							$count++;
							endwhile;// end while 3 ?>
					</ul>
				</div>
			</section>
			
			<?php
			endif; // end if 5
			while ( have_rows('experiments_section')): the_row(); // while 4
				$overview_content = get_sub_field('overview_content');
				$experiment_details = get_sub_field('experiment_details');?>
				<!-- experiment -->
				<section class="section-intro" id="experiment-<?php echo $count ?>">
					<?php $count++; ?>
					<div class="container">
						<figure class="browser-preview">
							<div class="browser-chrome">
								<ul>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<img src="<?php echo get_sub_field('overview_screenshot')['url']?>" alt="<?php echo get_sub_field('overview_screenshot')['alt']?>">
						</figure>
					</div>
				</section>
				<section>
					<div class="container">
						<div class="cap-7c-6g cap-7c-6g-centered">
							<?php 
								$subtitle = get_sub_field('subtitle');
								$subtitle = ( strlen($subtitle) == 0 ) ? false : true;
							 
							 if ($subtitle) : //if 5.1
							 	// if there is a subtitle show the both title and subtitle with a colon in the middle
							?>
								<h2><?php the_sub_field('title')?>: <?php the_sub_field('subtitle')?></h2>
							<?php else: ?>
								<h2><?php the_sub_field('title')?></h2>	
							<?php 
							endif; // end if 5.1
							echo $overview_content['content'] 
							?>
						</div>
						<div class="experiment-split">
							<div class="problem">
								<h3>Problem</h3>
								<p><?php echo $overview_content['problem'] ?></p>
							</div>
							<div class="hypothesis">
								<h3>Hypothesis</h3>
								<p><?php echo $overview_content['hypothesis'] ?></p>
							</div>
						</div>
					</div>
				</section>
				<section class="experiment-gallery">
					<div class="container">
						<h2>Experiment Details</h2>
						<div class="flex-row">
							<div class="details">
								<ul>
									<li>
										<strong>Test Type:</strong>
										<span><?php echo $experiment_details['test_type']; ?></span>
									</li>
									<li>
										<strong>Primary KPI:</strong>
										<span><?php echo $experiment_details['primary_kpi']; ?></span>
									</li>
									<li>
										<strong>Tools:</strong>
										<span><?php echo $experiment_details['tools']; ?></span>
									</li>
								</ul>
							</div>
							<?php
							$variation_screenshots = get_sub_field('variation_screenshots'); ?>
							<ul class="thumbnails"> <?php
							for($i = 0; $i < count($variation_screenshots); $i++): ?>
								<?php
								if($i == 0): // if 6?>
									<li class="selected">
										<a href=".">
											<img src="<?php echo $variation_screenshots[$i]['sizes']['variation-thumbnail'] ?>" alt="control">
											<span>Control</span>
										</a>
									</li>
								<?php
								else: // if 6 - else
								?>
									<li>
										<a href=".">
											<img src="<?php echo $variation_screenshots[$i]['sizes']['variation-thumbnail'] ?>" alt="variation-<?php echo $i?>">
											<span>Variation <?php echo $i ?></span>
										</a>
									</li>
								<?php
								endif; // end if 6
								?>
							<?php
							endfor; ?>
							</ul>
						</div>
						<figure class="browser-preview">
							<div class="browser-chrome browser-chrome--dark">
								<ul>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<ul class="browser-content">
								<?php
								for($i = 0; $i < count($variation_screenshots); $i++): ?>
									<?php
									if($i == 0): // if 7 ?>
										<li class="is-showing">
											<img src="<?php echo $variation_screenshots[$i]['url'] ?>" alt="Zoom control">
										</li>
									<?php
									else: // if 7 - else ?>
										<li>
											<img src="<?php echo $variation_screenshots[$i]['url'] ?>" alt="Zoom variant <?php echo $i ?>">
										</li>
									<?php
									endif; // end if 7?>
								<?php
								endfor; ?>
							</ul>
						</figure>
					</div>
				</section>
				<section>
					<div class="container">
						<div class="cap-7c-6g cap-7c-6g-centered">
							<h2>Results</h2>
							<?php 
								the_sub_field('results_content');
								if(get_sub_field('results_link')): // if 8
							?>
								<strong><a href="<?php the_sub_field('results_link') ?>">Read the full data story</a></strong>
							<?php 
								endif // end if 8
							?>
						</div>
					</div>
				</section>
				<!-- end experiment -->
			<?php
			endwhile;// end while 4
			
			// outro section
			if( have_rows('outro_section') ): // if 9
			?>
			<!-- OUTRO SECTION -->
			<?php
				while( have_rows('outro_section') ) : the_row();// while 5
					if( get_row_layout() == 'testimonial_block'): // if 10
			?>
						<section class="article-testimony">
							<div class="container">
							<?php
								$avatar = get_sub_field('source_avatar');
								if(!empty($avatar)): // if 11 
							?>
								<figure class="source-photo">
									<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>">
								</figure>
							<?php
								endif; // end if 11
							?>
								<blockquote><?php the_sub_field('testimony') ?></blockquote>
								<cite><?php the_sub_field('source_name_and_description') ?></cite>
							</div>
						</section>
					<?php
					elseif( get_row_layout() == 'content_block'):// if 10 - else 
					?>

						<section>
							<div class="container">
								<div class="cap-7c-6g cap-7c-6g-centered">
									<?php 
										echo the_sub_field('content'); 
									?>
								</div>
							</div>
						</section> 
					<?php 
					endif; // end if 10
				endwhile; // end while 5
				?>
				<!-- END OUTRO SECTION -->
				<?php
			endif; // end if 9
			?>
	</article>

	<?php
	//Get the category id
	$current_post_id = get_the_ID();
	$catId = get_cat_ID('Case Studies');
	$not_in_array = array($current_post_id);
	$category_query_args = array(
		'post__not_in' => $not_in_array,
		'cat' => $catId,
		'posts_per_page' => 3
	);
	$category_query = new WP_Query( $category_query_args );

	if ( $category_query->have_posts() ) : // if 12
	?>
	<section class="article-ps">
		<div class="container">
			<div class="article-list">
				<h5>Read more case studies</h5>
				<ul> <?php
					while ($category_query->have_posts()) : $category_query->the_post(); // while 6
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php echo $url ?>" alt="<?php the_title_attribute(); ?>">
							<span>
								<?php the_title(); ?>
							</span>
						</a>
					</li>
					<?php
					endwhile;// end while 6 ?>
				</ul>
			</div>
			<div class="cta-callout">
				<em>Ready to learn more?</em>
				<a href="#contact" class="button smooth-scroll">Let’s Talk</a>
			</div>
		</div>
	</section>
	<?php
	endif; // end if 12
endwhile; // end while 1
get_footer();
