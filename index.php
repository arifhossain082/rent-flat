<?php include "inc/header.php"; ?>
<!---slidr section--->
<?php include "inc/slider.php"; ?>
 <!---category section--->
        <div class="containe">
         <div class="col-sm-12 item_box">
           <div class="choose_item">
             <h3>Choose Your category</h3>
           </div>
           <div class="row">
             <div class="col-sm-4 item-of-service">
             <div class="service-icon">
               <i class="fas fa-rocket"></i>
             </div>
             <div class="service-info">
               <h3>Are you find a flat</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sint delectus numquam deserunt corrupti consectetur asperiores iusto saep.</p>
               <a class="btn btn-success" href="all_post.php" name="button">Go</a>
             </div>
           </div>

     <div class="col-sm-4 item-of-service">
             <div class="service-icon">
               <i class="fa fa-money"></i>
             </div>
             <div class="service-info">
               <h3>Hire a single room</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sint delectus numquam deserunt corrupti consectetur asperiores iusto saep.</p>
                <button class="btn btn-success" type="button" name="button">Go</button>
             </div>
           </div>

     <div class="col-sm-4 item-of-service">
             <div class="service-icon">
              <i class="fas fa-sync"></i>
             </div>
             <div class="service-info">
               <h3>Sale a flat or room</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sint delectus numquam deserunt corrupti consectetur asperiores iusto saep.</p>
                <a class="btn btn-success" href="post_room.php" name="button">Go</a>
             </div>
           </div>

         </div>
         </div>
        </div>
        <!--search section--->
        <div class="containe containe_search">
          <div class="search_section">
            <div class="search_title text-center mb-4">
             <h3 class="text-uppercase mb-5">Search your choosing place</h3>
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
        </div>
<!---sideber and recent post--->
<div class="containe sideber_and_recent_post_section">
<div class="row">
  <!--sideber--->
<div class="col-md-3 col-sm-12 sideber-box">
  <div class="sideber_header">
   <strong class="text-center">House category</strong>
  </div>
<ul class="">
  <?php
   $query = "SELECT * FROM hs_category";
   $result = $db->select($query);
   if ($result) {
     while ($data = $result->fetch_assoc()) { ?>
      <li><a href="cat_post.php?id=<?php echo $data['id']; ?>"><?php echo $data['category']; ?></a></li> 
    <?php } } ?>
</ul>
</div>
<!---recent post--->
<div class="col-md-8">
<div class="recent_post">
<div class="recent_post_heding">
<h3>RECENT POST</h3>
</div>
<div class="recent_post_body">
<div class="row">
  <?php
  $query = "SELECT * FROM hs_post order by id DESC LIMIT 6";
  $result = $db->select($query);
  if ($result) {
    while ($data = $result->fetch_assoc() ) { ?>
<div class="col-md-4 col-sm-12 recent_post_box">
<div class="post_title">
<h5><a href="buyflat.php?id=<?php echo $data['id']; ?>"><?php echo $data['title']; ?></a></h5>
</div>
<div class="post_image">
<a href="buyflat.php?id=<?php echo $data['id']; ?>"><img src="photo/<?php echo $data['font_pic']; ?>" /></a>
</div>
<div class="view_btn"><a href="buyflat.php?id=<?php echo $data['id']; ?>">View</a></div>
</div>
<?php } } ?>
</div>
</div>
<div class="col-md-12 col-sm-12 text-center view_more_recent_post">
 <div class="view_more_recent_post_btn">
 <a href="all_post.php">View more</a>
 </div>
</div>
</div>
</div>
</div>
</div>

<!---Our service blog---->
<div class="service_blog_section containe" id="service_blog">
  <div class="service_background">
    <div class="service_blog_hading_content">
    <h3>Whatever we give you</h3>
    </div>
    <div class="service_blog_list_box">
    <div class="row">
    <div class="col-md-4 col-sm-12 blog_service_box">
    <div class="blog_box_hading">
    <h4>Hire a flat</h4>
    </div>
    <div class="blog_box_content">
    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
    </div>
    </div>

    <div class="col-md-4 col-sm-12 blog_service_box">
    <div class="blog_box_hading">
    <h4>Hire a flat</h4>
    </div>
    <div class="blog_box_content">
    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
    </div>
    </div>

    <div class="col-md-4 col-sm-12 blog_service_box">
    <div class="blog_box_hading">
    <h4>Hire a flat</h4>
    </div>
    <div class="blog_box_content">
    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
    </div>
    </div>
    </div>
    </div>
  </div>
</div>
<!---footer section--->
<?php include "inc/footer.php"; ?>
