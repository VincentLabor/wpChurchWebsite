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
