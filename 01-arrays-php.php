<?php

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$vehicles = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

echo $vehicles[0][0].": In stock: ".$vehicles[0][1].", sold:".$vehicles[0][2]."<br>";
echo $vehicles[1][0].": In stock: ".$vehicles[1][1].", sold:".$vehicles[1][2]."<br>";
echo $vehicles[2][0].": In stock: ".$vehicles[2][1].", sold:".$vehicles[2][2]."<br>";
echo $vehicles[3][0].": In stock: ".$vehicles[3][1].", sold:".$vehicles[3][2]."<br>";

echo "<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$vehicles[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo "<br>";

sort($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

rsort($cars);
rsort($numbers);

asort($age);

ksort($age);

arsort($age);

krsort($age);

?>