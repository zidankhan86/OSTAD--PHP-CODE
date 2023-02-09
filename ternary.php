
        

     <?php
    $x=1000;
    //$x=1000;
    // $output=($x>=100)?($x."is greater than and equal to 100"):($x."is less than or equal 100");
     //echo $output;

    /* $x=19;
     $y=($x>=20)?($x." 19 is True"):("False") ;
     echo $y;*/
     //$output=($x>=50)?(($x<=100)?("True"):("False")):("Not Matched");
     

    // $output=($x=40)?(($x=>4)?(()?(()?():()):()):()):();

     //$output=($x>=40)?(($x>=45)?(($x>=50)?("{$x} is grater than or equal 50"):("{$x} less than 50")):("{$x} is grater than 45")):("{$x} is less than 40");
     $output=($x>=500)?(($x>=1000)?("{$x} is greater than or equal 1000"):("{$x}is less than 100")):("Less than 40");
     printf($output) ;
