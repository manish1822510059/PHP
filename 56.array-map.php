<?php
/* function square($n,$m){
    return [$n => $m];
} */
function square($n){
    return strtoupper($n);
}
// $a = [1,2,3,4,5];
// $b = ['lemon','orange','apple','guava','banana'];
$a = array('one'=>'apple','two'=>'banana','three'=>'orange');

// $new = array_map('square',$a ,$b);
$new = array_map('square',$a);


echo"<pre>";
print_r($new);
echo"</pre>";







?>