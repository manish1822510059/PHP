<?php
function myfunction($n,$m){
    return $n *$m;
}
// $a  = ['orange','banana','mango'];
$a = [1,2,3,4,5,6,7];
$new  = array_reduce($a,'myfunction',1);
echo "<pre>";
print_r($new);
echo "</pre>";


?>