<?php

// There is a problem in 26 number question which appears twice.


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO system (sid, name) VALUES (?, ?)");
$stmt->bind_param("ss", $value1, $value2);

// Set parameters and execute
$value1 = "101";
$value2 = "Rammu";
$stmt->execute();

$value1 = "102";
$value2 = "Nikrish";
$stmt->execute();

$value1 = "103";
$value2 = "Rajiv";
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
