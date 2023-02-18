<?php
$students=[

"Rahim",
"Karim",
"Ratul",
"Foysal",
"Roney"


];
$number=count($students);
$students[1]="Munna";
print_r($students);

$student=array_pop($students);


// array_shift();  Prothom theke 1 ta element ber kore dey
// array_unshift(); 
// array_pop(); Sesh theke 1 ta element ber kore anar jonno
// array_push(); Last element ke Remove diye ber kore return kore dey