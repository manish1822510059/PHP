<?php
//(condition) ? true statement : false statement

$x = 10;
// ($x>20)?$z = "Greater " : $z = "Smaller";
$z = "Value is : " . ($x > 20 ? $z = "Greater " : $z = "Smaller");
echo $z;
