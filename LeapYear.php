<?php

$leapYear=2017;

if($leapYear % 4==0 && $leapYear % 100==0 && $leapYear % 400==0)//Jodi ei year ta leap year hoy taile print leap year 
                                                                 //Jodi $thisyear 4 diye vaag kora jay tobe this is leap year
{

printf("This is a leap Year");}

elseif($leapYear % 4==0 && $leapYear % 100==0){
    printf("This Year is Leap year");
  
}
elseif($leapYear % 4==0 ){

    printf("This year is Leap year");
}else{

    printf("This year is not leap year");
}




printf("\n");

//This big code has been replace with blew 1 line code

if($leapYear % 4== 0 && ($leapYear % 100 !=0 || $leapYear %400==0))  //

{


    printf("This year is leap Year");
}else{

    printf("This year is not leap year");
}