<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Index Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body style="background-color:black; color:white">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
            <?php
            include 'includes/partials/nav.php';
            ?>
        </div>
        <div class="col-lg-8 col-md-6 mt-5">
            <div class="container">
                <?php
                require_once "includes/dbconnect.php";

                // Check if the ID parameter is provided in the URL
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];

                    // Fetch data from the database table 'registration' for the provided ID
                    $query = "SELECT * FROM registration WHERE id = ?";
                    $stmt = mysqli_prepare($connect, $query);
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $data = mysqli_fetch_assoc($result);

                    // Check if the data exists for the provided ID
                    if ($data) {
                        // Handle form submission
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $fName = $_POST["firstName"] ?? null;
                            $sName = $_POST["secondName"] ?? null;
                            $email = $_POST["email"] ?? null;
                            $tel = $_POST["telephone"] ?? null;
                            $course = $_POST["course"] ?? null;

                            if ($fName && $sName && $email && $tel && $course) {
                                $query = "UPDATE registration SET firstName = ?, secondName = ?,
                                 email = ?, telephone = ?, course = ? WHERE id = ?";
                                $stmt = mysqli_prepare($connect, $query);
                                mysqli_stmt_bind_param($stmt, "sssssi", $fName, $sName, $email, $tel, $course, $id);
                                mysqli_stmt_execute($stmt);

                                header("Location: ../display_data.php");
                                exit();
                            } else {
                                echo "Missing required fields.";
                            }
                        }

                        // Display the update form with pre-filled data
                        ?>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="form-group mb-3">
                                <input type="text" name="firstName" class="form-control"
                                placeholder="First Name" value="<?= $data['firstName']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="secondName" class="form-control"
                                placeholder="Second Name" value="<?= $data['secondName']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="course" class="form-control"
                                placeholder="Course you want" value="<?= $data['course']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="telephone" class="form-control"
                                placeholder="Your Telephone Number" value="<?= $data['telephone']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control"
                                placeholder="E-mail" value="<?= $data['email']; ?>">
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                        <?php
                    } else {
                        echo "<p>No data found for the provided ID.</p>";
                    }
                } else {
                    echo "<p>Invalid ID provided.</p>";
                }
                ?> 
                <hr/>
                <h4 class="jumbotron">Courses Offered</h4>
                <ul class="flex-md-column" style="color:grey">
                    <li class="nav-item"><a class="nav-link" href="#" style="color:grey">Frontend</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:grey">Backend</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:grey">Full-stack</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:grey">CI/CD Integration</a></li>
                </ul>
            </div>

        </div>
    </div>
        <footer class="bg-dark text-white py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>About Us</h4>
                        <p>We are SofTech Ug, a leading web development training institute. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Contact</h4>
                        <p>Email: info@softechug.com</p>
                        <p>Phone: +123 456 789</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Follow Us</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark text-center border-top py-2">
                <p style="font-size: 14px; margin-bottom: 0;">&copy; 2023 SofTech Ug. All rights reserved.</p>
            </div>
        </footer>
</body>
</html>