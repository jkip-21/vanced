<?php
/*
Template Name: Register
*/
get_header();
?>
<head>
  <link rel="stylesheet" href="../wp-content/themes/vanced/assets/css/add_project.css">
</head>

<?php

$errors =array();

if(isset($_POST['register'])){
    if ( isset( $_POST['password'] ) && $_POST['password'] != $_POST['cpassword'] ){
        $errors[] = "Passwords do not match.";
    }
    
    if(empty($errors)){
        $user_login = $_POST['username'];
        $user_email = $_POST['useremail'];
        $user_pass  = $_POST['password'];
        $user_cpass  = $_POST['cpassword'];

        $data = array(
            'user_login'           =>  $user_login, // the user's login username.
            'user_email'           =>  $user_email, //enter email
            'user_pass'	           =>  $user_pass, // not necessary to hash password ( The plain-text user password ).
            'user_cpass'	         =>  $user_cpass,
            'role'                 =>  'member', //give role of member
            'show_admin_bar_front' =>  false, // display the Admin Bar for the user 'true' or 'false'
            'user_status'          =>  0, // set the user as inactive
            'meta_input' => array(
               'registration_status' => 'pending', // add custom field to mark the user as unverified
               'verified' => false, // add a custom field to mark the user as unverified
            )
        );
        
        $user_id = wp_insert_user( wp_slash($data) );
        
        if ( ! is_wp_error( $user_id ) ) {
            
            $success_message  = '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            $success_message .= 'User '. $user_id. ' has been successfully registered.';
            $success_message .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            $success_message .= '</div>';

            // send email to administrator to approve or deny the registration
            $to = get_option('admin_email');
            $subject = 'New user registration waiting for approval';
            $message = 'A new user has registered with the following details:\n\n';
            $message .= 'Username: ' . $user_login . '\n';
            $message .= 'Email: ' . $user_email . '\n\n';
            $message .= 'Click the following link to approve or deny the registration:\n\n';
            $message .= site_url('/registration-approval/') . '?user_id=' . $user_id . '&action=approve\n\n';
            $message .= 'Thank you';

            update_user_meta($user_id, 'registration_status', 'pending');
            
            wp_mail($to, $subject, $message);

        }else{
            $error_code = array_key_first( $user_id->errors );
            $error_message = $user_id->errors[$error_code][0];
            $errors[] = $error_message;
        }
    }

}
?>


                      
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong>
                        <?php foreach ($errors as $error): ?>
                            &nbsp; <?php echo $error; ?>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (isset($success_message)): ?>
                  <?php echo $success_message; ?>
                <?php endif; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="../wp-content/themes/vanced/assets/img/brand.jpg" alt="" height="100px">

  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/wp/vanced/" style="text-decoration: none; color: #090D5A; margin-right: 40px;">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/wp/vanced/about-us" style="text-decoration: none; color: #090D5A; margin-right: 40px;">ABOUT US</a>
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
<style>
  .logo{
    display: flex;
    justify-content: center;

  }
  .btn{
    display: flex;
    justify-content: center;
  }
  .btns{
    background-color: #090D5A;
    color: #fff;
    border-radius: 5px
  }
  .new{
    border:  2px solid #090D5A;
    display: block;
    justify-self: center;
    width: 40%;
    margin-left: 30%;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 20px
  }
  a .btn{
  background-color: #090D5A;
  border-radius: 5px;
  color: white;
}
</style>
<div class="new">
<div class="row justify-content-center">
  
    <div class="logo justify-content-center">
    <img style="text-align: center;" src="../wp-content/themes/vanced/assets/img/brand.jpg" alt="LOGO" height="150px" width="120px">
   
  </div>
  <h1 style="text-align: center;">REGISTER HERE</h1>
    <form action="" method="post" style="width:40vw; box-shadow:3px 3px 3px 3px 3px grey; padding:30px;">
        <div class="form-group">
          <label for="email" style="color: #090D5A; font-weight: w800; font-size: 20px">Email:</label>
            <input type="email" class="form-control input-sm mb-4" name="useremail" id="email", placeholder="Enter your email..." style="border: 1px solid #090D5A;" required>
        </div>
        <div class="form-group">
          <label for="username" style="color: #090D5A; font-weight: w800; font-size: 20px">Username:</label>
            <input type="text" class="form-control input-sm mb-4" name="username" id="username", placeholder="Enter your email..." style="border: 1px solid #090D5A;" required>
        </div>
        <div class="form-group">
          <label for="password" style="color: #090D5A; font-weight: w800; font-size: 20px">Password:</label>
            <input type="text" class="form-control input-sm mb-4" name="password" id="password", placeholder="Enter your Password..." style="border: 1px solid #090D5A;" required>
        </div>
  
        <div class="form-group">
          <label for="password" style="color: #090D5A; font-weight: w800; font-size: 20px">Confirm Password:</label>
            <input type="text" class="form-control input-sm mb-4" name="cpassword" id="password", placeholder="Confirm Password..." style="border: 1px solid #090D5A;" required>
        </div>
        <div class="btn">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <input type="submit" value="REGISTER" name="register" class="btns">
            </div>
        </div>
        </div>
       
    </form>
</div>
</div>
<?php 
get_footer();
?>

