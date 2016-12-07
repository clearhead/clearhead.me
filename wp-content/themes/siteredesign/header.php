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


	<script src="https://use.typekit.net/erk8dkx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<meta name="google-site-verification" content="rOVbTCkNzfmtGVaB3SNC3RQvDzAq88fhCv8fTG4mBbY" />

	<?php wp_head(); ?>

</head>
<?php
//Deal with front page needing a special class
$addClassString = "";
if(is_front_page()){
	$addClassString = "ch-report";
} ?>
<body <?php body_class($addClassString); ?>>
	<!-- Google Tag Manager -->
	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
	<div id="content" class="site-content">
