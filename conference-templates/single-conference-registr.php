<?php

/*
Template Name: Conference Registration W/O WPFORMS
Template Post Type: conference, 
*/

get_header();

//Defining variables and setting them to empty values.
$firstName = $lastName = $email = '';


?>

<div class="home-banner">
    <div class="centeredHeading bgimage"></div>
</div>

<div id="registration" class="bot2EMPadding top2EMPadding">
    <form action="" method="post">
        First Name: <input type="text" name="firstName" value="<?php echo $firstName; ?>">
        Last Name: <input type="text" name="lastName" value="<?php echo $lastName; ?>">
        <br />
        Email Name: <input type="text" name="email" value="<?php $email; ?>">
        <br />
        <input type="radio" name="regType" <?php
                                            if (isset($regType) && $regType = "student") echo "checked"; ?> value="student"> Student

        <input type="radio" name="counselor" <?php
                                                if (isset($counselor) && $counselor = "counselor") echo "checked"; ?>> Counselor
        <input type="radio" name="volunteer" <?php if (isset($volunteer) && $volunteer = "volunteer") echo "checked"; ?>>Volunteer
        <input type="submit" value="">
    </form>

    <?php
    the_content();
    ?>
</div>

<?php

get_footer();

?>