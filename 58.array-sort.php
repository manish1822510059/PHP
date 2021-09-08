<?php

// $food = array('mango','orange','banana','apple');
$food = array(
              'd'=>'lemon',
              'a'=>'orange',
              'b'=>'banana',
              'c'=>'apple'

 
     
);


// sort($food);
// rsort($food);
// arsort($food);
ksort($food);//sorting using key
echo"<pre>";
print_r($food);
echo"</pre>";  


?>