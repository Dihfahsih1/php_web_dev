<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Your other PHP code here
// ...
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Add your custom CSS for the black background and additional styles -->
    <style>
        body {
            background-color: black;
            color: white;
        }
        .login-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.7);
            border: none;
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            font-size: 24px;
        }
        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }
        .btn-dark:hover {
            background-color: #23272b;
            border-color: #23272b;
        }
        .login-links {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row login-container">
            <div class="col-md-6 col-lg-4">
            <?php
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    if (isset($_GET['message'])) {
                        $error_message = urldecode($_GET['message']);
                        echo '<div class="alert alert-danger">' . $error_message . '</div>';
                    } else {
                        echo '<div class="alert alert-danger">An error occurred during login</div>';
                    }
                }
                ?>
                <?php
                        if (isset($_GET["success"]) && $_GET["success"] == "register") {
                           echo '<div  id="successAlert" class="text-center alert alert-success mt-3" role="alert">
                                    Account creation was Successfully!
                                </div>';
                        }
                    ?>
                <div class="card">
                    <div class="card-header text-center">
                        <i class="fas fa-lock"></i> Login
                    </div>
                    <div class="card-body">
                        <form action="includes/login_process.php" method="post">
                            <div class="form-group">
                                <label for="username"><i class="fas fa-user"></i> Username:</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fas fa-key"></i> Password:</label>
                                <input type="password" class="form-control" name="pwd" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                        </form>
                        <div class="login-links">
                            <a href="account_reg.php"><i class="fas fa-user-plus"></i> Register</a>
                            <span class="mx-2">|</span>
                            <a href="forgot_password.php"><i class="fas fa-key"></i> Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function() {
            // Find the success alert element
            const successAlert = document.getElementById("successAlert");
            
            // Check if the alert element exists
            if (successAlert) {
                // Hide the alert after 5 seconds
                setTimeout(function() {
                    successAlert.style.display = "none";
                }, 5000); // 5000 milliseconds = 5 seconds
            }
        });
    </script>
    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
