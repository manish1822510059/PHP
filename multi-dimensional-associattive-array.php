<?php

$marks  = [

    "Manish" => [
        "physics" => 85,
        "math" => 95,
        "chemistry" => 75,
    ],
    "Salman" => [
        "physics" => 65,
        "math" => 75,
        "chemistry" => 85,
    ],
    "Sagar" => [
        "physics" => 85,
        "math" => 96,
        "chemistry" => 65,
    ],
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>
     <tr>
     <th>Stuent Name</th>
     <th>Physics</th>
     <th>Mathematics</th>
     <th>Chemistry</th>
     </tr>



";

foreach ($marks  as $key => $v1) {
    echo "<tr>";
    echo  "<td>$key</td>";
    foreach ($v1 as $v2) {
        echo "<td>$v2</td> ";
    }
    echo "</tr>";
}
echo "</table>";


// echo "<pre>";
// print_r($marks);
// echo "</pre>";
