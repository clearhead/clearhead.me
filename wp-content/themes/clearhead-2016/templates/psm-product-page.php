<?php
/*
Template Name: Problem Solution Mapping Page
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="product-hero" style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/video-still.jpg');">
				<div class="background">
					<div class="video-frame">
					<?php
						if(get_field('hero_video')): ?>
							<video autoplay playsinline muted loop>
								<source src="<?php echo get_field('hero_video') ?>" type="video/mp4">
							</video>
						<?php
						endif; ?>
					</div>
				</div>
				<div class="filter"></div>
				<div class="container">
					<h1>Problem Solution Mapping</h1>
					<h2>When you want your digital team to be:</h2>
					<ul class="feature-list">
						<li>Aligned on measureable goals</li>
						<li>In agreement on the most important problems to solve</li>
						<li>Working on solutions with high confidence for impact</li>
					</ul>
				</div>
			</div>

			<section>
				<div class="container">
					<div class="cap-7c-6g cap-7c-6g-centered">
						<p><strong>Problem Solution Mapping</strong> is an operating methodology invented at Clearhead based on our observations and cumulative learnings from thousands of UX experiments. We realized we could make a much bigger impact by changing the way we chose ideas, taking time to understand and embrace problems before we proposed or tested solution hypotheses.</p>
					</div>
					<figure class="product-chart">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/products/psm/map.svg" alt="">
					</figure>

					<div class="cap-7c-6g cap-7c-6g-centered">
						<div class="quote-blocks quote-blocks-full-width">
							<ul class="unpaired-list">
								<li>
									<blockquote>
										The Clearhead process resulted in a philosophical change, and we’re making traction in how we do things.
									</blockquote>
									<div class="source">Megan Millard, VP Sales + Marketing, Nau</div>
								</li>
								<li>
									<blockquote>
										Clearhead’s strategic approach to UX and digital product development ensures that our investments will solve our end users’ biggest problems and, by doing so, will also yield significant ROI for the business.
									</blockquote>
									<div class="source">Mark Friedman, President of Ecommerce, Steve Madden</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</section>

			<section class="feature-banner">
				<div class="container">
					<div class="flex">
						<h4 class="lead">
							We developed PSM based on the premise that any project, program or change is an experiment.
						</h4>
						<ul class="feature-list feature-list-banner">
							<li>Promotions and campaigns</li>
							<li>Merchandising changes</li>
							<li>Copy changes</li>
							<li><span class="text-transform-disabled">UX</span> changes</li>
							<li><span class="text-transform-disabled">IA</span> changes</li>
							<li>New <span class="text-transform-disabled">SaaS</span> additions</li>
							<li>New feature additions</li>
							<li>Everything</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="spacing-added">
				<div class="container">
					<div class="cap-6c-5g">
						<h2>So… how does a <span class="text-transform-disabled">PSM</span>&nbsp;workshop work?</h2>
					</div>
					<div class="cap-6c-5g">
						<p>Today, PSM is at the core of every engagement with Clearhead clients, whether that is an Accelerator, Digital Optimization Program or Data-Driven Redesign.</p>
					</div>
				</div>
			</section>

			<section class="steps-feature">
				<ul>
					<li>
						<div class="row">
							<div class="container">
								<div class="step">
									<div>
										<h2><span>01</span> <strong>Establish goals</strong></h2>
										<p>First, our senior consultants meet one-on-one with key stakeholders to identify what success looks like, and in what timeframe.</p>
									</div>
								</div>
							</div>
							<figure style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/goals.jpg');"></figure>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="container">
								<div class="step">
									<div>
										<h2><span>02</span> <strong>uncover problems</strong></h2>
										<p>Next, we meet with cross-functional groups. Armed with markers, post its and technology, we uncover business and end user problems together. These problems are organized into clusters and prepared for validation.</p>
									</div>
								</div>
							</div>
							<figure style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/problems.jpg');"></figure>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="container">
								<div class="step">
									<div>
										<h2><span>03</span> <strong>analyze &amp; prioritize</strong></h2>
										<p>This step is about using analytics, stats, surveys, usability research, and more to delineate, validate and prioritize each problem. We then organize a final list of problems the evidence indicates are most worth solving.</p>
										<p>The magic happens when everyone agrees on the priority of problems, using data. These articulated problems become the tree trunk from which all high impact experiments, ideas and solutions grow.</p>
									</div>
								</div>
							</div>
							<figure style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/analyze.jpg');"></figure>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="container">
								<div class="step">
									<div>
										<h2><span>04</span> <strong>ideate solution hypotheses</strong></h2>
										<p>Then the fun part: solution hypotheses. We use the same discovery techniques leveraged in problem research to ideate the best solutions for the most important problems. Ideas can come from anywhere, so we work with cross-functional teams to bring new ideas to the wall (and bring our own based on the 1000s of experiments we’ve launched).</p>
									</div>
								</div>
							</div>
							<figure style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/hypotheses.jpg');"></figure>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="container">
								<div class="step">
									<div>
										<h2><span>05</span> <strong>develop optimization roadmap</strong></h2>
										<p>We prioritize these ideas into a hypothesis roadmap that takes the form of experiments, tests, research or analytics. We’re looking for confidence in the highest impact ideas to solve the highest priority problems, ultimately to move the needle on those key goals.</p>
									</div>
								</div>
							</div>
							<figure style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/roadmap.jpg');"></figure>
						</div>
					</li>
				</ul>
			</section>

			<section class="spacing-added">
				<div class="container">
					<div class="cap-6c-5g">
						<h2>The Outcomes</h2>
					</div>
					<div class="cap-7c-6g">
						<p>
							Your map – an evidence-based, fully understood and agreed upon set of goals, problems and hypotheses – becomes the roadmap across your teams. Your Marketers, Product Managers, Merchandisers, Designers, Developers &amp; Analysts all working on solving a common set of Problems; all experimenting towards better outcomes.
						</p>
						<p>
							From this roadmap, Clearhead helps clients start experimenting with <a href="/digital-optimization-programs/">Digital Optimization Programs</a> and/or <a href="/optimization-accelerators/">Optimization Accelerators</a>. From here, all activity is centered around value creation through the continuous solving of critical&nbsp;problems.
						</p>
						<div class="quote-blocks quote-blocks-full-width">
							<ul class="unpaired-list">
								<li>
									<blockquote>
										The PSM methodology helped me to focus on root cause problems rather than treating symptoms.
									</blockquote>
									<div class="source">Ana Grace, Former Director of Ecommerce, GoDaddy</div>
								</li>
								<li>
									<blockquote>
										The Clearhead team worked alongside Tesco as trusted advisors to empower and align efforts to move beyond the status quo to achieve the organizational goals.
									</blockquote>
									<div class="source">Ashish Umre, Lead Scientist--Marketing Data Science &amp; Optimization, Tesco</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="background-graphic">
						<div class="cap-4c-3g">
							<h2>Next steps</h2>
							<p>
								From here Clearhead can help you execute tests, experiments, analysis, personalization, research, disruptive design, full redesigns or help solve organizational problems. But for now, this is where Problem Solution Mapping ends.
							</p>
							<h3 class="text-transform-disabled"><strong>How would PSM<br>work for you?</strong></h3>
							<a href="#contact" class="button contact-focus button-large">Let’s Talk</a>
						</div>
						<figure style="background-image: url('/wp-content/themes/clearhead-2016/img/products/psm/steps.svg');"></figure>
					</div>

				</div>
			</section>

		<?php endwhile; // End of the loop. ?>
	</main>
</div>

<?php
get_footer();
