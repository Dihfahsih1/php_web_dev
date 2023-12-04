<?php
 session_start();
 set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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
                    <?php
                        if (isset($_GET["success"]) && $_GET["success"] == "login") {
                           echo '<div  id="successAlert" class="text-center alert alert-success mt-3" role="alert">
                                    Logged In Successfully!
                                </div>';
                        }
                    ?>
                    <?php include "includes/partials/home-slider.php"; ?>
                    <div class="jumbotron text-center">
                        <h3>What is web development?</h3>
                        <p class="quote">Web development refers to the creating,
                             building, and maintaining of websites.
                             <br>It includes aspects such as web design,
                             web publishing, web programming, and database management.
                             <br>It is the creation of an application that
                             works over the internet i.e. websites.
                             <h1 style="color:red;"><?php include 'function1.php'; ?></h1>
                            </p>
                    </div>
                    <?php include "includes/partials/testimonies.php"; ?>
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
