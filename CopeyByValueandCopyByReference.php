<?php
//copy by value
$country=array('countryName'=>'Bangladesh','district'=>'Barishal');
$newcontry=$country;
$newcontry['district']='Dhaka';

print_r($newcontry);
print_r($country);

//copy by Reference

$country2=array('countryName'=>'Bangladesh','district'=>'Barishal');
$newcontry3=&$country2;
$newcontry3['district']='Dhaka';

print_r($newcontry3);
print_r($country2);
