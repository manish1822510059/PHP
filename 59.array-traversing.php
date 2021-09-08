<?php
$food =array('orange','mango','apple');

echo "<b>Current :</b>".current($food)."<br>";
echo "<b>key :</b>".key($food)."<br>";
echo "<b>pos :</b>".pos($food)."<br>";
next($food);
echo "<b>Current :</b>".current($food)."<br>";


?>