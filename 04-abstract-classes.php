<?php
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

Class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

Class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "<br>";

abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "John Doe") {
        $prefix = "Mr.";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");
  echo "<br>";

  abstract class ParentCl {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildCl extends ParentCl {
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "John Doe") {
        $prefix = "Mr";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }
  
  $class = new ChildCl;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");

?>