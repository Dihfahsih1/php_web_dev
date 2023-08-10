<?php
// update_handler

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $email = $_POST["email"];
    $tel = $_POST["telephone"];
    $course = $_POST["course"];

    try {
        // Make sure you have included the database connection code
        require_once "dbconnect.php";

        // Update the data in the database table 'registration'
        $query = "UPDATE registration SET firstName = ?, secondName = ?,
         email = ?, telephone = ?, course = ? WHERE id = ?";
        echo "data" . $qury;
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "sssssi", $fName, $sName, $email, $tel, $course, $id);
        mysqli_stmt_execute($stmt);

        // Redirect back to the display_data.php page with a success message
        header("Location: ../display_data.php?update=success");
        exit();
    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
}else {
    header("Location: display_data.php");
    exit();
}
