<?php

/*
Template Name: For Elementor Event Template
Template Post Type: event, testimonial
*/

get_header();

while (have_posts()) {
  the_post();
  // pageBanner();
?>

  <!-- <div class="aowBg">
    <div class="">
      <p>
        <a class="textBlack" href="<?php echo get_post_type_archive_link('event'); ?>"> -->
  <!-- This below does not appaer because fontawesome is not attached -->
  <!-- </a>
      </p>
    </div>
    <div class="showNothing"><?php the_content(); ?></div>
  </div> -->

  <!-- <hr class="section-break"> -->

  <div class="eventBg centerflex whiteText">
    <div class="eventTextAOW ">
      <p class=""><?php the_content(); ?></p>

      <!-- <p>Many people from our JesusWalk community will be showcasing the artistic talents that God has blessed them with.
            When it comes to worshiping God, there are endless possibilities! Join us on YouTube Live on April 30 - May 2 at 7:00pm.</p> -->
    </div>


  </div>

<?php }



get_footer();

?>