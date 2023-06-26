<?php
// Example demonstrating various array functions
$fruits = array("Apple", "Banana", "Orange");

// count($array): Returns the number of elements in an array.
$count = count($fruits);
echo "Number of fruits: $count<br>";

// array_push($array, $value1, $value2, ...): Adds elements to the end of an array.
array_push($fruits, "Mango", "Grapes");
echo "Updated array: ";
print_r($fruits);
echo "<br>";

// array_pop($array): Removes and returns the last element from an array.
$lastFruit = array_pop($fruits);
echo "Removed fruit: $lastFruit<br>";

// array_merge($array1, $array2, ...): Merges multiple arrays into one.
$moreFruits = array("Strawberry", "Pineapple");
$allFruits = array_merge($fruits, $moreFruits);
echo "Merged array: ";
print_r($allFruits);
echo "<br>";

// array_combine($keys, $values): Combines two arrays into one associative array.
$keys = array("A", "B", "C");
$values = array(1, 2, 3);
$combinedArray = array_combine($keys, $values);
echo "Combined array: ";
print_r($combinedArray);
echo "<br>";

// array_search($needle, $haystack): Searches an array for a value and returns the corresponding key if found.
$searchKey = array_search("Banana", $fruits);
echo "Key of 'Banana': $searchKey<br>";

// sort($array): Sorts an array in ascending order.
sort($fruits);
echo "Sorted array (ascending order): ";
print_r($fruits);
echo "<br>";

// rsort($array): Sorts an array in descending order.
rsort($fruits);
echo "Sorted array (descending order): ";
print_r($fruits);
echo "<br>";

// array_key_exists($key, $array): Checks if a specified key exists in an array.
$exists = array_key_exists(1, $fruits);
echo "Key '1' exists: " . ($exists ? "Yes" : "No") . "<br>";

// array_unique($array): Removes duplicate values from an array.
$duplicateArray = array("Apple", "Banana", "Orange", "Apple", "Banana");
$uniqueArray = array_unique($duplicateArray);
echo "Unique array: ";
print_r($uniqueArray);
echo "<br>";

// array_slice($array, $offset, $length): Returns a slice of an array.
$slicedArray = array_slice($fruits, 1, 2);
echo "Sliced array: ";
print_r($slicedArray);
echo "<br>";
?>
