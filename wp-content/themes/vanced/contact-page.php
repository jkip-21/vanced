<?php
/*
Template Name: contact
*/
get_header();
?>

<head>
  <link rel="stylesheet" href="../wp-content/themes/vanced/assets/css/add_project.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="../wp-content/themes/vanced/assets/img/brand.jpg" alt="" height="100px">

  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/wp/vanced/"
          style="text-decoration: none; color: #090D5A; margin-right: 40px;">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/wp/vanced/about-us"
          style="text-decoration: none; color: #090D5A; margin-right: 40px;">ABOUT US</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/wp/vanced/contact/"
          style="text-decoration: none; color: #090D5A;margin-right: 40px;">CONTACT US</a>
      </li>
    </ul>
    <div class="justify-content-end">
      <a href="/wp/vanced/auth/"><button type="button" style="margin-right: 40px;" class="btn">LOGIN</button></a>
    </div>
  </div>
</nav>
<style>
  .logo {
    display: flex;
    justify-content: center;

  }

  .btn {
    display: flex;
    justify-content: center;
  }

  .btns {
    background-color: #090D5A;
    color: #fff;
    border-radius: 5px
  }

  a .btn {
    background-color: #090D5A;
    border-radius: 5px;
    color: white;
  }

  .new {
    border: 2px solid #090D5A;
    display: block;
    justify-self: center;
    width: 40%;
    margin-left: 30%;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 20px
  }
</style>
<div class="new">
  <div class="row justify-content-center">

    <div class="logo justify-content-center">
      <img style="text-align: center;" src="../wp-content/themes/vanced/assets/img/brand.jpg" alt="LOGO" height="150px"
        width="120px">

    </div>
    <h1 style="text-align: center;">CONTACT US</h1>
    <?php

    if (isset($_POST['cpt_nonce_field']) && wp_verify_nonce($_POST['cpt_nonce_field'], 'cpt_nonce_action')) {

      // Check if the user already has an assigned project
      $assigned_projects = get_posts(
        array(
          'post_type' => 'contact',
        )
      ); {
        // create post object with the form values
        // Create a new contact post
        $contact_email = sanitize_text_field($_POST['useremail']);
        $contact_message = sanitize_text_field($_POST['message']);


        $new_contact = array(
          'post_title' => $contact_email,
          'post_content' => $contact_message,
          'post_status' => 'publish',
          // 'post_type' => $_POST['contact'],
        );
        // insert the post into the database
    
        global $post;
        $post_id = $post->ID;
        $contact_id = wp_insert_post($new_contact);

        if ($contact_id) {
          $alert_type = 'success';
          $alert_message = 'Contact sent successfully.';
        } else {
          $alert_type = 'danger';
          $alert_message = 'Please try again.';
        }
      }

    }

    ?>
    <form action="" method="post" style="width:40vw; box-shadow:3px 3px 3px 3px 3px grey; padding:30px;">
      <?php if (isset($alert_message)): ?>
        <div class="alert alert-<?php echo $alert_type; ?> mb-3" role="alert">
          <?php echo $alert_message; ?>
        </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="email" style="color: #090D5A; font-weight: w800; font-size: 20px"><?php _e('Email:', 'mytextdomain');?></label>
        <input type="email" class="form-control input-sm mb-4" name="useremail" id="email" ,
          placeholder="Enter your email..." required style="border: 1px solid #090D5A">
      </div>
      <div class="form-group">
        <label for="message" style="color: #090D5A; font-weight: w800; font-size: 20px"><?php _e('Message:', 'mytextdomain'); ?></label><br>
        <textarea name="message" id="" rows="5" class="form-control input-sm mb-4" placeholder="Enter your message..."
          required style="border: 1px solid #090D5A;"></textarea>
      </div>
      <div class="btn">
        <div class="col-xs-4 col-sm-4 col-md-4">
        <button class="btn btn-primary px-5" type="submit" name="sendcontact"><?php _e('SEND', 'mytextdomain') ?></button>
        </div>
      </div>
  </div>
  <?php wp_nonce_field( 'cpt_nonce_action', 'cpt_nonce_field' ); ?>
  </form>
</div>
</div>
<?php
get_footer();
?>