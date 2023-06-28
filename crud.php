<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Crud Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
       
    </head>
    <body>
        <div class="row">
            <div class="centered-div">
                <h3>Update Account</h3>
                <form action="includes/userupdate.inc.php" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="centered-div">
                <h3>Delete Account</h3>
                <form action="includes/userdelete.inc.php" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>