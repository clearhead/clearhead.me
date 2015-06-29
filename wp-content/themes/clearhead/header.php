<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package clearhead
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//d3c3cq33003psk.cloudfront.net/opentag-128043-1821808.js" async defer></script>
<script src="//dd6zx4ibq538k.cloudfront.net/smartserve-3855.js" async defer></script>
<script src="//cdn.optimizely.com/js/2448130542.js"></script>
<script src="//use.typekit.net/jlb8kqs.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<meta name="google-site-verification" content="rOVbTCkNzfmtGVaB3SNC3RQvDzAq88fhCv8fTG4mBbY" />
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
		<div class="site-branding left">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation right" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'menu', 'clearhead' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' =>'clearfix' ) ); ?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content"><!-- #content -->

