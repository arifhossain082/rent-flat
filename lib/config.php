<?php
class config{
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
}
 ?>
