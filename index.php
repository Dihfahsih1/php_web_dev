<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Index Page</title>
        <!-- <link rel="stylesheet" href="css/main.css"> -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Link the jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="background-color:black; color:white">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                    <?php
                        include 'includes/partials/nav.html';
                    ?>
                </div>
                
                <div class="col-lg-8 col-md-6 mt-5">
                    <div class="container">
                        <?php
                            include "includes/partials/home-slider.php";
                        ?>
                        <div class="jumbotron text-center">
                            <h3>What is web development?</h3>
                            <p class="quote">Web development refers to the creating, building,
                                and maintaining of websites.
                            <br>It includes aspects such as web design, web publishing, web programming,
                            and database management.
                            <br>It is the creation of an application that works over the internet i.e. websites.</p>
                        </div>

                        <?php
                          include "includes/partials/testimonies.php";
                        ?>
                    </div>
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
   
        <script>
            // Function to activate the carousel
            function startCarousel() {
                $('#myCarousel').carousel();
            }

            // Function to automatically switch the active carousel item every 10 seconds
            function autoSlideCarousel() {
                $('#myCarousel').carousel('next');
            }

            // Start the carousel once the page is fully loaded
            $(document).ready(function() {
                startCarousel();
                setInterval(autoSlideCarousel, 5000); // Switch slide every 10 seconds (10000 milliseconds)
            });
        </script>
    </body>
</html>