<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="subscribe whiteText ">
			<Strong>
				<h3>Subscribe</h3>
			</Strong>
			<p>Subscribe to our newsletter to receive news and updates</p>
			<div class="emailSubscribe ">
				<label>EMAIL</label>
				<input type="text" name="" id="">
			</div>
			<input type="button" value="Submit">
		</div>

		<hr class=" whiteHr bot1EMPadding" />

		<div id="footerGrid" class="container bot4EMPadding">
			<div class="row">
				<div class="col-sm centerflexColumn">

					<img src="<?php echo get_template_directory_uri();
								?> /img/JW_WHITESMALL.png" class="top1EMPadding" alt="">

				</div>
				<div class="col-sm centerflexColumn">
					<p class="whiteText ">
						P.O. Box 2404
						<br />
						Fullerton, CA 92837
						<br />
						657-234-JWYC(5992)
					</p>
				</div>
				<div class="col-sm whiteText centerflexColumn">
					<div class="container whiteText letterSpace centerflexColumn">
						<!-- I will be turning off default data-toggle. -->

						<button class="navbar-toggler navMenu flexspace" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="">
							<i id="navIcon" class="fa fa-bars"></i>
						</button>

						<!-- The WordPress Menu goes here -->
						<!-- The menu fix I did was add different nav classes that would hide either menu if in mobile or desktop view. -->
						<?php
						if (is_user_logged_in(
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav',
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
					</div><!-- .container -->
				<?php endif; ?>
				</div>

			</div>
		</div>

		<div class="site-info copyRightSize whiteText ">
			<?php understrap_site_info(); ?>
			<p class="whiteText copyRightSize width40">
				Copyright © 2020 JesusWalk Youth Conference Organization, All rights reserved.
			</p>
		</div><!-- .site-info -->
	</div><!-- container end -->
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>