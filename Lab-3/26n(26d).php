<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sid = 101; // ID of the record to delete
$sql = "DELETE FROM system WHERE sid=$sid";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
