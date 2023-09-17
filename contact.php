<?php include "inc/header.php"; ?>
<!---contact section--->
     <section class="containe">
       <div class="contact_section">
        <div class="contact_body">

         <div class="contact_box">
           <div class="contact_hading_content">
            <h2>Contact us</h2>
           </div>
           <div class="row">
            <div class="col-md-5 col-sm-12 contact_phone_email">
             <div class="contact_info_field">
              <div class="contact_phone">
               <span><i class="fas fa-phone-square"></i></span><strong>Phone: <small>01732-112323</small></strong>
              </div>
              <div class="contact_email">
               <span><i class="fas fa-envelope"></i></span><strong>Email: <small>arifhossein082@gmail.com</small></strong>
              </div>
              <div class="contact_location">
               <span><i class="fas fa-map-marker-alt"></i></span><strong>Address: <small>Sapahar Naogaon</small></strong>
              </div>
             </div>
            </div>
            <div class="col-md-6 col-sm-12 contact_sent_message">
             <div class="form_section_contact">
               <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $name = mysqli_real_escape_string($db->link, $_POST['name'] );
                  $email = mysqli_real_escape_string($db->link, $_POST['email'] );
                  $number = mysqli_real_escape_string($db->link, $_POST['number'] );
                  $massege = mysqli_real_escape_string($db->link, $_POST['massege'] );
                  if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
                  $mgs = "<div class='alert alert-danger'><strong>Error !</strong>Email address is not valid !</div>";
                  echo $mgs;
                }
                  if ($name == "" || $email == "" || $number == "" || $massege == "") {
                   echo "<span font-color='red'>field must not be empty </span";
                 }else {
                   $query = "INSERT INTO user_massege(name, email, phone, massege) VALUES ('$name', '$email', '$number', '$massege')";
                  $result =$db->insert($query);
                  if ($result) {
                    echo "<div class='alert alert-success'><strong>Success !</strong>Your massege is send</div>";
                  }else {
                    echo "<div class='alert alert-danger'><strong>Error !</strong>Your massege is not sent</div>";
                  }
                   }
                 }
                ?>
               <form class="form" action="contact.php" method="post">
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
              </div>
         <input type="text" class="form-control" placeholder="Your Name" name="name">
         <div class="input-group-prepend mail_input">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
         </div>
            <input type="text" class="form-control" placeholder="Enter Email" name="email">

            <div class="input-group">
            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
            <input id="number" type="text" class="form-control" name="number" placeholder="Enter contact number">
            </div>
           <div class="form-group textarea_input">
             <textarea name="massege" class="form-control" rows="5" cols="80" id="comment" placeholder="Write your massege"></textarea>
           </div>
           <div class="form-group">
             <input type="submit" name="btn" class="btn btn-success" value="Sent">

           </div>
                </div>
               </form>
             </div>
            </div>
           </div>
         </div>
        </div>
       </div>
     </section>

     <!---footer section--->
 <?php include "inc/footer.php"; ?>
