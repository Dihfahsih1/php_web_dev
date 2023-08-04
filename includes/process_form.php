<?php
    require_once "dbconnect.php";

    // make primary key in phpmyadmin
    //1. ALTER TABLE registration
    //DROP COLUMN id;

    //2. ALTER TABLE registration
    // ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;


    $query = "INSERT INTO registration (firstName, secondName, email, telephone, course) VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connect, $query);
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($connect));
    }

    mysqli_stmt_bind_param($stmt, "sssss", $fName, $sName, $email, $tel, $course);
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $email = $_POST["email"];
    $tel = $_POST["telephone"];
    $course = $_POST["course"];

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../display_data.php?success=true");
        // echo "Data inserted successfully.";
    }else {
        die("Execute failed: " . mysqli_error($connect));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connect);