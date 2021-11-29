<?php  
        class d7  
        {  
            public function display()  
            {  
                echo "example of inheritance  ";  
            }     
        }  
        class m21 extends d7  
        {  
            public function view()  
            {  
                echo "in php";  
            }     
        }  
        $obj= new m21();  
        $obj->display();  
        $obj->view();  
    ?>  



<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}


class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?> 