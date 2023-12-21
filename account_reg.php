<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <?php
        include 'includes/partials/head.html';
    ?>
</head>
<body style="background-color: black; color: white;">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                    <i class="fas fa-user-plus"> </i> User Registration
                    </div>
                    <div class="card-body">
                        <form action="includes/account_process.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="username" class="form-label">
                                    <i class="fas fa-user me-1"></i> Username
                                </label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope me-1"></i> Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="file" name="avatar" id="avatar" class="form-control-file">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    <i class="fas fa-lock me-1"></i> Password
                                </label>
                                <input type="password" class="form-control" id="password" name="pwd" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">
                                    <i class="fas fa-lock me-1"></i> Confirm Password
                                </label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-user-plus me-1"></i> Register
                            </button>
                        </form>
                        <p class="mt-3">Already have an account? <a href="login.php">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
