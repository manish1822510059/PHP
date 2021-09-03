<?php

// ---merge & combine in array

//array_merge() -> index or associative array
//array_merge_recursive() -> Multidimensional Associative Array
//array_combine() -> index array

//----- index array----------
/* $fruit = ["orange", "banana", "grapes"];
$veggies = ["carrot", "pea"];

$new = array_merge($fruit, $veggies);
echo "<pre>";
print_r($new);
echo "</pre>"; */
//----- Associative  array----------


// $fruit = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
// $veggies = ['b' => ['color'=>['red','blue','green']]
//             , 'e' => "pea"
//             , 55,
//              68];

// $new = array_merge_recursive($fruit, $veggies);
// $new = $fruit+$veggies;

// echo "<pre>";
// print_r($new);
// echo "</pre>";

//array_combine_function
$name = array("manish","sagar","ankit");
$age = array("22","20","21");

$array = array_combine($name,$age);
echo "<pre>";
print_r($array);
echo "</pre>";
