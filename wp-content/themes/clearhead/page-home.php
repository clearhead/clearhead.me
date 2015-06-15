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

			<div id="opticon">
			<div class="callout bg-light-green center py4 clearfix">
				<div class="container">
					<h1 class="medium">We're at Opticon</h1><h3 class="medium"> - Nominated for 5 Optie Awards including Partner of the Year</h3><br />
					<h3 class="medium"><em><a href="">here’s how you can meet us.</a></em></h3>
				</div>
			</div>

			<div class="hero bg-teal clearfix py4">

				<div class="container">

					<div class="sm-col sm-col-7">

					<h1 class="logo mt3 mb0"><img src="<?php bloginfo('template_directory') ?>/images/ch-type-white.svg" /></h1>
					<h2 class="tagline mt0 mb3 h5">the validation and optimization agency</h2>

					<p>We help innovative companies employ a/b  testing, personalization & analytics in pursuit of continuous, data-driven improvement.</p>
					<p>Our team is expert in the tools  & methods you are hearing so much about. We  built Clearhead to  deliver what you really want&mdash; confidence through data.</p>

					</div>

				</div>

			</div>

			<div id="what">
			<div class="callout bg-light-teal center py4 clearfix">
				<div class="container">
					<h3 class="medium">we’re in the hypothesis validation business.<br />
					<em>here’s how we do it.</em></h3>
				</div>
			</div>

			<div class="how clearfix">
				<div class="container mt3 clearfix light-line">
						<div class="narrow">
						    <h4 class="center mt0 mb0 teal regular">miles walked in your shoes.</h4>
							<h1 class="center mt0 mb2 bold">services tested on real problems</h2>
							<p class="center">Running the tests isn’t the problem. Reporting isn’t the problem. The problem is moving the people and behavior, day in and out, towards more validated and likely to succeed decisions. That’s what we’re solving for.</p>
						</div>
					
					<div class="cols">
						<div class="point sm-col sm-col-4 px2">
							<h3 class="title blue center light-line bold h4">digital optimization <br class="sm-show">programs</h3>
							<p class="px1 mb2">You’re designing, building & trying new things every day. Expectations are mounting. Through A/B testing, personalization and analytics, we ensure that your website investments aren’t just “approved”, but optimal.</p>
						</div>
						<div class="point sm-col sm-col-4 px2">
							<h3 class="title blue center light-line bold h4">data-driven <br class="sm-show">redesigns</h3>
							<p class="px1 mb2">The decision has been made. For something this big, the process should be informed by solutions validated by your customers. Ensure your redesign doesn’t simply get out the door, but is destined for success.</p>
						</div>
						<div class="point sm-col sm-col-4 px2">
							<h3 class="title blue center light-line bold h4">digital <br class="sm-show">transformation</h3>
							<p class="px1 mb2">Of course you want to test & optimize. But you’re not sure if your org chart and internal culture and practices support these new rules. Let’s define what is really required to get to that aspirational “to be” state.
</p>
						</div>
					</div>
				</div>
			</div>

			<div class="data" class="clearfix">
				<div class="container clearfix light-line">
					<div class="sm-col sm-col-6">
						<h4 class="mt0 mb1 teal regular">We tame & humanize the data.</h4>
						<h1 class="mt0 mb2 bold">data stories that inspire change</h1>
						<p class="mb3">We believe in making data useful to everyone — from intern to CEO. By presenting data as narratives that answer the “what” & the “why,” we turn reports into can’t-miss meetings that provide exceptional clarity. The best way to show you? By showing you a few of our own favorite stories, of course.</p>
					</div>
					<div class="sm-col sm-col-6 px4 center m-px1">
						<h3 class="blue">We discovered Buildium could increase subscriptions by asking for <em>more</em> information</h3>
						<a class="block teal m-button-outline" target="_blank" href="/revisiting-surveys-for-saas-our-buildium-com-case-study/">see how</a>
						<div class="light-line"></div>

						<h3 class="blue">We learned that Blu Dot customers like a pretty email but love a gorgeous catalog.</h3>
						<a class="block teal m-button-outline" target="_blank" href="/testing-the-power-of-print-our-blu-dot-case-study/">see how</a>
						<div class="light-line"></div>

						<h3 class="blue">We revealed how powerful benefit-based price tables are for Village Roadshow themepark goers.</h3>
						<a class="block teal m-button-outline" target="_blank" href="/multivariate-testings-hidden-thrills-our-vrtp-case-study/">see how</a>
					</div>
				</div>
			</div>
			
			<div class="ideas">
				<div class="container clearfix light-line">
					<img class="sm-hide mb2" src="<?php bloginfo('template_directory') ?>/images/books-sm.svg">
					<div class="sm-col sm-col-6">
					<h4 class="mt0 mb1 teal regular">Something we love: transparency.</h4>
					<h1 class="mt0 mb2 bold">years of tested hypotheses</h1>
					<p>We’ve investigated every corner of every funnel in most industries. Our arsenal of experiments is growing every day, and will be at your fingertips for figuring out what works, and what doesn’t.</p>

					<h4 class="teal regular light-line">If it exists, we’ve tested it.</h4>
					
					<ul class="list-reset disc small mt3 mb3 ml0 dual">
						<li class="mb1">Brands & retailers</li>
						<li class="mb1">Media & publishers</li>
						<li class="mb1">B2B & SaaS</li>
						<li class="mb1">Small changes with big lift</li>
						<li class="mb1">Big changes with lots of risk</li>
						<li class="mb1">Every corner of the funnel</li>
						<li class="mb1">Many variations & permutations</li>
						<li class="mb1">Complex targeting & segmentation</li>
						<li class="mb1">Every device type</li>
						<li class="mb1">Yep— <em>we tested that, too</em></li>
					</ul>
					</div>
					<div class="sm-col sm-col-6 px4 mt3">
						
						<img class="sm-show" src="<?php bloginfo('template_directory') ?>/images/books.svg">
						
						</div>
					
				</div>
			</div>
			
			<div class="tests">
				<div class="container no-line clearfix">
					<div class="sm-col sm-col-6">
					<h4 class="mt0 mb1 teal regular">Scores of tests later, we’re still at it.</h4>
					<h1 class="mt0 mb2 bold">today’s investigations:</h1>
					<p>Every minute of every day, we’re gathering data, getting smarter and optimizing together. Whatever the device, platform or success metric, we investigate it what the data story means and how to optimize.</p>
					</div>
					<div class="clearfix"></div>
				<div class="container clearfix">
					<div class="cols mxn2">
					<div class="sm-col sm-col-4 px2 mb3">
						<div class="p3 bg-light-teal">
						<h3 class="blue mt0 mxn1 light-line">3-Step Checkout</h3>
						<p class="stat mt2 mb1 small mxn1"><span class="teal">kpi</span> order conversion rate</p>
						<p class="stat mb0 small mxn1"><span class="teal">duration</span> 53 days</p>
						</div>	
					</div>
					<div class="sm-col sm-col-4 px2 mb3">
						<div class="p3 bg-light-teal">
						<h3 class="blue mt0 mxn1 light-line">Encourage Add-To-Bag</h3>
						<p class="stat mt2 mb1 small mxn1"><span class="teal">kpi</span> cart conversion from PDP</p>
						<p class="stat mb0 small mxn1"><span class="teal">duration</span> 26 days</p>
						</div>
					</div>
					<div class="sm-col sm-col-4 px2 mb3">
						<div class="p3 bg-light-teal">
						<h3 class="blue mt0 mxn1 light-line">Nav Redesign</h3>
						<p class="stat mt2 mb1 small mxn1"><span class="teal">kpi</span> request for info conversion rate</p>
						<p class="stat mb0 small mxn1"><span class="teal">duration</span> 32 days</p>
						</div>
					</div>
					</div>
				</div>
				
				</div>
				
			</div>
			</div>
			
			<div id="why">
			<div class="callout bg-light-orange center py4 clearfix">
				<div class="container">
					<h3 class="medium">just having the data is not enough.<br />
					<em>here’s why we do it.</em></h3>
				</div>
			</div>
			
			<div class="help">
				<div class="container clearfix light-line">
					<div class="sm-col sm-col-6">
					<h4 class="mt0 mb1 orange regular">We're proud of our scars.</h4>
					<h1 class="mt0 mb2 bold">we were you</h1>
					<p>We’ve been on your side of the table. And, along the way, came to realize that optimization isn’t just another thing, but that it’s the thing. Clearhead was started because we believe that analyzing isn’t the same as optimizing and that it’s time to  graduate from buzzwords to simple & sustainable data-driven improvement. </p>
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
							<h3 class="mt0 quote medium light-line">Every day, I have to do more, faster, with less, but it’s hard to build a better ship while already out at sea.</h3>
							<a class="white block mt2 center" href="/so-youre-being-asked-to-do-more-faster-with-less/">How we accelerate change and improvement</a>
							<svg height="35" width="30"><polygon points="0,0 30,35 30,0" class="bg-light-orange" /></svg>
							</div>	
						</div>
						<div class="sm-col sm-col-6 px2 mb3">
							<div class="p3 bg-light-orange relative">
							<h3 class="mt0 quote medium light-line">It’s a challenge finding capable new hires for optimization and, further, it’s hard to get new headcount approved.</h3>
							<a class="white block mt2 center" href="/#who">How we join our teams</a>
							<svg height="35" width="30"><polygon points="0,0 0,35 30,0" class="bg-light-orange" /></svg>
							</div>
						</div>
						</div>
					</div>
				
					<div class="container clearfix center narrow">
						<h1 class="mt3 mb2 bold">sound familiar?</h1>
						<p class="mb4">We’re here to listen and take your unique starting place seriously. Whether your organization is large or small, an optimization machine or a total greenhorn, we’re here to help.</p>
					</div>
					
					<div class="container clearfix">
						<div class="cols mxn2 point-up">
						<div class="sm-col sm-col-6 px2 mb3">
							<div class="p3 bg-light-orange relative">
							<h3 class="mt0 quote medium light-line">Everyone is committed to optimization here, but I still feel like we are just doing the bare minimum.</h3>
							<a class="white block mt2 center" href="/you-bought-the-software-you-ran-some-tests-but-are-you-really-optimizing">How we get you to world class optimization</a>
							<svg height="35" width="30"><polygon points="30,0 0,35 30,35" class="bg-light-orange" /></svg>
							</div>	
						</div>
						<div class="sm-col sm-col-6 px2 mb3">
							<div class="p3 bg-light-orange relative">
							<h3 class="mt0 quote medium light-line">We capture lots of data. Report on a million things. But “data” has become a four letter word here because nobody really does anything with it.</h3>
							<a class="white block mt2 center" href="/tag/case-studies/">Data stories that drive improvement</a>
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
							When we began to embark on our journey towards data-driven Optimization, we brought Clearhead in on the ground floor. We didn't just want a partner to help with testing and analytics execution, we wanted one who had a strategy and a team that made our business and organization more data driven. Together we've done all of the above.
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
					<h3 class="medium">we're in this together<br />
					<em>here’s who we do it with</em></h3>
				</div>
			</div>
			
			<div class="friends">
				<div class="container center light-line clearfix">
					<div class="narrow">
					<h4 class="mt0 mb1 light-purple regular">Investigate with the best.</h4>
					<h1 class="mt0 mb2 bold ">you, us and a few of our friends</h1>
					<p class="center">We love working with clients that inspire us to be better, build better product and dare to be more customer-centric.</p>
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
			
			<div class="plus">
				<div class="container light-line clearfix center">
					<div class="narrow">
						<div class="sm-col-6 mx-auto">
						<img class="" src="<?php bloginfo('template_directory') ?>/images/you.svg">
						</div>
						<h4 class="mt3 mb1 light-purple regular">2 clear-heads are better than 1</h4>
						<h1 class="mt0 mb2 bold">we join forces</h1>
						<p>If you want team that’s wholly invested in bettering your business, and not simply managing a problem, you’ve come to the right place. Consider us your secret weapon for simplifying both the small tasks ahead and the big steps towards change.</p>
					</div>
				</div>
			</div>
			
			<div class="who">
				<div class="container clearfix light-line">
					
					<h4 class="mt0 mb0 light-purple regular">Success starts with the best team.</h4>
					<h1 class="mt0 mb2 bold">who you'll work with</h2>
					<p class="md-col-8">More than just practitioners, your co-pilots are fun, middle-brained thinkers who’ve studied the tools of the trade and practice validating and optimizing — a lot.</p>
				
					<div class="cols mxn2 center dark-purple faces">
						<div class="sm-col sm-col-2 px2">
							<img src="<?php bloginfo('template_directory') ?>/images/headshots/ryan-g.png"/>
							<h5 class="bold">strategic partners</h5>
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
					<h4 class="mt0 mb1 light-purple regular">Practiced with your partners.</h4>
					<h1 class="mt0 mb2 bold ">we use your tools, without bias</h1>
					<p>Fluency among the industry’s best providers and proven technologies? That’s just part of the package. Discover the benefits of working with a team that knows the technology.</p>
					<div class="pile mt3 clearfix">
						<img src="<?php bloginfo('template_directory') ?>/images/partner-logos/optimizely.png">
						<img src="<?php bloginfo('template_directory') ?>/images/partner-logos/monetate.png">
						<img src="<?php bloginfo('template_directory') ?>/images/partner-logos/qubit.png">
					</div>
				</div>
			</div>
			
			<div class="tools container clearfix">
					<div class="cols px4 m-px0">
						<div class="sm-col sm-col-4 px2 m-px0">
							<h4 class="light-purple regular light-line">analytics tools we use</h4>
							<ul class="list-reset disc small mt3 mb3 ml0">
								<li class="mb1">Google Analytics</li>
								<li class="mb1">SiteCatalyst</li>
								<li class="mb1">Coremetrics</li>
								<li class="mb1">Crazy Egg</li>
								<li class="mb1">UserTesting.com</li>
								<li class="mb1">Bloomreach</li>
							</ul>
						</div>
						<div class="sm-col sm-col-8 px2 m-px0">
							<h4 class="light-purple regular light-line">platforms we work with</h4>
							<ul class="list-reset disc small mt3 mb3 ml0 dual">
								<li class="mb1">Demandware</li>
								<li class="mb1">Adobe Target</li>
								<li class="mb1">Magento</li>
								<li class="mb1">Shopify</li>
								<li class="mb1">Hybris</li>
								<li class="mb1">WordPress</li>
								<li class="mb1">Drupal</li>
								<li class="mb1">Sitecore</li>
								<li class="mb1">SAP</li>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
