<?php include "inc/header.php"; ?>
<!---contact section--->
     <section class="containe">
       <div class="ragis_section">
        <div class="contact_body">
         <div class="contact_box">
           <div class="contact_hading_content">
            <h2>Registation now</h2>
           </div>
            <div class="col-md-6 col-sm-12 contact_sent_message">
             <div class="form_section_contact">
               <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $fname = mysqli_real_escape_string($db->link, $_POST['fname'] );
                  $lname = mysqli_real_escape_string($db->link, $_POST['lname'] );
                  $number = mysqli_real_escape_string($db->link, $_POST['number'] );
                  $email = mysqli_real_escape_string($db->link, $_POST['email'] );
                  $password = mysqli_real_escape_string($db->link, $_POST['password'] );
                  $auth = md5(sha1($number.$password));
                  $re_pass = mysqli_real_escape_string($db->link, $_POST['re_pass'] );
                  if ($password == $re_pass) {
                    $con_pass = md5(sha1($re_pass));
                  }else {
                    echo "<span class='text-danger'>Confirm password dose not match</span>";
                  }
                  if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
                  $mgs = "<div class='alert alert-danger'><strong>Error !</strong>Email address is not valid !</div>";
                  echo $mgs;
                }
                  if ($fname == "" || $number == "" || $password == "") {
                   echo "<span font-color='red'>field must not be empty </span";
                 }else {
                   $query = "INSERT INTO user_details (fname, lname, phone, email, password, auth) VALUES('$fname', '$lname', '$number', '$email', '$con_pass', '$auth')";
                   $result = $db->insert($query);
                   if ($result) {
                     echo "<span class='text-success'><strong>Success</strong>Registation succesfull</span>";
                   }else {
                     echo "<span class='text-danger'><strong>Error!</strong>Registation could not succesfull</span>";
                   }
                 }
                }

                ?>
               <form class="form" action="registation.php" method="post">
                 <div class="input-group mb-3">
                   <label style="display:flex;width:100%;"for="name">Name</label>
                   <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
              </div>
         <input type="text" class="form-control" placeholder="Fast Name" name="fname">
         <div class="input-group-prepend mail_input">
          <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
         </div>
            <input type="text" class="form-control" placeholder="Last name" name="lname">
            <div class="input-group">
            <label style="display:flex;width:100%;"for="phone">Phone</label>
            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
            <input id="number" type="text" class="form-control" name="number" placeholder="Enter contact number">
            </div>
            <div class="input-group">
              <label style="display:flex;width:100%;"for="email">Email</label>
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            <input id="number" type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="input-group">
              <label style="display:flex;width:100%;"for="password">Password</label>
            <span class="input-group-text"><i class="fas fa-key"></i></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="input-group">
              <label style="display:flex;width:100%;"for="password">Confirm password</label>
            <span class="input-group-text"><i class="fas fa-key"></i></i></span>
            <input id="number" type="password" class="form-control" name="re_pass" placeholder="Confirm password">
            </div>
           <div class="form-group"style="margin-top:15px;">
             <input type="submit" name="btn" class="btn btn-success" value="Submit">
           </div>
                </div>
               </form>
             </div>
            </div>
         </div>
        </div>
       </div>
     </section>

     <!---footer section--->
 <?php include "inc/footer.php"; ?>
