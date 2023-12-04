<?php
session_start();

if (isset($_SESSION['username'])) {
    // User is logged in
    require_once "dbconnect.php"; // Include your database connection
    
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    

    // Prepare the SQL statement to retrieve the avatar and avatar_type based on username
    $query = "SELECT avatar, avatar_type FROM users WHERE username = ?";
    $stmt = mysqli_prepare($connect, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $avatarData, $avatarType);
                mysqli_stmt_fetch($stmt);
                
                // Set appropriate content type header
                header("Content-Type: $avatarType");
                
                // Output the avatar data
                echo $avatarData;
            }
        }
        
        mysqli_stmt_close($stmt);
    }
    
    // Close the database connection
    mysqli_close($connect);
}
?>
