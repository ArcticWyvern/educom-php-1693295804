<?php

$t = date("H");

echo $t;
echo "<br>";

if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < 20) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";


$favcolor = "red"; //thats actually true wtf (。_。)

switch($favcolor) {
    case "red":
        echo "Your favourite color is red!";
        break;
    case "blue":
        echo "Your favourite color is blue!";
        break;
    case "green":
        echo "Your favourite color is green!";
        break;
    default:
        echo "Your favourite color is neither red, blue, nor green!";
}



?>