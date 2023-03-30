<?php

$date1 = new DateTime("1st January 2020");
$date2 = new DateTime("21st December 2023");

//$difference = $date1->diff($date2);
//echo $difference->y>0

$difference = date_diff($date1 ,$date2);

echo formateNumber($difference->y," Year").
formateNumber($difference->m," Month").
formateNumber($difference->d," Day").
 formateNumber($difference->i," Min");

function formateNumber($number,$type){
    
    if($number == 0){

        return'';
    }if($number>1){

        return " {$number} {$type}s";
    }
    return " {$number} {$type}";
}