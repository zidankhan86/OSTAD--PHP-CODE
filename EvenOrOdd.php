
<?php

function evenOrOdd($number) {
  if ($number % 2 == 0) {
    return "This is a Even Number";
  } else {
    return "This is a Odd Number";
  }
}

$number = 5;
echo evenOrOdd($number);


