<?php
/*
Template Name: Register
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
    <a href="/wp/vanced/wp-login.php/"><button type="button" style= "margin-right: 40px;"class="btn">LOGIN</button></a>
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
            <input type="text" class="form-control input-sm mb-4" name="password" id="password", placeholder="Enter your email..." style="border: 1px solid #090D5A;" required>
        </div>
    
        <div class="btn">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <input type="submit" value="REGISTER" name="submitbtn" class="btns">
            </div>
        </div>
        </div>
       
    </form>
</div>
</div>
<?php 
get_footer();
?>