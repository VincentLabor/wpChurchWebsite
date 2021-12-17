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
    <div class="page-banner__bg-image flexImage">
      <img src="<?php echo $args['photo']; ?>" alt="" class="bannerImg">
    </div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title textWhite"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro textWhite">
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

add_filter('wp_nav_menu_args', 'conditional_menu');
//subscriber

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
add_action("login_enqueue_scripts", "ourLoginCSS");
function ourLoginCSS()
{
?>

  <style type="text/css">
    /* Fix me */
    body.login div#login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/JW_WHITE.png);
      margin-bottom: 3em;
    }

    body.login div#login p#nav a {
      color: white;
    }

    body.login div#login p#backtoblog a {
      color: white;
    }

    body.login {
      background: black;
    }
  </style>

<?php
}

//Adding text to login page is borked
// add_filter('login_headertext','ourLoginTitle');

// function ourLoginTitle(){
//   return "Jesuswalk Youth Conference";
// }

add_action('admin_post_nopriv_contact_form', 'prefix_send_email_to_admin');
add_action('admin_post_contact_form', 'prefix_send_email_to_admin');

function prefix_send_email_to_admin()
{
  if (isset($_POST["submitbtn"])) {

    global $wpdb;

    $data = array(
      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'message' => $_POST['message'],
    );

    $table_name = "registrants";

    $result = $wpdb->insert($table_name, $data, $format = NULL);

    if ($result == 1) {
      wp_redirect("http://localhost/wordpress/");
      exit;;
    } else {
      echo "<script>alert('There seems to be an error')</script>";
    }
  }
};
