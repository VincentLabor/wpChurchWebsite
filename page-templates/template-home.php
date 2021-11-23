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
        <!-- This is the SVG of the animated anchor on the main page -->
        
     
         <div class="centeredHeading width90 blk bgimage">
             
             <div class="absolute">
              <image class="" src="<?php echo get_theme_file_uri('/img/bannerImage.png'); ?>"></image> 
             </div>
            <img src="<?php  echo get_template_directory_uri(); 
                        ?>/img/JW_WHITE.png" alt="" class="jwalkLogo bot3EMPadding">
                           <h4 class="landingCaption textWhite">“Whoever claims to live in him must live as Jesus did.”</h4>
        </div> 
        <!-- <div class="imageBoxCotainer centerflex">
            <div class="imageBox"></div>
            <div class="imageBox"></div>
            <div class="imageBox"></div>
        </div> -->
    </div>
</header>
<main class="">


    <?php the_content();
    ?>

    <!-- <section class="artOfWorship top2EMPadding bot4EMPadding background whiteText">
        <div class="image width90 sectionImage ">
            <img src="./Pictures/artOfWorship.png" alt="" class="sectionImage bot1EMPadding">
        </div>
        <div class="text width90 centerflexColumn">
            <h2 class="bot1p5EMPadding centerflexColumn"><strong>Art of Worship</strong></h2>

            <div class="aowBox width100">
                <div class="horizFlex ">
                    <div class="clickhere ">
                        <h3 class="bot1EMPadding  centerflexColumn">April 30 - May 2 || FACEBOOK LIVE</h3>
                        <form action="#" class="bot1EMPadding centerflex">
                            <input type="submit" value="WATCH LIVE HERE" class="whitesubmitBtn whiteText btn">
                        </form>
                    </div>

                    <img src="<?php //echo get_template_directory_uri(); ?> /img/aow.png" alt="" class="bot1EMPadding centerflexColumn">
                </div>
            </div>

            <div class="aetasBox width100">
                <div class="horizFlex">
                    <div class="text width60">
                        <p class="centerText centerflexColumn">Join us for a weekend filled with art and worship at our annual art benefit showcase event called Art of Worship! This family-friendly event is FREE to the public and will be VIRTUAL this year. </p>

                        <p class="centerText centerflexColumn">This year, JesusWalk is supporting students in need at the LAKAS High School by donating all funds collected at Art of Worship to the Aetas in Botolan for Christ (ABC) Mission. This ministry is in need of school supplies, food, and medical equipment. </p>

                        <p class="centerText centerflexColumn">Many people from our JesusWalk community will be showcasing the artistic talents that God has blessed them with. When it comes to worshiping God, there are endless possibilities! Join us on YouTube Live on April 30 - May 2 at 7-9pm.</p>
                    </div>

                    <img src="<?php //echo get_template_directory_uri(); ?>/img/ChildrenPresents.PNG" alt="" class="bot1EMPadding centerflexColumn">
                </div>

                <form action="http://localhost/wordpress/virtual-conference/" class="bot1EMPadding centerflex">
                    <input type="submit" value="DONATE TO ABC MISSION" class="whitesubmitBtn whiteText btn">
                </form>

            </div>



            <div class="centerflex centerflexColumn">
                <button class="btn whitesubmitBtn whiteText ">Learn More</button>
            </div>

        </div>
    </section> -->
<!-- 
    <section id="registration" class="width90 bot3EMPadding centerflexColumn">
        <h3 class="top2EMPadding ">JesusWalk 2021 Youth Conference <strong>Registration</strong></h3>
        <h5 class=" ">Registration is now open!</h5>

        <iframe class="bot2EMPadding" width="330" height="200" src="https://www.youtube.com/embed/SFTk-uzCNmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <form action="#" class="centerflex ">
            <input type="submit" value="Learn More" class="submitBtn btn ">
        </form>
    </section> -->
    <!-- <section id="upcoming-events" class="silver-background bot3EMPadding top2EMPadding ">

        <h3 class="centerflexColumn extra-info  width90">Upcoming Events</h3>


        <div class="game-nights centerflexColumn width90">
            <img src="<?php// echo get_template_directory_uri(); ?> /img/gameNights.png" alt="">
            <div class="centerflexColumn">
                <h4 class="top1EMPadding">Game Nights</h4>

                <div class="times botp5EMPadding">
                    <h6>May 15, 2021 || 8:00 PM</h6>

                    <?php //$homepageEvents = new WP_Query(array(
               //         'posts_per_page' => -1,
                 //       'post_type' => 'event',
                   // ));

                   // while ($homepageEvents->have_posts()) {
                       // $homepageEvents->the_post(); ?>

                        <?php //$eventDate = new DateTime(get_field('event_date')); ?>
                        <h6> <?php //echo $eventDate->format('d M Y'); ?> || <?php //the_title(); ?> </h6>
                        <h6> </h6>

                    <?php //}; ?>
                    <h6>June 12, 2021 || 8:00 PM</h6>
                    <h6>July 10, 2021 || 8:00 PM</h6>
                </div>
            </div>
            <div class="centerflex ">
                <button class="btn submitBtn ">Learn More</button>
            </div>

            <div class="counselor-panel top2EMPadding">
                <img src="<?php //echo get_template_directory_uri(); ?> /img/counselorPanel.png" alt="">
                <div class="centerflexColumn ">
                    <h4 class="top1EMPadding ">Counselor Panel</h4>
                    <h6>May 29, 2021 || 8:30 PM</h6>
                </div>
                /
                <div class="centerflex">
                    <button class="btn submitBtn ">Learn More</button>
                </div>
            </div>

            <div class="student-panel top2EMPadding">
                <img src="<?php //echo get_template_directory_uri(); ?>  /img/studentPanel.png " alt="">
                <div class="centerflexColumn">
                    <h4 class="top2EMPadding">Student Panel</h4>
                    <h6 class="top1EMPadding">June 5, 2021 || 8:30 PM</h6>
                </div>
                <div class="centerflex">
                    <button class="btn submitBtn ">Learn More</button>
                </div>
            </div>
    </section> -->

    <!-- <section id="counselor-program" class="bot2EMPadding whiteText">
        <div class="width90 centerflexColumn">
            <h4 class="top2EMPadding">Counselor Program</h4>
            <p>The JesusWalk Counselor Program provides an opportunity for
                servant leaders to take their spiritual development even further.
                One of the things that make the JesusWalk Youth
                Conference unforgettable, are the authentic connections that are made within your small groups. </p>
            <p>
                <strong>We invite you to live out your potential in Christ and become a JesusWalk Counselor!</strong>
            </p>
            <div class="centerflex">
                <button class="btn whitesubmitBtn whiteText ">Learn More</button>
            </div>
            <img src="<?php //echo get_template_directory_uri(); ?> /img/counselorProgram.png" class="top2EMPadding" alt="">
        </div>

    </section> -->
    <!-- <section id="testimonials" class="silver-background ">
        <div class="width90 centerflexColumn">
            <h4 class="top2EMPadding">Testimonials from our Students</h4>
            <img src="<?php //echo get_template_directory_uri(); ?> /img/testimonialImg1.png" class="top1EMPadding" alt="">
            <img src="<?php //echo get_template_directory_uri(); ?> /img/testimonialImg2.png" class="top1EMPadding" alt="">
            <img src="<?php //echo get_template_directory_uri(); ?> /img/testimonialImg3.png" class="top1EMPadding" alt="">
            <img src="<?php //echo get_template_directory_uri(); ?> /img/testimonialImg4.png" class="top1EMPadding" alt="">
        </div>
    </section> -->
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
    <!-- <section id="covid19-response" class="">
        <div class="width90 centerflexColumn">
            <h4 class="top2EMPadding">
                COVID-19 Response and the JesusWalk Community
            </h4>
            <p>The JesusWalk family continues to spend time in scripture, prayer, and worship to seek God’s
                vision for our ministry this year. You can find our latest updates here,
                to learn more about our plans for the JesusWalk 2021 Youth Conference. </p>
            <div class="centerflex">
                <button class="btn submitBtn ">Learn More</button>
            </div>
        </div>

    </section>
    <section id="subscribe" class="width90 silver-background"></section> -->
</main>
<?php



?>

<?php

get_footer();
