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

        <style>
              .custom-jumbotron {
                    background-color: #007bff; /* Change to the desired background color */
                    color: #fff; /* Change to the desired text color */
                    padding: 30px; /* Adjust padding as needed */
                }

                .custom-jumbotron h2 {
                    font-size: 36px; /* Change to the desired font size for the heading */
                }

                .custom-jumbotron p {
                    font-size: 18px; /* Change to the desired font size for the paragraphs */
                }
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
            select#course {
            cursor: pointer;
            }
            select#course option {
            cursor: pointer;
            }
        </style>
    </head>
    <body style="background-color:black; color:white">
        <div class="container-fluid">
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
                        <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNav"
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
                
                <div class="col-lg-8 col-md-6 mt-5">
                    <div class="container">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="images/image3.png" alt="image1" />
                                    <!-- Add the overlay element -->
                                    <div class="overlay"></div>
                                    <!-- Add content on top of the carousel -->
                                    <div class="carousel-content">
                                        <h1 style="font-size:50px;">SOFTECH SOLUTIONS UGANDA</h1>
                                        <h4 style="font-size:30px;">Leading Web Development hub in Uganda</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/image1.webp" alt="image2" />
                                    <!-- Add the overlay element -->
                                    <div class="overlay"></div>
                                    <div class="carousel-content">
                                        <h2>We offer Backend Training</h2>
                                        <p>We have trained thousands of students in web development</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/image2.jpg" alt="image3" />
                                    <!-- Add the overlay element -->
                                    <div class="overlay"></div>
                                    <div class="carousel-content">
                                        <h2>Superb training in frontend</h2>
                                        <p style="text-align: center;">We offer training in HTML5, CSS, Bootstrap5 and Javascript Frameworks</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/image3.jpg" alt="image4" />
                                    <!-- Add the overlay element -->
                                    <div class="overlay"></div>
                                    <div class="carousel-content">
                                        <h2>We offer DevOps</h2>
                                        <p>We have excellent trainings on hosting applications
                                            <br>both online and locally using docker, kubernetes, git, CD/CI</p>
                                    </div>
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
                        <div class="jumbotron text-center">
                            <h3>What is web development?</h3>
                            <p class="quote">Web development refers to the creating, building, and maintaining of websites.
                            <br>It includes aspects such as web design, web publishing, web programming,
                            and database management.
                            <br>It is the creation of an application that works over the internet i.e. websites.</p>
                        </div>

                        <div class="jumbotron text-center custom-jumbotron">
                            <h2>Contact us Now</h2>
                            <p>Email: info@softechug.com</p>
                            <p>Phone: +123 456 789</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 mt-10">
                    <h3 class="my-4">Register Now</h3>
                    <form action="includes/process_form.php" method="post">
                        <div class="form-group mb-3">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="secondName" class="form-control" placeholder="Second Name">
                        </div>

                        <!-- <div class="form-group mb-3">
                            <input type="text" name="course" class="form-control" placeholder="Course you want">
                        </div> -->

                        <div class="form-group mb-3">
                            <select name="course" id="course" class="form-control" required>
                                <option value="">--Select a Course--</option>
                                <option value="Frontend">Frontend</option>
                                <option value="Backend">Backend</option>
                                <option value="Full-stack">Full-stack</option>
                                <option value="CI/CD Integration">CI/CD Integration</option>
                            </select>
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