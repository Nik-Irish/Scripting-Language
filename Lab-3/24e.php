<?php
// Open the file in read mode
$file = fopen("24d.txt", "r");

// Check if the file opened successfully
if ($file) {
    // Move the file pointer to the 10th byte
    fseek($file, 10);
    
    // Read 20 bytes from the current position
    $data = fread($file, 20);
    
    // Display the data read
    echo "Data read from file: " . $data . "<br>";
    
    // Move the file pointer to the beginning of the file
    rewind($file);
    
    // Read the first 10 bytes
    $dataStart = fread($file, 10);
    
    // Display the data read from the start
    echo "Data from the start of the file: " . $dataStart . "<br>";
    
    // Close the file
    fclose($file);
} else {
    echo "Error opening the file.";
}
?>
