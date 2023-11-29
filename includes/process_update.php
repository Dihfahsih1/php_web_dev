<?php
// update_handler

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

   
        require_once "dbconnect.php";

        $query = "UPDATE registration SET firstName = ?, secondName = ?,
         email = ?, telephone = ?, course = ? WHERE id = ?";

        $stmt = mysqli_prepare($connect, $query);

        mysqli_stmt_bind_param($stmt, "sssssi", $fName, $sName, $email, 
        $tel, $course, $id);
        
        $id = $_POST["id"];
        $fName = $_POST["firstName"];
        $sName = $_POST["secondName"];
        $email = $_POST["email"];
        $tel = $_POST["telephone"];
        $course = $_POST["course"];
        mysqli_stmt_execute($stmt);
        echo "Update was successful";
        // header("Location: ../display_data.php?update=success");
        exit();
    
}
