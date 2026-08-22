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

$sid = 103; // Example record number
$sql = "SELECT sid, name FROM system WHERE sid = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $sid);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["sid"]. " and Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();
?>
