<?php




function testing(&$string)
{
    $string .= "  adding new value";
}
$str = "this is a string";
testing($str);
echo $str;
