<?php

/**
 * Template Name: Prayer Request
 * Template for displaying a page with elementor
 */

get_header();

?>

<div class="containers textBlack whiteBg width90 padding8em centerFlexPrayer">
    <div class="containers halfWidth padding2emSides">
        <h1>Prayer Requests</h1>
        <p> “Now that I, your Lord and Teacher, have washed your feet, you also should wash one another’s feet.” John 13:14 (NIV)
            <br />
            <br />

            Just as Jesus served His disciples, we would love to connect and serve you. If there is anything we can pray for,
            fill out the form and our team will spend time praying for you. Inserting your name is optional.
            If you would like one of our team members to reach out to you, be sure to check the box at the bottom of the form.
        </p>
    </div>

    <div class="containers halfWidth padding2emSides textAlignLeft maxWidth">
        <?php
        the_content();
        ?>
    </div>

</div>


<?php
get_footer();

?>