<?php include "inc/header.php";
 ?>
     <!---post section--->
     <section class="containe">
       <div class="all_post_body container">
         <!--search section--->

           <div class="search_section">
             <div class="search_title text-center mb-2">
              <h3 class="text-uppercase">Search your choosing place</h3>
             </div>
           <form class="search_form" action="search.php" method="get">
             <div class="input-group mb-3">
               <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
          </div>
     <input type="text" class="form-control" placeholder="Your Name">
     <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
     </div>
        <input type="text" class="form-control" placeholder="Write place name" name="place">
       <input class="btn btn-info" type="submit" name="submit" value="Search">
            </div>
           </form>
           </div>

       <div class="row">

         <?php
         if (isset($_GET['place'])) {
  $search = $_GET['place'];
}elseif ($_GET['place'] == NULL ) {
  echo "Data not found";
}
         $query = "SELECT * FROM hs_post WHERE title LIKE '%$search%' OR location LIKE '%$search%'";
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
