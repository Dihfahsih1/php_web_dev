<?php
    $hostname = 'localhost';
    $user = 'php_root';
    $password = 'MugoYA23?';
    $dbname = 'php_users';

    $connect = mysqli_connect($hostname, $user, $password, $dbname);

    // Check if the connection was successful
    if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    //echo "Variables passed are not correct";
    
    }
?>
