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

		<div class="subscribe whiteText bot3n5EMPadding">
			<h3>Subscribe</h3>
			<p>Subscribe to our newsletter to receive news and updates</p>
			<div class="emailSubscribe ">
				<label>EMAIL</label>
				<input type="text" name="" id="">
			</div>
			<input type="button" value="Submit" >
		</div>

		<hr class="bot3n5EMPadding whiteHr"/>

		<div class="footerGrid">

		</div>

		<div class="site-info">

			<?php understrap_site_info(); ?>

		</div><!-- .site-info -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>