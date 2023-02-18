<?php


$foods=[
'vegetables'=>'Brinjal,Potato,Carrot',
'Fruits'=>'Banana,Mango,Apple',
'SoftDrinks'=>'Pepsi,Cocacola,Pran'


];

foreach($foods as $key=>$value){

    print_r($key."=\n".$value);
}