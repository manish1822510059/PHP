<?php
// $array = array(10,20,30);
// foreach($array as $value)
// {
//     echo $value."<br>";
    
// }

// $colors = ["red","green","yellow","blue","pink"];
// foreach($colors as $value)
// {
// echo  $value."<br>";
// }

//-------------- Associative Array--------------------------------------------------
$age = [  
    "bill" =>25,
    "steve" => 28,
    "elon" => 22,

];
echo "<ul>";
foreach($age as $key=>$value){
    // echo $key." = ".$value."<br>";
    echo "$key = $value  <br>";
}
echo"</ul>";
?>