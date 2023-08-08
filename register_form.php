<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Register Form</title>
       <?php
        include 'includes/partials/head.html';
        ?>
    </head>
    <body style="background-color:black; color:white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                    <?php
                        include 'includes/partials/nav.html';
                    ?>
                </div>
                
                <div class="col-lg-5 col-md-6 mt-5" style="border-left: 2px solid white">
                    <div class="container">
                        <h4 class="text-center">Register Now</h4>
                        <?php
                            if (isset($_GET["success"]) && $_GET["success"] == "true") {
                                echo "<p style=\"color:green\">Details saved successfully.</p>";
                            }
                        ?>
                        <form action="includes/process_registration.php" method="post">
                            <div class="form-group mb-3">
                                <input type="text" name="firstName" class="form-control"
                                placeholder="First Name" value="<?php echo $data['firstName']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="secondName" class="form-control"
                                placeholder="Second Name" value="<?php echo $data['secondName']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="course" class="form-control"
                                placeholder="Course you want" value="<?php echo $data['course']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="telephone" class="form-control"
                                placeholder="Your Telephone Number"
                                value="<?php echo $data['telephone']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control"
                                placeholder="E-mail" value="<?php echo $data['email']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary float-end">Submit</button>
                            </div>
                        </form>
                        <br />
                        <hr />
                        <h3 class="text-center mb-4">Courses Offered</h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fas fa-code me-3 text-primary"></i>
                                Frontend Development(HTML5, CSS3, Bootstrap and Js)
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-database me-3 text-primary"></i>
                                Backend Development(PHP,Django, Flask, MySQL)
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-cubes me-3 text-primary"></i>
                                Full-stack Development
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-cogs me-3 text-primary"></i>
                                CI/CD Integration(Git, app hosting, testing)
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-5 mt-10" style="border-left: 2px solid white">                 
                    
                    <div class="col-lg-12">
                    <img src="images/web-dev.jpg" alt="web development" class="img-responsive" width="100%">

                    <hr />
                    <h3 class="text-center"> Why web development</h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fas fa-code me-2 text-primary"></i>
                                You can build dynamic and interactive websites.
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-laptop me-2 text-primary"></i>
                                High demand for web developers in the job market.
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-globe me-2 text-primary"></i>
                                Reach a global audience through the internet.
                            </li>
                        </ul>
                    </div>
                    <br />

                    <div class="col-lg-12">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fas fa-money-bill me-2 text-primary"></i>
                                Potential for a lucrative career.
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-puzzle-piece me-2 text-primary"></i>
                                Combine creativity with technical skills.
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-cogs me-2 text-primary"></i>
                                Contribute to the digital transformation of businesses.
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <?php
            include 'includes/partials/footer.php';
        ?>
    </body>
</html>