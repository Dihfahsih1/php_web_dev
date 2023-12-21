<?php
require_once "dbconnect.php"; // Include your database connection

if (isset($_POST['username'], $_POST['email'], $_POST['pwd'], $_POST['confirm_password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Avatar data (adjust this according to your actual implementation)
    $avatarData = file_get_contents($_FILES['avatar']['tmp_name']);
    $avatarType = $_FILES['avatar']['type'];

    // Prepare the SQL statement
    $query = "INSERT INTO users (username, email, pwd, avatar) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($query);

    if (!$stmt) {
        echo "Prepare failed: " . $connect->error;
        exit();
    }

    // Bind parameters and execute the query
    // Use 'sss' for string, string, string
    $stmt->bind_param("sssb", $username, $email, $hashedPassword, $avatarData);

    if ($stmt->execute()) {
        // Redirect to the login page with a success message
        header("Location: ../login.php?success=register");
    } else {
        echo "Execute failed: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Form not submitted";
}

$connect->close();
?>
