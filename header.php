<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site menuCenter" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar menuCenter">
			<a href="/" class=" whiteText"> jesuswalkyouth </a>
			<!-- This is the area above the menu -->
			<!-- 			
			<div class="top-header-holder">
				<div class="container">
					<div class="row">

						<div class="extra-info col">
							<p>This is the getup</p>
							<p>A test of some osrtas</p>
							<p>Please send help</p>
						</div>
						<div class="socialBtns col"> -->
			<!-- <a href="https://www.instagram.com/jesuswalkyouth/?hl=en"></a> -->
			<!-- <a href="https://www.instagram.com/jesuswalkyouth/?hl=en"><i class="fa fa-youtube fa-2x"></i></a>
							<a href="https://www.instagram.com/jesuswalkyouth/?hl=en"><i class="fa fa-facebook fa-2x"></i></a> -->
			<!-- </div>

						<button class="navbar-toggler navMenu " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
							<div class="menu-bar"></div>
							<div class="menu-bar"></div>
							<div class="menu-bar"></div>
							<div class="menu-text">Menu</div>

						</button>
					</div>
				</div> -->

		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg background blk whiteText " aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e('Main Navigation', 'understrap'); ?>
			</h2>


			<div class="container whiteText letterSpace ">
				<div class="logo-holder whiteText ">
					<!-- <img src="
					<?php // echo get_template_directory_uri(); 
					?>
					/img/circle.png" alt="Jwalk Logo" class="logo"> -->

				</div>
				<button class="navbar-toggler navMenu flexspace" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
					<div class="menu-bar"></div>
					<div class="menu-bar"></div>
					<!-- This is mobile menu stuff -->
					<div class="menu-bar"></div>
					<div class="menu-text"></div>

				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse flexspace',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu', //this is just semantic and there is no actual class. 
						'depth'           => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
				<?php if ('container' === $container) : ?>
			</div><!-- .container -->
		<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->