<?php
// Example demonstrating various math functions
$number = -15;

// abs($number): Returns the absolute (positive) value of a number.
$absoluteValue = abs($number);
echo "Absolute value: $absoluteValue<br>";

// sqrt($number): Returns the square root of a number.
$squareRoot = sqrt(abs($number));
echo "Square root: $squareRoot<br>";

// round($number, $precision): Rounds a floating-point number to a specified number of decimal places.
$roundedNumber = round($squareRoot, 2);
echo "Rounded number: $roundedNumber<br>";

// rand($min, $max): Generates a random integer between a minimum and maximum value.
$randomNumber = rand(1, 10);
echo "Random number: $randomNumber<br>";

// min($value1, $value2, ...): Returns the minimum value among a list of arguments.
$minimum = min(5, 8, 2, 10, 4);
echo "Minimum value: $minimum<br>";

// max($value1, $value2, ...): Returns the maximum value among a list of arguments.
$maximum = max(5, 8, 2, 10, 4);
echo "Maximum value: $maximum<br>";
?>
