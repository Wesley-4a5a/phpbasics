<?php
require('StarDunk_databaseHandlerClass.php');
$handler = new dbHandler('localhost', 'stardunks', 'root', '');

echo "<form action='StarDunk_databaseHandler.php' method='POST'>";
echo "Product Name: <input type=text name='productName' required/><br />";
echo "Product Price: <input type='number' step='0.01' name='productPrice' required/><br />";
echo "Product Details: <input type=text name='productDetails' required/><br />";
echo "<input type='submit' />";
echo "</form>";



?>
