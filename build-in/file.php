<?php
// Example demonstrating various file system functions

// file_exists($filename): Checks if a file or directory exists.
$fileExists = file_exists("example.txt");
echo "File exists: " . ($fileExists ? "Yes" : "No") . "<br>";

// is_file($filename): Checks if a path is a regular file.
$isFile = is_file("example.txt");
echo "Is a file: " . ($isFile ? "Yes" : "No") . "<br>";

// is_dir($filename): Checks if a path is a directory.
$isDir = is_dir("directory");
echo "Is a directory: " . ($isDir ? "Yes" : "No") . "<br>";

// mkdir($dirname): Creates a directory.
$directoryCreated = mkdir("new_directory");
echo "Directory created: " . ($directoryCreated ? "Yes" : "No") . "<br>";

// fopen($filename, $mode): Opens a file or URL.
$file = fopen("example.txt", "r");
if ($file) {
    echo "File opened successfully<br>";
    fclose($file);
} else {
    echo "Failed to open file<br>";
}

// file_get_contents($filename): Reads entire file into a string.
$fileContents = file_get_contents("example.txt");
echo "File contents: $fileContents<br>";

// file_put_contents($filename, $data): Writes data to a file.
$data = "This is some data";
$fileWritten = file_put_contents("example.txt", $data);
echo "File written: " . ($fileWritten !== false ? "Yes" : "No") . "<br>";

// unlink($filename): Deletes a file.
$fileDeleted = unlink("example.txt");
echo "File deleted: " . ($fileDeleted ? "Yes" : "No") . "<br>";

// rmdir($dirname): Removes a directory.
$directoryRemoved = rmdir("new_directory");
echo "Directory removed: " . ($directoryRemoved ? "Yes" : "No") . "<br>";
?>
