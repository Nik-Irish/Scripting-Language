<?php
$host = 'localhost';
$db = 'sl';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    $sid = 101; 
    $newName = 'Kishan'; 

    $stmt = $pdo->prepare('UPDATE system SET name = :newName WHERE sid = :sid');
    $stmt->execute(['newName' => $newName, 'sid' => $sid]);

    echo "Record updated successfully.";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>