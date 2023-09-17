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
         $showRecordPerPage = 6;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
        $start_from = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
        $totalEmpSQL = "SELECT * FROM hs_post";
        $allEmpResult = $db->select($totalEmpSQL);
        $totalEmployee = mysqli_num_rows($allEmpResult);
        $lastPage = ceil($totalEmployee/$showRecordPerPage);
        $firstPage = 1;
        $nextPage = $currentPage + 1;
        $previousPage = $currentPage - 1;
          ?>
         <?php
         $query = "SELECT * FROM hs_post order by id DESC LIMIT $start_from,$showRecordPerPage";
         $result = $db->select($query);
         if ($result) {
           while ($data = $result->fetch_assoc() ) { ?>
             <div class="col-md-4 col-sm-12">
              <div class="room_or_flat_post_box">
               <div class="heading_section_of_post">
                <h4><?php echo $data['title']; ?></h4>
                <span><?php echo $fm->date($data['creation_date']); ?> <span class="text-primary">by :</span><?php echo $data['post_by']; ?></span>
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
        <?php   }  ?>

</div>
<div class="per_post_page text-center">
  <ul class="pagination">
    <?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">Previous</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
  </ul>
</div>
<?php } ?>
  </div>
</section>
<!---footer section--->
 <?php include "inc/footer.php"; ?>
