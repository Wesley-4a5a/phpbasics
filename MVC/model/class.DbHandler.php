<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class DbHandler
{
    var $servername;
    var $dbname;
    var $username;
    var $password;

    function __construct($servername, $dbname, $username, $password) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch(PDOException $e) {
            echo "Connection failed";
        }
    }

    function createData($sql) {
        try {
            $this->conn->exec($sql);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            return "Error: " . $sql . "<br>" . $e->getMessage();
        }
    }

    function readData($sql) {
        try {
            //Prepare statement
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Return result array
            return $result;
        } catch(PDOException $e) {
            return "Error: " . $sql . "<br>" . $e->getMessage();
        }
    }

    function updateData($sql) {
        try {
            //Prepare statement
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            // Count and return updated rows
            echo $stmt->rowCount() . " records UPDATED successfully";
        } catch(PDOException $e) {
            return "Error: " . $sql . "<br>" . $e->getMessage();
        }

    }

    function deleteData($sql) {
        try {
            $this->conn->exec($sql);
            echo "Record deleted successfully";
        } catch(PDOException $e) {
            return "Error: " . $sql . "<br>" . $e->getMessage();
        }
    }

    function __destruct() {
        $this->conn = null;
    }
}