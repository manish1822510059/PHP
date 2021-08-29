<?php
function sum($a, $b)
{
    echo "Sum of two no: " . $a + $b . "<br>";
}
sum(10, 20);
sum(25, 45);

function name($fname = "First ", $lname = "last")  //we use defacult values
{
    echo "hello " . $fname . $lname . "<br>";
}
name("Manish ", " kumar");
name();
