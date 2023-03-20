<?php
/**
 * Template Name: Log Out
 */
get_header();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="../wp-content/themes/vanced/assets/img/brand.jpg" alt="" height="100px">

  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/wp/vanced/" style="text-decoration: none; color: #090D5A; margin-right: 40px;">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/wp/vanced/#content" style="text-decoration: none; color: #090D5A; margin-right: 40px;">ABOUT US</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="/wp/vanced/contact/" style="text-decoration: none; color: #090D5A;margin-right: 40px;">CONTACT US</a>
      </li>
    </ul>
    <div class="justify-content-end">
    <a href="/wp/vanced/auth/"><button type="button" style= "margin-right: 40px;"class="btn">LOGIN</button></a>
    </div>
  </div>
</nav>
<?php
// Get the current user's display name
$current_user = wp_get_current_user();
$user_name = $current_user->display_name;

// Log out the user
wp_logout();

// Set the custom message
$message = "You have been successfully logged out, $user_name.";

// Display the message
echo '<p>' . $message . '</p>';
?>
<h2 style="text-align: center"><?php $message =  "You have been successfully logged out, $user_name." ?></h2>
<?php get_footer(); ?>