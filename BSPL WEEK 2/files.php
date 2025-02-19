<?php
// File handling example in PHP

$filename = "example.txt";

// Create and write to a file
$file = fopen($filename, "w");
if ($file) {
    fwrite($file, "Hello, this is a sample text file.\n");
    fwrite($file, "This is another line of text.\n");
    fclose($file);
} else {
    echo "Unable to create file.";
}

// Read from a file
$file = fopen($filename, "r");
if ($file) {
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
} else {
    echo "Unable to open file.";
}
?>

