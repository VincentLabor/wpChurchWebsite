<!-- This is to display page banner for single pages -->
<!-- This will show to desktop users, will be hidden on mobile. -->
<div class="centerflex padTopBot1n5em eventItem colForMobile hideForMobile ">

  <div class="centeredItem">
    <a id="eventDates" class="" href="<?php the_permalink(); ?>">
      <?php
      if (get_field('page_banner_background_image')) {
        $photoHere = get_field('page_banner_background_image')["url"];
      } else {
        $photoHere = get_theme_file_uri('/img/bannerImage.png');
      }
      ?>
      <image class="thumbnailSize" src="<?php echo $photoHere ?>"></image>
    </a>
  </div>

  <div class="eventInfo fillWidth centeredItem">
    <div class="fillWidth">

      <!-- Title of the post -->
      <h3 class=" eventTitle textBlack reduceSpacingMar"><a class="textBlack reduceSpacingMar" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      <!-- Date of the Event -->

      <span id="dates whiteText dateFont-size reduceSpacingMar">
        <?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('M')
        ?>
      </span>
      <span class=" "><?php echo $eventDate->format('d') ?></span>


      <!-- See more -->
      <p class="whiteText"><?php if (has_excerpt()) {
                              echo get_the_excerpt();
                            } else {
                              echo wp_trim_words(get_the_content(), 18);
                            } ?> <a href="<?php the_permalink(); ?>" class=" bolden600 goldText">Learn more</a></p>
    </div>
  </div>
</div>

<!-- This will display for mobile users. Will hide once on desktop. -->
<div class="centerflex leftAlignMobile padTopBot1n5em eventItem eventItem2 colForMobile hideOnDesktop">
  <?php

  if (get_field('page_banner_background_image')) {
    $photoHere = get_field('page_banner_background_image')["url"];
  } else {
    $photoHere = get_theme_file_uri('/img/bannerImage.png');
  }
  ?>

  <image class="thumbnailSize" src="<?php echo $photoHere ?>"></image>
  <h3 class=" eventTitle textBlack"><a class="textBlack" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

  <p>
    <a class=" textBlack eventDates dateFont-size" href="<?php the_permalink(); ?>">
      <span class="dates">
        <?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('M')
        ?>
      </span>
      <span class=" "><?php echo $eventDate->format('d') ?></span>
    </a>
  </p>

  <!-- <div class="centeredItem"></div> -->
  <div class="eventInfo fillWidth centeredItem">
    <div class="fillWidth">
      <p class="whiteText"><?php if (has_excerpt()) {
                              echo get_the_excerpt();
                            } else {
                              echo wp_trim_words(get_the_content(), 18);
                            } ?> <a href="<?php the_permalink(); ?>" class="nu gray blueText">Learn more</a></p>
    </div>
  </div>
</div>
<!-- End of the mobile block -->