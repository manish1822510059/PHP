<?php
$color = ['red', 'green', 'blue','oange','violet','rose'];
$fruits = ['orange','pineapple'];
// array_splice($color,2);
// array_splice($color,2,2,$fruits);  (array-name,index,No-of-element)
array_splice($color,2,count($color),$fruits); // using count the value from 2 only second array present
// array_splice($color,0,0,$fruits); // when insert zero(0) place of count the value of element is shift.
array_splice($color,count($color),0,$fruits); //count($color) the value of 2 array inserted last of 1 array.

echo "<pre>";
print_r($color);
echo "</pre>";

?>