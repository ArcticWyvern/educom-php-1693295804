<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age) . "<br>";

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars) . "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
echo "<br>";
var_dump(json_decode($jsonobj, true));
echo "<br>";

$obj = json_decode($jsonobj);

echo $obj -> Peter;
echo "<br>";
echo $obj -> Ben;
echo "<br>";
echo $obj -> Joe;
echo "<br>";
$arr = json_decode($jsonobj, true);

echo $arr["Peter"] . "<br>";
echo $arr["Ben"] . "<br>";
echo $arr["Joe"] . "<br>";

foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>