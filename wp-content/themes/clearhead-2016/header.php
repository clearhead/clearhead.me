<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clearhead-2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php /*
	<script src="//use.typekit.net/jlb8kqs.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	*/ ?>

	<script src="https://use.typekit.net/erk8dkx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<meta name="google-site-verification" content="rOVbTCkNzfmtGVaB3SNC3RQvDzAq88fhCv8fTG4mBbY" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'clearhead-2016' ); ?></a>

	<header role="banner">
		<div class="main-header">
			<div class="container">
				<?php if ( is_front_page() ): ?>
					<a class="logo" href="#main" rel="home">
				<?php else: ?>
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php endif; ?>

					<figure>
						<div class="icon">
							<?php get_template_part( 'img/logo-icon.svg' ); ?>
						</div>
						<figcaption>
							<?php get_template_part( 'img/logo-type.svg' ); ?>
							<span>Clearhead</span>
						</figcaption>
					</figure>
				</a>
				<div class="menu-desktop">
					<nav role="navigation">
						<?php /*
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clearhead-2016' ); ?></button>
						*/ ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
				</div>
				<a href="#show-menu" class="menu-toggle-mobile">
					<figure>
						<figcaption>Menu</figcaption>
						<div class="icon"><span>+</span></div>
					</figure>
				</a>
			</div>
		</div>
		<div class="menu-mobile">
			<div class="container">
				<nav role="navigation">
			        <div class="menu-main-menu-container">
			            <ul class="menu">
			                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
			                    <a href="/#what">Services</a>
			                </li>
			                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
			                    <a href="/#with">Process</a>
			                </li>
			                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
			                    <a href="/#who">Team</a>
			                </li>
			                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11 menu-item-blog">
			                    <a href="/blog/">Blog</a>
			                </li>
			                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
			                    <a href="/#contact">Contact</a>
			                </li>
			            </ul>
			        </div>
			    </nav>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
