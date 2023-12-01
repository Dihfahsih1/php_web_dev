<!-- delete_data_handler -->

<?php
// Make sure you have included the database connection code
require_once "dbconnect.php";

if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM registration WHERE id = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
        header("Location: ../display_data.php");
        exit();
    } else {
        die("Delete query failed.");
    }
} else {
    header("Location: ../display_data.php");
    exit();
}
?>
