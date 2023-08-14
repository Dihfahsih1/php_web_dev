<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <?php include 'includes/partials/head.html'; ?>
</head>
<body style="background-color: black; color: white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 mt-2" style="border-left:2px solid white;">
                <?php include 'includes/partials/nav.html'; ?>
            </div>

            <div class="col-lg-8 col-md-6 mt-5">
                <div class="container">
                    <?php include "includes/partials/home-slider.php"; ?>
                    <div class="jumbotron text-center">
                        <h3>What is web development?</h3>
                        <p class="quote">Web development refers to the creating, building, and maintaining of websites.<br>It includes aspects such as web design, web publishing, web programming, and database management.<br>It is the creation of an application that works over the internet i.e. websites.</p>
                    </div>
                    <?php include "includes/partials/testimonies.php"; ?>
                </div>
            </div>

            <div class="col-lg-2 mt-10">
                <?php include 'includes/partials/register.php'; ?>
            </div>
        </div>
    </div>
    
    <!-- Canvas element -->
    <canvas id="myCanvas" width="400" height="200" style="border:1px solid black;"></canvas>

    <?php include 'includes/partials/footer.php'; ?>

    <script>
        console.log("index page");
    </script>
</body>
</html>
