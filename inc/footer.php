<footer class="containe footer_section">
<div class="footer_all_box">
<div class="row">
<div class="col-md-3 col-sm-12 footer_box">
<div class="footer_logo">
  <a class="navbar-brand text-white" href="index.php">
    <img src="photo/download.jpg" style="width:50px;height:50px;" alt="logo"><strong> Our talk</strong></a>
</div>
</div>

<div class="col-md-3 col-sm-12 footer_box">
<div class="footer_navigation_bar text-white">
  <div class="navigation_heading">
   <h4>Navigation</h4>
  </div>
  <ul class="group-list">
   <li><a href="#">Service</a></li>
   <li><a onclick="generateReport();" href="index.html#service_blog">About</a></li>
   <li><a href="contact.php">Contact</a></li>
  </ul>
</div>
</div>

<div class="col-md-3 col-sm-12 footer_box">
<div class="footer_contact text-white">
  <div class="contact_heading">
   <h4>Contact Us</h4>
  </div>
  <div class="contact_list">
   <strong>Address : </strong><span>Sapahar, Naogaon</span>
   <br>
   <strong>Phone : </strong><span>01732-112323</span>
   <br>
   <strong>Email : </strong><span>arifhossein082@gmail.com</span>
  </div>
</div>
</div>

<div class="col-md-3 col-sm-12 footer_box">
<div class="footer_contact text-white">
  <div class="contact_heading">
   <h4>Get connected</h4>
  </div>
  <div class="contact_mail">
   <a href="contact.php"><i class="fas fa-paper-plane"></i></a>
  </div>
</div>
</div>
</div>
</div>
<div class="Copyright_section">
<div class="Copyright_div">
<div class="row">
<div class="col-md-6 col-sm-12">
<div class="Copyright_content">
<span>© 2020 Copyright Decisiondecides</span>
</div>
</div>

<div class="col-md-6 col-sm-12">
<div class="Copyright_content">
<span>powerby-freelancerArif</span>
</div>
</div>
</div>
</div>
</div>
</footer>
<script type="text/javascript" src="js/housee.js"></script>
<script type="text/javascript">
function generateReport() {
$('html, body').animate({
 scrollTop: $("#service_blog").offset().top
}, 1000);
};

function previewFile(input){
 var file = $("#image2").get(0).files[0];
    if(file){
      var reader = new FileReader();
        reader.onload = function(){
        $("#previewImgb").attr("src", reader.result);
        }
      reader.readAsDataURL(file);
    }
}
function previewFilea(input){
 var file = $("#image1").get(0).files[0];
    if(file){
      var reader = new FileReader();
        reader.onload = function(){
        $("#previewImga").attr("src", reader.result);
        }
      reader.readAsDataURL(file);
    }
}
function previewFilec(input){
 var file = $("#image3").get(0).files[0];
    if(file){
      var reader = new FileReader();
        reader.onload = function(){
        $("#previewImgc").attr("src", reader.result);
        }
      reader.readAsDataURL(file);
    }
}
</script>
</body>
</html>
