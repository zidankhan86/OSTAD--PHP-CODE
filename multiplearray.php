<?php
$foods=[
    'veg'=>explode(' ,','brocolli,bringal,banana'),
    'fruit'=>explode(' ,','banana,mango,cucumber'),
    'nonveg' =>explode(' ,','onion,capsicum,tetli'),
    'drings' =>explode(' ,','onion,capsicum,tetli')
    
];
print_r($foods);

array_push($foods['drings'],'Cocacola');
print_r($foods);