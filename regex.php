

<?php
$string="We have to learn php to earn money.PHP 65";

$exp=preg_match("/PHP|earn/i",$string,$array); //(preg_match) er maddome amra pattern match kori.
//preg_match er pore $string,$arry ei gula hocce ek ekta parameter.
$exp=preg_match_all("/PHP|earn/i",$string,$array); // (preg_match_all) etao same but eta diye Shob data show korte pari
//$exp=preg_match_all("/[^we]/i",$string,$array);
//$exp=preg_match_all("/[aA-zZ]/",$string,$array);
$exp=preg_match_all("/[1-9]/",$string,$array);

if($exp){

    printf("A match was found");
}
else{

    printf("Not matched");
}
print_r($array);

//printf($array[0][0]);