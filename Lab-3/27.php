<?php
$conn = new mysqli("localhost", "root", "", "crudsl");

$edit_id = "";
$edit_name = "";
$edit_address = "";

// Update button clicked
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $res = $conn->query("SELECT * FROM curd WHERE id=$id");
    if ($row = $res->fetch_assoc()) {
        $edit_id = $row['id'];
        $edit_name = $row['name'];
        $edit_address = $row['address'];
    }
}

// Create
if (isset($_POST['create'])) {
    $conn->query("INSERT INTO curd (id, name, address) VALUES ({$_POST['id']}, '{$_POST['name']}', '{$_POST['address']}')");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Update
if (isset($_POST['update'])) {
    $conn->query("UPDATE curd SET name='{$_POST['name']}', address='{$_POST['address']}' WHERE id={$_POST['id']}");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Delete
if (isset($_GET['delete'])) {
    $conn->query("DELETE FROM curd WHERE id={$_GET['delete']}");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Read
$result = $conn->query("SELECT * FROM curd");
?>

<!DOCTYPE html>
<html>
<body>
    <h2>CRUD Application</h2>
    
    <form method="POST">
        ID: <input type="number" name="id" value="<?php echo $edit_id; ?>" required><br><br>
        Name: <input type="text" name="name" value="<?php echo $edit_name; ?>" required><br><br>
        Address: <input type="text" name="address" value="<?php echo $edit_address; ?>" required><br><br>
        
        <?php if ($edit_id != ""): ?>
            <button type="submit" name="update">Update Record</button>
        <?php else: ?>
            <button type="submit" name="create">Add Record</button>
        <?php endif; ?>
    </form>

    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="?update=<?php echo $row['id']; ?>">Update</a>
                <a href="?delete=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>