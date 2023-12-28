<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Decisions</title>
    </head>
    <body>
        <?php
            $d=date("D");
            if($d == "Sat"){
                echo"Today is a $d, please have a nice weekend";
            }
            else{
                echo "Today is $d, have a nice day";
            }
        ?>
    </body>
</html>