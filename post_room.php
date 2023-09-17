<?php include "inc/header.php"; ?>
 <!---post section--->
     <section class="containe">
       <div class="post_body">
       <div class="post_deteils container">
         <div class="post_heading">
           <h3>Make your post</h3>
         </div>
        <div class="row">
          <div class="col-md-7 col-sm-12">
           <div class="flat_details">
             <div class="flat-heading">
              <h5>Your flat or room details</h5>
             </div>
             <div class="input-section">
               <?php
               if (isset($_COOKIE['useremail'])) {
                 $cookie = $_COOKIE['useremail'];
                 $query = "SELECT * FROM user_details WHERE auth = '$cookie'";
                 $result = $db->select($query);
                 $get_data = $result->fetch_assoc();
                 $get_author = $get_data['fname'];
               }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $room_cat = mysqli_real_escape_string($db->link, $_POST['room_cat'] );
                $title = mysqli_real_escape_string($db->link, $_POST['title'] );
                $item = mysqli_real_escape_string($db->link, $_POST['item'] );
                $number = mysqli_real_escape_string($db->link, $_POST['number'] );
                $location = mysqli_real_escape_string($db->link, $_POST['location'] );
                $description = mysqli_real_escape_string($db->link, $_POST['description'] );
                $author = $get_author;
                $targetDir = "photo/";
  $fileNamea = basename($_FILES["imagea"]["name"]);
  $targetFilePath = $targetDir . $fileNamea;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
      }else{
          $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
      }
  }else{
      $statusMsg = 'Please select a file to upload.';
  }
  $targetDir = "photo/";
$fileNameb = basename($_FILES["imageb"]["name"]);
$targetFilePath = $targetDir . $fileNameb;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
// Allow certain file formats
$allowTypes = array('jpg','png','jpeg','gif','pdf');
if(in_array($fileType, $allowTypes)){
// Upload file to server
move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
}else{
$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
}
}else{
$statusMsg = 'Please select a file to upload.';
}
$targetDir = "photo/";
$fileNamec = basename($_FILES["imagec"]["name"]);
$targetFilePath = $targetDir . $fileNamec;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
// Allow certain file formats
$allowTypes = array('jpg','png','jpeg','gif','pdf');
if(in_array($fileType, $allowTypes)){
// Upload file to server
move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
}else{
$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
}
}else{
$statusMsg = 'Please select a file to upload.';
}


$query = "INSERT INTO hs_post (cat, title, item, contact, location, description, font_pic, inside_pic, full_bilding, post_by) VALUES ('$room_cat', '$title', '$item', '$number', '$location', '$description', '$fileNamea', '$fileNameb', '$fileNamec', '$author')";
      $insertd = $db->insert($query);
      if ($insertd) {
        echo "<span class='alert text-success'>Post inserted succesfuly</span>";
      }else {
        echo "<span class='alert text-danger'>Post inserted not succesfull</span>";
      }
                }
                ?>
             <form class="" action="post_room.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter post title" required="" />
               </div>
               <div class="form-group">
                <label for="items">Room category</label>
                <select class="form-control" name="room_cat">
                  <option>How many room</option>
                  <?php
                   $query = "SELECT * FROM hs_category";
                   $result =$db->select($query);
                   if ($result) {
                     $x = 0;
                     while ($data = $result->fetch_assoc()) { $x++?>
                       <option value="<?php echo $x; ?>"><?php echo $data['category']; ?></option>
                    <?php }
                   }
                   ?>
                </select>
               </div>
               <div class="form-group">
                <label for="items">Items</label>
                <input type="text" class="form-control" name="item" placeholder="Daining toylet and others">
               </div>
          <div class="form-group">
            <label for="contact">Contact number</label>
              <input type="text" class="form-control" name="number" placeholder="Enter contact number" required="" />
            </div>
               <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" placeholder="Location">
               </div>
               <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="8" cols="65" placeholder="Write your description"></textarea>
               </div>

            </div>
             <div>
          </div>
        </div>
       </div>
<div class="col-md-5 col-sm-12 post_photo_section">
<div class="photo_box_all">

  <div class="photo_boxa">
   <div class="photo_boxa_heading">
    <strong>Photo inside your room</strong>
   </div>
    <div class="imagea">
    <img id="previewImga" src="photo/avater.png" alt="Placeholder">
    <input type="file" onchange="previewFilea(this);" name="imagea" class="form-control image-post" id="image1" value="Upload">
    </div>
  </div>

  <div class="photo_boxb">
    <div class="photo_boxb_heading">
    <strong>Photo outside your room</strong>
    </div>
    <div class="imageb">
    <img id="previewImgb" src="photo/avater.png" alt="Placeholder">
    <input type="file" onchange="previewFile(this);" name="imageb" class="form-control image-post" id="image2" value="Upload">
    </div>
  </div>

    <div class="photo_boxc">
      <div class="photo_boxc_heading">
      <strong>Font image your bilding</strong>
      </div>
      <div class="imageb">
      <img id="previewImgc" src="photo/avater.png" alt="Placeholder">
      <input type="file" onchange="previewFilec(this);" name="imagec" class="form-control image-post" id="image3" value="Upload">
      </div>
    </div>
    <div class="submit_post_info">
      <input type="submit" class="btn btn-success pull-right" value="Post">
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
