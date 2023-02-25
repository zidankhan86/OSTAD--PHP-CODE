<?php

class human{
    public $name;
    public $age;

    public function __construct($PersonName,$ParsonAge)
    {
        
       echo "New Human Object has been Created "; 
        $this->name = $PersonName;
        $this->age= $ParsonAge;

    }
public function sayHi(){

    
    $this->sayName();
}

public function sayName(){

    echo " My name is {$this->name} and My age is {$this->age} ";
}

}


$object1=new human("Zidan",23);
echo PHP_EOL;
$object2=new human("Kodeeo Limited","Sorry IDK");
echo PHP_EOL;
$object1->sayHi();
echo PHP_EOL;
$object2->sayHi();
echo PHP_EOL;
$objet4=new human("Do echo ","No sorry i am here as __argumentVariable");
