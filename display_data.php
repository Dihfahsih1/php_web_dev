

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
                <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                <?php
                    include 'includes/partials/nav.html';
                ?>
                </div>
                
                <div class="col-lg-8 col-md-6  mt-4">
                   
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
                                        class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>';

                                        echo '<a href="includes/process_delete.php?id=' . $row['id'] . '"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm(\'Are you sure you want to delete this record?\')">
                                            <i class="fas fa-trash-alt"></i></a>';
                                        echo '|';
                                        // echo '<a href="#" class="btn btn-sm btn-danger
                                        //     delete-btn" data-id="' . $row['id'] . '">
                                        //         <i class="fas fa-trash-alt"></i>
                                        //     </a>';
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
                    <?php
                        include 'includes/partials/register.php';
                    ?>
                </div>

            </div>
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