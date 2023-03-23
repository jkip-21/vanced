<?php 
/**
 * Template Name: user
*/
get_header();?>



<?php
    global $current_user;
    get_currentuserinfo();
    $username = $current_user->display_name;
    echo '<p>Welcome, '.$username.'!</p>';
?>

<style>
		.homepage-heading {
	width: 100%;
	padding-top: 1vw;
	display: flex;
	justify-content: space-between;
	align-items: center;
  background-color:#37362A;
    
}
.heading2 {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	gap: 450px;
    font-family: Arial, Helvetica, sans-serif;
    
}
.links {
	display: flex;
	justify-content: space-evenly;
    gap: 50px;
   
}
.links a {
  color:white;
 
}


.list {
	margin: 20px;
	list-style: none;
  color:white;
 blank
}
.brand img{
  margin:15px;
  width: 130px;
  height:80px;
}
a {
	text-decoration: none;
	color: #090D5A;
	display: inline-block;

}
.btns{
	color: #fff;
	padding: 5px;
}
.login{
	background-color: #090D5A;
	color: #fff;
	border-radius: 5px	;
}
	</style>
	<div class="homepage-heading">
        <div class="heading2">
            <div class="brand">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Free_sample_By_Wix.jpg" alt="img" height="80">

            </div>
            <div class="links">
              <li class="list"><a href="/easyM/">HOME</a></li>
              <li class="list"><a href="/easyM/about/">ABOUT</a></li>
              <li class="list"><a href="/easyM/contact/">CONTACT</a></li>

            </div>
            
        </div>
        <!-- <div class="login">
        <a role="button" class="btns" href="/wp/vanced/register/">Register</a>          
        </div> -->
    </div>
    <?php
/**
 * Template Name: Dashboard
 */
get_header();
?>
<style>
		.homepage-heading {
	width: 100%;
	padding-top: 1vw;
	display: flex;
	justify-content: space-between;
	align-items: center;
  background-color:#37362A;
    
}
.heading2 {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	gap: 450px;
    font-family: Arial, Helvetica, sans-serif;
    
}
.links {
	display: flex;
	justify-content: space-evenly;
    gap: 50px;
   
}
.links a {
  color:white;
 
}


.list {
	margin: 20px;
	list-style: none;
  color:white;
 
}
.brand img{
  margin:15px;
  width: 130px;
  height:80px;
}
a {
	text-decoration: none;
	color: #090D5A;
	display: inline-block;

}
.btns{
	color: #fff;
	padding: 5px;
}
.login{
	background-color: #090D5A;
	color: #fff;
	border-radius: 5px	;
}
	</style>
	<!-- <div class="homepage-heading">
        <div class="heading2">
            <div class="brand">
            <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/Free_sample_By_Wix.jpg" alt="img" height="80">

            </div>
            <div class="links">
              <li class="list"><a href="/easyM/">HOME</a></li>
              <li class="list"><a href="/easyM/about/">ABOUT</a></li>
              <li class="list"><a href="/easyM/contact/">CONTACT</a></li>

            </div>
            
        </div>
        <div class="login">
        <a role="button" class="btns" href="/wp/vanced/register/">Register</a>          
        </div>
    </div> -->


<head>
<link rel="stylesheet" href="wp-content/themes/wp_bootstrap5_theme/assets/css/front.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
    .row.content {height: 550px}
    

    .sidenav {
      background-color: #f1f1f1;
      height:100%;
      margin-top:20px;
      background-color: #37362A;
      color:white;
    }
    .topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#37362A;
  margin-top:-70px;

}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  margin-left: 100px;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #37362A;}

ul.topnav li.right {float: right;}

 
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>

<style>
    #nav{
        height: 300px;
    }
    .nav .navbar-nav{
        display: inline;
    }
</style>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-md-2  sidenav hidden-xs">
  
      <ul class="nav nav-pills ">
        <li   class="active"><a href="../../easyM/dashboard-url/">Dashboard Users</a></li>
        <li><a href="../../easyM/profile/">Profile</a></li>
        <!-- <li><a href="../../easyM/employees/">Users</a></li> -->
        <li ><a href="#section3">Projects list</a></li>
        <li><a href="#section3">Account Settings</a></li>
       
      </ul><br>
    </div>
    <br>
    <style>
        .col-sm-9 .well{
            margin-top:20px;
            
        }
        .nav-pills{
            display:flex;
            flex-direction: column;
            gap:20px;
        }
        #well{
          display:flex;
          flex-direction:row;
        
          justify-content:space-between;
          flex-wrap:wrap;
        }
        #well button{
          background-color:green;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }

        #well h6 button {
          background-color:green;
          color:white;
          width:100px;
          border-radius:20px;
          border:1px solid black;
        }
        #edit button{
          background-color:#10A54BC9;
          color:white;
          border:1px solid black;
          border-radius:5px;
          width:50px;


        }
        #red button{
          background-color:red;
        }
        
        
        
 
    </style>
   <div class="col-sm-9 col-md-10">
  <div class="well" id="well" style='background-color: #37362A; color:white;'>
    <h4>Welcome to Easy Manage</h4>
    
   
    <br/><br/>
    <form action="" method="GET">
      <input type="text" name="search" placeholder="Search users...">
      <button type="submit">Search</button>
    </form>
    <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
  </div> 

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
      
     
      </tr>
    </thead>
    <tbody>
      <?php
      $args = array(
          'orderby' => 'ID',
          'order' => 'ASC',
      );

      if(isset($_GET['search'])){
        $search_text = $_GET['search'];
        $args['search'] = '*'.$search_text.'*';
      }

      $users = get_users($args);
      foreach ($users as $user) { 
        $user_id = $user->ID;
        $registration_status = get_user_meta($user_id, 'registration_status', true);
        if ($registration_status != 'inactive') { // only show active and pending users
      ?>
        <tr>
          <td>
            <?php echo $user_id; ?>
          </td>
          <td>
            <?php echo $user->display_name; ?>
          </td>
          <td>
            <?php echo $user->user_email; ?>
          </td>
         
</td>
</tr>
<?php } } ?>
</tbody>

  </table>
</div>



<?php
$users = get_users(array('role__in' => array('developer')));

if (isset($_POST['activate_user']) && isset($_POST['user_id'])) {
    $user_id = intval($_POST['user_id']);
    update_user_meta($user_id, 'registration_status', 'active');
    echo '<div class="alert alert-success">User activated successfully.</div>';
}
?>
<?php
$users = get_users(array('role__in' => array('developer')));

if (isset($_POST['deactivate_user']) && isset($_POST['user_id'])) {
    $user_id = intval($_POST['user_id']);
    update_user_meta($user_id, 'registration_status', 'inactive');
    echo '<div class="alert alert-success">User deactivated successfully.</div>';
}
?>
<!-- mmmmmmmmmmm -->

wp_get_current_user(); ?>
                        <?php
                        if (is_user_logged_in()) {
                            echo 'Welcome ' . $current_user->user_login . "\n";
                        } else {
                            wp_loginout();
                        }
                        ?>








<?
?>PHP

 //get_footer


