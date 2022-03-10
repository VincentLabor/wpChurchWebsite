<?php

/*
Template Name: FullWidthConference
Template Post Type: conference, 
*/

get_header();

while (have_posts()) {
  the_post();
  pageBanner();
  
?>
  <div class="container">
    <div class="">
      <p>
      </p>
    </div>
    <div class=""><?php the_content(); ?></div>
  </div>
  <hr class="section-break">

<?php }



get_footer();

?>