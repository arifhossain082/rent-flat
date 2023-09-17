<?php
include "lib/database.php";
$db = new Database();
include "lib/formate.php";
$fm = new Format();
include "lib/session.php";
$session = new Session();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My house site</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/af00b85eed.js"></script>
  </head>
  <body>
  <div class="header-bg">
    <nav class="navbar navbar-expand-lg navbar-primary">
      <a class="navbar-brand text-white" href="index.php">
        <img src="photo/download.jpg" style="width:50px;height:50px;" alt="logo"><strong> Our talk</strong></a>
      <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item service_hover">
            <a class="nav-link text-white" href="Blog.php">Service</a>
            <ul class="Service-item">
              <li><a href="all_post.php">Are you find a flat</a></li>
              <li><a href="#">Hire a single room</a></li>
              <li><a href="post_room.php">Sale a flat or room</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" onclick="generateReport();" href="index.php#service_blog">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <?php
             if (isset($_COOKIE["useremail"])) {
               $user_cookie = $_COOKIE["useremail"];
               $query = "SELECT * FROM user_details WHERE auth = '$user_cookie'";
               $result = $db->select($query);
               $data = $result->fetch_assoc();?>
               <a class="nav-link text-white login-header-btn" ><?php echo $data['fname']; ?></a>
               <div class="login_section">
                 <div class="login_body container">
                  <div class="login_heading_content">
                   <h3><?php echo $data['fname']." ".$data['lname'] ?></h3>
                  </div>
                  <div class="text-center">
                  <p class="text-center ml-5"><strong>Email :</strong><?php echo $data['email']; ?></p>
                  </div>
                  <div class="logout text-danger"><a href="logout.php">Logout</a></div>
                 </div>
               </div>
            <?php }else { ?>
              <a class="nav-link text-white login-header-btn" >Login</a>
              <div class="login_section">
                <div class="login_body container">
                 <div class="login_heading_content">
                  <h3>Log in</h3>
                 </div>
                 <div class="form-login">

                 <form class="form" action="login_core.php" method="post">
                   <div class="lable">
                    <label for="password">Email or Phone</label>
                   </div>
                   <div class="input-group">
                   <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                   <input id="email" type="text" class="form-control" name="number" placeholder="Enter phone or email" required="">
                   </div>
                   <div class="lable">
                    <label for="password">Password</label>
                   </div>
                   <div class="input-group">

                   <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                   <input id="password" type="password" class="form-control" name="password" placeholder="Enter password" required="">
                   </div>
                   <div class="input-group submit_btn">
                    <input type="submit" class="btn btn-info" value="Log in" />
                   </div>
                 </form>
                 <div class="forgot_pass">
                  <span><a href="#">Forgot password</a></span>
                 </div>
                 <div class="creat_account"></div>
                 <a href="registation.php">Create account</a>
               </div>
                </div>
              </div>
            <?php }
              ?>

            </li>
        </ul>
        </div>
      </nav>
     </div>
