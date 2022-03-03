<?php

/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
  '/theme-settings.php',                  // Initialize theme default settings.
  '/setup.php',                           // Theme setup and custom theme supports.
  '/widgets.php',                         // Register widget area.
  '/enqueue.php',                         // Enqueue scripts and styles.
  '/template-tags.php',                   // Custom template tags for this theme.
  '/pagination.php',                      // Custom pagination for this theme.
  '/hooks.php',                           // Custom hooks.
  '/extras.php',                          // Custom functions that act independently of the theme templates.
  '/customizer.php',                      // Customizer additions.
  '/custom-comments.php',                 // Custom Comments file.
  '/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
  '/editor.php',                          // Load Editor functions.
  '/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
  $understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
  $understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ($understrap_includes as $file) {
  require_once $understrap_inc_dir . $file;
}


function pageBanner($args = NULL)
{

  if (!isset($args['title'])) {
    $args['title'] = get_the_title();
  }

  if (!isset($args['subtitle'])) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!isset($args['photo'])) {
    if (get_field('page_banner_background_image') and !is_archive() and !is_home()) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['2048x2048']; //This is based on the print_r
      // print_r(get_field('page_banner_background_image'));
    } else {
      $args['photo'] = get_theme_file_uri('/img/bannerImage.png');
    }
  }

?>

  <!-- This is the default header for events -->
  <div class="page-banner bot3emMargin">
    <div class="page-banner__bg-image flexImage graybackground">
      <!-- <img src="<?php //echo $args['photo']; ?>" alt="" class="bannerImg"> -->
      <!-- come back here. We will be adding logos or things here. -->
    </div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title textWhite centerText"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro textWhite centerText">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>
  </div>
<?php
}


//Depending if user is logged in or not will display different menus.
function conditional_menu($args = NULL)
{
  if (!is_user_logged_in()) {
    $args['menu'] = 'my-main-header-menu';
  } else if (is_user_logged_in()) {
    $args['menu'] = 'logged-in-menu';
  }
  return $args;
}

add_filter('wp_nav_menu_args', 'conditional_menu'); //filter determines how things are displayed
//wp_nav_menu_args determines what menu will be displayed.
//subscriber

//If the navmenu breaks, just put wp-login.php as the link in the wordpress menu



//Redirecting basic users to homepage instead of dashboard.
add_action('admin_init', 'redirectUserstoFrontEnd');
function redirectUserstoFrontEnd()
{
  $ourCurrentUser = wp_get_current_user();
  //This is specifically for the lowest tier user.
  if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}

//Removing the wp_admin bar thing
add_action('wp_loaded', 'noSubsAdminBar');
function noSubsAdminBar()
{
  $ourCurrentUser = wp_get_current_user();
  //This is specifically for the lowest tier user.
  if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

//Customize login screen
// 1st object is the thing you wish to change
//2nd object is the function that you wish to return instead.
add_filter("login_headerurl", "ourHeaderUrl");

function ourHeaderUrl()
{
  return esc_url(site_url("/"));
}


//This affects the styling of the login page.

//This seems to not work for whatever reason.

//Adding text to login page is borked
// add_filter('login_headertext','ourLoginTitle');

// function ourLoginTitle(){
//   return "Jesuswalk Youth Conference";
// }

//This will trigger once the submit button is clicked on
add_action('admin_post_nopriv_contact_form', 'prefix_send_email_to_admin');
add_action('admin_post_contact_form', 'prefix_send_email_to_admin');

function prefix_send_email_to_admin()
{
  //Checks to see if submitbtn was triggerred
  if (isset($_POST["submitbtn"])) {

    global $wpdb; //Allows us access to MYsql without creating statements 

    //These are the items that are to be sent to the database
    //Will need to create the table before hand before sending these items.
    $data = array(
      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'message' => $_POST['message'],
    );

    //This is the name of the table in the database
    $table_name = "registrants";

    $result = $wpdb->insert($table_name, $data, $format = NULL);

    //If everything goes well, redirect user to front page
    if ($result == 1) {
      wp_redirect("http://localhost/wordpress/");
      exit;;
    } else {
      //Need to implement a way to fix error handling on form submissions.
      wp_redirect("http://localhost/wordpress/registration");
      echo "<script>alert('There seems to be an error')</script>";
    }
  }
};
