<?php

$stringOne = "PHP is cool";

$stringTwo = "PHP has many geat string functions";

$stringThree = "Reverse this string";

$stringFour = "abcdefghijklmnop";
$findme = "def";

//shows the length of the string
$length = strlen($stringOne);
//extracts letter(s) from a string
$stringExtracted = substr($stringTwo, 0, 3);
//reverses a string
$stringReversed = strrev($stringThree);

print "<br />".$length;
print "<br />".$stringExtracted;
print "<br />".$stringReversed;

print strstr("book, table, desk, chair", "table");

print "<br />".strpbrk($stringFour, "def");

?>
