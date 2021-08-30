<?php
// function display($number)
// {
//     if ($number <= 10) {
//         echo "$number <br>";
//         display($number + 1);
//     }
// }

// display(4);
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n * factorial($n - 1));
    }
}
echo "Factorial of " . factorial(5);
