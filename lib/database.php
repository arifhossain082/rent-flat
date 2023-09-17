<?php

 ?>
<?php
class Database{
  public  $hostdb = "localhost";
  public  $useerdb = "root";
  public  $passdb = "";
  public  $namedb = "house";


  public $link;
  public $error;
public function __construct(){
  $this->connectDB();
}

  private function connectDB(){
    $this->link = new mysqli($this->hostdb,$this->useerdb,$this->passdb,$this->namedb);
    if (!$this->link) {
      $this->error = "Connection fail".$this->link->connect_error;
      return false;
    }
  }

  public function select($query){
    $result = $this->link->query($query) or die ($this->link->error.__LINE__);
    if ($result->num_rows > 0) {
      return $result;
    }else{
      return false;
    }
  }

  public function insert($query){
   $result = $this->link->query($query) or die ($this->link->error.__LINE__);
   if ($result) {
     return $result;
   }else{
     return false;
   }
 }
}

 ?>
