<?php 
    // $host = 'localhost';
    // $user = 'root';
    // $password = '';
    // $db = '';
    // $connect = mysqli_connect($host, $user, $password, $dbname);

    // if (!$connect) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // $query = "INSERT INTO registration (firstName, secondName, email, telephone, course) VALUES (?, ?, ?, ?, ?)";


    // $stmt = mysqli_prepare($connect, $query);


    // mysqli_stmt_bind_param($stmt, "sssss", $fName, $sName, $email, $tel, $course);

    // Set the variables
    $fName = $_POST["firstName"];
    $sName = $_POST["secondName"];
    $email = $_POST["email"];
    $tel = $_POST["telephone"];
    $course = $_POST["course"];

    echo "This is the first name" .$fName

    // // Execute the prepared statement
    // mysqli_stmt_execute($stmt);

    // // Close the statement and the connection
    // mysqli_stmt_close($stmt);
    // mysqli_close($connect);

?>
