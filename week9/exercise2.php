<!DOCTYPE html> <html lang="en">
<head>
<meta charset="utf-8">
    <title>Week 9 Exercise 2</title>
</head>
<body>
<?php

    $namestr = $_POST["firstname"];
    $emailstr = $_POST["email"];
    $postaddrstr = $_POST["postaddr"];
    $sportstr = $_POST["favsport"];
    $emailliststr = $_POST["emaillist"];

 ?>
 <p>The following information was received from the form:</p>
 <p><strong>name = </strong> <?php echo "$namestr"; ?></p>
 <p><strong>email = </strong> <?php echo "$emailstr"; ?></p>
 <p><strong>postaddr = </strong> <?php echo "$postaddrstr"; ?></p>
 <p><strong>sport = </strong>
     <?php
        if (empty($sportstr)) {
            echo "Nothing selected.";
        }
        else {
            foreach($sportstr as $sport) {
                echo "$sport <br>";
            }
        }
      ?>
 </p>
 <p><strong>emaillist = </strong> <?php echo "$emailliststr"; ?></p>

</body>
</html>
