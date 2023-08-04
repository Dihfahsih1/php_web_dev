<h3 class="my-4 text-center">Register Now</h3>
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