<?php

// -----Searching in php -----------------------------------------------------------
// $food = array('orange','apple','banana','55','mango');

// echo in_array('apple',$food);

/* if(in_array(55,$food,true)){
    echo "Find Successfully";
}else{
    echo "Can't find.";
}

 */
/* $a = array(array('p','h'),array('p','r'),'o');

if(in_array(array('p','h'),$a,true)){
    echo "Find Successfully";
}else{
    echo "Can't find.";
} */



// $food = array('orange','apple','banana','55','mango');

$food = array('a'=>'orange','b'=>'apple','c'=>'banana','d'=>'55','e'=>'mango');
echo array_search('apple',$food);



?>