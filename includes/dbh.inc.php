<?php
// Set up connection parameters
$host = 'localhost';
$user = 'root';
$password = 'MugoYA23?';
$database = 'php_users';
$dsn = "mysql:host=$host;dbname=$database";

try {
    $pdo = new PDO($dsn, $user, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Connection successful
    echo "Connected successfully";

    // You can now execute SQL statements or perform other database operations using $conn

} catch (PDOException $e) {
    // Connection failed
    echo "Connection failed: " . $e->getMessage();
}
?>
