<?php
/*
Template Name: Case Study
Template Post Type: post
*/

get_header(); ?>

<article class="case-study">
	<section class="article-intro">
		<div class="container">
			<h1>
				<?php the_title() ?>
			</h1>
			<h2>
				A Data-driven Approach Scores Big
			</h2>
			<figure>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/adidas-hero.jpg" alt="Adidas manufacturing">
			</figure>
		</div>
	</section>
	<section class="article-testimony">
		<div class="container">
			<figure class="source-photo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/jack-rusina.jpg" alt="Jack Rusina">
			</figure>
			<blockquote>Clearhead has been an incredible partner and the best vendor I have had the opportunity to work with. Their user-friendly data storytelling has been truly transformational for our culture, allowing us to use data to drive business results.</blockquote>
			<cite>Jack Rusina, Senior Manager of User Experience, adidas</cite>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<p>It’s likely you associate adidas with performance–performance on the field, performance in the gym, performance on the court. The company, a leader in the sports apparel industry since its birth over 90 years ago, has earned this reputation through a dedication to innovation and growth.</p>

				<p>adidas’ success can also be attributed to another area of strong performance, one you may not be quite as familiar with: their incredible data-driven culture. They use the power of data to inform their business decisions and drive real business results.</p>

				<p>When adidas first reached out to Clearhead in 2014, they had already been A/B testing their ecommerce properties for nearly a year. However, they recognized they were just scratching the surface of the potential of their digital optimization programs. With Clearhead’s help, adidas now relies on the power of iterative testing to improve customer experience and successfully scale business across global units. From UX and UI improvements to site features to its localization efforts, adidas embraces a culture of testing and optimization as means to overcoming its biggest digital challenges.</p>
			</div>
		</div>
	</section>
	<section class="article-testimony">
		<div class="container">
			<figure class="source-photo">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/dan-mccauley.jpg" alt="Dan McCauley">
			</figure>
			<blockquote>Driving product and brand desirability begins with putting our consumers at the heart of everything we do and serving them in the best possible way. With Clearhead’s help, we have been able to provide a better experience for our customers through constant testing and experimentation.</blockquote>
			<cite>Dan McCauley, Head of Ecommerce, adidas</cite>
		</div>
	</section>
	<section class="section-jump">
		<div class="container">
			<p>Ready to learn more about how adidas uses data and testing to drive business results?</p>
			<ul>
				<li>
					<a class="smooth-scroll" href="#experiment-1">
						<span>Experiment 1</span>
						<strong>Testing Zoom Functionality&nbsp;by Market</strong>
						<?php get_template_part( 'img/icons/down-arrow.svg' ); ?>
					</a>
				</li>
				<li>
					<a class="smooth-scroll" href="#experiment-2">
						<span>Experiment 2</span>
						<strong>Proving the ROI of Shipping SaaS Through Testing</strong>
						<?php get_template_part( 'img/icons/down-arrow.svg' ); ?>
					</a>
				</li>
				<li>
					<a class="smooth-scroll" href="#experiment-3">
						<span>Experiment 3</span>
						<strong>Simplifying Checkout to Improve Conversions</strong>
						<?php get_template_part( 'img/icons/down-arrow.svg' ); ?>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-intro" id="experiment-1">
		<div class="container">
			<figure class="browser-preview">
				<div class="browser-chrome">
					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/zoom-functionality.jpg" alt="Zoom functionality">
			</figure>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<h2>Upping Their Global Game: Testing Zoom Functionality by Market</h2>
				<p>adidas is a top player in the sports apparel market and operates in nine markets globally including Russia/CIS, Japan, South Korea, Western Europe, China, North America, Latin America, Southeast Asia/Pacific and emerging markets.</p>

				<p>As it grows its physical presence, adidas also continues to grow in another way: ecommerce. According to its 2015 annual report, ecommerce is adidas’ fastest growing channel, and is expected to account for over $2B in revenue by 2020.</p>

				<p>Fueling this growth is an obsession with customer experience, which includes a goal of creating a personalized experience for every one of its millions of ecommerce customers annually. However, it can be a challenge to create a localized experience while still maintaining a consistent overall image for the brand.</p>
			</div>
			<div class="experiment-split">
				<div class="problem">
					<h3>Problem</h3>
					<p>The zoom functionality on product display pages (PDPs) only allows shoppers to zoom in on small portions of product images, which is displeasing to users, and leads to lower than optimal conversion rates in some markets.</p>
				</div>
				<div class="hypothesis">
					<h3>Hypothesis</h3>
					<p>I believe that if we modify the product zoom functionality on PDP pages to display larger and more detailed product images, then we will provide a better overall user experience. If I am right, then we will see an increase in order conversions.</p>
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
							<span>A/B</span>
						</li>
						<li>
							<strong>Primary KPI:</strong>
							<span>Order Conversion Rate</span>
						</li>
						<li>
							<strong>Tools:</strong>
							<span>Optimizely</span>
						</li>
					</ul>
				</div>
				<ul class="thumbnails">
					<li class="selected">
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/thumbnail-control.jpg" alt="control">
							<span>Control</span>
						</a>
					</li>
					<li>
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/thumbnail-variation-1.jpg" alt="variation-1">
							<span>Variation 1</span>
						</a>
					</li>
					<li>
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/thumbnail-variation-2.jpg" alt="variation-2">
							<span>Variation 2</span>
						</a>
					</li>
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
					<li class="is-showing">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/zoom-control.jpg" alt="Zoom control">
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/zoom-variation.jpg" alt="Zoom control">
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-1/zoom-control.jpg" alt="Zoom control">
					</li>
				</ul>
			</figure>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<h2>Results</h2>
				<p>When viewing the results globally, there didn’t seem to be much impact on the key performance indicators we were monitoring. However, when we zoomed in on the results from a local market perspective, the results were very different.</p>
				<h4>Results by Market</h4>

				<table class="results-table">
					<tr>
						<td>Europian Union</td>
						<td>Flat</td>
					</tr>
					<tr>
						<td>Russia</td>
						<td>Big Winner</td>
					</tr>
					<tr>
						<td>Brazil</td>
						<td>Flat</td>
					</tr>
					<tr>
						<td>USA</td>
						<td>Big Winner</td>
					</tr>
				</table>

				<p>By looking at this global test through a local lens, adidas was better able to serve its customers based on the unique preferences of each region, rather than a one-size-fits-all approach. Game on!</p>
				<strong><a href=".">Read the full data story</a></strong>
			</div>
		</div>
	</section>

	<section class="section-intro" id="experiment-2">
		<div class="container">
			<figure class="browser-preview">
				<div class="browser-chrome">
					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-2/innovation-program.jpg" alt="Innovation program">
			</figure>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<h2>Prove It or Lost It: Proving the ROI of Shipping SaaS Through Testing</h2>
				<p>With the thousands of vendors that comprise the SaaS landscape and the impact each one promises, it can be a daunting task to identify the most valuable players. With limited resources–from the money spent on the product to the time invested in implementation to the possibility of lost opportunities due to impact on CX–the adidas team was looking for a way to use data to drive certainty in its procurement process.</p>

				<p>adidas reached out to Clearhead to try to improve its procurement process by using a data-driven approach. Together Clearhead and adidas launched the adidas Innovation Program, designed with the specific purpose of evaluating potential SaaS partners. By evaluating proof-of-concept results using specific and consistent metrics, the adidas team is able to ensure new services on adidas.com drive bottom-line growth.</p>
			</div>
			<div class="experiment-split">
				<div class="problem">
					<h3>Problem</h3>
					<p>adidas wanted to adopt disruptive technologies to advance their business goals, but had limited time and budget to validate that their investments were in the right areas. They were looking to move the needle in a big way by experimenting with different value-added offerings for its customers.</p>
				</div>
				<div class="hypothesis">
					<h3>Hypothesis</h3>
					<p>I believe that if we offer free two-day shipping to mobile visitors, then we will increase the incentive to buy. If I am right, then we will see an increase in the overall order conversion rate and revenue.</p>
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
							<span>A/B</span>
						</li>
						<li>
							<strong>Primary KPI:</strong>
							<span>Conversion to Order</span>
						</li>
						<li>
							<strong>Tools:</strong>
							<span>Optimizely, ShopRunner</span>
						</li>
					</ul>
				</div>
				<ul class="thumbnails">
					<li class="selected">
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-2/thumbnail-control.jpg" alt="control">
							<span>Control</span>
						</a>
					</li>
					<li>
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-2/thumbnail-variation.jpg" alt="variation-1">
							<span>Variation 1</span>
						</a>
					</li>
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
					<li class="is-showing">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-2/ultra-boost.jpg" alt="Zoom control">
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-2/ultra-boost-variation.jpg" alt="Zoom control">
					</li>
				</ul>
			</figure>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<h2>Results</h2>
				<h5>Winner!</h5>
				<p>Comprised largely of athletes, adidas’ customers love to move fast. It turns out, they also love to shop fast. The new shipping option driven by this vendor massively grew adidas’ order conversion by +4.00%. Additionally, over 70% of visitors who converted to order using this new option would not have otherwise ordered. This translates to millions of dollars in increased revenue annually for the adidas.</p>
				<strong><a href=".">Read the full data story</a></strong>
			</div>
		</div>
	</section>

	<section class="section-intro" id="experiment-3">
		<div class="container">
			<figure class="browser-preview">
				<div class="browser-chrome">
					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-3/checkout-flow.jpg" alt="Innovation program">
			</figure>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<h2>Play Smarter, Win Bigger: Simplifying Checkout to Improve Conversions</h2>
				<p>The sports apparel industry is incredibly competitive. In order to outpace competitors in the space, adidas makes huge investments in brand and marketing plays, including its longstanding sponsorship of the FIFA World Cup™.</p>

				<p>adidas’ branding investments have paid dividends, with the company recognizing a 12% increase in revenue year-over-year in 2015. While branding efforts lead to an increase in website traffic, this only a piece of the puzzle. The next challenge comes in translating adidas’ traffic-driving branding plays into a powerful and streamlined user experience that encourages conversions once users land on the website.</p>
			</div>
			<div class="experiment-split">
				<div class="problem">
					<h3>Problem</h3>
					<p>Customers that register with the site have higher customer lifetime values (CLTV) than guest orders. However, their existing checkout flow created friction. In order to register, a user would have to leave the checkout flow before completing their order. This extra step could cause adidas to lose valuable customers (and revenue).</p>
				</div>
				<div class="hypothesis">
					<h3>Hypothesis</h3>
					<p>I believe that if we can reduce the friction involved in registering or logging in compared to guest checkout, then more users will select these options. If I am right, then we will see registrations and logins increase.</p>
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
							<span>A/B</span>
						</li>
						<li>
							<strong>Primary KPI:</strong>
							<span>Conversion to Order</span>
						</li>
						<li>
							<strong>Tools:</strong>
							<span>Optimizely, ShopRunner</span>
						</li>
					</ul>
				</div>
				<ul class="thumbnails">
					<li class="selected">
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-3/thumbnail-control.jpg" alt="control">
							<span>Control</span>
						</a>
					</li>
					<li>
						<a href=".">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-3/thumbnail-variation.jpg" alt="variation-1">
							<span>Variation 1</span>
						</a>
					</li>
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
					<li class="is-showing">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-3/delivery-details.jpg" alt="Zoom control">
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/experiment-3/delivery-variation.jpg" alt="Zoom control">
					</li>
				</ul>
			</figure>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="cap-7c-6g cap-7c-6g-centered">
				<h2>Results</h2>
				<h5>Winner!</h5>
				<p>Turns out working harder isn’t always the key to winning. In fact, making it less work for their users to register for or login to their adidas.com accounts, they won more–a lot more.</p>
				<p>While orders were nearly flat between the control and the test, the new iteration led to a 19% increase account creations. adidas attributes a high value to these registered users, which means this test ultimatley translates to over a million dollars in additional lifetime revenue.</p>
				<p>While it may seem like a small change, iterative improvements can help you score big points with your customers.</p>
				<strong><a href=".">Read the full data story</a></strong>
			</div>
		</div>
	</section>

</article>

<section class="article-ps">
	<div class="container">
		<div class="article-list">
			<h5>Read more case studies</h5>
			<ul>
				<li>
					<a href=".">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/articles/adidas.jpg" alt="adidas">
						<span>
							Winning Big with Customers
						</span>
					</a>
				</li>
				<li>
					<a href=".">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/articles/steve-madden.jpg" alt="Steve Madden">
						<span>
							Revenue in Simplification: Steve Madden Case Study
						</span>
					</a>
				</li>
				<li>
					<a href=".">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/case-studies/articles/blu-dot.jpg" alt="Blu Dot">
						<span>
							Testing the Power of Print
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="cta-callout">
			<em>Ready to learn more?</em>
			<a href="#contact" class="button smooth-scroll">Let’s Talk</a>
		</div>
	</div>
</section>

<?php
get_footer();
