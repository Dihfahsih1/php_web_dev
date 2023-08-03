<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        // Check if the ID parameter is provided in the URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            try {
                // Make sure you have included the database connection code
                require_once "includes/dbconnect.php";

                // Fetch data from the database table 'registration' for the provided ID
                $query = "SELECT * FROM registration WHERE id = ?";
                $stmt = mysqli_prepare($connect, $query);
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $data = mysqli_fetch_assoc($result);

                // Check if the data exists for the provided ID
                if ($data) {
                    // Display the update form with pre-filled data
                    ?>
                    <h2 class="my-4">Update Data</h2>
                    <form action="includes/process_update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <div class="form-group mb-3">
                            <input type="text" name="firstName" class="form-control"
                             placeholder="First Name" value="<?php echo $data['firstName']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="secondName" class="form-control"
                             placeholder="Second Name" value="<?php echo $data['secondName']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="course" class="form-control"
                            placeholder="Course you want" value="<?php echo $data['course']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="telephone" class="form-control"
                             placeholder="Your Telephone Number" value="<?php echo $data['telephone']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="email" class="form-control"
                            placeholder="E-mail" value="<?php echo $data['email']; ?>">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                    <?php
                } else {
                    echo "<p>No data found for the provided ID.</p>";
                }
            } catch (Exception $e) {
                die("Query failed: " . $e->getMessage());
            }
        } else {
            echo "<p>Invalid ID provided.</p>";
        }
        ?>
    </div>
</body>
</html>
