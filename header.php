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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php understrap_body_attributes(); ?> class="">
	<?php do_action('wp_body_open'); ?>
	<div class="site menuCenter" id="page">
		<!-- ******************* The Navbar Area ******************* -->\

		<!-- JW_Logo_SideText.png -->
		<div id="wrapper-navbar menuCenter">
			<a href="/" class=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon/JW_Logohalf.png" alt="Jesuswalk Logo"></a>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg background jwalk_Gray whiteText" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e('Main Navigation', 'understrap'); ?>
			</h2>


			<div class="container whiteText letterSpace ">

				<a href="/" class="hideForMobile">
					<i class="fa fa-home fa-lg " aria-hidden="true"></i>
				</a>

				<!-- I will be turning off default data-toggle. -->
				<!-- this is the navbtn -->
				<button class="navbar-toggler navMenu flexspace " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
					<i id="navIcon" class="fa fa-bars"></i>
				</button>

				<!-- The WordPress Menu goes here -->
				<!-- The menu fix I did was add different nav classes that would hide either menu if in mobile or desktop view. -->
				<?php
				if (is_user_logged_in(
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse flexspace colorwhite',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav hideNavMenu',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu', //this is just semantic and there is no actual class. 
							'depth'           => 3,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					)
				));
				?>

				<!-- This section determines if the login/register buttons appear or not.  -->
				<?php if ('container' === $container) : ?>
					<?php if (!is_user_logged_in()) { ?>
						<!-- <a href="<?php echo wp_login_url(); ?>" data-toggle="dropdown" class="loginBtn collapse navbar-collapse flexspace navbarNavDropdown">Login</a>
						<a href="<?php echo wp_registration_url(); ?>" data-toggle="dropdown" class="loginBtn collapse navbar-collapse flexspace">Register</a> -->
					<?php } else { ?>
						<!-- <a href="" class="navbar-nav collapse navbar-collapse flexspace">Profile</a>
						<a href="<?php echo wp_logout_url(); ?>" data-toggle="dropdown" class="loginBtn collapse navbar-collapse flexspace">logout</a> -->

					<?php }; ?>
					<p></p>
			</div><!-- .container -->

		<?php endif; ?>



		<!-- I will superpposition the nav menu here. -->

		<!-- 


MOBILE
MOBILE
MOBILE below


 -->

		</nav><!-- .site-navigation -->
<!-- this will not apper on mobile and probably not tablet -->
		<div class="centerflex hideForMobile">
			<a href="https://www.youtube.com/user/jesuswalkyouth">
				<img src="<?php echo get_template_directory_uri();
							?>/img/icon/ytIcon24w.png" alt="" class="left1emPd hide">
			</a>
			<a href="https://www.facebook.com/jesuswalkyouth/">
				<img src="<?php echo get_template_directory_uri();
							?>/img/icon/fbIcon24w.png" alt="" class="left1emPd hide">
			</a>
			<a href="https://www.instagram.com/jesuswalkyouth/?hl=en">
				<img src="<?php echo get_template_directory_uri();
							?>/img/icon/instaIcon24w.png" alt="" class="left1emPd hide">
			</a>
			<a href="https://givebutter.com/jesuswalk-donate"><input type="button" value="Donate" class="donateBtn hideForMobile"></a>
		</div>


		<div id="navMenu" class="hidden mobileMenuNav textWhite centerflex fontSz18">
			<div class="centerflexColumn">
				<a href="/">
					<p>Home</p>
				</a>
				<!-- This menu only appears on mobile and does not appear in desktop view. -->
				<?php
				if (is_user_logged_in(
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse flexspace ',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav hideMobileMenu',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu', //this is just semantic and there is no actual class. 
							'depth'           => 3,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					)
				));
				?>

				<div class="  ">
					<a href="https://www.youtube.com/user/jesuswalkyouth">
						<img src="<?php echo get_template_directory_uri();
									?>/img/icon/ytIcon24w.png" alt="" class="footer_icon_padding ">
					</a>
					<a href="https://www.facebook.com/jesuswalkyouth/">
						<img src="<?php echo get_template_directory_uri();
									?>/img/icon/fbIcon24w.png" alt="" class="footer_icon_padding ">
					</a>
					<a href="https://www.instagram.com/jesuswalkyouth/?hl=en">
						<img src="<?php echo get_template_directory_uri();
									?>/img/icon/instaIcon24w.png" alt="" class="footer_icon_padding ">
					</a>
				</div>
				<div class="btn centerflexColumn ">
					<a href="https://givebutter.com/jesuswalk-donate" class="top1EMPadding "><input type="button" value="Donate" class="mobileDonateBtn "></a>
				</div>


			</div>
		</div>

	</div><!-- #wrapper-navbar end -->