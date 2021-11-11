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
        <div class="centered flex width90 blk">
            <img src="<?php echo get_template_directory_uri(); ?>/img/JW_WHITE.png" alt="" class="jwalkLogo">
            <!-- <i class="fas fa-times"></i> -->
            <!-- <!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'> -->
            <!-- <svg width="288.25px" height="364.95px" enable-background="new 0 0 288.254 364.947" version="1.1" viewBox="0 0 288.254 364.947" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" id="logo"> -->
                <!-- Anchor image below -->
            <!-- <path d="m276.82 222.21c-0.314-3.373-0.94-6.691-1.88-9.945-0.045-0.18-0.076-0.301-0.076-0.301v6e-3c-0.019-0.057-0.03-0.115-0.047-0.176-10.521 35.277-56.797 62.66-114.39 66.896v-133.22l48.846-3.389c2.03 2.754 5.287 4.551 8.973 4.551 6.156 0 11.146-4.99 11.146-11.146 0-6.159-4.99-11.147-11.146-11.147-3.908 0-7.344 2.016-9.333 5.061l-48.485-3.908v-19.033c14.332-6.023 24.398-20.193 24.398-36.715 0-21.986-17.826-39.809-39.812-39.809-21.987 0-39.811 17.822-39.811 39.809 0 16.521 10.064 30.691 24.398 36.715v19.033l-48.508 3.908c-1.988-3.045-5.422-5.061-9.332-5.061-6.156 0-11.147 4.988-11.147 11.147 0 6.156 4.991 11.146 11.147 11.146 3.685 0 6.943-1.797 8.972-4.551l48.868 3.389v133.24c-57.748-4.152-104.18-31.576-114.72-66.92-1.063 3.568-1.753 7.219-2.062 10.936-2.109 14.559-3.589 40.879 8.662 59.762-0.804-6.746-0.376-15.34 4.196-19.537 10.196 13.244 25.848 24.533 45.149 32.709 0.322 0.139 0.655 0.264 0.979 0.4v0.068c0.423 0.146 0.824 0.291 1.243 0.438 3.363 1.363 6.822 2.645 10.389 3.816 50.106 19.688 61.409 43.59 61.409 43.59l3e-3 -0.572v0.572s11.336-23.984 61.664-43.693c3.379-1.115 6.664-2.326 9.861-3.617 0.512-0.176 0.999-0.357 1.518-0.533v-0.076c19.745-8.207 35.776-19.639 46.142-33.102 4.574 4.193 5.003 12.787 4.2 19.537 12.405-19.114 10.735-45.839 8.585-60.282zm-131.8-172.36c10.988 0 19.895 8.91 19.895 19.896 0 10.988-8.906 19.896-19.895 19.896-10.987 0-19.896-8.907-19.896-19.896 0-10.986 8.908-19.896 19.896-19.896z" fill="#141414" /> -->
            <!-- </svg> -->
        </div>
    </div>
</header>
<main class="">


<?php the_content();
 ?>

    <section class="artOfWorship top2EMPadding bot4EMPadding background whiteText">
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

                    <img src="<?php echo get_template_directory_uri(); ?> /img/aow.png" alt="" class="bot1EMPadding centerflexColumn">
                </div>



            </div>

            <div class="aetasBox width100">
                <div class="horizFlex">
                    <div class="text width60">
                        <p class="centerText centerflexColumn">Join us for a weekend filled with art and worship at our annual art benefit showcase event called Art of Worship! This family-friendly event is FREE to the public and will be VIRTUAL this year. </p>

                        <p class="centerText centerflexColumn">This year, JesusWalk is supporting students in need at the LAKAS High School by donating all funds collected at Art of Worship to the Aetas in Botolan for Christ (ABC) Mission. This ministry is in need of school supplies, food, and medical equipment. </p>

                        <p class="centerText centerflexColumn">Many people from our JesusWalk community will be showcasing the artistic talents that God has blessed them with. When it comes to worshiping God, there are endless possibilities! Join us on YouTube Live on April 30 - May 2 at 7-9pm.</p>
                    </div>

                    <img src="<?php echo get_template_directory_uri(); ?>/img/ChildrenPresents.PNG" alt="" class="bot1EMPadding centerflexColumn">
                </div>

                <form action="http://localhost/wordpress/virtual-conference/" class="bot1EMPadding centerflex">
                    <input type="submit" value="DONATE TO ABC MISSION" class="whitesubmitBtn whiteText btn">
                </form>

            </div>



            <div class="centerflex centerflexColumn">
                <button class="btn whitesubmitBtn whiteText ">Learn More</button>
            </div>

        </div>
    </section>

    <section id="registration" class="width90 bot3EMPadding centerflexColumn">
        <h3 class="top2EMPadding ">JesusWalk 2021 Youth Conference <strong>Registration</strong></h3>
        <h5 class=" ">Registration is now open!</h5>

        <iframe class="bot2EMPadding" width="330" height="200" src="https://www.youtube.com/embed/SFTk-uzCNmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <form action="#" class="centerflex ">
            <input type="submit" value="Learn More" class="submitBtn btn ">
        </form>
    </section>
    <section id="upcoming-events" class="silver-background bot3EMPadding top2EMPadding ">

        <h3 class="centerflexColumn extra-info  width90">Upcoming Events</h3>


        <div class="game-nights centerflexColumn width90">
            <img src="<?php echo get_template_directory_uri(); ?> /img/gameNights.png" alt="">
            <div class="centerflexColumn">
                <h4 class="top1EMPadding">Game Nights</h4>

                <div class="times botp5EMPadding">
                    <h6>May 15, 2021 || 8:00 PM</h6>

                    <?php $homepageEvents = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'event',
                    ));

                    while ($homepageEvents->have_posts()) {
                        $homepageEvents->the_post(); ?>

                        <?php $eventDate = new DateTime(get_field('event_date')); ?>
                        <h6> <?php echo $eventDate->format('d M Y'); ?> || <?php the_title(); ?> </h6>
                        <h6> </h6>

                    <?php }; ?>
                    <h6>June 12, 2021 || 8:00 PM</h6>
                    <h6>July 10, 2021 || 8:00 PM</h6>
                </div>
            </div>
            <div class="centerflex ">
                <button class="btn submitBtn ">Learn More</button>
            </div>

            <div class="counselor-panel top2EMPadding">
                <img src="<?php echo get_template_directory_uri(); ?> /img/counselorPanel.png" alt="">
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
                <img src="<?php echo get_template_directory_uri(); ?>  /img/studentPanel.png " alt="">
                <div class="centerflexColumn">
                    <h4 class="top2EMPadding">Student Panel</h4>
                    <h6 class="top1EMPadding">June 5, 2021 || 8:30 PM</h6>
                </div>
                <div class="centerflex">
                    <button class="btn submitBtn ">Learn More</button>
                </div>
            </div>
    </section>

    <section id="counselor-program" class="bot2EMPadding whiteText">
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
            <img src="<?php echo get_template_directory_uri(); ?> /img/counselorProgram.png" class="top2EMPadding" alt="">
        </div>

    </section>
    <section id="testimonials" class="silver-background ">
        <div class="width90 centerflexColumn">
            <h4 class="top2EMPadding">Testimonials from our Students</h4>
            <img src="<?php echo get_template_directory_uri(); ?> /img/testimonialImg1.png" class="top1EMPadding" alt="">
            <img src="<?php echo get_template_directory_uri(); ?> /img/testimonialImg2.png" class="top1EMPadding" alt="">
            <img src="<?php echo get_template_directory_uri(); ?> /img/testimonialImg3.png" class="top1EMPadding" alt="">
            <img src="<?php echo get_template_directory_uri(); ?> /img/testimonialImg4.png" class="top1EMPadding" alt="">
        </div>
    </section>
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
    <section id="covid19-response" class="">
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
    <section id="subscribe" class="width90 silver-background"></section>
</main>
<?php



?>

<?php

get_footer();
