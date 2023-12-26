<?php

/*
Template Name: Conference Registration W/O WPFORMS
Template Post Type: conference, 
*/

get_header();

$firstName = $lastName = $email = $typeOfReg = $gender = $birthday = $grade = $shirtSize = $mobile = '';
$address = $address2 = $city = $state = $zip = $country = $homeChurch = $heardOfJwalk = '';

// //Defining variables and setting them to empty values.
// $firstName = $lastName = $email = $typeOfReg = $gender = $birthday = $grade = $shirtSize = $mobile = '';
// $address = $address2 = $city = $state = $zip = $country = $homeChurch = $heardOfJwalk = '';


// //Maybe create a function that is to be called which would redirect the page.

if (isset($_POST["confSubmit"])) {

  global $wpdb; //Allows us access to MYsql without creating statements 

  //   //These are the items that are to be sent to the database
  //   //Will need to create the table before hand before sending these items.
  //   // $data = array(
  //   // );

  //   //This is the name of the table in the database
  $table_name = "wp_jwalk_conf_registration";

  //   // for some reason these variables are not being filled in.

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



  $sql = "INSERT INTO wp_jwalk_conf_registration (firstName) VALUES ($firstName)";

  $rs = mysqli_query($wpdb, $sql);
  //If everything goes well, redirect user to front page
  if ($result == 1) {
    wp_redirect("http://localhost/wordpress/");
    exit;;
  } else {
    //Need to implement a way to fix error handling on form submissions.
    wp_redirect("http://localhost/wordpress/conferences/conference-registration/");
    echo "<script>alert('There seems to be an error')</script>";
  }
};



?>

<div class="home-banner">
  <div class="centeredHeading bgimage"></div>
</div>

<div id="registration" class="bot2EMPadding top2EMPadding backgroundcolorCyan centerflexColumn">
  <h2>Conference Registration Form</h2>
  <br />
  <!-- get_permalink gives me http://localhost/wordpress/conferences/conference-registration/ -->


  <form action="http://localhost/wordpress/conferences/thank-you-for-registering/" method="post" class="centerflexColumn" id='sheetdb-form'>
    <div>
      <h4>Personal Information</h4>
      <label class="widthForForm" for="firstname">
        First Name:
      </label>
      <input type="text" name="firstName" value="<?php echo $firstName; ?>">

      <br />

      <label class="widthForForm">
        Last Name:
      </label>
      <input type="text" name="lastName" value="<?php echo $lastName; ?>">

      <br />

      <div>
        <!-- 
        --
      This shows me the errors that may occur  
      <?php echo $wpdb->print_error(); ?> 
      --
      -->
      </div>

      <label class="widthForForm">
        Gender
      </label>

      <select name="data[gender]">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="pna">Prefer not to answer</option>
      </select>
      <br />

      <label class="widthForForm">
        Email Name:
      </label>
      <input type="text" name="email" value="<?php $email; ?>">
      <br />

      <label class="widthForForm">
        Birthday
      </label>
      <input type="date" name="data[birthday]" value="2017-06-01">

      <br />

      <label for="" class="widthForForm">Shirt Size</label>
      <select name="shirtSize">
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
      </select>

      <br />

      <label for="grade" class="widthForForm">
        School Grade going into the Fall</label>
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
    </div>
    <br />


    <div class="helpme">
      <h4>Address</h4>

      <br />

      <label class="widthForForm">Phone Number</label>
      <input type="text" placeholder="(555)555-1234" name="mobile">

      <br />

      <label class="widthForForm"> Address</label>
      <input type='text' name="address" value="<?php echo $address; ?>">

      <br />

      <label class="widthForForm">Address 2</label>
      <input type='text' name="address2" value="<?php echo $address2; ?>">

      <br />

      <label class="widthForForm">City</label>
      <input type="text" name="city" value="<?php echo $city; ?>">

      <br />

      <label class="widthForForm"> State/Province</label>
      <input type="text" name="state" value="<?php echo $state; ?>">

      <br />

      <label class="widthForForm">Zip Code</label>
      <input type="text" name="zip" value="<?php echo $zip; ?>">

      <br />

      <label class="widthForForm">Country</label>
      <input type="text" name="country" value="<?php echo $country; ?>">

      <br />

      <label class="widthForForm">Home church (If applicable)</label>
      <input type="text" name="homeChurch" value="<?php echo $homeChurch; ?> ">


      <br />
      <label for="grade" class="widthForForm">
        School Grade going into the Fall</label>



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

    </div>


    <br />
    <div class="centerflexLeft">
      <label class="widthForForm">Registration Type</label>
      <div class="bulletSpace">
        <input type="radio" checked="checked" name="typeOfReg" <?php
                                                                if (isset($student) && $student = "student") echo "checked"; ?> value="student"> <label for="student">Student</label>

        <br />
        <input type="radio" name="typeOfReg" <?php
                                              if (isset($counselor) && $counselor = "counselor") echo "checked"; ?> value="Counselor"> <label>Counselor</label>
        <br />
        <input type="radio" name="typeOfReg" <?php if (isset($volunteer) && $volunteer = "volunteer") echo "checked"; ?> value="Volunteer"> <label>Volunteer</label>
      </div>
    </div>

    <br />
    How Did you hear about Jesuswalk this year?
    <textarea rows="4" cols="50" name="heardOfJwalk" value="<?php echo $heardOfJwalk ?>"></textarea>


    <label class="widthForForm">Agreement to Participate</label>
    <label><input type="checkbox" id="agreeToParticipate" value="agree" required> I agree to participate</label>

    <p id="errorText" class="redText"></p>
    <div>
      <!-- The givebutter link will look commented only because of the // in the url -->
      <input type="submit" value="Submit" name="confSubmit" id="regSubmitBtn" />
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


<!-- CREATE TABLE wp_jwalk_conf_registration(
ID int NOT NULL unique AUTO_INCREMENT,
  firstName varchar(255),
  lastName varchar(255),
  email varchar(255),
  typeOfReg varchar(255),
  gender varchar(255),
  birthday varchar(255),
  grade varchar(255),
  shirtSize varchar(255),
  mobile varchar(255),
  address varchar(255),
  address2 varchar(255),
  city varchar(255),
  state varchar(255),
  zip varchar(255),
  country varchar(255),
  homechurch varchar(255),
  heardOfJwalk varchar(255)
  );
) -->