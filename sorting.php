<?php
$fruits=array('apple','banana','mango','orange');
$numbers=array(9,10,11,12,13);

//sort($numbers);  //sort 
arsort($numbers);
print_r($numbers); 

foreach($numbers as $number){

    echo "$number\n";
}

