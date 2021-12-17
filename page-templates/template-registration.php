<?php
get_header();
/*
  Template Name: Registration
  Template Post Type: Post
  Template for displaying the registration form.
 
  @package UnderStrap
 */

?>

<p>Hello</p>


<div id="content">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <label for="fullname">Full Name</label>
</br>
        <input type="text" name="fullname" id="fullname" required>
        </br>
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required>
        </br>
        <label for="message">Your Message</label>
        <textarea name="message" id="message"></textarea>
        </br>
        <input type="hidden" name="action" value="contact_form">
        <input type="submit" value="Send My Message" name="submitbtn">
    </form>
</div>

<?php
get_footer();

?>