<?php
require_once "dbconnect.php";

$data = "SELECT * FROM registration";
$results=mysqli_query($connect,$data);


if(mysqli_num_rows($results)> 0){
while($student = mysqli_fetch_assoc($result)) {
    echo "First Name:" . $student['firstName'];

}
}
else{
    echo "no results";
}