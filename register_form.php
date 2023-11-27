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
                        include 'includes/partials/nav.php';
                    ?>
                </div>
                
                <div class="col-lg-5 col-md-6 mt-5" style="border-left: 2px solid white">
                    <div class="container">
                        <h4 class="text-center">Register Now</h4>
                  
                        <form action="includes/process_registration.php" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <input type="text" name="firstName" class="form-control"
                                placeholder="cool name">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="secondName" class="form-control"
                                placeholder="Second Name">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="course" class="form-control"
                                placeholder="Course you want">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="telephone" class="form-control"
                                placeholder="Your Telephone Number">
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control"
                                placeholder="E-mail">
                            </div>

                            <div class="form-group mb-3">
                                <label for="avatar">Upload Avatar:</label>
                                <input type="file" name="avatar" class="form-control-file">
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