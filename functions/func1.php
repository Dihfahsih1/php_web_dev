<?php
function employeeDetails(){
    $firstname ="John";
    $salary=295.8;
    $is_married= true;
    echo "First Name : $firstname Salary: $salary Are you married: $is_married  ";
}
employeeDetails();

function greet($name){
    // $name="Joy";
    echo "hello $name";

}
greet(true);
?>