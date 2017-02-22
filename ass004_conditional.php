<?php 

$aNumber = 5;
$plant = "thiss";
$X = 7;

if($aNumber == 5){
    print "aNumber is equal to ".$aNumber."<br />";
}

if($plant == "cactus"){
    print "Good choice!";
} else{
    print "still a good choice, but cacti are better<br />";
}

if($X == 5){
    print "X is equal to 5";
} else if($X == 7){
    print "X is equal to 7</br >";
}

$X = 7;

switch($X){
    case 1:
    print "X is equal to 1";
    break;
    case 2:
    print "X is equal to 2";
    break;
    case 3:
    print "X is equal to 3";
    break;
    case 7:
    print "X is equal to 7 <br />";
    break;
    default:
    print "X is not equal to any of the values specified";
}

$x;
$y = 9;

$x = ($y==4) ? 5:15;

print "x = ".$x;
?>