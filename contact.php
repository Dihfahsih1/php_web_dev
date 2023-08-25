<?php
session_start();
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Page</title>
    <?php include 'includes/partials/head.html'; ?>
</head>
<body style="background-color: black; color: white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                <?php include 'includes/partials/nav.php'; ?>
            </div>

            <div class="col-lg-8 col-md-6 mt-5">
                <div class="container">
                    <?php if (isset($_GET["success"]) && $_GET["success"] == "login"): ?>
                        <div id="successAlert" class="text-center alert alert-success mt-3" role="alert">
                            Logged In Successfully!
                        </div>
                    <?php endif; ?>
                    
                    <!-- Your contact page content goes here -->
                    <h2>Contact Us</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>

                    <!-- Links for contacting through social media -->
                    <div class="mt-4">
                        <p>Contact us through:</p>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-dark"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
                            <li><a href="#" class="text-success"><i class="fab fa-whatsapp mr-2"></i>WhatsApp</a></li>
                            <li><a href="#" class="text-primary"><i class="fab fa-facebook mr-2"></i>Facebook</a></li>
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
