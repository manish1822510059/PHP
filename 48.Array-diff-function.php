<?php
 // array_diff
 //array_diff_key
 //array_diff_assoc
 //array_diff_uassoc
 //array_diff_ukey
 //array_diff_assoc
 //array_diff_uassoc
 //array_diff_udiff

 $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2 = array("a"=>"red","f"=>"green","d"=>"purple");

// $newarray = array_diff($a1,$a2);
$newarray = array_diff_key($a1,$a2);


echo "<pre>";
print_r($newarray);
echo "</pre>";




?>