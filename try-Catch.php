<?php
try {
  // code that may throw an exception
  $numerator = 10;
  $denominator = 0;
  if ($denominator == 0) {
    throw new Exception("Division by zero error.");
  }
  $result = $numerator / $denominator;
  echo "Result: " . $result;
} catch (Exception $e) {
  // code to handle the exception
  echo "Error: " . $e->getMessage();
}
?>
