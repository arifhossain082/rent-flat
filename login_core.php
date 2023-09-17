<?php
include "lib/database.php";
$db = new Database();
include "lib/session.php";
$session = new Session();

$number = $_REQUEST['number'];
$password = $_REQUEST['password'];
$logauth = md5(sha1($number.$password));
if ($number == "" || $password == "") {
  header("location:header.php?log_failed");
}else {
$query = "SELECT * FROM user_details WHERE auth = '$logauth'";
 $result = $db->select($query);
 if ($result == true) {
  $data = $result->fetch_assoc();
    header("location:index.php");
    setcookie("useremail",$logauth,time()+(86400));
 }else {
   echo "<div class='text-danger'><strong>Error</strong><span>Phone or password not macth!</span></div>";
 }
}


 ?>
