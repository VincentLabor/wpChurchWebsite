<?php

get_header();
pageBanner(array(
  'title' => get_the_archive_title(),
  'subtitle' => ""
));

?>

<div class="container">
  <?php

  while (have_posts()) {
    the_post();
    get_template_part('template-parts/content-event');
  ?>

  <?php
  }
  echo paginate_links();
  ?>

  <hr class="section-break">

  <p>Looking for a recap of past events? <a class="textBlack" href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a>.</p>

</div>

<?php get_footer();

?>