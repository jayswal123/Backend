<?php  
    class mxn  
    {    
    public $name="Ranjeet";  
    protected $profile="HR";   
    private $salary=5000000;  
    public function show()  
    {  
    echo "Welcome : ".$this->name."<br/>";  
    echo "Profile : ".$this->profile."<br/>";  
    echo "Salary : ".$this->salary."<br/>";  
    }  
    }     
    class child extends mxn  
    {  
    public function show1()  
    {  
    echo "Welcome : ".$this->name."<br/>";  
    echo "Profile : ".$this->profile."<br/>";  
    echo "Salary : ".$this->salary."<br/>";  
    }  
    }     
    $obj= new child;     
    $obj->show1();  
    ?>  