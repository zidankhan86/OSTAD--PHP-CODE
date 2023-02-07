<?php

declare(strict_types=1);

function calculate_commission(float $tuition_fee): float|string {
  return ($tuition_fee > 20000) ? $tuition_fee * 0.25 :
         ($tuition_fee > 10000) ? $tuition_fee * 0.20 :
         ($tuition_fee > 7000) ? $tuition_fee * 0.15 :
         
}

$tuition_fee = 15000.0;
$commission = calculate_commission($tuition_fee);

echo "The commission for a tuition fee of $tuition_fee is $commission";

?>
