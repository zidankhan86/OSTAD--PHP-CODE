<?php

class MathHelper{

    public static function squire($n){

        return $n*$n;
    }
    public static function cube($n){
        return $n*$n*$n;

    }
}

$squire = MathHelper::cube(9);
//$squire = MathHelper::squire(4);

echo $squire;