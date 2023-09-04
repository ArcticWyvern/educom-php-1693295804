<?php
class Vegetal {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct() {
        echo "The vegetable is {$this->name} and the color is {$this->color}";
    }
    function get_name() {
        return $this->name;
    }

}
$potato = new Vegetal("Potato", "Brown");

?>
