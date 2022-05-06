<?php 


if (isset($_POST["confSubmit"])) {

    global $wpdb; //Allows us access to MYsql without creating statements 

    //These are the items that are to be sent to the database
    //Will need to create the table before hand before sending these items.
    $data = array(
      'firstName' => $_POST['firstName'],
      'lastName' => $_POST['lastName'],
      'email' => $_POST['email'],
      'typeOfReg' => $_POST['typeOfReg'],
    );

    //This is the name of the table in the database
    $table_name = "{$wpdb->prefix}jwalk_conf_registration";

    $result = $wpdb->insert($table_name, $data, $format = NULL);

    //If everything goes well, redirect user to front page
    if ($result == 1) {
      wp_redirect("http://localhost/wordpress/");
      exit;;
    } else {
      //Need to implement a way to fix error handling on form submissions.
      wp_redirect("http://localhost/wordpress/conferences/conference-registration/");
      echo "<script>alert('There seems to be an error')</script>";
    }
  }

