<?php


/* Array_replace()                 Array_replace_recursive()
       |                                   |
Index or Associative Array      Multidemensional Associative array or complax Array 
  */

/* $fruit =['orange','a'=>'apple','mango','graps'];

$veggie = ['a'=>'carrot','b'=>'pea'];
 */

$array1= array('a'=>array("red"),"b"=>array("green","blue"));
$array2= array('a'=>array("orange"),"b"=>array("pink"));

// $color = ['red','green','blue'];
$newArray = array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($newArray);
echo "</pre>";


?>