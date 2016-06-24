<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package clearhead
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<?php # include 'opticon-banner.php'; ?>

			<div class="hero bg-teal clearfix py4">

				<div class="container">

					<div class="sm-col sm-col-7">

					<h1 class="logo mt3 mb0"><img src="<?php bloginfo('template_directory') ?>/images/ch-type-white.svg" /></h1>
					<h2 class="tagline mt0 mb3 h5">the digital optimization company</h2>

					<p>We help daring brands optimize their business outcomes through continuous testing &amp; personalization.</p>
					<p>Every idea, every product, every experience — driven by data. Imagine that. That’s Clearhead.</p>

					</div>

				</div>

			</div>

			<div id="what">
				<div class="callout bg-light-teal center py4 clearfix">
					<div class="container">
						<h3 class="medium">solving <em>big</em> problems through testing and personalization</h3>
					</div>
				</div>
				<div class="how clearfix">
					<div class="container mt3 clearfix light-line">
						<div class="narrow">
							<h1 class="center mt0 mb2 bold">solutions tested on real problems</h1>
							<p class="center">Running the tests isn’t the problem. Reporting isn’t the problem. The problem is moving people and behavior, day in and out, towards more validated and confident solutions. That’s what we’re solving for.</p>
						</div>
						<div class="cols">
							<div class="point sm-col sm-col-4 px2">
								<a href="/digital-optimization-programs/">
									<h3 class="title blue center light-line bold h4">digital optimization <br class="sm-show">programs</h3>
								</a>
								<p class="px1 mb2">We enhance and augment your team to accelerate testing and personalization. We surface &amp; validate the very best hypotheses to your most important end user problems.</p>
							</div>
							<div class="point sm-col sm-col-4 px2">
								<a href="/data-driven-redesigns/">
									<h3 class="title blue center light-line bold h4">data-driven <br class="sm-show">redesigns</h3>
								</a>
								<p class="px1 mb2">The decision has been made. For something this big, the process should be driven and validated by your customers. Ensure your redesign doesn’t simply get out the door, but is destined for success.</p>
							</div>
							<div class="point sm-col sm-col-4 px2">
								<a href="/optimization-accelerators/">
									<h3 class="title blue center light-line bold h4">optimization <br class="sm-show">accelerators</h3>
								</a>
								<p class="px1 mb2">We help executives assess internal readiness &amp; then provide the blueprint to build and support a data-driven organization across their teams.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="data" class="clearfix">
					<div class="container clearfix light-line">
						<div class="sm-col sm-col-6">
							<h1 class="mt0 mb2 bold">data stories that reveal insight and inspire change</h1>
							<p class="mb3">We’ve investigated every corner of digital experiences &amp; organizations across many industries. Whatever the problem, user journey, device, platform or success metric, we will optimize it.</p>
						</div>
						<div class="sm-col sm-col-6 px4 center m-px1">
							<h3 class="blue">Asking for more information led to a 5.14% bump in trials and 4.2% increase in paid conversions for Buildium.</h3>
							<a class="block teal m-button-outline" target="_blank" href="/blog/revisiting-surveys-for-saas-our-buildium-com-case-study/">see how</a>
							<div class="light-line"></div>

							<h3 class="blue">We increased Blu Dot's catalog requests by 775% by testing a request modal displayed to new site visitors.</h3>
							<a class="block teal m-button-outline" target="_blank" href="/blog/testing-the-power-of-print-our-blu-dot-case-study/">see how</a>
							<div class="light-line"></div>

							<h3 class="blue">Village Roadshow’s complex test on benefit-based price tables led to a 7% lift in order conversion rates.</h3>
							<a class="block teal m-button-outline" target="_blank" href="/blog/multivariate-testings-hidden-thrills-our-vrtp-case-study/">see how</a>
						</div>
					</div>
				</div>
			</div>

			<div id="why">
				<div class="callout bg-light-orange center py4 clearfix">
					<div class="container">
						<h3 class="medium">miles walked in your shoes</h3>
					</div>
				</div>
				<div class="help">
					<div class="container clearfix light-line">
						<div class="sm-col sm-col-6">
						<h1 class="mt0 mb2 bold">we were you</h1>
						<p>We’ve spent decades on your side of the table. Through failures and learnings, we came to realize that optimization isn’t just another thing, it’s the thing. Clearhead was started because it’s time to graduate from buzzwords to real data-driven change &amp; improvement.</p>
						</div>
						<div class="sm-col sm-col-6 center m-px1">
							<h4 class="teal regular px4 m-px1 mb2">Curious about how clearhead started?</h4>
							<a href="/meet-matty/" class="button d-match m-block py2">read matty's story</a>
							<div class="clearfix"></div>
							<a href="/meet-ryan/" class="button d-match m-block mt2 py2">read ryan's story</a>
						</div>
					</div>
				</div>

				<div class="quotes py4">
					<div class="container light-line">
						<div class="container clearfix">
							<div class="cols mxn2 flex flex-end">
							<div class="sm-col sm-col-6 px2 mb3">
								<div class="p3 bg-light-orange relative">
								<h3 class="mt0 quote medium light-line">We’d love to do more testing &amp; personalization, but it feels like our culture &amp; legacy processes struggle to change.</h3>
								<a class="white block mt2 center" href="/blog/introducing-our-optimization-personalization-accelerators/">How we accelerate change and improvement</a>
								<svg height="35" width="30"><polygon points="0,0 30,35 30,0" class="bg-light-orange" /></svg>
								</div>
							</div>
							<div class="sm-col sm-col-6 px2 mb3">
								<div class="p3 bg-light-orange relative">
								<h3 class="mt0 quote medium light-line">Our team is consumed with just keeping the lights on, working in the business. We struggle to find the time or resources to push us strategically and work ON the business.</h3>
								<a class="white block mt2 center" href="/blog/so-youre-being-asked-to-do-more-faster-with-less/">How we join your teams</a>
								<svg height="35" width="30"><polygon points="0,0 0,35 30,0" class="bg-light-orange" /></svg>
								</div>
							</div>
							</div>
						</div>
						<div class="container clearfix center narrow">
							<h1 class="mt3 mb2 bold">sound familiar?</h1>
							<p class="mb4">Working with legendary brands and a vast network of innovative executives, we get the benefit of deeply understanding common challenges, patterns &amp; tested solutions.</p>
						</div>
						<div class="container clearfix">
							<div class="cols mxn2 point-up">
							<div class="sm-col sm-col-6 px2 mb3">
								<div class="p3 bg-light-orange relative">
								<h3 class="mt0 quote medium light-line">I feel like we are dabbling a bit with testing and personalization. We want to solve big problems, not simply make small changes.</h3>
								<a class="white block mt2 center" href="/blog/problem-solution-mapping-primer-digital-dial-tone/">How to use optimization to solve critical problems</a>
								<svg height="35" width="30"><polygon points="30,0 0,35 30,35" class="bg-light-orange" /></svg>
								</div>
							</div>
							<div class="sm-col sm-col-6 px2 mb3">
								<div class="p3 bg-light-orange relative">
								<h3 class="mt0 quote medium light-line">Our site is stale so we really need a full redesign rather than incremental testing.</h3>
								<a class="white block mt2 center" href="/blog/announcing-the-data-driven-redesign/">Understand the data-driven redesign</a>
								<svg height="35" width="30"><polygon points="0,0 0,35 30,35" class="bg-light-orange" /></svg>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>

				<div class="testimonial py2 mb4">
					<div class="container clearfix">
						<div class="cols mxn3">

							<div class="sm-col sm-col-right sm-col-9 grape medium h2 px3">
								When we embarked on our optimization journey, we didn’t just want a testing and analytics agency. We wanted a partner who had a strategy and a team that made our organization data-driven. That was Clearhead.
							</div>

							<div class="sm-col sm-col-3 center px3">
								<img src="<?php bloginfo('url') ?>/wp-content/uploads/2015/05/john-s.png" />
								<h4 class="mt1 mb0 orange regular">John Satterley</h4>
								<h4 class="mt1 regular">Group Director, Digital Development at Village Roadshow</h4>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div id="who">
			<div class="callout bg-light-purple center py4 clearfix">
				<div class="container">
					<h3 class="medium">you, us and a few of our friends</h3>
				</div>
			</div>

			<div class="friends">
				<div class="container center light-line clearfix">
					<div class="narrow">
					<h1 class="mt0 mb2 bold ">we’re in this together</h1>
					<p class="center">We love working with clients that inspire us to think bigger, build better product and be more customer-centric.</p>
					</div>
					<div class="pile mt3 clearfix">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/adidas.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/patagonia.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/tory-burch.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/warner-music-group.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/keurig.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/the-art-institutes.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/blu-dot.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/costplus-world-market.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/freshdirect.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/village-roadshow.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/taylormade.png">
						<img src="<?php bloginfo('template_directory') ?>/images/client-logos/many-more.png">
					</div>
					<div class="mt3 clearfix">
					<h4 class="regular inline-block mr2 ml2">Ready to get started?</h4>
					<a href="#contact" class="button py2">contact us</a>
					</div>
				</div>
			</div>

			<?php /*
			<div class="plus">
				<div class="container light-line clearfix center">
					<div class="narrow">
						<div class="sm-col-6 mx-auto">
							<img class="" src="<?php bloginfo('template_directory') ?>/images/you.svg">
						</div>
					</div>
				</div>
			</div>
			*/ ?>

			<div class="who">
				<div class="container clearfix light-line">

					<h1 class="md-col-8 mt0 mb2 bold">great quarterbacks are always surrounded by the best team</h2>
					<p class="md-col-8">More than just practitioners, your co-pilots are fun, middle-brained thinkers who are experts in technology and the Clearhead optimization methodology. Consider us your secret weapon for simplifying small tasks and taking big steps towards change.</p>

					<div class="cols mxn2 center dark-purple faces">
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/ryan-g.png"/>
							<h5 class="bold">strategic consultants</h5>
						</div>
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/chris-a.png"/>
							<h5 class="bold">optimization directors</h5>
						</div>
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/ryan-a.png"/>
							<h5 class="bold">project managers</h5>
						</div>
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/haley-m.png"/>
							<h5 class="bold">UX + interface designers</h5>
						</div>
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/tom-f.png"/>
							<h5 class="bold">front-end developers</h5>
						</div>
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/jared-b.png"/>
							<h5 class="bold">data analysts</h5>
						</div>
					</div>
				</div>

				<div class="partners">
				<div class="container no-line center clearfix">
					<h1 class="mt0 mb2 bold ">experts on your technology, without bias</h1>
					<div class="pile mt3 clearfix">
						<img src="<?php bloginfo('template_directory') ?>/images/partner-logos/optimizely.png">
						<img src="<?php bloginfo('template_directory') ?>/images/partner-logos/monetate.png">
						<img src="<?php bloginfo('template_directory') ?>/images/partner-logos/qubit.png">
					</div>
				</div>
			</div>

			<div class="tools container clearfix">
					<div class="cols px4 m-px0">
						<!-- <div class="sm-col sm-col-4 px2 m-px0">
							<h4 class="light-purple regular light-line">analytics tools we use</h4>
							<ul class="list-reset disc small mt3 mb3 ml0">
								<li class="mb1">Google Analytics</li>
								<li class="mb1">SiteCatalyst</li>
								<li class="mb1">Coremetrics</li>
								<li class="mb1">Crazy Egg</li>
								<li class="mb1">UserTesting.com</li>
								<li class="mb1">Bloomreach</li>
							</ul>
						</div> -->
						<div class="sm-col sm-col-12 px2 m-px0">
							<h4 class="light-purple regular light-line">platforms we use</h4>
							<ul class="list-reset disc small mt3 mb3 ml0 trial">
								<li class="mb1">Tealium</li>
								<li class="mb1">Adobe Target</li>
								<li class="mb1">Google Analytics</li>
								<li class="mb1">SiteCatalyst</li>
								<li class="mb1">Coremetrics</li>
								<li class="mb1">Hot Jar</li>
								<li class="mb1">Crazy Egg</li>
								<li class="mb1">Bloomreach</li>
								<li class="mb1">Clicktale</li>
								<li class="mb1">OptimalSort</li>
								<li class="mb1">TreeJack</li>
								<li class="mb1">Demandware</li>
								<li class="mb1">Magento</li>
								<li class="mb1">Shopify</li>
								<li class="mb1">Hybris</li>
								<li class="mb1">WordPress</li>
								<li class="mb1">Drupal</li>
								<li class="mb1">Sitecore</li>
								<li class="mb1">SAP</li>
								<li class="mb1">ATG</li>
								<li class="mb1">Many, many more</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>