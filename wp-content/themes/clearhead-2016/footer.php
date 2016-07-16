<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clearhead-2016
 */

?>

	</div><!-- #content -->

	<footer role="contentinfo">
		<div class="main-footer">
			<div class="container">
				<div class="contact" id="contact">
					<h3>Need to talk?</h3>
					<form> <!-- Still needs CMS integraton  -->
						<label for="name">Name <span>(required)</span></label>
						<input type="text" name="name">

						<label for="email">Email <span>(required)</span></label>
						<input type="email" name="email">

						<label for="message">Tell us about your project, goal or design <span>(required)</span></label>
						<textarea name="message" rows="4"></textarea>

						<input class="button button-reduced button-yellow" type="submit" value="Submit">
					</form>



					<div class="contact-info">
						<div>
							<h3>Our Location</h3>
							<p>
								3601 S. Congress Ave., C302<br>
								Austin, TX 78704
							</p>
						</div>
						<figure></figure>
					</div>
				</div>
				<div class="info cap-3c-2g">
					<h2>Clearhead</h2>
					<h5>The Digital Optimization Company</h5>
					<nav> <!-- Still needs CMS integraton  -->
						<ul>
							<li><a href=".">Services</a></li>
							<li><a href=".">Process</a></li>
							<li><a href=".">Team</a></li>
							<li><a href=".">Contact Us</a></li>
							<li><a href=".">Jobs</a></li>
							<li><a href=".">Blog</a></li>
						</ul>
					</nav>
					<div class="post-embed">
						<h3>Recently Published</h3>
						<p>
							“It’s hard to balance that urge to just dogpile the latest thing when you’re feeling like there’s a land grab or…”
						</p>
						<a href=".">Read Post</a>
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
						<a href="." class="button button-reduced">Apply Here</a>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				<div class="closing-text">
					Simple, sustainable optimization solutions. Designed by Humans in Austin, TX.
				</div>
				<div class="site-info">
					&copy; <?php echo date("Y") ?> Clearhead
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
