
<!--  -->
<nav class="navbar navbar-expand-md navbar-dark bg-black flex-md-column">
    <!-- Brand/logo -->

    <a class="navbar-brand" href="index.php">
        <!-- Add styling to the image -->
        <img src="images/logo.png" alt="User Image"
        class="img-fluid" style="max-width:220px;
        border-radius: 3%; margin-left:4%">
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
            <?php
            if (isset($_SESSION['username'])) {
                // User is logged in
                echo '<li class="nav-item">
                        <a class="nav-link" href="display_data.php">
                            <i class="fas fa-list me-2"></i>Students
                        </a>
                    </li>';
                // Display the welcome message, user image, and logout button here
            } 
           ?>
            <li class="nav-item">
                <a class="nav-link" href="register_form.php">
                    <i class="fas fa-edit me-2"></i>Register
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">
                    <i class="fas fa-phone me-2"></i>Contact
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="project.php">
                    <i class="fas fa-user me-2"></i>Projects
                </a>
            </li>
            

            <?php
                 if (isset($_SESSION['username'])) {
                    $email = $_SESSION['email'];
                    // User is logged in
                    echo '<li class="nav-item">
                            <div class="d-flex align-items-center">
                            <img src="includes/get_avatar.php" alt="Avatar" class="rounded-circle me-2"
                                style="width: 50px; height: 70px;">
                            <div>
                                <span class="navbar-text">@'. $_SESSION['username'] . '!</span><br>
                                <span class="navbar-text" style="font-size: 12px;">' .  $_SESSION['email']  . '</span>
                            </div>
                        </div>
                        </li>';
                    echo '<li class="">
                    <a class="btn btn-sm btn-danger me-2" href="logout.php">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
                          </li>';
                } else {
                    // User is not logged in
                    echo '<li class="">
                            <a class="btn btn-sm btn-success me-2" href="login.php">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                            <a class="btn btn-sm btn-info" href="account_reg.php">
                                <i class="fas fa-user-plus me-1"></i> Register
                            </a>
                          </li>';
                }
                
            ?> 
            </ul>
    </div>
</nav>
<canvas id="clockCanvas" width="200" height="200"></canvas>
<script src="js/canvas/clockCanvas.js"></script>