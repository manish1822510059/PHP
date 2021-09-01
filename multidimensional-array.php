<?php

$emp = [
       [1,"Manish","Manager",80000000],
       [2,"Sajul","Computer Engineer",200000],
       [3,"Mohan","Helper",15000],
       [4,"sagar","Sales Assistant",500000],

];

// ------------------Data store in tabular form using html and php

echo "<table border='2px' cellpadding ='2px' cellspacing='0'>";
echo "<tr>
       <th>Emp Id.</th>
       <th>Emp Name</th>
       <th>Desigination</th>
       <th>Salary</th>
     
</tr>";


foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    
    }
    echo "</tr>";
}
echo "</table>";
// ----------------- Using foreach loop -----------------------------------------------


// foreach($emp as $v1){
//     foreach($v1 as $v2){
//         echo $v2. " ";

//     }
//     echo "<br>";
// }
//----------------- Usihg for loop-----------------------------------------------


// for($row=0 ;$row<4;$row++){
//     for($col=0 ;$col<4;$col++){
//         echo $emp[$row][$col]." ";
//     }
//     echo "<br>";
    
// }

// echo "<pre>";
// print_r($emp);
// echo "</pre>";
