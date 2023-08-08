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
                        <!-- Add your timeline content here -->
                        <h2 class="text-center">Projects Worked On</h2>
                        <ul class="timeline">
                            <!-- Timeline items -->
                            <li>
                                <div class="timeline-badge primary"><i class="fas fa-code"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Project Title 1</h4>
                                        <p><small class="text-muted"><i class="far fa-clock"></i> Date and Time</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Project description goes here.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge primary"><i class="fas fa-code"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Project Title 1</h4>
                                        <p><small class="text-muted"><i class="far fa-clock"></i> Date and Time</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Project description goes here.</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge primary"><i class="fas fa-code"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Project Title 1</h4>
                                        <p><small class="text-muted"><i class="far fa-clock"></i> Date and Time</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Project description goes here.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge primary"><i class="fas fa-code"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Project Title 1</h4>
                                        <p><small class="text-muted"><i class="far fa-clock"></i> Date and Time</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Project description goes here.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- Add more timeline items here -->
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