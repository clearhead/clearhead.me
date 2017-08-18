<?php
/*
Template Name: Case Study
Template Post Type: post
*/

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
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
				if ($feat_image && have_rows('intro_section')): ?>
					<figure>
						<img src="<?php echo $feat_image; ?>">
					</figure>
				<?php endif; ?>
			</div>
		</section>
		<?php
		if( have_rows('intro_section') ):
			while( have_rows('intro_section') ) : the_row();
				if( get_row_layout() == 'testimonial_block'): ?>
					<section class="article-testimony">
						<div class="container">
							<?php
							$avatar = get_sub_field('source_avatar');
							if(!empty($avatar)): ?>
								<figure class="source-photo">
									<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>">
								</figure>
							<?php
							endif; ?>
							<blockquote><?php the_sub_field('testimony') ?></blockquote>
							<cite><?php the_sub_field('source_name_and_description') ?></cite>
						</div>
					</section>
				<?php
				elseif( get_row_layout() == 'content_block'): ?>
					<section>
						<div class="container">
							<div class="cap-7c-6g cap-7c-6g-centered">
								<?php echo the_sub_field('content'); ?>
							</div>
						</div>
					</section> <?php
				endif;
			endwhile;
		endif;
		$experiments = get_field_object('experiments_section');
		$experimentCount = count($experiments['value']); ?>
		<?php
		//Check to seee if we have greater than one experiment, then show the section
		if( $experimentCount > 1 ): ?>
			<section class="section-jump">
				<div class="container">
					<p>Ready to learn more about how <?php the_field('client_name'); ?> uses data and testing to drive business results?</p>
					<ul>
						<?php
							$count = 1;
							while ( have_rows('experiments_section')): the_row(); ?>
							<li>
								<a class="smooth-scroll" href="#experiment-<?php echo $count; ?>">
									<span>Experiment <?php echo $count ?></span>
									<?php 
										$title = get_sub_field('title');
										$subtitle = get_sub_field('subtitle');
									?>
									<?php if($subtitle): ?>
										<strong><?php echo $subtitle; ?></strong>
									<?php elseif($title): ?>
										<strong><?php echo $title; ?></strong>
									<?php endif; ?>
									<?php get_template_part( 'img/icons/down-arrow.svg' ); ?>
								</a>
							</li>
						<?php
						$count++;
						endwhile; ?>
					</ul>
				</div>
			</section> <?php
			endif;
			$count = 1;
			while ( have_rows('experiments_section')): the_row();
				$overview_content = get_sub_field('overview_content');
				$experiment_details = get_sub_field('experiment_details');?>
				<section class="section-intro" id="experiment-<?php echo $count ?>">
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
				</section> <?
				while( have_rows('experiment_testimonial_block') ) : the_row();?>
				<section class="article-testimony">
					<div class="container">
						<?php
						$avatar = get_sub_field('source_avatar');
						if(!empty($avatar)): ?>
							<figure class="source-photo">
								<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>">
							</figure>
						<?php
						endif; ?>
						<blockquote><?php the_sub_field('testimony') ?></blockquote>
						<cite><?php the_sub_field('source_name_and_description') ?></cite>
					</div>
				</section>
				<?php 
				endwhile; ?>
				<section>
					<div class="container">
						<div class="cap-7c-6g cap-7c-6g-centered">
							<span class="section-label">Experiment <?php echo $count; ?></span>
							<h2><?php the_sub_field('title')?><?php if(get_sub_field('subtitile')): ?>: <?php the_sub_field('subtitle')?><?php endif; ?></h2>
							<?php echo $overview_content['content'] ?>
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
								if($i == 0):?>
									<li class="selected">
										<a href=".">
											<img src="<?php echo $variation_screenshots[$i]['sizes']['variation-thumbnail'] ?>" alt="control">
											<span>Control</span>
										</a>
									</li>
								<?php
								else:
								?>
									<li>
										<a href=".">
											<img src="<?php echo $variation_screenshots[$i]['sizes']['variation-thumbnail'] ?>" alt="variation-<?php echo $i?>">
											<span>Variation <?php echo $i ?></span>
										</a>
									</li>
								<?php
								endif;
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
									if($i == 0): ?>
										<li class="is-showing">
											<img src="<?php echo $variation_screenshots[$i]['url'] ?>" alt="Zoom control">
										</li>
									<?php
									else: ?>
										<li>
											<img src="<?php echo $variation_screenshots[$i]['url'] ?>" alt="Zoom variant <?php echo $i ?>">
										</li>
									<?php
									endif; ?>
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
							<?php the_sub_field('results_content');
							if(get_sub_field('results_link')): ?>
								<strong><a href="<?php the_sub_field('results_link') ?>">Read the full data story</a></strong>
							<?php endif ?>
						</div>
					</div>
			</section>
		<?php
		//Increment the loop counter
		$count++;
		endwhile; 
		if( have_rows('outro_section') ):
			while( have_rows('outro_section') ) : the_row();
				if( get_row_layout() == 'testimonial_block'): ?>
					<section class="article-testimony">
						<div class="container">
							<?php
							$avatar = get_sub_field('source_avatar');
							if(!empty($avatar)): ?>
								<figure class="source-photo">
									<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>">
								</figure>
							<?php
							endif; ?>
							<blockquote><?php the_sub_field('testimony') ?></blockquote>
							<cite><?php the_sub_field('source_name_and_description') ?></cite>
						</div>
					</section>
				<?php
				elseif( get_row_layout() == 'content_block'): ?>
					<section>
						<div class="container">
							<div class="cap-7c-6g cap-7c-6g-centered">
								<?php echo the_sub_field('content'); ?>
							</div>
						</div>
					</section><?php
				endif;
			endwhile;
		endif; ?>
	</article>
	<?php
	//Read More Section
	$current_post_id = get_the_ID();
	$catId = get_cat_ID('Case Studies');
	$not_in_array = array($current_post_id);
	$category_query_args = array(
		'post__not_in' => $not_in_array,
		'cat' => $catId,
		'posts_per_page' => 3,
		'meta_query' => array(array('key' => '_thumbnail_id'))
	);
	$category_query = new WP_Query( $category_query_args );

	if ( $category_query->have_posts() ) :
	?>
	<section class="article-ps">
		<div class="container">
			<div class="article-list">
				<h5>Read more case studies</h5>
				<ul> <?php
					while ($category_query->have_posts()) : $category_query->the_post(); 
						$url = get_the_post_thumbnail_url($post);
						?>
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<img src="<?php echo $url; ?>">
								<span>
									<?php the_title(); ?>
								</span>
							</a>
						</li>
					<?php
					endwhile; ?>
				</ul>
			</div>
			<div class="cta-callout">
				<em>Ready to learn more?</em>
				<a href="#contact" class="button smooth-scroll">Let’s Talk</a>
			</div>
		</div>
	</section>
	<?php
	endif;
endwhile;
get_footer();
