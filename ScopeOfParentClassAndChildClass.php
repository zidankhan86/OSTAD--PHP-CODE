<?php
class ParentClass{

    protected $name;

        function __construct(){
            $this->sayHi();
           

        }
        
    public function sayHi(){
        echo "Say Hello to {$this->name}";
        

}


}
class ChildClass extends ParentClass{

    public function sayHi(){
        parent::sayHi();
        // $name = "zidan";

        //echo "Say Hello to Mr ";
    }
}
$obj = new ChildClass("zidan");
