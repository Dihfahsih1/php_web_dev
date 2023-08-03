

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registered Students</title>
        <!-- <link rel="stylesheet" href="css/main.css"> -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Link the jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <style>
            /* Ensure all carousel images have equal width and height */
            .carousel-item img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* This ensures the image fills the container while maintaining aspect ratio */
            }

            /* Overlay styles */
            .carousel-item .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Change the alpha value to adjust the overlay opacity */
            }

            /* Content styles */
            .carousel-content {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: #fff; /* Set the color of the content */
            }
             /* Set a minimum height for the table */
            .table {
                min-height: 300px;
            }
        </style>
    </head>
    
    <body style="background-color:black; color:white">
        <div class="container-fluid" style="max-height: 1000px; overflow: auto;">
            <div class="row">
                <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                    <nav class="navbar navbar-expand-md navbar-dark bg-black flex-md-column">
                        <!-- Brand/logo -->
                    
                        <a class="navbar-brand" href="#">
                            <!-- Add styling to the image -->
                            <img src="images/logo.png" alt="User Image"
                            class="img-fluid" style="max-width:220px;
                            border-radius: 3%; margin-left:8%">
                        </a>
                        <!-- Mobile Menu Icon -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-md-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <i class="fas fa-home me-2"></i>Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="display_data.php">
                                        <i class="fas fa-message me-2"></i>Students
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-search me-2"></i>About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-list-ul me-2"></i>Testimonies
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-user me-2"></i>Awards
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-bell me-2"></i>Research
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-envelope me-2"></i>Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-laptop-code me-2"></i>Affliations
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-mortar-pestle me-2"></i>More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                
                <div class="col-lg-8 col-md-6  mt-4">
                   
                    <h3 class="my-4 text-center">Registered Students</h3>
                    <!-- Retrieve data -->
                    <?php
                        if (isset($_GET["success"]) && $_GET["success"] == "true") {
                           echo '<div class="text-center alert alert-success mt-3" role="alert">
                                    Data updated successfully!
                                </div>';
                        }
                    ?>

                    <?php
                        if (isset($_GET["update"]) && $_GET["update"] == "success") {
                            echo '<div class="text-center alert alert-warning mt-3" role="alert">
                                    Data updated successfully!
                                </div>';
                        }

                        if (isset($_GET["delete"]) && $_GET["delete"] == "success") {
                            echo '<div class="text-center alert alert-danger mt-3" role="alert">
                                    Data deleted successfully!
                                </div>';
                        }
                    ?>
                    <table class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>First Name</th>
                                <th>Second Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            // The PHP code for fetching and displaying data is placed here
                            try {
                                // Make sure you have included the database connection code
                                require_once "includes/dbconnect.php";

                                // Fetch data from the database table 'registration'
                                $query = "SELECT * FROM registration;";
                                $result = mysqli_query($connect, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['firstName'] . "</td>";
                                        echo "<td>" . $row['secondName'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['telephone'] . "</td>";
                                        echo "<td>" . $row['course'] . "</td>";

                                        // Buttons for update and delete actions
                                        echo '<td>';

                                        echo '<a href="update.php?id=' . $row['id'] . '"
                                        class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i></a>';

                                        // echo '<a href="includes/process_delete.php?id=' . $row['id'] . '"
                                        // class="btn btn-sm btn-danger"
                                        // onclick="return confirm(\'Are you sure you want to delete this record?\')">
                                        //     <i class="fas fa-trash-alt"></i></a>';

                                        echo '<a href="#" class="btn btn-sm btn-danger
                                            delete-btn" data-id="' . $row['id'] . '">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>';
                                        echo '</td>';

                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No data found.</td></tr>";
                                }
                            } catch (Exception $e) {
                                die("Query failed: " . $e->getMessage());
                            }
                            ?>

                        </tbody>
                    </table>
                </div>


                <div class="col-lg-2 mt-10">
                <h3 class="my-4 text-center">Register Now</h3>
                    <form action="includes/formhandler.inc.php" method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="secondName" class="form-control" placeholder="Second Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="course" class="form-control" placeholder="Course you want">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="telephone" class="form-control"
                            placeholder="Your Telephone Number">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                        <?php
                            if (isset($_GET["success"]) && $_GET["success"] == "true") {
                                echo "<p style=\"color:green\">Your details have been sent successfully.</p>";
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
            <!-- Add this modal at the end of the <body> section -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1"
            role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title" id="confirmDeleteModalLabel" style="color:black">Confirm Delete</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center" style="color:black">
                            Are you sure you want to delete this record?
                        </div>
                        <div class="modal-footer text-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Confirm Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            // JavaScript to handle delete confirmation
            $(document).ready(function() {
                // When the delete button is clicked
                $('.delete-btn').on('click', function(e) {
                    e.preventDefault();

                    // Get the ID of the record to be deleted from the data-id attribute
                    var id = $(this).data('id');

                    // Show the delete confirmation modal
                    $('#confirmDeleteModal').modal('show');

                    // If the user confirms delete, trigger the delete action
                    $('#confirmDeleteBtn').on('click', function() {
                        // Redirect to the delete_data.php with the ID as a query parameter
                        window.location.href = 'includes/process_delete.php?id=' + id;
                    });
                });
            });
        </script>
    </body>
    <script src="js/bootstrap.min.js"></script>
</html>