<?php

$color = array('a'=>'red','b'=>'green','c'=>'red','d'=>'yellow');
// $newarray =array_values($color);
$newarray =array_unique($color);

echo "<pre>";
print_r($newarray);
echo "</pre>";
?>
