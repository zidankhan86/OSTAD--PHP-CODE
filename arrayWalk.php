<?php
$numbers=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
function squire($n){

printf("Squire of %d is %d\n",$n, $n*$n);
}

array_walk($numbers,'squire');