<?php
	
	require('ass016_databaseHandlerClass.php');

	$handler = new dbHandler('localhost', 'crudDB', 'root', '');
	
	
		$sql = "INSERT INTO `crudDB`.`users` VALUES (NULL, 'Firstname', 'Lastname', 'UserCity');";
		echo $handler->CreateData($sql);
		echo " create<br>";
	
		$sql = "UPDATE `crudDB`.`users` SET `Firstname` = 'Jack' WHERE `users`.`user_id` = 2;";
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
?>

