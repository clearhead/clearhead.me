<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package clearhead-2016
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="hero">
					<div class="container">
						<div class="cap-6c-6g">

							<div class="logo-icon">
								<figure>
									<?php get_template_part( 'img/logo-icon.svg' ); ?>
								</figure>
							</div>

							<h1>
								<span>Clearhead</span>
								<figure><?php get_template_part( 'img/logo-type.svg' ); ?></figure>
							</h1>
							<h5>The Digital Optimization Company</h5>
							<p>
								We help daring brands optimize their business outcomes through continuous testing &amp; personalization.
							</p>
							<p>
								Every idea, every product, every experience – driven by data. Imagine that. That’s Clearhead.
							</p>
						</div>
					</div>
				</section>

				<div id="what">
					<section class="parallax-callout photo-callout photo-callout-blue">
						<div class="fill">
							<div class="container">
								<div class="cap-7c-6g">
									<h3>Solving <em>big</em> problems through testing&nbsp;and&nbsp;personalization</h3>
								</div>
							</div>
						</div>
					    <div class="window">
							<div class="photo">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/callout-photos/what-we-do.jpg" alt="" />
							</div>
					    </div>
					</section>

					<?php /*
					<section
						class="photo-callout photo-callout-blue"

						data-parallax="scroll"
						data-bleed="75"
						data-image-src="<?php bloginfo('stylesheet_directory'); ?>/img/callout-photos/what-we-do.jpg"
						data-natural-width="2400"
						data-natural-height="1000"
						data-speed="0.8"
					>
						<div class="container">
							<div class="cap-7c-6g">
								<h3>Solving <em>big</em> problems through testing&nbsp;and&nbsp;personalization</h3>
							</div>
						</div>
					</section>
					*/ ?>

					<!-- <section class="photo-callout photo-callout-blue">
						<div class="container">
							<div class="cap-7c-6g">
								<h3>Solving <em>big</em> problems through testing&nbsp;and&nbsp;personalization</h3>
							</div>
						</div>
					</section> -->
					<section>
						<div class="container">

							<div class="cap-6c-5g">
								<h2>Solutions Tested<br>on Real Problems</h2>
								<p>
									Running the tests isn’t the problem. Reporting isn’t&nbsp;the problem. The problem is moving people and behavior, day in and out, towards more validated and confident solutions. That’s what we’re solving for.
								</p>
							</div>

							<ul class="solutions-list">
								<li>
									<div>
										<h3>Digital Optimization Programs</h3>
										<figure>
											<?php get_template_part( 'img/solutions/digital-optimization-programs.svg' ); ?>
										</figure>
									</div>
									<div>
										<strong>Uncovering the best ideas quickly and iteratively</strong>
										<p>
											We enhance and augment your team to accelerate testing and personalization. We surface &amp; validate the very best hypotheses to your most important end user problems.
										</p>
										<a href="/digital-optimization-programs/">Learn More</a>
									</div>
								</li>
								<li>
									<div>
										<h3>Data-driven Redesigns</h3>
										<figure>
											<?php get_template_part( 'img/solutions/data-driven-redesigns.svg' ); ?>
										</figure>
									</div>
									<div>
										<strong>Disrupt with confidence</strong>
										<p>
											The decision has been made. For something this big, the process should be driven and validated by your customers. Ensure your redesign is destined for success.
										</p>
										<a href="/data-driven-redesigns/">Learn More</a>
									</div>
								</li>
								<li>
									<div>
										<h3>Optimization Accelerators</h3>
										<figure>
											<?php get_template_part( 'img/solutions/optimization-accelerators.svg' ); ?>
										</figure>
									</div>
									<div>
										<strong>Building towards a test-and-learn culture</strong>
										<p>
											We help executives assess internal readiness &amp; then provide the&nbsp;blueprint to build and support a data-driven organization across their teams.
										</p>
										<a href="optimization-accelerators">Learn More</a>
									</div>
								</li>
							</ul>

							<hr class="extra-space">

							<div class="expositive-remarks">
								<ul>
									<li>
										<blockquote>
											Our team is consumed with just keeping the lights on, working in the business. We struggle to find&nbsp;the time or resources to push us strategically and work ON the business.
										</blockquote>
										<a href="/blog/so-youre-being-asked-to-do-more-faster-with-less/">How we join your teams</a>
									</li>
									<li>
										<blockquote>
											We’d love to do more testing &amp; personalization, but it feels like our culture &amp; legacy processes struggle to change.
										</blockquote>
										<a href="/blog/introducing-our-optimization-personalization-accelerators/">How we accelerate change and improvement</a>
									</li>
								</ul>
								<ul>
									<li>
										<blockquote>
											Our site is stale so we really need a full redesign rather than incremental testing.
										</blockquote>
										<a href="/blog/announcing-the-data-driven-redesign/">Understand the data-driven redesign</a>
									</li>
									<li>
										<blockquote>
											I feel like we are dabbling a bit with testing and personalization. We want to solve big problems, not simply make small changes.
										</blockquote>
										<a href="/blog/problem-solution-mapping-primer-digital-dial-tone/">How to use optimization to solve critical problems</a>
									</li>
								</ul>

							</div>

							<div class="cap-6c-5g">
								<h2>Sound Familiar?</h2>
								<p>
									Working with legendary brands and a vast network of innovative executives, we get the benefit of deeply understanding common challenges, patterns &amp; tested solutions.
								</p>
							</div>

							<hr class="extra-space">

							<div class="cap-6c-5g">
								<h2>Data Stories that Reveal Insight and Inspire Change</h2>
								<p>
									We’ve investigated every corner of digital experiences &amp; organizations across many industries. Whatever the problem, user journey, device, platform or success metric, we will optimize&nbsp;it.
								</p>
							</div>

							<div class="stories-list">
								<ul>
									<li>
										<div>
											<h3>Breaking Best Practices</h3>
											<figure class="buildium-logo">
												<?php get_template_part( 'img/stories/buildium.svg' ); ?>
											</figure>
										</div>
										<div>
											<p>
												Asking for more information led to a 5.14% bump in trials and 4.2% increase in paid conversions for Buildium.
											</p>
											<a href="/blog/revisiting-surveys-for-saas-our-buildium-com-case-study/">See How</a>
										</div>
									</li>
									<li>
										<div>
											<h3>MVT’S Hidden Thrills</h3>
											<figure>
												<?php get_template_part( 'img/stories/village-roadshow.svg' ); ?>
											</figure>
										</div>
										<div>
											<p>
												Village Roadshow’s complex test on benefit-based price tables lead to a 7% lift in order conversion rates.
											</p>
											<a href="/blog/multivariate-testings-hidden-thrills-our-vrtp-case-study/">See How</a>
										</div>
									</li>
									<li>
										<div>
											<h3>Testing the Power of Print</h3>
											<figure>
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/stories/stories-bluedot.png" alt="blu dot">
											</figure>
										</div>
										<div>
											<p>
												We increased Blu Dot’s catalog requests by 775% by testing a request modal displayed to new site visitors.
											</p>
											<a href="/blog/testing-the-power-of-print-our-blu-dot-case-study/">See How</a>
										</div>
									</li>
								</ul>
							</div>

							<div class="client-testimonial">
								<div class="client">
									<div class="logo">
										<figure class="village-roadshow-logo">
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/testimonials/village-roadshow.png" alt="Village Roadshow">
										</figure>
									</div>
									<div class="info">
										<strong>John Satterley</strong>
										<small>Group Director, Digital&nbsp;Development at Village Roadshow</small>
									</div>
								</div>
								<div class="testimonial">
									<blockquote>
										When we embarked on our optimization journey, we didn’t just want a testing and analytics agency. We wanted a partner who had a strategy and a team that made our organization data-driven. That was Clearhead.
									</blockquote>
								</div>
							</div>

						</div>
					</section>
				</div>
				<div id="with">
					<section class="parallax-callout photo-callout photo-callout-orange">
						<div class="fill">
							<div class="container">
								<div class="cap-7c-6g">
									<h3>Solving <em>big</em> problems through testing&nbsp;and&nbsp;personalization</h3>
								</div>
							</div>
						</div>
					    <div class="window">
							<div class="photo">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/callout-photos/who-we-do-it-with.jpg" alt="" />
							</div>
					    </div>
					</section>

					<?php /*
					<section
						class="photo-callout photo-callout-orange"

						data-parallax="scroll"
						data-bleed="75"
						data-image-src="<?php bloginfo('stylesheet_directory'); ?>/img/callout-photos/who-we-do-it-with.jpg"
						data-natural-width="2400"
						data-natural-height="1000"
						data-speed="0.8"
					>
						<div class="container">
							<div class="cap-7c-6g">
								<h3>You, us and a few of&nbsp;our&nbsp;friends</h3>
							</div>
						</div>
					</section>
					*/ ?>

					<section class="theme-orange">
						<div class="container">
							<div class="cap-6c-5g">
								<h2>We’re in this Together</h2>
								<p>
									We love working with clients that inspire us to think bigger, build better product and be more customer-centric.
								</p>
							</div>

							<div class="logo-list logo-list-clients">
								<ul>
									<li>
										<figure style="max-width: 4em;">
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/clients/adidas.png" alt="Adidas">
										</figure>
									</li>
									<li>
										<figure>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/clients/blu-dot.png" alt="Blu Dot">
										</figure>
									</li>
									<li>
										<figure style="max-width: 7.25em;">
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/clients/world-market.png" alt="World Market">
										</figure>
									</li>
									<li>
										<figure style="max-width: 9.8125em;">
											<?php get_template_part( 'img/clients/cvs.svg' ); ?>
										</figure>
									</li>
									<li>
										<figure style="max-width: 7.4125em;">
											<?php get_template_part( 'img/clients/express.svg' ); ?>
										</figure>
									</li>
									<li>
										<figure>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/clients/keurig.png" alt="Keurig">
										</figure>
									</li>
									<li>
										<figure style="max-width: 8.5em;">
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/clients/patagonia.png" alt="Patagonia">
										</figure>
									</li>
									<li>
										<figure style="max-width: 6.125em;">
											<?php get_template_part( 'img/clients/tesco.svg' ); ?>
										</figure>
									</li>
									<li>
										<figure>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/clients/tory-burch.png" alt="Tory Burch">
										</figure>
									</li>
									<li>
										<figure style="max-width: 6.25em;">
											<?php get_template_part( 'img/clients/ulta.svg' ); ?>
										</figure>
									</li>
									<li>
										<figure>
											<?php get_template_part( 'img/clients/usaa.svg' ); ?>
										</figure>
									</li>
									<li>
										<figure style="max-width: 9.36875em;">
											<?php get_template_part( 'img/clients/vitamix.svg' ); ?>
										</figure>
									</li>
									<li>
										<figure style="max-width: 5.125em;">
											<?php get_template_part( 'img/clients/whole-foods.svg' ); ?>
										</figure>
									</li>
									<li class="more">
										<figure>
											<em>Plus many more</em>
										</figure>
									</li>
								</ul>
							</div>

							<div class="contact-cta" style="margin: 0 0 -0.45625em">
								<p>
									Ready to get started?
								</p>
								<a href="#contact" class="button smooth-scroll">Contact Us</a>
							</div>

							<hr class="extra-space">

							<div class="cap-6c-5g">
								<h2>Experts on Your Technology, Without Bias</h2>

								<div class="logo-list logo-list-solutions">
									<ul>
										<li>
											<figure style="max-width: 6.15625em;">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/technologies/optimizely.png" alt="Optimizely">
											</figure>
										</li>
										<li>
											<figure style="max-width: 9.15625em;">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/technologies/monetate.png" alt="Monetate">
											</figure>
										</li>
										<li>
											<figure style="max-width: 5.32em;">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/technologies/qubit.png" alt="Qubit">
											</figure>
										</li>
										<li>
											<figure style="max-width: 8.8125em;">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/technologies/maxymiser.png" alt="Maxymiser">
											</figure>
										</li>
										<li>
											<figure style="max-width: 8.875em;">
												<?php get_template_part( 'img/technologies/user-testing.svg' ); ?>
											</figure>
										</li>
									</ul>
								</div>
							</div>
							<h3>Platforms We Use</h3>
							<div class="platforms-list">
								<ul class="cap-8c-7g">
									<li>Tealium</li>
									<li>Adobe Target</li>
									<li>Google Analytics</li>
									<li>SiteCatalyst</li>
									<li>Coremetrics</li>
									<li>Hot Jar</li>
									<li>Crazy Egg</li>
									<li>UserTesting.com</li>
									<li>Bloomreach</li>
									<li>Clicktale</li>
									<li>OptimalSort</li>
									<li>TreeJack</li>
									<li>Demandware</li>
									<li>Magento</li>
									<li>Shopify</li>
									<li>Hybris</li>
									<li>WordPress</li>
									<li>Drupal</li>
									<li>Sitecore</li>
									<li>SAP</li>
									<li>ATG</li>
									<li>Many, many more</li>
								</ul>
							</div>

							<hr class="extra-space">

							<div class="client-testimonial">
								<div class="client">
									<div class="logo">
										<figure class="keurig-logo">
											<img src="<?php bloginfo('stylesheet_directory'); ?>/img/testimonials/keurig.png" alt="Keurig">
										</figure>
									</div>
									<div class="info">
										<strong>Delia Vallejo</strong>
										<small>Senior Director Ecommerce, Keurig&nbsp;Green&nbsp;Mountain</small>
									</div>
								</div>
								<div class="testimonial">
									<blockquote>
										The Clearhead team are the thought leaders in the space and their methodology resonated with me. Working with the team has been awesome and they are very much partners. They’ve made a significant difference and impact.
									</blockquote>
								</div>
							</div>
						</div>
					</section>
				</div>


				<div id="who">
					<section class="parallax-callout photo-callout photo-callout-purple">
						<div class="fill">
							<div class="container">
								<div class="cap-7c-6g">
									<h3>Solving <em>big</em> problems through testing&nbsp;and&nbsp;personalization</h3>
								</div>
							</div>
						</div>
					    <div class="window">
							<div class="photo">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/callout-photos/who-we-are.jpg" alt="" style="top: -22%;"/>
							</div>
					    </div>
					</section>

					<?php /*
					<section
						class="photo-callout photo-callout-purple"

						data-parallax="scroll"
						data-bleed="75"
						data-image-src="<?php bloginfo('stylesheet_directory'); ?>/img/callout-photos/who-we-are.jpg"
						data-natural-width="2400"
						data-natural-height="1000"
						data-speed="0.8"
					>
						<div class="container">
							<div class="cap-7c-6g">
								<h3>Miles walked in your shoes.</h3>
							</div>
						</div>
					</section>
					*/ ?>

					<section class="theme-purple">
						<div class="container">


							<div class="cap-6c-5g">
								<h2>We Were You</h2>
								<p>
									We’ve spent decades on your side of the table. Through failures and learnings, we came to realize that optimization isn’t just another thing, it’s the thing. Clearhead was started because it’s time to graduate from buzzwords to real data-driven change &amp; improvement.
								</p>
							</div>

							<div class="origin-stories">
								<hr class="extra-space">
								<h3>Curious about how Clearhead&nbsp;started?</h3>
								<ul>
									<li>
										<a href="/blog/meet-matty/">
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
										<a href="/blog/meet-ryan/">
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
										<a href="/blog/meet-sam/">
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

							<hr class="extra-space">

							<div class="cap-6c-6g">
								<h2>Success Starts with the Best&nbsp;Team</h2>
								<p>
									More than just practitioners, your co-pilots are fun, middle-brained thinkers who are experts in technology and the Clearhead optimization<span class="dn_n640">&nbsp;</span><span class="dn_w640"> </span>methodology. Consider us your secret weapon for simplifying small tasks and taking big steps towards change.
								</p>
							</div>

							<div class="team-list">
								<ul>
									<li>
										<figure>
											<div class="photo">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team/consultants.jpg" alt="employee headshot">
											</div>
											<figcaption>Strategic<br>Consultants</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="photo">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team/directors.jpg" alt="employee headshot">
											</div>
											<figcaption>Optimization<br>Directors</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="photo">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team/managers.jpg" alt="employee headshot">
											</div>
											<figcaption>Project<br>Managers</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="photo">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team/designers.jpg" alt="employee headshot">
											</div>
											<figcaption><span>UX</span>&nbsp;+&nbsp;Interface<br>Designers</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="photo">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team/developers.jpg" alt="employee headshot">
											</div>
											<figcaption>Front-end<br>Developers</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<div class="photo">
												<img src="<?php bloginfo('stylesheet_directory'); ?>/img/team/analysts.jpg" alt="employee headshot">
											</div>
											<figcaption>Data<br>Analysts</figcaption>
										</figure>
									</li>
								</ul>
							</div>

						</div>
					</section>
				</div>

			<?php endwhile; // End of the loop. ?>
		</main>
	</div>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/parallax-background.js"></script>
	<script type="text/javascript">
		jQuery('.window').parallaxBackground({
		  'image': '.photo'
		});
	</script>

<?php
// get_sidebar();
get_footer();
