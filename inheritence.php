<?php
class Father{

public function JomiJama(){

    echo "19 Bigha";
}

}
class Son extends Father {

    public function JomiJama(){

        echo "13 Bigha";
    }


}

$sonObject=new son();
$sonObject->JomiJama();