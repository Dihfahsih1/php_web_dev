<?php 
// Connect to the database (assuming MySQL for this example)
$connection = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve data from a table
$sql = "SELECT id, name FROM users";
$result = mysqli_query($connection, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row using a while loop
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($connection);

?>