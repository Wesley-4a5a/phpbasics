<?php
require('StarDunk_databaseHandlerClass.php');
$handler = new dbHandler('localhost', 'stardunks', 'root', '');

echo "<form action='' method='POST'>";
echo "Product Name: <input type=text name='productName'/><br />";
echo "Product Price: <input type='number' step='0.01' name='productPrice' /><br />";
echo "Product Details: <input type=text name='productDetails'/><br />";
echo "<input type='submit' />";
echo "</form>";

if(ISSET($_POST['productName']))
{
  echo 'hond';
  $sql = "INSERT INTO `stardunks`.`products` VALUES (NULL, '1', '1', '" . $_POST['productName'] ."', '" . $_POST['productPrice'] ."', '" . $_POST['productDetails'] ."');";
  echo $handler->CreateData($sql);
}


?>
