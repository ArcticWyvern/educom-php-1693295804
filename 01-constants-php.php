<?php
define("greeting", "Welcome to W3Schools.com!");
echo greeting;
echo "<br>";

define("cars", [
    "Alfa Romeo", 
    "BMW",     
    "Toyota"
    ]);
echo cars[0];
echo "<br>";

function myTest() {
    echo greeting;
}

myTest();

?>