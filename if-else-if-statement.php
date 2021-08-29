<?php
$per = 5527572;
if ($per >= 80 && $per <= 100) {
    echo " Your are in Merit.";
} elseif ($per >= 60 && $per < 80) {
    echo " Your are in 1st division";
} elseif ($per >= 45 && $per < 60) {
    echo "Your are in 2nd Division";
} elseif ($per >= 33 && $per < 45) {
    echo "Your are in 3nd Division";
} elseif ($per < 33) {
    echo " You are fail";
} else {
    echo "Plese enter Valid Percentage";
}
