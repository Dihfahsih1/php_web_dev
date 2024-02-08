
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registered Students</title>
        <?php
            include 'includes/partials/head.html';
        ?>
        
    </head>
    
    <body style="background-color:black; color:white">
        <div class="container-fluid" style="max-height: 1000px; overflow: auto;">
            <div class="row">
                <div class="col-md-3 col-lg-2" style="border-left:2px solid white;">
                    <?php
                        include 'includes/partials/nav.php';
                    ?>
                </div>
                
                <div class="col-lg-8 col-md-6  mt-2">
                   
                    <h3 class="my-4 text-center">Registered Students</h3>
                    
                    
                    <!-- Retrieve data -->
                    <?php
                        if (isset($_GET["success"]) && $_GET["success"] == "true") {
                           echo '<div class="text-center alert alert-success mt-3" role="alert">
                                    Data Created successfully!
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
                    <i style="text-align:right">
                      <a href="register_form.php" class="btn btn-primary float-end">Register</a>
                    </i>
                <div class="row">
                    <?php require_once "includes/dbconnect.php"; ?>
                
                    <?php
                    $query = "SELECT * FROM registration";
                    $result = mysqli_query($connect, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) { ?>
                    
                    <div class="col-lg-3">
                        <div class="card">
                                <div class="card-header">
                                    <?php echo $row['firstName']; ?>
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p><?php echo $row['secondName']; ?></p>

                                        <footer class="blockquote-footer">
                                            <p><?php echo $row['email']; ?></p>

                                            <cite title="Source Title">
                                                <p>
                                                    <?php echo $row['course']; ?>
                                                </p>
                                            </cite>
                                            <a href="update.php?id=<?php echo $row['id'];?>">Update</a>
                                        </footer>
                                    </blockquote>
                                </div>
                        </div>

                    </div>
                        <?php } }?>

                         <table class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>First Name</th>
                                <th>Second Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Course</th>
                                <th>Photo</th>
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
                                $query = "SELECT * FROM registration";
                                $result = mysqli_query($connect, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['firstName'] . "</td>";
                                        echo "<td>" . $row['secondName'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['telephone'] . "</td>";
                                        echo "<td>" . $row['course'] . "</td>";
                                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['avatar']) .
                                        "' width='50' height='50' alt='Avatar'></td>";

                                        echo '<td>';

                                        echo '<a href="update.php?id=' . $row['id'] . '"
                                        class="btn btn-sm btn-success">
                                        <i class="fas fa-pencil"></i></a>';

                                        echo '<a class="btn btn-sm btn-danger 
                                        href="includes/process_delete.php?id=' . $row['id'] . '"                                
                                        onclick="return confirm(\'sure\')">
                                            <i class="fas fa-trash-alt"></i></a>';


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
                    <canvas id="courseChart" width="100" height="50"></canvas>
                </div>

                        <canvas id="courseChart" width="100" height="50"></canvas>
                </div>
                </div>


                <div class="col-lg-2 mt-10">
                    <?php
                        include 'includes/partials/register.php';
                    ?>
                </div>
                
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <?php
            
            // Fetch data from the database table 'registration'
            $query = "SELECT * FROM registration;";
            $result = mysqli_query($connect, $query);

            $courseData = array(); // Initialize an array to hold course data

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $course = $row['course'];
                    
                    // If the course exists in the array, increment the count, otherwise set it to 1
                    if (isset($courseData[$course])) {
                        $courseData[$course]++;
                    } else {
                        $courseData[$course] = 1;
                    }
                }
            }

            ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Retrieve data from the PHP-generated table
    const courseData = <?php echo json_encode($courseData); ?>;

    // Extract course names and registered student counts
    const courseNames = Object.keys(courseData);
    const studentCounts = Object.values(courseData);

    // Get the canvas element
    const canvas = document.getElementById("courseChart");
    const ctx = canvas.getContext("2d");

    // Create a new chart
    const courseChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: courseNames,
            datasets: [{
                label: 'Number of Students',
                data: studentCounts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Courses'
                    }
                },
                y: {
                    beginAtZero: true,
                    display: true,
                    title: {
                        display: true,
                        text: 'Number of Students'
                    }
                }
            }
        }
    });
</script>


        </div>
        
        <?php
            include 'includes/partials/footer.php';
        ?>
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
</html>