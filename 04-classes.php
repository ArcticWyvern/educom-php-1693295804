<?php
class Fruit {
    public $name;
    public $color;

    function set_name($name) {
        $this -> name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();
$banana = new Fruit();
$apple -> set_name('Apple');
$banana -> set_name('Banana');
$apple -> set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo $apple -> get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $apple->name;
$apple->name = "Granny Smith";
echo "<br>";
echo $apple->name;

var_dump($apple instanceof Fruit);
?>
