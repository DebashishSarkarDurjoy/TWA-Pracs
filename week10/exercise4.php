<!-- Student Name: Debashish Sarkar Durjoy -->
<!-- Student ID: 19902470 -->
<!-- Class Time: Thursday 9:00 AM -->

<?php
  $quantity = $_POST["quantity"];
  if (!is_numeric($quantity)) {
  	echo "<h1> The value entered for the quantity was not a number </h1>";
  	exit;
  }
?>

<?php
require_once("conn.php");

$sql = "SELECT name, quantityInStock, price FROM product WHERE quantityInStock > $quantity ORDER BY quantityInStock ASC";

$results = $dbConn->query($sql) or die ('Problem with query: ' . $dbConn->error);

?>

<?php if(!$results->num_rows) : ?>
	<h1> Sorry there are no products that have more than <?php echo $quantity;?> in stock </h1>
<?php else : ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> exercise 4 </title>
  <link rel="stylesheet" href="../css/week10Styles.css" type="text/css">
</head>
<body>
<?php echo "<h1> Products with stock > $quantity </h1>"; ?>
<h1>Product table</h1>
<table>
    <tr>
    <th>Name </th>
    <th>Quantity In Stock</th>
    <th>Price</th>
    </tr>
    <?php
    	while ($row = $results->fetch_assoc()) { ?> <tr>
    	<td><?php echo $row["name"]?></td>
    	<td><?php echo $row["quantityInStock"]?></td>
    	<td><?php echo $row["price"]?></td>
    </tr>
    <?php } ?>
</table>
<?php endif; ?>

<?php
$dbConn->close();
?>

</body>
</html>
