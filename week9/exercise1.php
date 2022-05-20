<!DOCTYPE html> <html lang="en">
<head>
<meta charset="utf-8">
    <title>Week 9 Exercise 1</title>
</head>
<body>
<?php
//obtain the firstname input from the $_GET array $namestr = $_GET["firstname"];
    $namestr = $_GET["firstname"];
    $emailstr = $_GET["email"];
    $postaddrstr = $_GET["postaddr"];
    $sportstr = $_GET["favsport"];
    $emailliststr = $_GET["emaillist"];
//obtain the values for the other input devices here
 ?>
 <p>The following information was received from the form:</p>
 <p><strong>name = </strong> <?php echo "$namestr"; ?></p>
 <p><strong>email = </strong> <?php echo "$emailstr"; ?></p>
 <p><strong>postaddr = </strong> <?php echo "$postaddrstr"; ?></p>
 <p><strong>sport = </strong> <?php echo "$sportstr"; ?></p>
 <p><strong>emaillist = </strong> <?php echo "$emailliststr"; ?></p>

</body>
</html>
