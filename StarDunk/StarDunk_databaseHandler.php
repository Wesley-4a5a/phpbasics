<?php

	require('StarDunk_databaseHandlerClass.php');

	$handler = new dbHandler('localhost', 'stardunks', 'root', '');
	echo '<header><link rel="stylesheet" type="text/css" href="StarDunk.css"></header>';

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

		//Delete functioneee
		if(ISSET($_POST['delete']))
		{
		$sql = "DELETE FROM `stardunks`.`products` WHERE `products`.`product_id` = ".$_POST['product_id']."";
		$handler->DeleteData($sql);
		}

		//Update Submit Form[Rest onder]
		if(ISSET($_POST['updateSubmit']))
		{
			$sql = "UPDATE `stardunks`.`products` SET product_name = '" . $_POST['product_name'] . "' , product_price = '" . $_POST['product_price'] . "' , other_product_details = '" . $_POST['other_product_details'] . "' WHERE `products`.`product_id` = '" . $_POST['product_id'] ."';";
			$handler->UpdateData($sql);
		}

		//Table showen
		$sql = "SELECT * FROM `products` LIMIT 0, 19";
		$res = $handler->readData($sql);
		echo "<div class=row>";
		echo "<a href='StarDunk_createProduct.php'><button class='crudButton'>Create New Product</button></a>";
		echo "<table class='col-12' border='1'>";
		foreach ($res as $row)
		{
			foreach ($row as $key => $val)
			{
				echo "<th>$key</th>";
			}
				echo "<th>The boy can play</th>";
			break;
		}

		foreach ($res as $row)
		{
					echo "<form action='' method='POST'>";
					echo "<tr>";
		   foreach ($row as $key => $val)
			 {
		       echo "<td><input class='col-12'type='text' value='$val' name='$key' readonly></td>";
		   }
			 echo "<td><input type='submit' name='read'  value='Read' /><input type='submit' name='update' value='Update'><input type='submit' name='delete' value='Delete' /></td>";
		   echo "</tr>";
			 echo "</form>";

		}
		echo "</table>";
		echo "</div>";
		echo "<hr>";

		//Read buttonke
		if(ISSET($_POST['read']))
		{
			echo '<h1>Selected Product</h1>';
			$sql = "SELECT * FROM products WHERE product_id = ".$_POST['product_id']." ";
			$res = $handler->readData($sql);
			echo "<div class=row>";
			echo "<table class='col-12' border='1'>";
			foreach ($res as $row)
			{
				foreach ($row as $key => $val)
				{
					echo "<th>$key</th>";
				}
				break;
			}

			foreach ($res as $row)
			{
						echo "<form action='' method='POST'>";
						echo "<tr>";
			   foreach ($row as $key => $val)
				 {
			       echo "<td>$val</td>";
			   }
			   echo "</tr>";
				 echo "</form>";

			}
			echo "</table>";
			echo "</div>";
		}

		//Update functioneee continued
		if(ISSET($_POST['update']))
		{
			echo "<h1>Update Entry: ".$_POST['product_name']."</h1>";
			echo "<form action='' method='POST'>";
			echo "<input type=hidden name='product_id' value='".$_POST['product_id']."' />";
			echo "Product Name: <br /><input type=text name='product_name' value='".$_POST['product_name']."' required/><br />";
			echo "Product Price: <br /><input type='number' step='0.05' name='product_price' value='".$_POST['product_price']."' required/><br />";
			echo "Product Details: <br /><input type=text name='other_product_details' value='".$_POST['other_product_details']."' required/><br />";
			echo "<input type='submit' name='updateSubmit' />";
			echo "</form>";
		}

		//Insert functioneee
		if(ISSET($_POST['productName']))
		{
		  $sql = "INSERT INTO `stardunks`.`products` VALUES (NULL, '1', '1', '" . $_POST['productName'] ."', '" . $_POST['productPrice'] ."', '" . $_POST['productDetails'] ."');";
		  $handler->CreateData($sql);
		}


?>
