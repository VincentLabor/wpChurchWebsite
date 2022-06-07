<?php

/*
Template Name: Conference Registration with WPFORMS
Template Post Type: conference, 
*/

get_header();

?>

<div class="home-banner">
    <div class="centeredHeading bgimage"></div>
</div>


<div class=" textBlack backgroundcolorCyan top2EMPadding bot2EMPadding">
    <div class=" padding2emSides responsiveWidth ">
        <?php
        the_content();
        ?>
    </div>

</div>
<?php
get_footer();

?>