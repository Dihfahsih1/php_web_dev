<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once "dbconnect.php";

$query = "INSERT INTO registration (firstName, secondName, email, telephone, course, avatar)
 VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($connect, $query);
if (!$stmt) {
    die("Prepare failed: " . mysqli_error($connect));
}

// Use file_get_contents to read the image file
$avatarPath = $_FILES["avatar"]["tmp_name"];
$avatarData = file_get_contents($avatarPath);

// Bind parameters
mysqli_stmt_bind_param($stmt, "ssssss", $fName, $sName, $email, $tel, $course, $avatarData);

// Get other form data
$fName = $_POST["firstName"];
$sName = $_POST["secondName"];
$email = $_POST["email"];
$tel = $_POST["telephone"];
$course = $_POST["course"];

if (mysqli_stmt_execute($stmt)) {
    header("Location: ../display_data.php?success=true");
    // echo "Data inserted successfully.";
} else {
    die("Execute failed: " . mysqli_error($connect));
}

mysqli_stmt_close($stmt);
mysqli_close($connect);
?>
