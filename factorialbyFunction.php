<?php

function evenorodd($number){

    if($number%2==0){
        return "true";
    }else{
        return "false";
    }
    
}
function factorial($number){

$result=1;
for($i=$number;$i>1;$i--){
    $result *=$i;
}
return $result;

}