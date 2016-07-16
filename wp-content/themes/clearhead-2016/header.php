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

<script src="//use.typekit.net/jlb8kqs.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<meta name="google-site-verification" content="rOVbTCkNzfmtGVaB3SNC3RQvDzAq88fhCv8fTG4mBbY" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'clearhead-2016' ); ?></a>

	<header role="banner">
		<div class="container">
			<?php if ( is_front_page() ): ?>
				<a class="logo" href="#main" rel="home">
			<?php else: ?>
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php endif; ?>

				<figure>
					<div class="icon"></div>
					<figcaption>Clearhead</figcaption>
				</figure>
			</a>
			<nav role="navigation">
				<?php /*
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'clearhead-2016' ); ?></button>
				*/ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
