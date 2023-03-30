<?php
$file = fopen("./csv.txt","r");

while (($data = fgetcsv($file))!==false){

    print_r($data); 
}