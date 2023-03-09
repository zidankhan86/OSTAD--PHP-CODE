<?php 

class A{

static function SayHi(){

    echo "I am from Parent class A \n";

}

}
class B extends A{

static function SayHi(){

    echo "Hi! I am Class B \n ";
    parent::SayHi();

}

}

B::SayHi();