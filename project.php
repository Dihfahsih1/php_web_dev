<?php
session_start();
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projects Page</title>
    <?php include 'includes/partials/head.html'; ?>
</head>
<body style="background-color: black; color: white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                <?php include 'includes/partials/nav.php'; ?>
            </div>

            <div class="col-lg-8 col-md-6 mt-3">
                <div class="container">
                    <?php
                        if (isset($_GET["success"]) && $_GET["success"] == "login") {
                           echo '<div  id="successAlert" class="text-center alert alert-success mt-3" role="alert">
                                    Login Successful! Customize this message.
                                </div>';
                        }
                    ?>
                    
                    <!-- Manually added Bootstrap cards for likely projects -->
                    <div class="row">
                        <img src="projects.png" alt="projects image"
                         style="background-image:url('projects.png');background-size: cover;
                     background-attachment: fixed; background-color: #f1f1f1;" class="img-fluid mr-4 mb-2">
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="ecommerce-platform.png" class="card-img-top" alt="Project Image 1">
                                <div class="card-body">
                                    <h5 class="card-title">E-commerce Platform</h5>
                                    <p class="card-text">Develop a feature-rich e-commerce platform with
                                         secure payment gateways, user-friendly navigation, 
                                         and a responsive design to enable users to buy and sell products seamlessly.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="blog.png" class="card-img-top" alt="Project Image 2">
                                <div class="card-body">
                                    <h5 class="card-title">Blog and Content Management System</h5>
                                    <p class="card-text">Create a versatile blogging platform with a robust content management system,
                                             allowing users to publish articles, manage content categories, 
                                             and engage with a community.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="events.jpg" class="card-img-top" alt="Project Image 2">
                                <div class="card-body">
                                    <h5 class="card-title">Event Management Application</h5>
                                    <p class="card-text">Build an event management application to help 
                                        users organize and promote events.
                                             Features include event creation, ticketing,
                                             attendee management, and integration with calendars.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="images/image2.jpeg" class="card-img-top" alt="Project Image 2">
                                <div class="card-body">
                                    <h5 class="card-title">Fitness Tracking App</h5>
                                    
                                    <p class="card-text">Develop a fitness tracking application that
                                         allows users to set fitness goals, 
                                            track workouts, and monitor progress over time. 
                                            Include features such as personalized workout plans
                                             and social sharing for motivation..</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="images/image3.png" class="card-img-top" alt="Project Image 2">
                                <div class="card-body">
                                    <h5 class="card-title">Real Estate Listings Portal</h5>
                                    <p class="card-text">Design a comprehensive real estate portal
                                         for property listings. 
                                            Users can search, filter, and view detailed property information, 
                                            including images, amenities, and contact details for property agents.</p>
</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="images/image3.jpg" class="card-img-top" alt="Project Image 2">
                                <div class="card-body">
                                    <h5 class="card-title">Online Learning Platform</h5>
                                    <p class="card-text">Create an online learning platform where users can access courses,
                                         lectures, and quizzes. 
                                            Include features for user registration, progress tracking,
                                             and interactive learning resources.</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <!-- Add more cards as needed -->

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
        document.addEventListener("DOMContentLoaded", function() {
            const successAlert = document.getElementById("successAlert");
            
            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = "none";
                }, 5000);
            }
        });
    </script>
</body>
</html>
