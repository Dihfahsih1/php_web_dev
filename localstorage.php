<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name and age app</title>
</head>
<body>

    <h2>Enter Name and Age</h2>

    <?php
    // Function to display name and age
    function displayInfo($name, $age) {
        echo "<p>Name: $name</p>";
        echo "<p>Age: $age</p>";
    }

    ?>

    <!-- Form to enter name and age -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <button type="submit">Submit</button>
    </form>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>' . "You Entered, the following: " .' </h2>';
        // Get values from the form
        $enteredName = $_POST["name"];
        $enteredAge = $_POST["age"];

        // Display the entered name and age
        displayInfo($enteredName, $enteredAge);
    }
    ?>

</body>
</html>
