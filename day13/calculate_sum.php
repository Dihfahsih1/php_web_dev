<!DOCTYPE html>
<html>
<head>
    <title>Sum Result</title>
</head>
<body>
    <h1>Sum Result</h1>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["values"]) && !empty($_POST["values"])) {
            $input_values = $_POST["values"];
            $numbers = array_map('intval', explode(' ', $input_values));
            echo "the  array is: " . $numbers ."\n";
            $sum = array_sum($numbers);

            echo "Sum of the entered values: " . $sum;
        } else {
            echo "Please enter values separated by spaces.";
        }
    }
    ?>
</body>
</html>
