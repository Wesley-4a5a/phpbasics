<?php

  require('class.filehandler.php');

  switch ($_REQUEST['todo']) {
    case 'create':
      $afile = new fileHandler();
      $afile->createFile($_REQUEST['fileName'], $_REQUEST['fileContent']);
      // var_dump($afile->createFile());
      echo 'kureeaaate file';
      break;
    case 'update':
      $afile = new fileHandler($_REQUEST['fileName']);
      $afile->updateFile($_REQUEST['fileName'], $_REQUEST['fileContent']);
      echo 'updeet file';
      break;
    case 'delete':
      $afile = new fileHandler();
      $afile->deleteFile($_REQUEST['fileName']);
      echo 'deleeet file';
      break;
    case 'read':
      $afile = new fileHandler($_REQUEST['selectedFile']);
      $afile->readFile($_REQUEST['selectedFile'], 'r');
      echo 'reek file';
      break;
    case 'cmf':
        $afile = new fileHandler($_REQUEST['multipleFiles']);
        $fileArray = $_REQUEST['multipleFiles'];
        $afile->createMultipleFiles($fileArray);
        echo 'Creating multiple files';
        break;
    default:
      echo 'Niks -> Default';
      break;
  }

  // if(ISSET($_REQUEST)){
  //   console.log('lol');
  // }
  //
  // if (ISSET($_REQUEST['Create'])){
  //   echo '<pre>';
  //   echo 'Create File';
  //   echo '</pre>';
  // }
  // if (ISSET($_REQUEST['Read'])){
  //   echo '<pre>';
  //   echo 'Read File';
  //   echo '</pre>';
  // }
  //
  // if (ISSET($_REQUEST['Update'])){
  //   echo '<pre>';
  //   echo 'Update File';
  //   echo '</pre>';
  // }
  // if (ISSET($_REQUEST['Delete'])){
  //   echo '<pre>';
  //   echo 'Delete File';
  //   echo '</pre>';
  // }

?>
