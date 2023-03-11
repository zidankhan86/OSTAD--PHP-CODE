<?php

class ComparingObject{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
        
    }


}

$ob1 = new ComparingObject("Earth");
$ob3 = new ComparingObject("Earth");
$ob2 = new ComparingObject("Mars");


if($ob1 === $ob3){
echo "Similar Planet";

}else {

    echo "Not Similar Planet";
}