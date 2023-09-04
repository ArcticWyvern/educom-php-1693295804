<?php
function printIt(iterable $myIter) {
    foreach($myIter as $item) {
        echo $item . " ";
    }
    echo "<br>";
}

$arr = ['a', 'b', 'c'];
printIt($arr);

function getIterable():iterable {
    return ['a', 'b', 'c'];
}
$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item . " ";

}
echo "<br>";

Class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items) {
        //array vals that make sure the keys are nums
        $this -> items = array_values($items);
    }

    public function current(){
        return $this -> items[$this -> pointer];
    }

    public function key() {
        return $this -> pointer;
    }

    public function next(){
        $this -> pointer++;
    }

    public function rewind() {
        $this -> pointer = 0;
    }

    public function valid() {
        return $this -> pointer < count($this->items);
    }
}

function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item . " ";
    }
}


$iterator = new MyIterator(['a','b','c']);
printIterable($iterator);
?>