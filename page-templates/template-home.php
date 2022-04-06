<?php

/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>

<header>
    <div class="home-banner">
        <div class="centeredHeading bgimage">
        </div>
</header>

<main class="">
    <?php the_content();
    ?>
</main>
<?php

get_footer();
