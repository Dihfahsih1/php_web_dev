<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Index Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style type="text/css">
            .row {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                }

                .centered-div {
                max-width: 400px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                }

                .centered-div h3 {
                text-align: center;
                }

                .centered-div form {
                margin-top: 20px;
                }

                .centered-div input,
                .centered-div button {
                display: block;
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                }

                .centered-div button {
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
                }

                .centered-div button:hover {
                background-color: #45a049;
                }

        </style>
    </head>
    <body>
        <div class="row">
            <div class="centered-div">
                <h3>Create Account</h3>
                <form action="includes/formhandler.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="text" name="email" placeholder="E-mail">
                <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>