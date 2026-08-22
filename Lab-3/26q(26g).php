<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT system.sid, system.name, system32.Hobby 
        FROM system 
        JOIN system32 ON system.sid = system32.sid";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["sid"]. " - Name: " . $row["name"]. " - Hobby: " . $row["Hobby"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>