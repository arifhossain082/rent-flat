<?php include "inc/header.php";
 ?>
     <!---post section--->
     <section class="containe">
       <div class="all_post_body container">
         <!--search section--->

           <div class="post_cat_section">
             <div class="post_cat_title text-center mb-5">
              <h3 class="text-uppercase">Category post</h3>
            </div>
           </div>
           <div class="row">
         <?php
         if (isset($_GET['id'])) {
  $id = $_GET['id'];
}elseif ($_GET['place'] == NULL ) {
  echo "Data not found";
}
         $query = "SELECT * FROM hs_post WHERE cat = $id";
         $result = $db->select($query);
         if ($result) {
           while ($data = $result->fetch_assoc() ) { ?>
             <div class="col-md-4 col-sm-12">
              <div class="room_or_flat_post_box">
               <div class="heading_section_of_post">
                <h4><?php echo $data['title']; ?></h4>
                <span><?php echo $fm->date($data['creation_date']); ?> <span class="text-primary">by</span>: Arif</span>
               </div>
               <div class="img_of_post">
                <img src="photo/<?php echo $data['font_pic']; ?>" alt="post_image">
               </div>
               <span class="location"><i class="fas fa-map-marker-alt"></i><?php echo $data['location']; ?></span>
               <div class="view_btn_post">
                <a href="buyflat.php?id=<?php echo $data['id']; ?>" class="btn btn-success">View</a>
               </div>
              </div>
             </div>
        <?php   } } ?>
      </div>
  </div>
</section>
<!---footer section--->
 <?php include "inc/footer.php"; ?>
