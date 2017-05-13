<?php


$hond = new Pagina();
//  var_dump($hond);
//pagina class to create an object
  class Pagina{

    //initialize properties
    public $content = array("text"=>"", "image"=>"", "audio"=>"");
    public $tableHeader;
    public $footer;

    function __construct(){
    }

    function createPage(){
    }

    function __destruct(){
    }

  }


// create a web child class.
  class Web extends Pagina{

    private $url;
    private $navigation;
    public $tableData = array();
    public $tableHeader = array();
    public $filePath;
    public $fileName;

    function __construct($fileName, $filePath){
      $this->fileName = $fileName;
      $this->filePath = $filePath;
    }

    function showContent(){
      $handleFile = fopen($this->filePath . '/' . $this->fileName, 'r');
      return fread($handleFile, '1000');
    }

    function __destruct(){
    }

  }

//  Run web class to open the file
    $fileTest = new Web('hond.txt', getcwd());
    print $fileTest->showContent();


// create a papier child class.
  class Papier extends Pagina{

    private $cover;
    private $bladzijde;
    private $auteur;

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
