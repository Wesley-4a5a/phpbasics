<?php

	class dbHandler{
		
		private $server;
		private $dbName;
		private $user;
		private $password;
		
		function __construct($server, $dbName, $user, $password)
		{
			$this->server = $server;
			$this->dbName = $dbName;
			$this->user = $user;
			$this->password = $password;
			
			try
			{
				$this->conn = new PDO("mysql:host=$this->server;dbname=$this->dbName", $this->user, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
		
		function createData($sql)
		{
			try
			{
				$this->conn->exec($sql);
				return $this->conn->lastInsertId();
			}
			catch(PDOException $e)
			{
				return "Create failed: " . $e->getMessage();
			}
		}
		
		function deleteData($sql)
		{
			try
			{
				$this->conn->exec($sql);
				return true;
			}
			catch(PDOException $e)
			{
				return "Delete failed: " . $e->getMessage();
			}
		}
		
		function updateData($sql)
		{
			try
			{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				return $stmt->rowCount();
			}
			catch(PDOException $e)
			{
				return "Update failed: " . $e->getMessage();
			}
		}
		
		function readData($sql)
		{
			try 
			{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $result;
			} 
			catch(PDOException $e) 
			{
				return "Error: " . $sql . "<br>" . $e->getMessage();
			}
		}
		
		function __destruct()
		{
			$this->conn = null;
		}
		
	}

?>
