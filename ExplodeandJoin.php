<?php
//string to array
//$vegitable=explode(', ','brocolli, caarot, bringle');

//var_dump($vegitable);
//echo $vegitable[2];

//array to string
$vegitable=explode(', ','brocolli, caarot, bringle, apple');

$vegitablestring=join(' ,',$vegitable);

echo count($vegitable);
