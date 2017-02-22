<?php

//create a file and append a line of text behind what's already inside if it has text
//$theFile = fopen("fileOne.txt", "a");
//fputs($theFile, "line of text");

class fileHandler{
    var $filename;
    var $extension;
    var $size;
    
    function __construct(){
//        $this->filename = $filename;
    }
    
    function read($filename, $mode){
        fopen($filename, $mode);
    }
}

$class = new fileHandler();
echo $class->filename;
echo $class->read("text.txt", "r");

?>
