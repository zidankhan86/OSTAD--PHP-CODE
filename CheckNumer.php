<?php

//Exception Handling


function CashWithdraw($cash){

    $bal = 1000;
    if($cash>=$bal){
        throw new Exception("Insufficient Balance");


    }
    return true;

}
try{
    CashWithdraw(20000);
    echo ("success");

}
catch(Exception $mess){
    echo ($mess->getMessage());

}