<!-- Student Name: Debashish Sarkar Durjoy -->
<!-- Student ID: 19902470 -->
<!-- Class Time: Thursday 9:00 AM -->

<?php
	$isNumeric = True;
	$showResult = True;
?>

<?php
    if (isset($_POST["submit"])) {
    	if (!is_numeric($_POST["quantity"]))
        	$isNumeric = False;
    }
?>

<?php if ($isNumeric) : ?>
    <?php

        if (isset($_POST["submit"])) {
            $quantity = $_POST["quantity"];



             require_once("conn.php");

             $sql = "SELECT name, quantityInStock, price FROM product WHERE quantityInStock > $quantity ORDER BY quantityInStock ASC";

             $results = $dbConn->query($sql) or die ('Problem with query: ' . $dbConn->error);

             if(!$results->num_rows) {
                 $showResult = False;
             }
        }

    ?>

    <?php if(isset($_POST["submit"]) && $showResult): ?>
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
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style>
      input[type="text"] {border: 1px solid black;}
    </style>
    <link rel="stylesheet" href="../css/week10Styles.css">
    <title>Week 10 Exercise 4 Form</title>
  </head>
  <body>
    <form id="exercise4Form" method="post" action="exercise5.php">
      <h1>Quantity in Stock</h1>
      <p>Please enter the quantity to check against stock levels</p>
      <p>
          <label for="quantity">Quantity: </label>
          <input type="text" name="quantity" size="10" id="quantity" maxlength="6" value="<?php isset($_POST['submit']) ? print $_POST['quantity'] : print '' ?>">
          <?php if (!$isNumeric) echo "<label for='quantity'> Entered value is not a number </label>"; ?>
      </p>
      <p><input type="submit" name="submit"></p>
      <?php if(isset($_POST["submit"]) && !$showResult): ?>
      	<?php echo "<p> There are no products that have more than $quantity in stock </p>"; ?>
      <?php endif; ?>
    </form>
  </body>
</html>
