<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once "dbconnect.php";

$query = "INSERT INTO registration (firstName, secondName, email,
telephone, course, avatarPath) VALUES (?, ?, ?, ?, ?, ?)";

if ($stmt = mysqli_prepare($connect, $query)) {
    mysqli_stmt_bind_param($stmt, "ssssss", $_POST["firstName"],
     $_POST["secondName"], $_POST["email"], $_POST["telephone"], 
     $_POST["course"], $_POST["avatar"]);

    if (mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully.";
    } else {
        die("Execute failed: " . mysqli_error($connect));
    }

    mysqli_stmt_close($stmt);
} else {
    die("Prepare failed: " . mysqli_error($connect));
}

mysqli_close($connect);
?>
