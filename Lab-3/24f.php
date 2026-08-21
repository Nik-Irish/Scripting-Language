<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $age     = $_POST['age'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = nl2br($_POST['address']);

    // Display formatted HTML bio-data and automatically trigger print/save as PDF
    echo "
    <h2>BIO-DATA</h2>
    <hr>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Age:</strong> $age</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Address:</strong> $address</p>
    <script>window.print();</script>
    ";
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Bio-data Form</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        Address: <textarea name="address" required></textarea><br><br>
        <input type="submit" value="Generate Bio-data">
    </form>
</body>
</html>