<?php
session_start();

if (isset($_SESSION['username'])) {
    // User is logged in
    require_once "dbconnect.php"; // Include your database connection
    
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    
    // Prepare the SQL statement to retrieve the avatar and avatar_type based on username
    $query = "SELECT avatar, avatar_type FROM users WHERE username = ?";
    $stmt = $connect->prepare($query);
    
    if ($stmt) {
        $stmt->bind_param("s", $username,);
        if ($stmt->execute()) {
            $stmt->store_result();
            
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($avatarData, $avatarType);
                $stmt->fetch();
                
                // Set appropriate content type header
                header("Content-Type: $avatarType");
                
                // Output the avatar data
                echo $avatarData;
            }
        }
        
        $stmt->close();
    }
    
    $connect->close();
}
?>
