<?php


  $newDier = new dier('reptiel', 'flikker', false, 2, 4, true, false, true);
  var_dump($newDier);

  class dier{

    var $type;
    var $ras;
    var $huid;
    var $ogen;
    var $poten;
    var $staart;
    var $vleugel;
    var $nagel;


    function __contruct(){

    }

    function lopen(){

    }

    function eten(){

    }

    function __destruct(){

    }

  }


  class reptiel extends dier{

    var $koudbloedig;
    var $schubben;
    var $eierenleggen;
    var $regenatie;
    var $geslachtsorgaan;
    var $hart;


    function __contruct(){

    }

    function voortplanten(){

    }

    function __destruct(){

    }

  }

  class zoogdier extends dier{

    var $warmbloedig;

    function __contruct(){

    }

    function voortplanten(){

    }

    function __destruct(){

    }

  }





  // function __contruct($type, $ras, $huid, $ogen, $poten, $staart, $vleugel){
  //     $this->type = $type;
  //     $ras->ras = $ras;
  //     $huid->huid = $huid;
  //     $ogen->ogen = $ogen;
  //     $poten->poten = $poten;
  //     $staart->staart = $staart;
  //     $vleugel->vleugel = $vleugel;
  // }
 ?>
