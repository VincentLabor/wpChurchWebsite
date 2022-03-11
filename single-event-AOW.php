<?php

/*
Template Name: Art Of Worship Template
Template Post Type: event, testimonial
*/

get_header();

?>

<div class="home-banner">
    <div class="centeredHeading bgimage">

        <div class="">
            <img srcset="<?php echo get_template_directory_uri();
                            ?>/img/AOW2022_POSTER_1920w.png,
								<?php echo get_template_directory_uri();
                                ?>/img/AOW2022_POSTER_770w.png, 
								<?php echo get_template_directory_uri();
                                ?>/img/AOW2022_POSTER_580w.png," sizes="(max-width: 768px) 770px, (max-width: 576px) 580px, 1920px" class="" alt="Jesuswalk Landing Image">
        </div>
    </div>
</div>

<!-- <div id="event-body" class="backgroundForEvent">
    <p>Hello test</p>
</div> -->


<?php
?>
<div class="aowBg centerflex whiteText centerflexColumnMobileAOW">
    <img src="<?php echo get_template_directory_uri();
                ?>/img/aowImage_357w_500h.png" alt="" class=" ">

    <div class="eventTextAOW aowText">
        <u>
            <h2>Art of Worship 2022</h2>
        </u>

        <p class=""><?php the_content(); ?></p>

        <!-- <p>Many people from our JesusWalk community will be showcasing the artistic talents that God has blessed them with.
            When it comes to worshiping God, there are endless possibilities! Join us on YouTube Live on April 30 - May 2 at 7:00pm.</p> -->
    </div>


</div>

<?php

get_footer();
?>