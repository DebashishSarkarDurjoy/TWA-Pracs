<!-- Student Name: Debashish Sarkar Durjoy -->
<!-- Student ID: 19902470 -->
<!-- Class Time: Thursday 9:00 AM -->

<?php
require_once("conn.php");


$sql = "SELECT name, quantityInStock, price FROM product WHERE quantityInStock > 10 ORDER BY quantityInStock ASC";

$results = $dbConn->query($sql) or die ('Problem with query: ' . $dbConn->error);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> exercise 4 </title>
  <link rel="stylesheet" href="../css/week10Styles.css" type="text/css">
</head>
<body>
<?php echo "<h1> Products with stock > 10 </h1>"; ?>
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

<?php
$dbConn->close();
?>

</body>
</html>
