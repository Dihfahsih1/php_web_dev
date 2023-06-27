<?php
// Set up connection parameters
$host = 'localhost';
$user = 'root';
$password = 'MugoYA23?';
$database = 'php_users';

try {
    // Create a new PDO instance
    $dsn = "mysql:host=$host;dbname=$database";
    $conn = new PDO($dsn, $user, $password);

    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Connection successful
    echo "Connected successfully";

    // Close the connection
    $conn = null;
} catch (PDOException $e) {
    // Connection failed
    echo "Connection failed: " . $e->getMessage();
}
?>
