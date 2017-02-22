<?php 
$naam = "Youssef";
$studentennummer = 430149;

echo "<h1>".$naam."</h1><br />Mijn studentenummer is ".$studentennummer."<br />";

function printMessage($naam){
    print "Hello ".$naam."!";
}

function calculation($num1, $num2){
    print $num1 - $num2."<br />";
}

calculation(10,5);

printMessage("Youssef");

?>