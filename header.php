<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lfr
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lfr' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top">
			<ul class="user-links">
				<?php if ( is_user_logged_in( ) ) : ?>
					<li>Hi <?php echo wp_get_current_user()->display_name; ?></li>
					<li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
				<?php else: ?>
					<li><a href="<?php echo wp_login_url('/'); ?>">Sign in</a></li>
				<?php endif; ?>
					<li><a class="info-mailto" href="mailto:help@leatherheadfood.com">help@leatherheadfood.com</a></li>
					<li><a class="info-tel uk" href="tel:+44 (0)1372 376761">+44 (0)1372 376761</a></li>
			</ul>

			<?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-header' ); ?>
			<?php endif; ?>
		</div><!-- .top -->

		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lfr' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
