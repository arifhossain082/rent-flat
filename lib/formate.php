<?php
class Format{
public function date($date){
  return date('F j, Y, g:i a',strtotime($date));
}

public function textshot($text, $limit = 300){
 $text = $text." ";
 $text = substr($text,0,$limit);
 $text = $text."..........";
  return $text;
}
public function textshote($text, $limit = 50){
 $text = $text." ";
 $text = substr($text,0,$limit);
 $text = $text."..........";
  return $text;
}
public function validation($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}

 ?>
