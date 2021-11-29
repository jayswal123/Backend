<?php
class Laptop {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function name() {
    return $this->name;
  }
  function color() {
    return $this->color;
  }
}

$apple = new Laptop("Apple", "Grey");
echo $apple->name();
echo "<br>";
echo $apple->color();
?> 