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

        <!-- Delete this later, this was a test to see where the items would end up. -->
        <!-- <p class="socialIcons">Hello</p> -->

        <div class="centeredHeading width90 bgimage">

            <div class="absolute">
                <image class="dropmeDown" src="<?php echo get_theme_file_uri('/img/JW2022_Website_1920w.png'); ?>"></image>
            </div>
            <!-- <img src="<?php //echo get_template_directory_uri();
                        ?>/img/JW_WHITE.png" alt="" class="jwalkLogo bot3EMPadding">
            <h4 class="landingCaption textWhite">“Whoever claims to live in him must live as Jesus did.”</h4> -->
        </div>


        <div class="socialIcons centerflexColumn halfPadding">


            <a href="https://www.youtube.com/user/jesuswalkyouth">
                <img src="<?php echo get_template_directory_uri();
                            ?>/img/icon/ytIcon24w.png" alt="" class="halfPadding ">
            </a>
            <a href="https://www.facebook.com/jesuswalkyouth/">
                <img src="<?php echo get_template_directory_uri();
                            ?>/img/icon/fbIcon24w.png" alt="" class="halfPadding ">
            </a>
            <a href="https://www.instagram.com/jesuswalkyouth/?hl=en">
                <img src="<?php echo get_template_directory_uri();
                            ?>/img/icon/instaIcon24w.png" alt="" class="halfPadding ">
            </a>
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
