<?php

// Function to check if a number is an Armstrong number or not
function isArmstrong($number) {
  $sum = 0;
  $temp = $number;

  // Count the number of digits in the number
  $num_digits = strlen($number);

  // Calculate the sum of the digits raised to the power of the number of digits
  while ($temp != 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $num_digits);
    $temp /= 10;
  }

  // If the sum is equal to the original number, it is an Armstrong number
  return $sum == $number;
}

// Example usage
$num = 1634;
if (isArmstrong($num)) {
  echo "$num is an Armstrong number";
} else {
  echo "$num is not an Armstrong number";
}

?>