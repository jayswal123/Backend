<?php  
    abstract class Animal  
    {  
        public $name;  
        public $age;  
    public function D1()  
            {  
                    return $this->name . ", " . $this->age . " years old";      
            }  
    abstract public function Greet();  
        }  
    class Dog extends Animal  
    {  
    public function Greet()  
            {  
                    return "Woof!";      
            }  
          
            public function D1()  
            {  
                    return parent::D1() . ", and I'm a dog!";      
            }  
    }  
    $animal = new Dog();  
    $animal->name = "Bob";  
    $animal->age = 7;  
    echo $animal->D1();  
    echo $animal->Greet();  
    ?>  