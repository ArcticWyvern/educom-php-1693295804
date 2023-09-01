<?php

function writeMsg() {
    echo "Hello World!";
}

writeMsg();
echo "<br>";

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function familyNom($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyNom("Jani","1975");
familyNom("Hege","1978");
familyNom("Stale","1983");
echo "<br>";

/* throws an error in an older version this worked but it has since changed
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
echo "<br>";
*/

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";
echo "<br>";

function addNumbers(float $a, float $b) : float {
    return $a + $b;
}

echo addNumbers(1.2, 5.2);
echo "<br>";

function addNummers(float $a, float $b) : int {
    return (int)($a+$b);
}
echo addNummers(1.2, 5.2);
echo "<br>";

function add_five(&$value) {
    $value += 5;
}

$num =2;
add_five($num);
echo $num;
?>