<?php


/*
Template Name: Headeronly Conference
Template Post Type: conference
*/

get_header();

while (have_posts()) {
  the_post();
  pageBanner();
?>

  <hr class="section-break">

<?php }



get_footer();

?>