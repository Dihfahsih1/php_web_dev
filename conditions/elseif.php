<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <h1>Date Function</h1>

    <?php
     $d=date('D');

     if($d=='Mon'){
        echo "<h2>Today is Monday</h2>";
     }
     elseif($d=='Tue'){
        echo "<h3>Today is Tuesday</h3>";
     }
     else{
        echo "<h4>Today is some other day</h4>";
     }
    ?>
    
</body>
</html>