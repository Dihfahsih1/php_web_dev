<?php
    require_once "dbconnect.php";

    // make primary key in phpmyadmin
    //1. ALTER TABLE registration
    //DROP COLUMN id;

    //2. ALTER TABLE registration
    // ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;

    // ALTER TABLE your_table_name
    // ADD COLUMN image_path VARCHAR(255);


    $query = "INSERT INTO registration (firstName, secondName, email, telephone, course) VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connect, $query);
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($connect));
    }

    // Check if an avatar file was uploaded
    $avatarPath = null;
    if (!empty($_FILES['avatar']['name'])) {
        // Handle avatar upload
        $avatarDir = "avatars/"; // Set the directory where you want to store avatar images
        $avatarPath = $avatarDir . basename($_FILES['avatar']['name']);
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarPath)) {
            // Avatar upload successful
        } else {
            die("Avatar upload failed. Error: " . $_FILES['avatar']['error']);
        }
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $fName, $sName, $email, $tel, $course, $avatarPath);
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