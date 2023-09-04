<?php
function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($strings);
print_r("<br>");
print_r($lengths);
print_r("<br>");
$lengths = array_map(function($item) { return strlen($item); }, $strings);
print_r($lengths);

function exclaim($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "? ";
}

function printFormatted($str, $format) {
    echo $format($str);
}
print_r("<br>");
printFormatted("Hello world", "exclaim");
print_r("<br>");
printFormatted("Hello world", "ask");

?>
