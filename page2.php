<?php


//als eerst maak ik een functie
function uppercase($text){
    //in de functie geef ik een parameter
    //deze parameter roep ik op met de functie ucwords
    return ucwords($text);
}
//vervolgens heb ik hieronder de post gegevens van het formulier op de andere pagina
$theName = $_REQUEST["name"];
$theNumber = $_REQUEST["aNumber"];
//en hier echo ik de functie samen met de variable die het parameter vervangd in de functie
echo "Mijn naam is ".uppercase($theName)." en het nummer des keuzes is ".$theNumber;

if (ISSET($_REQUEST['updateFile'])){
  echo '<pre>';
  var_dump($_REQUEST);
  echo '</pre>';
}


function CRUD(){
  switch (ISSET($_REQUEST)) {
    case 'Create':
      echo 'kureeaaate';
      break;
    case 'Update':
      echo 'updeet';
      break;
    case 'Delete':
      echo 'deleeet';
    case 'Read':
      echo 'reek';
    default:
      # code...
      break;
  }

  // if(ISSET($_REQUEST)){
  //   console.log('lol');
  // }

  if (ISSET($_REQUEST['Create'])){
    echo '<pre>';
    echo 'Create File';
    echo '</pre>';
  }
  if (ISSET($_REQUEST['Read'])){
    echo '<pre>';
    echo 'Read File';
    echo '</pre>';
  }

  if (ISSET($_REQUEST['Update'])){
    echo '<pre>';
    echo 'Update File';
    echo '</pre>';
  }
  if (ISSET($_REQUEST['Delete'])){
    echo '<pre>';
    echo 'Delete File';
    echo '</pre>';
  }
}
?>
