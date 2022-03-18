<?php

/*
Template Name: Theme page
Template Post Type: conference, 
*/

get_header();

?>

<div class="home-banner">

    <div class="centeredHeading bgimage">
 
    </div>

<!-- 
    <div class="socialIcons centerflexColumn halfPadding hideForMobile">
        <a href="https://www.youtube.com/user/jesuswalkyouth">
            <img src="<?php echo get_template_directory_uri();
                        ?>/img/icon/ytIcon24w.png" alt="" class="halfPadding ">
        </a>
        <a href="https://www.facebook.com/jesuswalkyouth/">
            <img src="<?php echo get_template_directory_uri();
                        ?>/img/icon/fbIcon24w.png" alt="" class="halfPadding ">
        </a>
        <a href="https://www.instagram.com/jesuswalkyouth/?hl=en">
            <img src="<?php echo get_template_directory_uri();
                        ?>/img/icon/instaIcon24w.png" alt="" class="halfPadding ">
        </a>
    </div>
</div> -->

<?php
the_content();
get_footer();

?>