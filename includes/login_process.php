<?php
session_start();
require_once "dbconnect.php"; // Include your database connection

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $query = "SELECT * FROM users WHERE username = ?";
    if ($stmt = $connect->prepare($query)) {
        $stmt->bind_param("s", $username);
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();

                // Verify the hashed password
                if (password_verify($password, $user['password'])) {
                    // Set session variables
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['user_id'] = $user['id'];

                    // Redirect to the index page with a success message
                    header("Location: ../index.php?success=login");
                    exit();
                } else {
                    echo "Invalid username or password";
                }
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Execute failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Prepare failed: " . $connect->error;
    }
} else {
    echo "Form not submitted";
}

$connect->close();
?>
