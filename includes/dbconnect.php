<?php
    $dbhost = 'localhost'; #host
    $user = 'root'; #root
    $password = ''; #leave it empty
    $dbname = 'php_users'; #db connects

    $connect = mysqli_connect($dbhost, $user, $password, $dbname);

    if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }

?>
