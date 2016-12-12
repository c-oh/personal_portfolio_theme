<?php
/**
 * The header for our theme.
 *
 * @package dumplinghub_site_Theme
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html( 'Skip to content' ); ?>
			</a>
			<header id="masthead" class="site-header" role="banner">
			
				<!-- hamburger button -->
			<div class="button-container" id="toggle">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
				<aside>
				 
	
						<!-- #site-navigation -->
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
					</aside>

		</header>
		</div>
		<!-- #masthead -->
		<div id="content" class="site-content">