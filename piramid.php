<?php 

function triangle($n)
{
  
 // number of spaces
 $k = 2 * $n - 2;
 
 // outer loop to handle
 // number of rows
 // n in this case
 for ($i = 0; $i < $n; $i++)
 {
   
  // inner loop to handle
  // number spaces
  // values changing acc.
  // to requirement
  for ($j = 0; $j < $k; $j++)
   echo " ";
 
  // decrementing k after
  // each loop
  $k = $k - 1;
 
  // inner loop to handle
  // number of columns
  // values changing acc.
  // to outer loop
  for ($j = 0; $j <= $i; $j++ )
  {
    
   // printing stars
   //echo " * ";
   printf(" * ");
  }
 
  // ending line after
  // each row
  echo "\n";
 }
}
 
 // Driver Code
 $n = 6;
 triangle($n);
  