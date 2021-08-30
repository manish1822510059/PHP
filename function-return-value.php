<?php


// function add($a = 0, $b = 1)
// {
//     $v = $a + $b;
//     return $v;
// }

// $sum = add(10, 20);
// echo "Sum of two no : " . $sum;

function sum($math, $eng, $sci)
{
    $s = $math + $sci + $eng;
    return $s;
}

function percentage($st)
{
    $per = $st / 3;
    echo $per . "<br>";
}
$total = sum(50, 88, 92);
percentage($total);
