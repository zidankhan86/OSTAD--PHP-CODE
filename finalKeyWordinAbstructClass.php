<?php 

abstract class OurClassRoom{

    final public function topicName(){

        echo "Php  Abstraction Class and Interface";
    }

}
class MyClass extends OurClassRoom{


    // public function topicName()   //Can not override when use final keyWord
    // {
    //     echo"Not Yet get it properly, I need help";
    // }
}
$Object_Banailam = new MyClass;
$Object_Banailam->topicName();
