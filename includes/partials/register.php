<h3 class="my-4 text-center">Register Now</h3>
<form action="includes/process_registration.php" method="post" enctype="multipart/form-data">
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
    <div class="form-group mb-3">
        <label for="avatar">Upload Avatar:</label>
        <input type="file" name="avatar" class="form-control-file">
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
    <ul class="list-group">
        <li class="list-group-item">
            <i class="fas fa-money-bill me-2 text-primary"></i>
            Frontend
        </li>
        <li class="list-group-item">
            <i class="fas fa-puzzle-piece me-2 text-primary"></i>
            Backend
        </li>
        <li class="list-group-item">
            <i class="fas fa-cubes me-2 text-primary"></i>
            Full-stack
        </li>
        <li class="list-group-item">
            <i class="fas fa-cogs me-2 text-primary"></i>
            CI/CD Integration
        </li>
    </ul>