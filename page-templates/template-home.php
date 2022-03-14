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

            <div class="">
                <!-- <img class="" srcset="<?php echo get_template_directory_uri();
                                        ?>/img/JW2022_Website_1920w.png,
								<?php echo get_template_directory_uri();
                                ?>/img/JW2022_Website_770w.png, 
								<?php echo get_template_directory_uri();
                                ?>/img/JW2022_Website_802w_720h.png," sizes="(max-width: 768px) 802px, (max-width: 576px) 802px, 1920px" class="" alt="Jesuswalk Landing Image"> -->



                <!-- <img class= "vh100" srcset="<?php echo get_template_directory_uri();
                                                    ?>/img/JW2022_Website_802w_720h.png,"
								> -->

                <!-- <img srcset="<?php echo get_template_directory_uri();
                                    ?>/img/JW2022_Website_1920w.png,
                                                    <?php echo get_template_directory_uri();
                                                    ?>/img/JW2022_Website_802w_720h.png,
                                                    <?php echo get_template_directory_uri();
                                                    ?>/img/JW2022_Website_802w_720h.png,
                                                    
                                                    "> -->
                <!-- 
              
                <picture>
                    <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri();
                                                                ?>/img/JW2022_Website_802w_720h.png,">
                    <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri();
                                                                ?>/img/JW2022_Website_802w_720h.png,">
                    <source media="(max-width: 992pxpx)" srcset="<?php echo get_template_directory_uri();
                                                                    ?>/img/JW2022_Website_1920w.png,">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/img/JW2022_Website_802w_720h.png" alt="">
                </picture> -->

            </div>
        </div>


        <div class="socialIcons centerflexColumn halfPadding hideForMobile">
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

    <!-- <section id="connect-through-prayer" class=" silver-background">
        <div class="width90 centerflexColumn">
            <h4 class="top2EMPadding">Connect through Prayer</h4>
            <p>Powerful things happen with prayer. </p>
            <p>Share your prayers with us and we will pray for every request that comes our way.</p>
            <div class="centerflex bot2EMPadding">
                <button class="btn submitBtn">Learn More</button>
            </div>
        </div>
    </section> -->
</main>
<?php



?>

<?php

get_footer();
