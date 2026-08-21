<?php
$errors = [];
$name = $username = $age = $password = $confirm_password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $age = trim($_POST['age']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($name) || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors['name'] = "Name is required and cannot contain numbers or special characters.";
    }

    if (empty($username) || !preg_match("/^[a-zA-Z][a-zA-Z0-9]{7,}$/", $username)) {
        $errors['username'] = "Username must be at least 8 characters long and start with a letter.";
    }

    if (empty($age) || $age < 16) {
        $errors['age'] = "Age must be 16 years or older.";
    }

    if (empty($password)) {
        $errors['password'] = "Password is required.";
    }

    if ($password !== $confirm_password) {
        $errors['confirm_password'] = "Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form method="post" action="">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <span><?php echo $errors['name'] ?? ''; ?></span>
        </div><br>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
            <span><?php echo $errors['username'] ?? ''; ?></span>
        </div><br>
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" value="<?php echo htmlspecialchars($age); ?>">
            <span><?php echo $errors['age'] ?? ''; ?></span>
        </div><br>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
            <span><?php echo $errors['password'] ?? ''; ?></span>
        </div><br>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password">
            <span><?php echo $errors['confirm_password'] ?? ''; ?></span>
        </div><br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
