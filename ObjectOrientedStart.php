<?php

class Human{
    public $name="Fazle Rabbi Zidan";

function sayHi(){

    echo "Hi! i am Human";
    
        
    }
    function sayName(){

        echo "My Name Is {$this->name}";
    }
}

class Cat{

function sayHi(){
    echo "I am cat";
}


}
class Dog{
function sayHi(){

    echo "I am Dog";
}


}
$object1=new Human;
$object1->sayHi();
echo PHP_EOL;
echo $object1->sayHi();//set Operation
echo PHP_EOL;
$object2=new Cat;
$object2->sayHi();
echo PHP_EOL;
$object3=new Dog;
$object3->sayHi();
echo PHP_EOL;
echo $object1->name; //get Operation
