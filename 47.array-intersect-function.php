<?php
      // Array_intersect
      //array_intersect_key
      //array_intersect_assoc
      //array_intersect_uassoc
      //array_intersect_ukey
      //array_uintersect
      //array_uintersect_assoc
      //array_uintersect_uassoc
function compare($a,$b){
      if($a == $b){
            return 0;
      }return ($a>$b)?1:-1;
}


$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("a"=>"red","f"=>"green","d"=>"purple");



// $newarray = array_intersect($a1,$a2); // match value
// $newarray = array_intersect_key($a1,$a2); //match key
// $newarray = array_intersect_assoc($a1,$a2);   //math both key and value
// $newarray = array_intersect_uassoc($a1,$a2,"strcasecmp");   // in which  user defined function that match key and value
// $newarray = array_uintersect_assoc($a1,$a2,"compare");
$newarray = array_intersect_ukey($a1,$a2,"compare");




echo"<pre>";
print_r($newarray);
echo"</pre>";












?>