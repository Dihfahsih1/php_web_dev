<?php
require_once "dbconnect.php";

if (isset($_POST['username'], $_POST['email'], $_POST['pwd'], $_POST['confirm_password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $avatarData = file_get_contents($_FILES['avatar']['tmp_name']);
    $avatarType = $_FILES['avatar']['type'];

    $query = "INSERT INTO users (username, email, pwd, avatar) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($query);

    if (!$stmt) {
        echo "Prepare failed: " . $connect->error;
        exit();
    }

    $stmt->bind_param("sssb", $username, $email, $hashedPassword, $avatarData);

    if ($stmt->execute()) {
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
