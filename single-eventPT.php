<?php

/*
Template Name: NOTFULLWIDTH Even Template
Template Post Type: event, testimonial
*/

get_header();

while (have_posts()) {
  the_post();
  pageBanner();
?>

  <div class="container">
    <div class="">
      <p>
        <a class="textBlack" href="<?php echo get_post_type_archive_link('event'); ?>">
          <!-- This below does not appaer because fontawesome is not attached -->
          <i class="fa fa-home textBlack" aria-hidden="true"></i> Events Home
        </a>
      <p>This is a single event</p>
      <span class=""><?php the_title(); ?></span>
      </p>
    </div>
    <div class=""><?php the_content(); ?></div>
  </div>

  <hr class="section-break">

<?php }



get_footer();

?>