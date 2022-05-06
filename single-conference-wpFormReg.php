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
    <div class=" padding2emSides fiftyWidth ">
        <?php
        the_content();
        ?>
        <iframe src="https://givebutter.com/embed/c/PFVLSZ" width="100%" height="615px" style="max-width: 601px;" name="givebutter" frameborder="0" scrolling="no" seamless allowpaymentrequest></iframe><script src="https://givebutter.com/js/widget.js"></script>
    </div>

</div>
<?php
get_footer();

?>