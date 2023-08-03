<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $email = $_POST["email"];
    $tel = $_POST["telephone"];
    $course = $_POST["course"];

    try {
        require_once "dbh.inc.php";
        
        $query = "INSERT INTO registration (firstName, secondName, email, telephone, course)
        VALUES(:firstName, :secondName, :email, :telephone, :course);";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":firstName", $fName);
        $stmt->bindParam(":secondName", $sName);
        $stmt->bindParam(":telephone", $tel);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":course", $course);
        $stmt->execute();

        header("Location: ../index.php?success=true");
        exit(); // Use exit() instead of die() to terminate the script

        

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
    exit(); // Use exit() instead of die() to terminate the script
}
