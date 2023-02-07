<?php


$string="We are learnig phP for our betterment";

//$exp=preg_match("/PHP/i",$string,$array);


$exp=preg_match_all("/we|for|our/i",$string,$array);

if($exp)
{
    printf("True");
}

else {

    printf("False");
}
//echo $exp;
print_r($array);


