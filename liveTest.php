<?php

$file_name = "ostad.txt";
$date_time = date("Y-m-d H:i:s");
$content = "";


if (file_exists($file_name)) {
    
    $file = fopen($file_name, "r");

   
    $content = fread($file, filesize($file_name));

   
    fclose($file);
}


$content .= $date_time;


$file = fopen($file_name, "w");


fwrite($file, $content);


fclose($file);

