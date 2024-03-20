<?php


require_once "dbconnect.php";

$query = "INSERT INTO registration (firstName, secondName, email, telephone, course, avatar)
 VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($connect, $query);
if (!$stmt) {
    die("Prepare failed: " . mysqli_error($connect));
}

$avatarPath = $_FILES["avatar"]["tmp_name"];
$avatarData = file_get_contents($avatarPath);

// Get other form data
$fName = $_POST["firstName"];
$sName = $_POST["secondName"];
$email = $_POST["email"];
$tel = $_POST["telephone"];
$course = $_POST["course"];
// Bind parameters
mysqli_stmt_bind_param($stmt, "ssssss", $fName, $sName, $email, $tel, $course, $avatarData);

if (mysqli_stmt_execute($stmt)) {
    header("Location: /index.php");
    // echo "Data inserted successfully.";
} 
else {
    die("Execute failed: " . mysqli_error($connect));
}


?>
