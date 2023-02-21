<?php
$student=array(

'firstName'=>'Zidan',
'lastName'=>'Khan',
'age'=>'23',
'class'=>16,
'districs'=>'Barishal'

);
printf("%s %s %s",$student['firstName'],$student['lastName'],$student['age']);
$jsondata=json_encode($student);
echo $jsondata;
