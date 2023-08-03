<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Index Page</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <!-- Link the jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CSS -->

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
        </style>
    </head>
    <body>
        <div class="container-fluid" style="border:3px solid green">
            <div class="row" style="">
                <div class="col-md-3 col-lg-3 left-column" style="border: 2px solid blue;">
                    <nav class="navbar navbar-expand-md navbar-dark bg-black flex-md-column">
                        <!-- Brand/logo -->
                    
                        <a class="navbar-brand" href="#">
                            <!-- Add styling to the image -->
                            <img src="logo.jpg" alt="User Image" class="img-fluid" style="max-width: 100px; border-radius: 50%;">
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
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-home me-2"></i>Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-message me-2"></i>Messages
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-search me-2"></i>Explore
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-list-ul me-2"></i>Lists
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-user me-2"></i>Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-bell me-2"></i>Notifications
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-envelope me-2"></i>Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-laptop-code me-2"></i>Interests
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
                
                <div class="col-lg-7 col-md-6 middle-column" style="border: 2px solid red;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="images/image3.png" alt="image1" />
                                <!-- Add the overlay element -->
                                <div class="overlay"></div>

                                <!-- Add content on top of the carousel -->
                                <div class="carousel-content">
                                    <h2>Welcome to Our Website</h2>
                                    <p>We have trained thousands of students in web development</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image2.jpeg" alt="image2" />
                                <!-- Add the overlay element -->
                                <div class="overlay"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image2.jpg" alt="image3" />
                                <!-- Add the overlay element -->
                                <div class="overlay"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/image3.jpg" alt="image4" />
                                <!-- Add the overlay element -->
                                <div class="overlay"></div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 right-column" style="border: 2px solid yellow;">
                    <h3>Developer Registration</h3>
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
                </div>

            </div>
        </div>
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
                setInterval(autoSlideCarousel, 10000); // Switch slide every 10 seconds (10000 milliseconds)
            });
        </script>



    </body>
</html>