<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since nirmalraj 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/0daef.css" media="all">	
		
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<style type="text/css">
			img#wpstats {
				display:none;
			}
		</style>
	
		<style type="text/css">
			iframe#_hjRemoteVarsFrame {
				display: none !important; 
				width: 1px !important; 
				height: 1px !important;
				opacity: 0 !important; pointer-events:
				none !important;
			}
	
		</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header class="site-header">
		<a class="site-logo" href="<?php echo get_site_url(); ?>/">
			<h1>
				Nirmalraj&nbsp;Joseph
			</h1>
		</a>
		<br>
		<a class="toggle-menu non-active" href="<?php echo get_site_url(); ?>/#"><span class="fa-icon"></span> Menu</a>
		<nav class="primary-menu show">
			<ul id="menu-main-nav" class="menu">
				<li id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-290"><a href="	
<?php echo get_site_url(); ?>">Home</a></li>
				<li id="menu-item-902" class="projects menu-item menu-item-type-custom menu-item-object-custom menu-item-902"><a href="	
<?php echo get_site_url(); ?>/my-work/">My Work</a></li>
				<li id="menu-item-1127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1127"><a href="	
<?php echo get_site_url(); ?>/services/">Services</a></li>
				<li id="menu-item-790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-790"><a href="	
<?php echo get_site_url(); ?>/about/">About Me</a></li>
				<li id="menu-item-293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293"><a href="	
<?php echo get_site_url(); ?>/contact/">Contact</a></li>
				<!-- <li id="menu-item-560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-560"><a href="	
<?php echo get_site_url(); ?>/blog/">Blog</a></li>  -->
			</ul>
		</nav>
	</header><!-- .site-header -->

		<!-- <div id="content" class="site-content"> -->

