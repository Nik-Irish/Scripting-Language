<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    <form method="post">
        <label for="number1">Enter First Number:</label>
        <input type="number" name="number1" required>
        <br><br>
        <label for="number2">Enter Second Number:</label>
        <input type="number" name="number2" required>
        <br><br>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $bigger = max($num1, $num2);

        echo "<h2>Multiplication Table of $bigger</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$bigger x $i = " . ($bigger * $i) . "<br>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
