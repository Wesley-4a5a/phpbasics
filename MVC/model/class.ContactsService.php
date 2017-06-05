<?php

require_once 'model/class.DbHandler.php';
require_once 'model/class.Table.php';
require_once 'js/main.js';

class ContactsService
{
    public function __construct() {
        $this->DbHandler = new DbHandler('localhost', 'MVC', 'root', '');
    }

    public function readContacts() {
        if (isset($_GET['name'])) {
            $sql = "SELECT * FROM info WHERE Name = '".$_GET['name']."'";
        } else {
            $sql = "SELECT * FROM info";
        }
        return $this->DbHandler->readData($sql);
    }

    // om te deleten hier bij elke rij een del button toevoegen met value van ID
    public function createContactTable($contacts) {
        foreach ($contacts as $row) {
            if (in_array($row['Name'], $row)) {
                $row['Name'] = "<form method='get' action=''><a href=http://localhost/GitHub/phpbasics/MVC/index.php?name=".$row['Name'].">".$row['Name']."</a></form>";
            }
            $tableContactHeader[] = array_keys($row);
            foreach ($row as $key=>$value) {
                $tableContactValue[] = $value;
            }
        }

        $handler = new Table();
        return $handler->createTable($tableContactHeader[0], $tableContactValue);
    }

    public function createContactData() {
        $sql = "INSERT INTO info (Name, Email, Address, Phone) VALUES ('".$_POST['contact_name']."', '".$_POST['contact_email']."', '".$_POST['contact_address']."', '".$_POST['contact_telephone']."')";
        return $this->DbHandler->createData($sql);
    }

    public function deleteContactData() {
        $sql = "DELETE FROM info WHERE ID = '" .$_POST['btn-delete-selected']. "'";
        return $this->DbHandler->deleteData($sql);
    }

    // 3e selectbox met weer een selected=selected van de 2e en $_POST['select-contact-name'], en alles in ajax overnieuw doen
    public function selectBox($array, $columnName) {
        $selectBox = '<form method="post" action="">';
            $selectBox .= '<select name="select-contact-name">';

                foreach ($array as $key=>$value) {
                    $selectBox .= '<option name="'.$key.'"';
                    $selectBox .= 'value="'.$value[$columnName].'"';
                    $selectBox .= '>';
                    $selectBox .= $value[$columnName];
                    $selectBox .= '</option>';
                }
            $selectBox .= '</select>';
            $selectBox .= '<button type="submit">Submit</button>';
        $selectBox .= '</form>';

        if (isset($_POST['select-contact-name'])) {
            $selectBox = '<form method="post" action="">';
                $selectBox .= '<select name="select-contact-email">';

                foreach ($array as $key=>$value) {
                    $selectBox .= '<option name="'.$key.'"';
                    $selectBox .= 'value="'.$value['Email'].'"';
                    if (in_array($_POST['select-contact-name'], $value)) {
                        $selectBox .= 'selected="selected"';
                    }
                    $selectBox .= '>';
                    $selectBox .= $value['Email'];
                    $selectBox .= '</option>';
                }
                $selectBox .= '</select>';
                $selectBox .= '<button type="submit">Submit</button>';
            $selectBox .= '</form>';

        }

        if (isset($_POST['select-contact-email'])) {
            $selectBox .= '<form method="post" action="">';
            $selectBox .= '<select name="select-contact-phone">';

            foreach ($array as $key=>$value) {
                $selectBox .= '<option name="'.$key.'"';
                $selectBox .= 'value="'.$value[$columnName].'"';
                if (in_array($_POST['select-contact-email'], $value)) {
                    $selectBox .= 'selected="selected"';
                }
                $selectBox .= '>';
                $selectBox .= $value['Phone'];
                $selectBox .= '</option>';
            }
            $selectBox .= '</select>';
            $selectBox .= '<button type="submit">Submit</button>';
            $selectBox .= '</form>';

        }
        return $selectBox;
	//	return $selectBox2;
    }


}

