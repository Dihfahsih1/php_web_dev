<?php
echo"Enter Number one: ";
$num1=fgets(STDIN);

echo"Enter Number two: ";
$num2=fgets(STDIN);

if($num1 > $num2){
   echo"Number one($num1) is greater than Number Two($num2)";
}
elseif($num1 == $num2){
    echo"Number one($num1) is equal to Number Two($num2)";
}

else{
    echo "Number one($num1) is less than number two($num2)";
}

?>