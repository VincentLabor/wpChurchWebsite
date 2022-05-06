<?php

/*
Template Name: Conference Registration W/O WPFORMS
Template Post Type: conference, 
*/

get_header();

//Defining variables and setting them to empty values.
$firstName = $lastName = $email = $typeOfReg = $gender = $birthday = $grade = $shirtSize = $mobile = '';
$address = $address2 = $city = $state = $zip = $country = $homeChurch = $heardOfJwalk = '';


//Maybe create a function that is to be called which would redirect the page.

if (isset($_POST["confSubmit"])) {

  global $wpdb; //Allows us access to MYsql without creating statements 

  //These are the items that are to be sent to the database
  //Will need to create the table before hand before sending these items.
  // $data = array(
  // );

  //This is the name of the table in the database
  $table_name = "wp_jwalk_conf_registration";

  // for some reason these variables are not being filled in.

   $wpdb->insert($table_name,  array(
    'firstName' => $_POST['firstName'],
    'lastName' => $_POST['lastName'],
    'email' => $_POST['email'],
    'typeOfReg' => $_POST['typeOfReg'],
    'gender' => $_POST['gender'],
    'birthday' => $_POST['birthday'],
    'grade' => $_POST['grade'],
    'shirtSize' => $_POST['shirtSize'],
    'mobile' => $_POST['mobile'],
    'address' => $_POST['address'],
    'address2' => $_POST['address2'],
    'city' => $_POST['city'],
    'state' => $_POST['state'],
    'zip' => $_POST['zip'],
    'country' => $_POST['country'],
    'homeChurch' => $_POST['homeChurch'],
    'heardOfJwalk' => $_POST['heardOfJwalk']
  ));



  // $sql = "INSERT INTO wp_jwalk_conf_registration (firstName) VALUES ($firstName)";
  // $rs = mysqli_query($wpdb, $sql);
  //If everything goes well, redirect user to front page
  // if ($result == 1) {
  //   wp_redirect("http://localhost/wordpress/");
  //   exit;;
  // } else {
  //   //Need to implement a way to fix error handling on form submissions.
  //   wp_redirect("http://localhost/wordpress/conferences/conference-registration/");
  //   echo "<script>alert('There seems to be an error')</script>";
  // }
};




?>

<div class="home-banner">
  <div class="centeredHeading bgimage"></div>
</div>

<div id="registration" class="bot2EMPadding top2EMPadding backgroundcolorCyan centerflexColumn">
  <h2>Conference Registration Form</h2>
  <!-- get_permalink gives me http://localhost/wordpress/conferences/conference-registration/ -->
  <form action="<?php echo get_permalink(); ?>" method="post" class="centerflexColumn">
    <div id="name">
      First Name: <input type="text" name="firstName" value="<?php echo $firstName; ?>">
      Last Name: <input type="text" name="lastName" value="<?php echo $lastName; ?>">
    </div>

    <br />

    Email Name: <input type="text" name="email" value="<?php $email; ?>">
    <br />
    <div>
      <label>Registration Type</label>
      <br />
      <div>
        <input type="radio" checked="checked" name="typeOfReg"<?php
                                              if (isset($student) && $student = "student") echo "checked"; ?> value="student"> <label for="student">Student</label>
      </div>
      <div> <input type="radio" name="typeOfReg"<?php
                                                  if (isset($counselor) && $counselor = "counselor") echo "checked"; ?> value="Counselor"> <label>Counselor</label></div>

      <div>
        <input type="radio" name="typeOfReg"<?php if (isset($volunteer) && $volunteer = "volunteer") echo "checked"; ?> value="Volunteer"> <label>Volunteer</label>
      </div>
      <br>


      <!-- 
        --
      This shows me the errors that may occur  
      <?php echo $wpdb->print_error(); ?> 
      --
      -->

    </div>

    Gender
    <select name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="pna">Prefer not to answer</option>
    </select>

    Birthday
    <input type="date" name="birthday" value="2017-06-01">

    School Grade going into the Fall
    <select name="grade">
      <option value="6th_grade">6th Grade</option>
      <option value="7th_grade">7th Grade</option>
      <option value="8th_grade">8th Grade</option>
      <option value="9th_grade">9th Grade</option>
      <option value="10th_grade">10th Grade</option>
      <option value="11th_grade">11th Grade</option>
      <option value="12th_grade">12th Grade</option>
      <option value="col_fresh_soph">College Freshman/Sophmore</option>
      <option value="col_jun_snr">College Junior/Senior</option>
    </select>

    Shirt Size
    <select name="shirtSize">
      <option value="XS">XS</option>
      <option value="S">S</option>
      <option value="M">M</option>
      <option value="L">L</option>
      <option value="XL">XL</option>
      <option value="XXL">XXL</option>
    </select>

    Phone Number
    <input type="text" placeholder="(555)555-1234" name="mobile">


    Address
    <input type='text' name="address" value="<?php echo $address; ?>">
    Address 2
    <input type='text' name="address2" value="<?php echo $address2; ?>">

    City
    <input type="text" name="city" value="<?php echo $city; ?>">

    State/Province
    <input type="text" name="state" value="<?php echo $state; ?>">

    Zip Code
    <input type="text" name="zip" value="<?php echo $zip; ?>">

    Country
    <input type="text" name="country" value="<?php echo $country; ?>">

    Home church (If applicable)
    <input type="text" name="homeChurch" value="<?php echo $homeChurch; ?> ">

    How Did you hear about Jesuswalk this year?
    <textarea rows="4" cols="50" name="heardOfJwalk" value="<?php echo $heardOfJwalk ?>"></textarea>





    <!-- <label>LIABILITY
By signing below, I agree that I, the participant, acknowledge that the JesusWalk Youth Organization is not liable for any and all losses, claims, damages to property, damages to electronic equipment, injuries, liabilities and additional expenses incurred. I agree to abide by the guidelines set by the JesusWalk Youth Conference staff regarding online and in-person safety and behavior.

CONFIDENTIALITY
The counselors and staff at the JesusWalk Youth Organization are bound by confidentiality. Discussions between a student and a counselor will remain confidential. Information will not be revealed without permission from the person who has provided the information. The only time confidentiality may be broken is if a student discloses any form of abuse, harm to one-self, or harm others. The JesusWalk Youth Organization reserves the right to follow the mandated reporting protocol for the safety of the student.

ONLINE RULES
JesusWalk students are expected to be considerate, respectful and courteous to the JesusWalk staff, volunteers, and fellow peers. Students agree to respect the online platforms and chat features provided by the JesusWalk Youth Organization. Students must be mindful of the Christian youth conference online environment and must keep all digital mediums PG appropriate for children and families. If students are unable to follow these guidelines, they will be subject to consequences at the discretion of the JesusWalk Youth Organization. I agree to abide by the guidelines set by the JesusWalk Youth Organization staff regarding online safety and behavior.

MULTIMEDIA
I grant permission to JesusWalk Youth Organization to reproduce photographs and videos taken of me for the purpose of publication or illustration for JesusWalk Youth Organization’s mission.

IN-PERSON RULES
JesusWalk students are expected to be considerate of facilities on site and be courteous to the JesusWalk staff, volunteers, and fellow peers. As per the guidelines from the Center for Disease Control and the Orange County Department of Public Health, all staff and participants are expected to follow the suggested protocols to meet safely outdoors. This includes, but not limited to, physical (social) distancing, use of masks, and hand hygiene. Lastly, if you feel sick or ill with any symptoms, please stay safe at home.

By checking the box below you agree to all the terms above.</label> -->

    <label>Agreement to Participate</label>
    <label><input type="checkbox"> I agree to participate</label>


    <div>
        <!-- The givebutter link will look commented only because of the // in the url -->
        
        <input type="submit" value="Submit" name="confSubmit" id="regSubmitBtn"/>
        <!-- <input type="submit" value="Submit" name="confSuhttps://www.example.com/testbmit" onclick="window.location.href='https://givebutter.com/PFVLSZ'"/> -->
    </div>
  </form>

<?php
  the_content();
?>

</div>

<?php

get_footer();

?>