<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login function
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    $sql = "SELECT * FROM log WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;

        if ($remember) {
            setcookie('email', $email, time() + (86400 * 30), "/"); // 30 days
        }

        echo "Login successful. Welcome, " . $email;
    } else {
        echo "Invalid credentials.";
    }
}

// Logout function
if (isset($_GET['logout'])) {
    session_destroy();
    setcookie('email', '', time() - 3600, "/"); // Delete cookie
    echo "Logged out successfully.";
}

// Check for remember me cookie
if (isset($_COOKIE['email'])) {
    $_SESSION['email'] = $_COOKIE['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Password">
        <input type="checkbox" name="remember"> Remember Me
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
