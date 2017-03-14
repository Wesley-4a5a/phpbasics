<?php

	require('ass016_databaseHandlerClass.php');

	$handler = new dbHandler('localhost', 'crudDB', 'root', '');


		$sql = "INSERT INTO `crudDB`.`users` VALUES (NULL, 'Firstname', 'Lastname', 'UserCity');";
		echo $handler->CreateData($sql);
		echo " create<br>";

		$sql = "UPDATE `crudDB`.`users` SET `Firstname` = 'Kill me' WHERE `users`.`user_id` = 6;";
		echo $handler->UpdateData($sql);
		echo " update<br>";

		$sql = "SELECT * FROM `users` LIMIT 0, 30 ";
		$res = $handler->ReadData($sql);
		foreach ($res as $row)
		{
			foreach ($row as $key => $val)
			{
				echo "key = $key, val = $val\n";
			}
		}
		echo " read<br>";

		$sql = "DELETE FROM `crudDB`.`users` WHERE `users`.`user_id` = 15";
		echo $handler->DeleteData($sql);
		echo " delete<br>";

		//    Read in table
		$sql = "SELECT * FROM `users` LIMIT 0, 19";
		$res = $handler->readData($sql);
		echo "<table border='1'>";
		echo "<th>ID</th>";
		echo "<th>Firstname</th>";
		echo "<th>Lastname</th>";
		echo "<th>City</th>";
		echo "<tr>";
		foreach ($res as $row)
		{
		   foreach ($row as $key => $val)
			 {
		       echo "<td> $val</td>";
		   }
		   echo "<tr>";
		}

?>
