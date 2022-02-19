<?php

get_header();
pageBanner(array(
  'title' => get_the_archive_title(),
  'subtitle' => ""
));

?>
<div class="backgroundBG">

<div class="backgroundForEvent roundEdges">
  <div class="container">
    <?php

    while (have_posts()) {
      //This is the specific post. Without this, the events would duplicate limitlessly.
      //This does not affect any css or layout at all but the get_template_part does. 
      the_post();
      get_template_part('template-parts/content-event');
    ?>

    <?php
    }
    echo paginate_links();
    ?>

    <!-- <hr class="section-break"> -->

    <!-- <p>Looking for a recap of past events? <a class="textBlack" href="<?php // echo site_url('/past-events') 
                                                                            ?>">Check out our past events archive</a>.</p> -->
    <!-- This br removes the whitespace that appears on the events page. -->
    <br /> 
  </div>
</div>
</div>

<?php get_footer();

?>