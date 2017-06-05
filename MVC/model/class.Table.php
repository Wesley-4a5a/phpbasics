<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

class Table
{


    // variable waar je met .= alles blijft concatenaten, vervolgens return je de variable waar alles in staat
    // webpagina class waar je content uit een file haalt en vervolgens alle table content naar de controller/class schrijft (fileHandler gebruiken is handig)
    // table voegt onnodige lege rijen toe :/ counter doet iets verkeerd betere if statement


    function __construct() {
    }

    function createTable($tableRowHeader, $tableRowData) {
        $table = '<table border="1">';

        // foreach aanpassen, nesten en eerste met tr en 2e met key(header)?

            $table .= '<tr>';
                foreach ($tableRowHeader as $value) {
                    $table .= '<th>' . $value . '</th>';
                }
            $table .= '</tr>';

        $size = count($tableRowData);
        $sizeHeader = count($tableRowHeader);
        $result = array();
        for ($i = 0; $i < $size; $i += $sizeHeader) {
            $result[] = $tableRowData[$i];
        }
//        var_dump($result);

        foreach ($result as $item) {
            if (in_array($item, $tableRowData)) {
//                echo "Got Irix";
            }
        }



        // AHA< addRow = aantal header items, maak counter en reset hem telkens bij de 3e foreach loop en add een row ^_^
        // http://stackoverflow.com/questions/10445357/how-to-output-a-value-on-every-third-result-of-a-foreach-statement-in-php


//        $addRow = count($tableRowData) / count($tableRowHeader);
//        var_dump(ceil($addRow));
//
//        $counter = 0;
//
//        foreach ($tableRowData as $key => $value) {
//            if ($counter == 3) {
//                $table .= '<tr>';
//            }
//            $table .= '<td>' . $value . '</td>';
//            if ($counter == 3) {
//                $table .= '</tr>';
//                $counter = 0;
//            }
//            $counter++;
//            var_dump($counter);
////            if ($counter == ceil($addRow) + 1) {
////                $counter = 0;
////            }
//        }



        $addRow = count($tableRowData) / count($tableRowHeader);
//        var_dump(ceil($addRow));


        // een foreach die na 3 herhalingen een rij moet toevoegen

        $counter = 0;

        foreach ($tableRowData as $key => $value) {
            if ($counter == 5) {
                $table .= '<tr></tr>';
                $table .= '<td>' . $value . '</td>';
                $counter = 1;
            } else {
                $table .= '<td>' . $value . '</td>';
                $counter++;
            }
//            var_dump($counter);
//            if ($counter == ceil($addRow) + 1) {
//                $counter = 0;
//            }
        }
		$table .= '<td>' . '<input type="submit" name="op" value="delete">' . '</td>';
        // count is 0, hij laat foreach alleen de values, als counter 3 is add ie tr begin+eind van

        $table .= '</table>';

        return $table;

    }

    function __destruct(){
    }
}