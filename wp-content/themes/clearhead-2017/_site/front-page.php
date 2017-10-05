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
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- Hero section is inside .top-group -->
			<section class="hero">
				<div class="container container--large flex-space">
					<h1>Design with evidence.<br>Transform through experimentation.</h1>
					<a href="/#what-we-do" class="cta smooth-scroll">
						<span class="button button--white">
							What We Do
						</span>
						<span class="icon">
							<svg width="35px" height="16px" viewBox="0 0 35 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
									<g transform="translate(-703.000000, -816.000000)" stroke-width="3" stroke="currentColor">
										<g transform="translate(599.000000, 727.000000)">
											<polyline id="Path-8" points="106 91 121.5 103 137 91"></polyline>
										</g>
									</g>
								</g>
							</svg>
						</span>
					</a>
				</div>
			</section>
		</div><!-- /.top-group -->

		<section class="content-section">
			<div class="section-target" id="what-we-do"></div>
			<div class="section-target section-target--view" id="what-we-do-view"></div>
			<div class="container container--large">
				<div class="content-cap content-cap--large copy copy--centered">
					<p>Clearhead, the experience optimization company, uses evidence and experimentation to create more confident and measurable outcomes. Our services are built on a unifying framework for continuous optimization. Together, we solidify goals, discover the largest problems to solve, and validate the big impact ideas. Only then do you get&nbsp;confident&nbsp;results.</p>
				</div>
				<div class="services-feature">
					<div class="intro">
						<h6>Our Unifying Framework</h6>
						<h2>Problem Solution Mapping</h2>
						<a href="." class="button button--light button--small">Learn More</a>
					</div>
					<ul>
						<li>
							<a href=".">
								<h4>Experience &amp; Design</h4>
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services/experience-design.svg" alt="">
								</div>
								<span class="button button--small">Learn More</span>
								<div class="details">
									<ul>
										<li>User Experience (UX) Design</li>
										<li>User Interface (UI) Design</li>
										<li>Information Architecture (IA)</li>
										<li>Front-End Development</li>
									</ul>
									<ul>
										<li>DDR (Data-Driven Redesign)</li>
										<li>DDX (Data-Driven Experience Design)</li>
									</ul>
								</div>
							</a>
						</li>
						<li>
							<a href=".">
								<h4>Research &amp; Analytics</h4>
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services/research-analytics.svg" alt="">
								</div>
								<span class="button button--small">Learn More</span>
								<div class="details">
									<ul>
										<li>Usability Testing</li>
										<li>Digital Analytics</li>
										<li>Statistical Modeling</li>
										<li>Heuristic Evalution</li>
									</ul>
									<ul>
										<li>Experience Mapping</li>
									</ul>
								</div>
							</a>
						</li>
						<li>
							<a href=".">
								<h4>Experimentation &amp; Personalization</h4>
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services/experimentation-personalization.svg" alt="">
								</div>
								<span class="button button--small">Learn More</span>
								<div class="details">
									<ul>
										<li>Testing + P13N Strategy</li>
										<li>A/B/n + MVT Test Execution</li>
										<li>Data Storytelling</li>
										<li>Audience Discovery</li>
									</ul>
									<ul>
										<li>DDO (Data-Driven Optimization)</li>
										<li>DDP (Data-Driven Personalization)</li>
									</ul>
								</div>
							</a>
						</li>
						<li>
							<a href=".">
								<h4>Data-Driven Consulting</h4>
								<div class="icon">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services/test-learn-consulting.svg" alt="">
								</div>
								<span class="button button--small">Learn More</span>
								<div class="details">
									<ul>
										<li>Process Design + Engineering</li>
										<li>Maturity Mapping</li>
										<li>Saas Technology Consultation</li>
										<li>Training + Workshops</li>
									</ul>
									<ul>
										<li>DDT (Data-Driven Transformation)</li>
									</ul>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<hr>
				<div class="content-cap content-cap--small copy copy--centered">
					<h2 class="lowercase">Data Stories That Reveal Insights and Inspire Change</h2>
				</div>
				<div class="content-cap content-cap--large copy copy--centered">
					<p>We’ve investigated every corner of digital experiences & organizations across many industries. Whatever the problem, user journey, device, platform or success metric, we will optimize it.</p>
				</div>
				<div class="stories-blocks">
					<ul>
						<li>
							<a href="." class="block block--tall">
								<div class="background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/blu-dot-photo.jpg');"></div>
								<div class="label moves moves--down">Case Study</div>
								<h4 class="moves moves--down">Testing the Power of Print: Our Blu Dot Case Study</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-1"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">See the Study</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-1)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/blu-dot-logo.svg" alt="">
								</div>
							</a>
						</li>
						<li>
							<a href="." class="block">
								<div class="background"></div>
								<div class="label moves moves--down">From the Blog</div>
								<h4 class="moves moves--down">How Problem Solution Mapping Was Invented… and Why It Wins More Revenue</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-2"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">Read the Post</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-2)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/light-bulb.svg" alt="">
								</div>
							</a>
						</li>
						<li class="dn-w1000">
							<a href="." class="block block--tall">
								<div class="background background--topped" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/steve-madden-photo.jpg');"></div>
								<div class="label moves moves--down">Case Study</div>
								<h4 class="capped moves moves--down">Revenue in Simplification: Steve Madden Case Study</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-3"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">See the Study</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-3)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/steve-madden-logo.svg" alt="">
								</div>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="." class="block block--tall">
								<div class="background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/adidas-photo.jpg');"></div>
								<div class="label moves moves--down">Case Study</div>
								<h4 class="moves moves--down">Data-Driven Approach Scores Big: Adidas Case Study</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-4"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">See the Study</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-4)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/adidas-logo.svg" alt="">
								</div>
							</a>
						</li>
						<li>
							<a href="." class="block block--tall">
								<div class="background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/study-photo.jpg');"></div>
								<div class="label moves moves--down">Latest Report</div>
								<h4 class="moves moves--down">Digital Optimization Benchmarking Study</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-5"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">See the Report</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-5)" fill="white" fill-opacity="1"/>
								</svg>
							</a>
						</li>
						<li class="dn-w1000">
							<a href="." class="block">
								<div class="background"></div>
								<div class="label moves moves--down">From the Blog</div>
								<h4 class="moves moves--down">Stack the chips in your favor with the physics of ROI</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-6"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">Read the Post</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-6)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/light-bulb.svg" alt="">
								</div>
							</a>
						</li>
					</ul>
					<ul class="dn-n1000">
						<li>
							<a href="." class="block">
								<div class="background"></div>
								<div class="label moves moves--down">From the Blog</div>
								<h4 class="moves moves--down">Stack the chips in your favor with the physics of ROI</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-7"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">Read the Post</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-7)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/light-bulb.svg" alt="">
								</div>
							</a>
						</li>
						<li>
							<a href="." class="block block--tall">
								<div class="background background--topped" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/steve-madden-photo.jpg');"></div>
								<div class="label moves moves--down">Case Study</div>
								<h4 class="capped moves moves--down">Revenue in Simplification: Steve Madden Case Study</h4>

								<svg class="button-svg moves moves--down" width="182" height="46">
									<defs><mask id="mask-8"><svg>
										<rect x="0" y="0" width="182" height="46" rx="2" ry="2" style="fill: #fff"/>
										<text text-anchor="middle" x="91" y="28">See the Study</text>
									</svg></mask></defs>
									<rect width="182" height="46" mask="url(#mask-8)" fill="white" fill-opacity="1"/>
								</svg>

								<div class="icon moves moves--up">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stories/steve-madden-logo.svg" alt="">
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="content-section">
			<div class="section-target" id="partners"></div>
			<div class="section-target section-target--view" id="partners-view"></div>
			<div class="container container--large flex-space">
				<div class="content-cap content-cap--small">
					<h2 class="lowercase">We Love Working with Clients That Inspire Us to Think Bigger</h2>
				</div>
				<div class="logos-grid logos-grid--home-arrangement">
					<ul>
						<li><div><span><img style="max-width: 45%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/adidas.svg" alt="Adidas"></span></div></li>
						<li><div><span><img style="max-width: 45%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/cvs.svg" alt="CVS"></span></div></li>
						<li><div><span><img style="max-width: 86%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/patagonia.svg" alt="Patagonia"></span></div></li>
						<li><div><span><img style="max-width: 63%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/tesco.svg" alt="Tesco"></span></div></li>
						<li><div><span><img style="max-width: 45%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/p-g.svg" alt="P and G"></span></div></li>
						<li><div><span><img style="max-width: 32%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/usaa.svg" alt="USAA"></span></div></li>
						<li><div><span><img style="max-width: 41%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/wwe.svg" alt="WWE"></span></div></li>
						<li><div><span><img style="max-width: 66%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/sonos.svg" alt="Sonos"></span></div></li>
						<li><div><span><img style="max-width: 62%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/ulta.svg" alt="Ulta"></span></div></li>
						<li><div><span><img style="max-width: 72%;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/west-elm.svg" alt="West Elm"></span></div></li>
					</ul>
				</div>
				<div class="testimonial-blocks">
					<ul>
						<li>
							<blockquote>
								<q>The Clearhead team are the thought leaders in the space and their methodology resonated with me. Working with the team has been awesome and they are very much partners. They’ve made a significant difference and impact.</q>
								<cite>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/delia-vallejo.jpg" alt="Delia Vallejo">
									<div class="info">
										<strong>Delia Vallejo</strong>
										<span>Senior Director Ecommerce,</span>
										<span>Keurig Green Mountain</span>
									</div>
									<div class="icon">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/keurig.svg" alt="Keurig">
									</div>
								</cite>
							</blockquote>
						</li>
						<li>
							<blockquote>
								<q>The Clearhead team are the thought leaders in the space and their methodology resonated with me. Working with the team has been awesome and they are very much partners. They’ve made a significant difference and impact.</q>
								<cite>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/jack-rusina.jpg" alt="Delia Vallejo">
									<div class="info">
										<strong>Jack Rusina</strong>
										<span>Senior Manager of User Experience,</span>
										<span>Adidas</span>
									</div>
									<div class="icon">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clients/adidas.svg" alt="Adidas">
									</div>
								</cite>
							</blockquote>
						</li>
					</ul>
				</div>
				<div class="content-cap content-cap--small">
					<h4 class="lowercase">We Are Experts on Your Technology, Without Bias</h4>
				</div>
				<div class="logos-grid logos-grid--small">
					<ul>
						<li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/optimizely.svg" alt="Adidas"></span></div></li>
						<li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/monetate.svg" alt="Adidas"></span></div></li>
						<li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/google-analytics.svg" alt="Adidas"></span></div></li>
						<li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/maxymiser.svg" alt="Adidas"></span></div></li>
						<li><div><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/tealium.svg" alt="Adidas"></span></div></li>
						<li><div><span><img style="width: 8.5em;" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tools/adobe-target.png" alt="Adidas"></span></div></li>
					</ul>
				</div>
				<div class="content-cap centered">
					<ul class="inline-bulleted-list">
						<li>Crazy&nbsp;Egg</li>
						<li>Adobe&nbsp;Target</li>
						<li>UserTesting.com</li>
						<li>Demandware</li>
						<li>Magento</li>
						<li>Sitecore</li>
						<li>SAP</li>
						<li>Google&nbsp;Analytics</li>
						<li>Bloomreach</li>
						<li>Clicktale</li>
						<li>SiteCatalyst</li>
						<li>Shopify</li>
						<li>Coremetrics</li>
						<li>Hot&nbsp;Jar</li>
						<li>OptimalSort</li>
						<li>TreeJack</li>
						<li>Hybris</li>
						<li>WordPress</li>
						<li>Drupal</li>
						<li>ATG</li>
						<li>Many,&nbsp;many&nbsp;more</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="content-section">
			<div class="section-target" id="who-we-are"></div>
			<div class="section-target section-target--view" id="who-we-are-view"></div>
			<div class="container container--large flex-space">
				<div class="content-cap content-cap--medium copy copy--centered">
					<h2 class="lowercase">We Were You</h2>
					<p>We’ve spent decades on your side of the table. Through failures and learnings, we came to realize that optimization isn’t just another thing, it’s the thing. Clearhead was started by Sam, Matty and Ryan—operators like you—because they decided it was time to graduate from buzzwords to real data-driven change &amp; improvement.</p>
				</div>
			</div>

			<div class="photo-links">
				<div class="container container--large">
					<ul>
						<li>
							<a class="button button--white" href=".">Read Sam’s Story</a>
							<div class="background background--arrows-svg">
								<svg width="632px" height="39px" viewBox="0 0 632 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="CH.me-Homepage" transform="translate(-397.000000, -4602.000000)" stroke="currentColor" stroke-width="2">
											<g id="Contents-#3" transform="translate(0.000000, 4137.000000)">
												<g id="Group-12" transform="translate(0.000000, 330.000000)">
													<g id="Group-51" transform="translate(408.440745, 152.643116) rotate(-15.000000) translate(-408.440745, -152.643116) translate(400.440745, 132.643116)">
														<path d="M2.44280674,0.657785549 C-2.69872432,17.5770377 0.952294007,29.4419568 13.3958617,36.2525429" id="Path-20"></path>
														<polyline id="Path-30" points="3.25054353 39.7005348 15.2705695 36.0706047 11.2151943 23.4271141"></polyline>
													</g>
												</g>
											</g>
										</g>
									</g>
								</svg>
							</div>
						</li>
						<li>
							<a class="button button--white" href=".">Read Matty’s Story</a>
							<div class="background background--arrows-svg">
								<svg width="632px" height="39px" viewBox="0 0 632 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="CH.me-Homepage" transform="translate(-397.000000, -4602.000000)" stroke="currentColor" stroke-width="2">
											<g id="Contents-#3" transform="translate(0.000000, 4137.000000)">
												<g id="Group-12" transform="translate(0.000000, 330.000000)">
													<g id="Group-53" transform="translate(770.915923, 137.085600)">
														<path d="M19.0283873,0.429813891 C14.6188308,15.3222844 8.58151639,25.4829299 0.916443969,30.9117504" id="Path-23"></path>
														<polyline id="Path-24" points="0.544553663 19.7172282 2.26675996 31.0162997 19.3781413 24.9292057"></polyline>
													</g>
												</g>
											</g>
										</g>
									</g>
								</svg>
							</div>
						</li>
						<li>
							<a class="button button--white" href=".">Read Ryan’s Story</a>
							<div class="background background--arrows-svg">
								<svg width="632px" height="39px" viewBox="0 0 632 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="CH.me-Homepage" transform="translate(-397.000000, -4602.000000)" stroke="currentColor" stroke-width="2">
											<g id="Contents-#3" transform="translate(0.000000, 4137.000000)">
												<g id="Group-12" transform="translate(0.000000, 330.000000)">
													<g id="Group-52" transform="translate(1004.392199, 137.085600)">
														<polyline id="Path-32" points="1.92586051 21.8779143 1.67350638 32.5884118 18.8512967 31.2873535"></polyline>
														<path d="M23.0439172,0 C21.6330952,18.6898052 13.9517895,29.5474462 0,32.572923" id="Path-31"></path>
													</g>
												</g>
											</g>
										</g>
									</g>
								</svg>
							</div>
						</li>
					</ul>
				</div>
				<div class="background" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/people/founders.jpg');"></div>
			</div>

			<div class="container container--large flex-space">
				<div class="content-cap content-cap--medium copy copy--centered">
					<h2 class="lowercase">Success Starts with the Best Team</h2>
					<p>More than just practitioners, your co-pilots are fun, middle-brained thinkers who are experts in technology and the Clearhead optimization methodology. Consider us your secret weapon for simplifying small tasks and taking big steps towards change.</p>
				</div>
				<div class="team-grid">
					<ul>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/strategic-consultants.jpg" alt="">
								<figcaption>strategic consultants</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/optimization-directors.jpg" alt="">
								<figcaption>optimization directors</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/front-end-developers.jpg" alt="">
								<figcaption>front-end developers</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/ux-interface-designers.jpg" alt="">
								<figcaption>UX + interface designers</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/data-analysts.jpg" alt="">
								<figcaption>data analysts</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/project-managers.jpg" alt="">
								<figcaption>project managers</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/ux-researchers.jpg" alt="">
								<figcaption>UX researchers</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/people/account-directors.jpg" alt="">
								<figcaption>account directors</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>

			<?php endwhile; // End of the loop. ?>
<?php
// get_sidebar();
get_footer();
