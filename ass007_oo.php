<?php

//this is an example of a class
class Book{
    var $title;
    var $numPages;
    
    function __construct(){
        $this->numPages = 200;
        $this->title = "Charlie en het chocoladefabriek";
    }
    
    function setNumPages($numOfPages){
        $numPages = $numOfPages;
    }
    
    function getNumPages(){
        return $numPages;
    }
    
    function setTitle(){
        return $title;
    }
}

$yellowPages = new Book();
echo $yellowPages->numPages."<br />";
echo $yellowPages->title;

?>