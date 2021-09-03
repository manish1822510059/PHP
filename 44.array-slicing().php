 <?php
// $color = array('red', 'green', 'blue','yellow','black');
$color = array('2'=>'red','3'=> 'green', '4'=>'blue','5'=>'yellow','6'=>'black');
// $newarray = array_slice($color,1,4);
// $newarray = array_slice($color,-2,2);
$newarray = array_slice($color,1,2,true); //actual index print when add true Staement


 
 echo "<pre>";
 print_r($newarray);
 echo "</pre>";
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>