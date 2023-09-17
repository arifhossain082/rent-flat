<?php include "inc/header.php"; ?>
 <!---post section--->
     <section class="containe">
      <div class="hire_flat_body container">
        <div class="row">
          <?php
          if (isset($_GET['id']) & !empty($_GET['id'])) {
            $id = $_GET['id'];
          }
           $query = "SELECT * FROM hs_post WHERE id=$id";
           $chack_query = $db->select($query);
           if ($chack_query) {
             $data = $chack_query->fetch_assoc();
             $pic1 =  $data['font_pic'];
             $pic2 =  $data['inside_pic'];
             $pic3 =  $data['full_bilding'];
             $cat = $data['cat'];
           }
           ?>
          <div class="flat_or_room col-md-9 col-sm-12">
            <div class="flat_title">
              <h4><?php echo $data['title']; ?></h4>
             </div>
             <div class="post-time">
              <span><?php echo $fm->date($data['creation_date']); ?> <span class="text-primary">Author :</span>Arif</span>
             </div>
           <div class="flat_room_image">
             <!---slidr section--->
             <div class="slaider">
                 <div id="demoss" class="carousel slide" data-ride="carousel">
                 <ul class="carousel-indicators">
                   <li data-target="#demoss" data-slide-to="0" class="active"></li>
                   <li data-target="#demoss" data-slide-to="1"></li>
                   <li data-target="#demoss" data-slide-to="2"></li>
                 </ul>
     <div class="carousel-inner">
         <div class="carousel-item active">
           <a href="#"><img src="photo/<?php echo $pic1; ?>" alt="Los Angeles" class="slider_image"></a>
           </div>
               <div class="carousel-item">
                 <a href="#"><img src="photo/<?php echo $pic2; ?>" alt="Chicago" class="slider_image"></a>
               </div>
               <div class="carousel-item">
                 <a href="#"><img src="photo/<?php echo $pic3; ?>" alt="Chicago" class="slider_image"></a>
               </div>

         </div>
                  <a class="carousel-control-prev" href="#demoss" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demoss" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
             </div>
           </div>
           <div class="flat-details-box">
              <div class="room-or-flat-info">
               <ul class="list-group list-group-flush">
                <li class="list-group-item">
                 <div class="room-category">
                  <div class="room-category-heading">
                   <h5><i class="fas fa-home mr-1"></i>How many room</h5>
                  </div>
                  <?php
                   $query = "SELECT * FROM hs_category WHERE id = '$cat'";
                   $result = $db->select($query);
                   if ($result) {
                     $get_cat = $result->fetch_assoc(); ?>
                     <span><?php echo $get_cat['category']; ?></span>
                   <?php } ?>
                 </div>
                </li>
                <li class="list-group-item">
                 <div class="item-category">
                  <div class="item-category-heading">
                   <h5><i class="fas fa-sitemap mr-1"></i>What are have with the flat</h5>
                  </div>
                  <span><?php echo $data['item']; ?></span>
                 </div>
                </li>
                <li class="list-group-item">
                <div class="contact_author">
                 <div class="contact_author_heading">
                  <h5><i class="fas fa-address-book mr-1"></i>contact</h5>
                 </div>
                 <span><?php echo $data['contact']; ?></span>
                </div>
               </li>
               <li class="list-group-item">
               <div class="location_the_flat">
                <div class="location_heading">
                 <h5><i class="fas fa-map-marker-alt mr-1"></i>Location</h5>
                </div>
                <span><?php echo $data['location']; ?></span>
               </div>
              </li>
              <li class="list-group-item">
              <div class="description_the_flat">
               <div class="description_heading">
                <h5><i class="fas fa-file-medical mr-1"></i>Description</h5>
               </div>
               <p><?php echo $data['description']; ?><p>
              </div>
             </li>
               </ul>
              </div>
           </div>
          </div>
          <div class="col-md-3">
            <div class="hire_card">
              <div class="card_title">
               <h4>Hire</h4>
              </div>
              <div class="hire_info">
               <strong>Hire the flat for a month</strong>
              </div>
              <div class="hire-text">
               <span>Please contact the contact number or email than click confirm</span>
              </div>
              <div class="hire_price">
               <strong>$ 12</strong>
              </div>
              <div class="hire_btn">
               <button type="button" name="button" class="btn btn-info">Confirm</button>
              </div>
              </div>
          </div>
        </div>
      </div>
     </section>

     <!---footer section--->
 <?php include "inc/footer.php"; ?>
