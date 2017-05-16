<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class fileHandler {

  var $fileName;
  var $fileExtension;
  var $fileArray;

  function __contruct($fileName, $fileExtension){
    $this->$fileName = $fileName;
    $this->fileExtension = $fileExtension;
  }

  function createFile($fileName, $fileContent) {
    $fijl = $fileName . '.txt';
    $fijl = fopen($fijl, 'w');
    fputs($fijl, $fileContent);
  }

  function readFile($fileName, $mode)
  {
    $fileName = $fileName;
    echo '<form id="myForm" action="ass010_inputForm.php" method="post">';
    echo '<input type="hidden" name="selectedFile" value="' .$_REQUEST['selectedFile'].'">';
    echo '<input type="hidden" name="Content" value="' .file_get_contents($fileName).'">';
    echo '</form><script type="text/javascript">document.getElementById("myForm").submit();</script>';
  }

  function updateFile($fileName, $fileContent){
      $fijl = $fileName . '.txt';
      $fijl = fopen($fijl, 'w');
      fputs($fijl, $fileContent);
  }

  function deleteFile($fileName){
    $fileName = $fileName . '.txt';
    unlink($fileName);
  }

  function createMultipleFiles($fileArray){
    $explodedFile = explode(' ', $fileArray);
    foreach($explodedFile as $file){
      $this->createFile($file, '');
    }
  }

}


//
// class fileHandler {
//
//     var $fileName;
//     var $fileExtension;
//     var $fileSize;
//
//     // updateFile() ->> readFile()
//
//     function __construct($fileName, $fileExtension) {
//         $this->fileName = $fileName;
//         //$this->fileExtension = $fileExtension;
//         $this->fileSize = filesize($this->fileName . $this->fileExtension);
//     }
//
//     function createFile() {
//         $fileOpen = fopen($this->fileName . $this->fileExtension, "w") or die("Unable to open file " . $this->fileName . $this->fileExtension . " !");
//         if ($fileOpen < 1) {
//             fclose($fileOpen);
//             return "The file " . $this->fileName . $this->fileExtension . " doesn't have any content";
//         } else {
//             fclose($fileOpen);
//             return "The file " . $this->fileName . $this->fileExtension . " has been created successfully";
//         }
//     }
//
//     function readFile() {
//         $fileOpen = fopen($this->fileName . $this->fileExtension, "r") or die("Unable to open file " . $this->fileName . $this->fileExtension . " !");
//         if ($fileOpen < 1) {
//             return "The file " . $this->fileName . $this->fileExtension . " doesn't have any content";
//         } else {
//             $fileTest = file_get_contents($this->fileName . $this->fileExtension);
//             fclose($fileOpen);
//             return $fileTest;
//         }
//     }
//
//     function updateFile($updateText) {
//         $fileOpen = fopen($this->fileName . $this->fileExtension, "a") or die("Unable to open file " . $this->fileName . $this->fileExtension . " !");
//         $text = $updateText . "\r\n";
//         if ($text == "") {
//             return "Text file is empty?";
//         } else {
//             fwrite($fileOpen, 'Content van file: ' . $text);
//         }
//     }
//
//     function deleteFile() {
//         $myFile = unlink($this->fileName . $this->fileExtension);
//         if ($myFile) {
//             return "The file " . $this->fileName . $this->fileExtension . " has been deleted successfully";
//         } else {
//             return "The file " . $this->fileName . $this->fileExtension . " doesn't exist";
//         }
//     }
//
//     function fileSize() {
//
//         $bytes = filesize($this->fileName . $this->fileExtension);
//
//         if ($bytes >= 1073741824)
//         {
//             $bytes = number_format($bytes / 1073741824, 2) . ' GB';
//         }
//         elseif ($bytes >= 1048576)
//         {
//             $bytes = number_format($bytes / 1048576, 2) . ' MB';
//         }
//         elseif ($bytes >= 1024)
//         {
//             $bytes = number_format($bytes / 1024, 2) . ' kB';
//         }
//         elseif ($bytes > 1)
//         {
//             $bytes = $bytes . ' bytes';
//         }
//         elseif ($bytes == 1)
//         {
//             $bytes = $bytes . ' byte';
//         }
//         else
//         {
//             $bytes = '0 bytes';
//         }
//
//         return $bytes;
//
//     }
//
// //    function __destruct() {
//
// //    }

// }
