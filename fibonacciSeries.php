<?php
$veryOld=0;
$old=1;
$new=2;

for($i=0;$i<10;$i++){
echo $veryOld."  ";
$old=$new;
$new=$old+$veryOld;
$veryOld=$old;


}