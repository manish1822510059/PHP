<?php

$food = array('apple','banana','orange','lemon');
// echo count($food)."<br>";
// echo sizeof($food);


/* $food = array(
    'fruits' => array('apple','banana','orange','lemon'),
    'veggie' => array('onion','tamota','carrat','pea')
); */

// echo count($food)."<br>";
// echo count($food['fruits'],1)."<br>";
/* 
$len = count($food);
for ($i = 0; $i < $len; $i++)
{
    echo $food[$i]."<br>";
} */

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";

?>