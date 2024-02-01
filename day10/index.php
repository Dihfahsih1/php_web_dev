<!DOCTYPE html>
<html>
<head>
    <title>My Php Code</title>
</head>
<body>
    <?php
        $school = "GreenBridge";
        function dihfahsih(){
            global $school;
            $name ="Dihfahsih";
            $age=200;
            $salary=200.5;
            $my_likes=array("coding","reading", 233.3, false);

          
            $likes = implode(", ", $my_likes);

            echo "My name is $name, my age is $age, my salary is $salary and my likes are $likes.";
        }

  
        dihfahsih();
    ?>
</body>
</html>
