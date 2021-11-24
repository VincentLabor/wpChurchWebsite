<?php


/*
Template Name:  Conference /w PageBanner
Template Post Type: conference
*/

get_header();

while (have_posts()) {
  the_post();
  pageBanner();
?>
<div class=""><?php the_content(); ?></div>
  <hr class="section-break">

<?php }



get_footer();

?>