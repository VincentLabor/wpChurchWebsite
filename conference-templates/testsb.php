<?php 

/*
Template Name: Test submit page
Template Post Type: conference, 
*/

get_header();

//Defining variables and setting them to empty values.



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
};
?>


<div>
<?php 
    the_content();
?>

</div>

<?php

get_footer();

?>