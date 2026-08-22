<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT s.sid, s.name, (SELECT s32.Profession FROM system32 s32 WHERE s32.sid = s.sid) AS Profession FROM system s";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["sid"]. ", Name: " . $row["name"]. " and Profession: " . $row["Profession"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>