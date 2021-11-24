<?php

/*
Template Name: Full Custom Conference
Template Post Type: conference
*/

get_header();

while (have_posts()) {
  the_post();
  
?>

  <!-- <div class="fullWidthContainer"> -->


  <hr class="section-break">

<?php }



get_footer();

?>