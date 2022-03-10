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
// the_content();
get_footer();

?>
