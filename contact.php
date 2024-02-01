<?php
session_start();
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Page</title>
    <?php include 'includes/partials/head.html'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: black;
            color: white;
        }

        .container {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        button.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        ul.list-unstyled li {
            margin-bottom: 10px;
        }

        ul.list-unstyled li a {
            text-decoration: none;
        }

        ul.list-unstyled li i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 mt-2" style="border-left: 2px solid white;">
                <?php include 'includes/partials/nav.php'; ?>
            </div>

            <div class="col-lg-8 col-md-6 mt-5">
                <div class="container">
                    <?php if (isset($_GET["success"]) && $_GET["success"] == "login"): ?>
                        <div id="successAlert" class="text-center alert alert-success mt-3" role="alert">
                            Logged In Successfully!
                        </div>
                    <?php endif; ?>
                    <h2 class="mb-4 text-center">Contact Us</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="form-group">
                            <textarea id="message" class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>

                    <div class="mt-4">
                        <p>Contact us through:</p>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-dark"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#" class="text-success"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                            <li><a href="#" class="text-primary"><i class="fab fa-facebook"></i> Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 mt-10">
                <?php include 'includes/partials/register.php'; ?>
            </div>
        </div>
    </div>
    <?php include 'includes/partials/footer.php'; ?>

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
</body>
</html>
