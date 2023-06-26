<?php
// Example demonstrating various string functions
$string = "Hello, World!";

// strlen($string): Returns the length of a string.
$length = strlen($string);
echo "Length of the string: $length<br>";

// str_replace($search, $replace, $string): Replaces all occurrences of a search string with a replacement string in a given string.
$newString = str_replace("World", "PHP", $string);
echo "Modified string: $newString<br>";

// strpos($haystack, $needle): Returns the position of the first occurrence of a substring in a string.
$position = strpos($string, "World");
echo "Position of 'World': $position<br>";

// substr($string, $start, $length): Returns a part of a string, starting at a specified position and with a specified length.
$substring = substr($string, 0, 5);
echo "Substring: $substring<br>";

// strtolower($string): Converts a string to lowercase.
$lowercase = strtolower($string);
echo "Lowercase string: $lowercase<br>";

// strtoupper($string): Converts a string to uppercase.
$uppercase = strtoupper($string);
echo "Uppercase string: $uppercase<br>";

// trim($string): Removes whitespace or other predefined characters from the beginning and end of a string.
$trimmed = trim("   Hello, World!   ");
echo "Trimmed string: $trimmed<br>";

// explode($delimiter, $string): Splits a string into an array of substrings based on a specified delimiter.
$pieces = explode(", ", $string);
echo "Exploded array: ";
print_r($pieces);
echo "<br>";

// implode($glue, $pieces): Joins the elements of an array into a string using a specified glue.
$joinedString = implode(" ", $pieces);
echo "Joined string: $joinedString<br>";
?>
