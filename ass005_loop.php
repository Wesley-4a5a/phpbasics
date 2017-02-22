<?php
//this is a for loop
for ($a = 0; $a<11; $a++){
    echo $a=$a+2 . " ";
}

//this is a while loop
$num = 0;

while($num<25){
    $num = $num+5;
    echo "<br />".$num;
}

//this is an endless for loop
for($a = 10; $a > 5; $a++){
    echo "<br />".$a." ";
    if($a == 50){
        break;
    }
}

//this is an example of breaking a loop
for ($a = 0; $a < 10; $a++){
    echo "<br />".$a;
    if ($a == 5){
        
    }
}

?>