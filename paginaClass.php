<?php

include 'ass016_databaseHandlerClass.php';

$header = new Web('header.html', getcwd());
$content = new Web('hond.txt', getcwd());
$footer = new Web('footer.html', getcwd());
print $header->showContent() . $content->showContent() . $footer->showContent();
//HIJ WIL GET COMPLETE PAGE
//  var_dump($hond);

//pagina class to create a page

  class Pagina{

    //initialize properties
    public $content;
    public $tableHeader;
    public $header;
    public $footer;

    function __construct(){
    }

    function __destruct(){
    }

  }


// create a web child class.
  class Web extends Pagina{

    private $url;
    private $navigation;

    public $filePath;
    public $fileName;

    function __construct($fileName, $filePath){
      $this->fileName = $fileName;
      $this->filePath = $filePath;
    }

    function createContent($header, $footer, $content){
      $this->$header = $header;
      $this->$footer = $footer;
      $this->$content = $content;
    }

    function showContent(){
      $handleFile = fopen($this->filePath . '/' . $this->fileName, 'r');
      return fread($handleFile, '1000');
      $pageContent .= $handleFile;
    }

    function getContent(){
      return $this->header.$this->content.$this->footer;
    }

    function __destruct(){
    }

  }

//  Run web class to open the file



// create a papier child class.
  class Papier extends Pagina{

    private $cover;
    private $bladzijde;
    private $auteur;
    public $tableData = array();
    public $tableHeader = array();

    function __construct(){
    }

    function __destruct(){
    }

  }

  // create a table class.
    class Table extends Web{

      public $numRows;

      public $tableResult;

      //Initializeer properties
      function __construct($numRows, $tableData, $tableHeader){
        $this->numRows = $numRows;
        $this->data = $tableData;
        $this->header = $tableHeader;
      }

      //This method creates a new table with the properties given
      function createTable(){
        $this->tableResult .= '<table border="1">';
        $this->tableResult .= '<tr>';
        //Loop the header data
        for($i=0; $i<$this->numRows; $i++){
          $this->tableResult .= '<th>'.$this->header[$i].'</th>';
        }
        $this->tableResult .= '</tr>';
        //Loop all data in seperate rows
        for($i=0; $i<count($this->data); $i++)
        {
          $this->tableResult .= '<tr>';
          for($a=0; $a<count($this->data[$i]); $a++)
            {
              $this->tableResult .= '<td>' . $this->data[$i][$a] . '</td>';
            }
          $this->tableResult .= '</tr>';
        }

        $this->tableResult .= '</table>';
        return $this->tableResult;
      }

      function __destruct(){
      }

    }

    //Data for the header
    $tableHeaderData = array('A','A','P','Dice');
    //Data as <td>
    $contentData1 = array('Flikker','Hond','Faggot','Klopt');
    $contentData2 = array('H','O','N','D');
    //contentData arrays combined
    $tableData = array($contentData1, $contentData2);

    //Initialize class with attributes
    $table = new Table(count($tableHeaderData), $tableData, $tableHeaderData);
    //Show the result
    print $table->createTable();


 ?>
