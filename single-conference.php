<?php

/*
Template Name: FULLCUSTOM Conference Item
Template Post Type: conference
*/

get_header();

while (have_posts()) {
  the_post();
  
?>

  <!-- <div class="fullWidthContainer"> -->
  <div class="container">
    <div class="">
      <p>
      <span class=""><?php the_title(); ?></span>
      </p>
    </div>
    <div class=""><?php the_content(); ?></div>
  </div>

  <hr class="section-break">

<?php }



get_footer();

?>