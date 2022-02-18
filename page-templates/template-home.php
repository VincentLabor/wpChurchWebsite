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


        <div class="centeredHeading width90 blk bgimage">

            <div class="absolute">
                <image class="" src="<?php echo get_theme_file_uri('/img/bannerImage.png'); ?>"></image>
            </div>
            <img src="<?php echo get_template_directory_uri();
                        ?>/img/JW_WHITE.png" alt="" class="jwalkLogo bot3EMPadding">
            <h4 class="landingCaption textWhite">“Whoever claims to live in him must live as Jesus did.”</h4>
        </div>
    </div>
</header>
<main class="">


    <?php the_content();
    ?>

    <section id="connect-through-prayer" class=" silver-background">
        <div class="width90 centerflexColumn">
            <h4 class="top2EMPadding">Connect through Prayer</h4>
            <p>Powerful things happen with prayer. </p>
            <p>Share your prayers with us and we will pray for every request that comes our way.</p>
            <div class="centerflex bot2EMPadding">
                <button class="btn submitBtn">Learn More</button>
            </div>
        </div>
    </section>
</main>
<?php



?>

<?php

get_footer();
