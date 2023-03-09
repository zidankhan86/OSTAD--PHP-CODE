<?php 

class A{

    protected static $name;
static function SayHi(){

    self::$name="hello\n";

    echo "I am from Parent class A \n";

}

}
class B extends A{

static function SayHi(){
    parent::SayHi();
   echo parent::$name;

    echo "Hi! I am Class B \n ";
    //parent::SayHi();

}

}

B::SayHi();