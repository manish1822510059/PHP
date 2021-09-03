<?php
// Array_keys();
// Array_key_first();
// Array_key_last();
// Array_key_exists();
// key_exists();

//index array examnple
//  $color = ["red", "blue","red","green","yellow"];

//Associative  array example

$color = [
         "first"=>"red",
         "second"=>"green",
         "third"=>"yellow",
         "fourth"=>"blue",
 
     
];



//  $new  = Array_keys($color);
//  $new  = Array_key_first($color);
//  $new  = Array_key_last($color);
//  $new  = Array_key_exists("first",$color); //exists when value show 1 else 0
 $new  = key_exists("frst",$color); //exists when value show 1 else 0



 if($new){
     echo "Keys exist";
 }else{
     echo "Keys does not exists";
 }
//  echo "<pre>";
//  print_r($new);
//  echo "</pre>";

?>