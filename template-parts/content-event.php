<!-- This is to display page banner for single pages -->
<!-- This will show to desktop users, will be hidden on mobile. -->
<div class="centerflex padTopBot1n5em colForMobile hideForMobile ">

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
    <div class="fillWidth whiteText">

      <!-- Title of the post -->
      <h3 class=" eventTitle textBlack reduceSpacingMar"><a class="textBlack bolden800 reduceSpacingMar" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      <!-- Date of the Event -->

      <span id="dates" class=" whiteText dateFont-size reduceSpacingMar">
        <?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('F')
        ?>
      </span>
      <span class=" "><?php echo $eventDate->format('jS') ?></span>


      <!-- See more -->
      <p class="whiteText"><?php if (has_excerpt()) {
                              echo get_the_excerpt();
                            } else {
                              echo wp_trim_words(get_the_content(), 18);
                            } ?> <a href="<?php the_permalink(); ?>" class=" bolden600 textBlack">Learn more</a></p>
    </div>
  </div>
</div>

<!-- This will display for mobile users. Will hide once on desktop. -->
<div class="centerflex leftAlignMobile padTopBot1n5em eventItem2 colForMobile hideOnDesktop">

  <h3 class="eventTitle"><a class="textBlack bolden800 " href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

  <?php
  if (get_field('page_banner_background_image')) {
    $photoHere = get_field('page_banner_background_image')["url"];
  } else {
    $photoHere = get_theme_file_uri('/img/bannerImage.png');
  }
  ?>

  <image class="thumbnailSize" src="<?php echo $photoHere ?>"></image>

  <div class="whiteText">
    <p>
      <span class="dates eventDates dateFont-size">
        <?php
        $eventDate = new DateTime(get_field('event_date'));
        echo $eventDate->format('F')
        ?>
      </span>
      <span class=" "><?php echo $eventDate->format('jS') ?></span>
    </p>
  </div>

  <!-- <div class="centeredItem"></div> -->
  <div class="eventInfo fillWidth centeredItem">
    <div class="fillWidth centerText">
      <p class="whiteText"><?php if (has_excerpt()) {
                              echo get_the_excerpt();
                            } else {
                              echo wp_trim_words(get_the_content(), 18);
                            } ?> <a href="<?php the_permalink(); ?>" class=" bolden600 textBlack">Learn more</a></p>
    </div>
  </div>
</div>
<!-- End of the mobile block -->