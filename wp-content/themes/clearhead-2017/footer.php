<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clearhead-2017
 */

?>

	</div><!-- #content -->
	<?php if(is_front_page() || is_page_template( 'templates/service.php' )): ?>
		<section class="content-section contact-callout">
		<div class="section-target" id="contact"></div>
		<div class="section-target section-target--view section-target--view--end" id="contact-view"></div>
		<div class="container container--large">
			<div class="flex-row">
				<div class="column">
					<ul class="locations-list">
						<li>
							<h4>Austin</h4>
							<address>
								3601 S. Congress Ave.<br>
								Bldg. C302<br>
								Austin, TX 78704<br>
								United States
							</address>
							<a href=".">View on Map</a>
						</li>
						<li>
							<h4>Cincinnati</h4>
							<address>
								1311 Vine St<br>
								Cincinnati, OH 45202<br>
								United States
							</address>
							<a href=".">View on Map</a>
						</li>
						<li>
							<h4>London</h4>
							<address>
								14 Grays Inn Road<br>
								London<br>
								WC1X 8HN<br>
								United Kingdom
							</address>
							<a href=".">View on Map</a>
						</li>
					</ul>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/map.png" alt="Map of Clearhead’s location in Austin, TX">
				</div>
				<div class="column" id="contact-form">
					<h4>Let’s talk.</h4>

					<!--[if lte IE 8]>
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
					<![endif]-->
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
					<script>
					hbspt.forms.create({
						css: '',
						portalId: '2142966',
						formId: 'd0a43d12-9761-4388-a142-1c3cd3171fed'
					});
					</script>

				</div>
			</div>
		</div>
	</section>
	<footer class="site-footer">
		<div class="container container--large">
			<div class="flex-row">
				<a href="/" class="logo">
					<svg width="130px" height="20px" viewBox="0 0 130 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="CH.me-Homepage" transform="translate(-150.000000, -6220.000000)" fill="currentColor">
								<g id="Footer-#2" transform="translate(0.000000, 6191.000000)">
									<path d="M272.533081,38.6575496 C270.683665,38.6575496 269.901339,39.3424504 269.901339,41.7399762 C269.901339,44.2738858 270.683665,44.8905947 272.533081,44.8905947 C274.097346,44.8905947 275.448425,43.8628708 275.448425,41.7399762 C275.448425,39.9587867 274.452913,38.6575496 272.533081,38.6575496 L272.533081,38.6575496 Z M270.683665,34.9591593 C273.244216,34.9591593 274.452913,35.8493814 275.448425,37.082054 L275.448425,29 L280,29 L280,48.5889849 L275.448425,48.5889849 L275.448425,46.6028469 C274.452913,48.3836637 273.244216,49 270.683665,49 C266.914803,49 264.852202,46.2600238 264.852202,41.7399762 C264.852202,37.4245044 267.341562,34.9591593 270.683665,34.9591593 L270.683665,34.9591593 Z M255.749439,38.6575496 C254.113983,38.6575496 253.118084,39.3424504 253.118084,41.7399762 C253.118084,44.2738858 254.113983,44.8905947 255.749439,44.8905947 C257.313704,44.8905947 257.954035,43.8628708 257.954035,41.7399762 C257.954035,39.9587867 257.313704,38.6575496 255.749439,38.6575496 L255.749439,38.6575496 Z M264.425443,45.575123 L264.852202,45.575123 L264.070262,48.5889849 C263.501122,48.5889849 262.861178,49 261.865279,49 C260.656581,49 259.020738,48.3836637 257.954035,46.6028469 C257.313704,48.3836637 256.033816,49 254.113983,49 C250.273543,49 247.926565,46.2600238 247.926565,41.7399762 C247.926565,37.4245044 250.700302,34.9591593 254.113983,34.9591593 C256.460574,34.9591593 257.740463,35.8493814 257.954035,37.082054 L257.954035,35.2330452 L263.216745,35.2330452 L263.216745,44.6849009 C263.216745,45.575123 263.501122,45.7808168 264.070262,45.7808168 C264.425443,45.7808168 264.425443,45.7808168 264.425443,45.575123 L264.425443,45.575123 Z M239.74851,38.6575496 C238.468235,38.6575496 237.330341,39 236.761588,40.575123 L242.664242,40.575123 C242.095102,39 241.597539,38.6575496 239.74851,38.6575496 L239.74851,38.6575496 Z M243.161805,43.8628708 L247.357812,44.8905947 C246.006732,47.8355195 243.446181,49 239.74851,49 C235.552503,49 232.210013,46.6028469 232.210013,42.1502459 C232.210013,37.4245044 235.552503,34.9591593 239.74851,34.9591593 C243.161805,34.9591593 247.357812,36.5342823 247.357812,41.7399762 L247.357812,43.0412133 L236.761588,43.0412133 C237.330341,44.6849009 238.468235,45.575123 239.74851,45.575123 C241.597539,45.575123 242.095102,44.8905947 243.161805,43.8628708 L243.161805,43.8628708 Z M216.635843,29 L221.187418,29 L221.187418,37.4245044 C222.182543,35.8493814 223.818386,34.9591593 226.236555,34.9591593 C228.938714,34.9591593 230.930125,36.2603965 230.930125,39.3424504 L230.930125,48.5889849 L225.952178,48.5889849 L225.952178,40.917946 C225.952178,39.9587867 225.383038,38.6575496 224.387139,38.6575496 C222.182543,38.6575496 221.187418,39.9587867 221.187418,42.7669548 L221.187418,48.5889849 L216.635843,48.5889849 L216.635843,29 Z M205.257293,35.2330452 L210.30643,35.2330452 L210.022054,37.082054 C210.875184,35.8493814 212.227037,34.9591593 213.435735,34.9591593 C214.715623,34.9591593 215.355954,35.2330452 215.995899,35.8493814 L213.790915,39.9587867 C213.435735,39.3424504 213.008976,39 212.227037,39 C210.875184,39 210.30643,39.9587867 210.30643,41.7399762 L210.30643,48.5889849 L205.257293,48.5889849 L205.257293,35.2330452 Z M195.301014,38.6575496 C193.736362,38.6575496 192.74085,39.3424504 192.74085,41.7399762 C192.74085,44.2738858 193.736362,44.8905947 195.301014,44.8905947 C196.936857,44.8905947 198.145554,43.8628708 198.145554,41.7399762 C198.145554,39.9587867 196.936857,38.6575496 195.301014,38.6575496 L195.301014,38.6575496 Z M204.688153,45.575123 L203.763832,48.5889849 C203.408264,48.5889849 202.412752,49 201.70123,49 C200.421342,49 198.643504,48.3836637 198.145554,46.6028469 C196.936857,48.3836637 195.656581,49 193.736362,49 C190.393871,49 188.189275,46.2600238 188.189275,41.7399762 C188.189275,37.4245044 190.393871,34.9591593 193.736362,34.9591593 C196.225335,34.9591593 197.50561,35.8493814 197.932369,37.082054 L197.932369,35.2330452 L202.910315,35.2330452 L202.910315,44.6849009 C202.910315,45.575123 203.408264,45.7808168 203.763832,45.7808168 C204.048209,45.7808168 204.048209,45.7808168 204.688153,45.575123 L204.688153,45.575123 Z M179.868839,38.6575496 C178.233382,38.6575496 177.237484,39 177.024298,40.575123 L182.357812,40.575123 C182.357812,39 181.433491,38.6575496 179.868839,38.6575496 L179.868839,38.6575496 Z M182.855761,43.8628708 L186.909386,44.8905947 C185.700302,47.8355195 183.28252,49 179.868839,49 C175.388455,49 172.330341,46.6028469 172.330341,42.1502459 C172.330341,37.4245044 175.388455,34.9591593 179.868839,34.9591593 C182.855761,34.9591593 186.909386,36.5342823 186.909386,41.7399762 L186.909386,43.0412133 L177.024298,43.0412133 C177.024298,44.6849009 178.233382,45.575123 179.868839,45.575123 C181.219918,45.575123 182.357812,44.8905947 182.855761,43.8628708 L182.855761,43.8628708 Z M165.645748,48.5893576 L170.694885,48.5893576 L170.694885,29 L165.645748,29 L165.645748,48.5893576 Z M157.609688,34.9591593 C161.165364,34.9591593 163.085584,36.2603965 164.365472,39 L160.738606,40.917946 C159.814285,39.3424504 159.458717,38.6575496 157.609688,38.6575496 C155.902654,38.6575496 155.26271,39.9587867 155.26271,41.7399762 C155.26271,44.2738858 155.902654,45.575123 157.609688,45.575123 C158.889577,45.575123 160.169852,44.6849009 160.738606,43.0412133 L164.365472,44.6849009 C163.512342,47.3563124 161.165364,49 157.609688,49 C153.627254,49 150,46.6028469 150,42.1502459 C150,37.4245044 153.058113,34.9591593 157.609688,34.9591593 L157.609688,34.9591593 Z" id="Fill-4"></path>
								</g>
							</g>
						</g>
					</svg>
				</a>
				<nav>
					<ul>
						<li class="">
							<a class="smooth-scroll" href="/#what-we-do">Services</a>
						</li>
						<li>
							<a class="smooth-scroll" href="/#partners">Partners</a>
						</li>
						<li>
							<a class="smooth-scroll" href="/#who-we-are">Team</a>
						</li>
						<li>
							<a class="smooth-scroll" href="/#contact">Contact Us</a>
						</li>
						<li>
							<a href="/jobs">Jobs</a>
						</li>
						<li>
							<a href="/blog">Blog</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="flex-row">
				<ul class="social-list">
					<li>
						<a href="https://www.facebook.com/ClearheadMe/">
							<svg width="12px" height="22px" viewBox="0 0 12 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>Facebook</title>
								<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="CH.me-Homepage" transform="translate(-150.000000, -6288.000000)" fill="currentColor">
										<g id="Footer-#2" transform="translate(0.000000, 6191.000000)">
											<g id="Social" transform="translate(150.000000, 96.000000)">
												<path d="M7.78896556,23 L7.78896556,12.9648254 L11.3270218,12.9648254 L11.8567155,9.05386965 L7.78896556,9.05386965 L7.78896556,6.55689722 C7.78896556,5.42458426 8.11918279,4.65297638 9.8247272,4.65297638 L12,4.65200544 L12,1.15408855 C11.623687,1.10651238 10.3324948,1 8.83030221,1 C5.69405446,1 3.54703063,2.82255587 3.54703063,6.16968541 L3.54703063,9.05386965 L0,9.05386965 L0,12.9648254 L3.54703063,12.9648254 L3.54703063,23 L7.78896556,23 Z" id="Facebook"></path>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/clearheadme">
							<svg width="21px" height="18px" viewBox="0 0 21 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>Twitter</title>
								<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="CH.me-Homepage" transform="translate(-192.000000, -6290.000000)" fill="currentColor">
										<g id="Footer-#2" transform="translate(0.000000, 6191.000000)">
											<g id="Social" transform="translate(150.000000, 96.000000)">
												<path d="M62.4207941,3.33276729 C61.5875898,3.8529685 60.6669159,4.23129666 59.6828825,4.43372529 C58.8990201,3.55134408 57.778736,3 56.5384615,3 C54.1610819,3 52.2317037,5.03466726 52.2317037,7.54397488 C52.2317037,7.90038768 52.2687101,8.24584281 52.3427229,8.57861011 C48.7620751,8.38886931 45.5879369,6.58200634 43.4617521,3.829323 C43.0905668,4.50293166 42.8786212,5.28438691 42.8786212,6.11659351 C42.8786212,7.69219186 43.6389341,9.08323988 44.7956639,9.89814488 C44.0902998,9.87622953 43.4247457,9.66976387 42.8427362,9.33180609 L42.8427362,9.38717119 C42.8427362,11.5896639 44.3280378,13.427093 46.3005901,13.8429079 C45.9394975,13.9496011 45.5582196,14.003236 45.165167,14.003236 C44.8876191,14.003236 44.6167997,13.9755535 44.3543908,13.9224953 C44.9027581,15.7270514 46.4929111,17.0413957 48.3785545,17.0765756 C46.9044669,18.2957611 45.0457373,19.022428 43.0277681,19.022428 C42.6801324,19.022428 42.3364216,19.0016661 42,18.9601423 C43.9063893,20.2473807 46.1721891,21 48.6045177,21 C56.530051,21 60.8626011,14.0770562 60.8626011,8.07167345 C60.8626011,7.87385858 60.8592369,7.67662042 60.8519478,7.48284259 C61.6935626,6.84210695 62.424719,6.04219666 63,5.13097946 C62.228473,5.49200602 61.3975115,5.7365352 60.5261795,5.84611195 C61.4160147,5.28438691 62.0989507,4.39393163 62.4207941,3.33276729" id="Twitter"></path>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/company/2803373/">
							<svg width="27px" height="23px" viewBox="0 0 27 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>LinkedIn</title>
								<defs>
									<polygon id="path-1" points="22.6052791 22.9616667 0 22.9616667 0 11.4808333 0 0 22.6052791 0"></polygon>
								</defs>
								<g id="CH.me-Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="CH.me-Homepage" transform="translate(-236.000000, -6287.000000)">
										<g id="Footer-#2" transform="translate(0.000000, 6191.000000)">
											<g id="Social" transform="translate(150.000000, 96.000000)">
												<g id="LinkedIn-Logo" transform="translate(86.000000, 0.000000)">
													<g id="In-Black-0p5in-TM">
														<g id="Group-3">
															<mask id="mask-2" fill="white">
																<use xlink:href="#path-1"></use>
															</mask>
															<g id="Clip-2"></g>
															<path d="M19.2610465,19.5985556 L15.9111628,19.5985556 L15.9111628,14.2612778 C15.9111628,12.9886111 15.8873023,11.3511389 14.1687209,11.3511389 C12.4237674,11.3511389 12.1575349,12.7368889 12.1575349,14.1692778 L12.1575349,19.5985556 L8.80890698,19.5985556 L8.80890698,8.62308333 L12.0225349,8.62308333 L12.0225349,10.1225556 L12.069,10.1225556 C12.5160698,9.25941667 13.6105116,8.34963889 15.241186,8.34963889 C18.6337674,8.34963889 19.2610465,10.6221667 19.2610465,13.5783056 L19.2610465,19.5985556 Z M5.02890698,7.12169444 C3.9514186,7.12169444 3.08365116,6.23555556 3.08365116,5.14369444 C3.08365116,4.05311111 3.9514186,3.16633333 5.02890698,3.16633333 C6.10137209,3.16633333 6.97227907,4.05311111 6.97227907,5.14369444 C6.97227907,6.23555556 6.10137209,7.12169444 5.02890698,7.12169444 Z M3.34988372,19.5985556 L6.70604651,19.5985556 L6.70604651,8.62308333 L3.34988372,8.62308333 L3.34988372,19.5985556 Z M20.9306512,0 L1.66709302,0 C0.747209302,0 0,0.742388889 0,1.65727778 L0,21.3401667 C0,22.2563333 0.747209302,23 1.66709302,23 L20.9306512,23 C21.8524186,23 22.6052791,22.2563333 22.6052791,21.3401667 L22.6052791,1.65727778 C22.6052791,0.742388889 21.8524186,0 20.9306512,0 L20.9306512,0 Z" id="Fill-1" fill="currentColor" mask="url(#mask-2)"></path>
														</g>
														<polyline id="Fill-4" fill="currentColor" points="23.5678605 18.2230278 24.0017442 18.2230278 24.0017442 19.5985556 24.2378372 19.5985556 24.2378372 18.2230278 24.6698372 18.2230278 24.6698372 17.9834444 23.5678605 17.9834444 23.5678605 18.2230278"></polyline>
														<polyline id="Fill-5" fill="currentColor" points="26.2025581 17.9834444 25.7397907 19.1692222 25.2770233 17.9834444 24.9417209 17.9834444 24.9417209 19.5985556 25.1759302 19.5985556 25.1759302 18.3699722 25.6613023 19.5985556 25.8182791 19.5985556 26.3036512 18.3699722 26.3036512 19.5985556 26.5384884 19.5985556 26.5384884 17.9834444 26.2025581 17.9834444"></polyline>
													</g>
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
					</li>
				</ul>
				<small>&copy; <?php echo $curr_year = date('Y');?> Clearhead. All rights reserved.</small>
			</div>
		</div>
	</footer>
	<?php else: ?>

	<footer role="contentinfo" id="contact">
		<div class="main-footer">
			<div class="container">
				<div class="contact">
					<h3 class="mt0 mb0">need to talk?</h3>
					<!--[if lte IE 8]>
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
					<![endif]-->
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
					<script>
					  hbspt.forms.create({
					    css: '',
					    portalId: '2142966',
					    formId: 'd0a43d12-9761-4388-a142-1c3cd3171fed'
					  });
					</script>
					<div class="contact-info">
						<div>
							<h3>Austin Office</h3>
							<p>
								3601 S. Congress Ave.
								<br>
								Bldg. C302
								<br>
								Austin, TX 78704
								<br>
								United States
							</p>
						</div>
						<div>
							<h3>London Office</h3>
							<p>
								14 Grays Inn Road
								<br>
								London
								<br>
								WC1X 8HN
								<br>
								United Kingdom
							</p>
						</div>
					</div>
				</div>
				<div class="info cap-3c-2g">
					<h2>Clearhead</h2>
					<h5>The Digital Optimization Company</h5>
					<nav role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'small list-reset mt2 ml0 dual-m' ) ); ?>
					</nav>

					<div class="post-embed">
						<h3>Recently Published</h3>

						<?php $recently = new WP_Query(array('showposts'=> 1,'post__not_in' => array($post->ID))); ?>
						<?php while ($recently->have_posts()) : $recently->the_post(); ?>

						<p>“<?php echo clearhead_twitter_excerpt( ); ?>”</p>
						<a href="<?php the_permalink();?>">Read Post</a>

						<?php endwhile; wp_reset_query(); ?>

					</div>
					<div class="info-action">
						<h3>Follow Us</h3>
						<a href="https://twitter.com/clearheadme" class="button button-reduced button-twitter">
							<div class="">
								<figure></figure>
								<span>@clearheadme</span>
							</div>
						</a>
					</div>
					<div class="info-action">
						<h3>Think you’d fit in?</h3>
						<a href="http://clearhead.theresumator.com/apply" class="button button-reduced">Apply Here</a>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="closing-text">
					<span class="dn_n640">Simple, sustainable optimization solutions. </span>Designed by Humans in Austin, TX.
				</div>
				<div class="site-info">
					&copy; <?php echo date("Y") ?> Clearhead
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->
<?php endif; ?>

<?php wp_footer(); ?>

<script type="text/javascript">
 <!-- SessionCam Client Integration v6.0 -->
 //<![CDATA[
 var scRec=document.createElement('SCRIPT');
 scRec.type='text/javascript';
 scRec.src="//d2oh4tlt9mrke9.cloudfront.net/Record/js/sessioncam.recorder.js"
 document.getElementsByTagName('head')[0].appendChild(scRec);
 //]]>
 <!-- End SessionCam -->
</script>

</body>
</html>
