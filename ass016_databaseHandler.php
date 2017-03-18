<?php

	require('ass016_databaseHandlerClass.php');

	$handler = new dbHandler('localhost', 'crudDB', 'root', '');

		// Insert data
		// $sql = "INSERT INTO `crudDB`.`users` VALUES (NULL, 'Firstname', 'Lastname', 'UserCity');";
		// echo $handler->CreateData($sql);
		// echo " create<br>";

		// Update data
		// $sql = "UPDATE `crudDB`.`users` SET `Firstname` = 'Nyanpasu' WHERE `users`.`user_id` = 9;";
		// echo $handler->UpdateData($sql);
		// echo " update<br>";

		// Select data
		// $sql = "SELECT * FROM `users` LIMIT 0, 30 ";
		// $res = $handler->ReadData($sql);
		// foreach ($res as $row)
		// {
		// 	foreach ($row as $key => $val)
		// 	{
		// 		echo "key = $key, val = $val\n";
		// 	}
		// }
		// echo " read<br>";


		// Delete data
		// $sql = "DELETE FROM `crudDB`.`users` WHERE `users`.`user_id` = 15";
		// echo $handler->DeleteData($sql);
		// echo " delete<br>";

		//Update buttonke
		if(ISSET($_POST['user_id']))
		{
   		$sql = "UPDATE `cruddb`.`users` SET Firstname = '" . $_POST['Firstname'] . "' , Lastname = '" . $_POST['Lastname'] . "' , UserCity = '" . $_POST['UserCity'] . "' WHERE `users`.`user_id` = '" . $_POST['user_id'] ."';";
			echo $handler->UpdateData($sql);
		}

		//Insert buttonke
		if(!ISSET($_POST['user_id']) && ISSET($_POST['Firstname']))
		{
			echo 'hond';
			$sql = "INSERT INTO `crudDB`.`users` VALUES (NULL, '" . $_POST['Firstname'] ."', '" . $_POST['Lastname'] ."', '" . $_POST['UserCity'] ."');";
			echo $handler->CreateData($sql);
		}

		//Table showen
		$sql = "SELECT * FROM `users` LIMIT 0, 19";
		$res = $handler->readData($sql);
		echo "<table border='1'>";
		foreach ($res as $row)
		{
			foreach ($row as $key => $val)
			{
				echo "<th>$key</th>";
			}
				echo "<th>Update</th>";
			break;
		}

		foreach ($res as $row)
		{
					echo "<form action='' method='POST'>";
					echo "<tr>";
		   foreach ($row as $key => $val)
			 {
		       echo "<td><input value='".$val."' name=".$key."></td>";
		   }
			 echo "<td><input type='submit' /></td>";
		   echo "</tr>";
			 echo "</form>";

		}
			 echo "<form action='' method='POST'><tr><td><input type='text' readonly/></td><td><input type='text' name='Firstname' placeholder='Firstname'/></td><td><input type='text' name='Lastname' placeholder='Lastname'/></td><td><input type='text' name='UserCity' placeholder='UserCity'/></td><td><input type='submit' name='insert' value='Insert' /></td></tr></form>";


?>
