<?php
function checkAge($age) {
    if ($age < 18) {
        return "You are restricted";
    } else {
        return "Welcome";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];
    echo checkAge($age);
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <label for="age">Enter your age:</label>
        <input type="number" id="age" name="age" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
