<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jesse
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
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jesse' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="site-branding">
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
		</div> --><!-- .site-branding -->
		

		<div class="p-y-lg p-x" id="header-bg" style="background: url(<?php echo bloginfo('template_url') . '/img/track-satellite-1.jpg';?>) top left;">		  	
		  <nav class="navbar navbar-transparent m-b-0">
		    <div class="container-fluid">
		      <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed m-y" data-toggle="collapse" data-target="#navbar-collapse-com">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-left" href="<?php bloginfo('url'); ?>">
		          <!-- <h4 class="text-uppercase m-y-0">His 956 Facility</h4> -->
		          <img src="<?php echo bloginfo('template_url') . '/img/his956-logo-web-trans.png'?>" height="80px" alt="">
		        </a>
		      </div>
		      <div class="navbar-collapse collapse" id="navbar-collapse-com">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
		      </div>
		    </div>
		  </nav>
		</div>


		<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jesse' ); ?></button> -->
			<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?> -->
		<!-- </nav> --><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
