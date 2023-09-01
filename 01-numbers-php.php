<?php
$x = 5985;
var_dump(is_int($x));
echo "<br>";

$x = 59.85;
var_dump(is_int($x));
echo "<br>";

$y = 10.365;
var_dump(is_float($y));
echo "<br>";

$z = 1.9e411;
var_dump($z);
echo "<br>";

$a = acos(8);
var_dump($a);
echo "<br>";

var_dump(is_numeric($x));
$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));
$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

//cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

//cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";


?>