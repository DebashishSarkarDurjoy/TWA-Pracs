<?php
    if (isset($_POST["submit"])) {
        $namestr = $_POST["firstname"];
        $emailstr = $_POST["email"];
        $postaddrstr = $_POST["postaddr"];
        $sportstr = $_POST["favsport"];
        $emailliststr = $_POST["emaillist"];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Week 9 Exercise 3 Form</title>
    <link rel="stylesheet" href="../css/week9Styles.css">
  </head>
  <body>
    <h1>Week 9 Exercise 3 PHP form demo</h1>
    <form id="userinfo" action="exercise3.php" method="post">
      <p>Please fill in the following form. All fields are mandatory.</p>

      <p>
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="firstname">
      </p>

      <p>
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email">
      </p>

      <p>
        <label for="addr">Postal Address:</label>
        <textarea rows="5" cols="300" id="addr" name="postaddr"></textarea>
      </p>

      <p>
        <label for="sport">Favourite sport: </label>
        <select id="sport" name="favsport[]" size="4" multiple>
            <option value="soccer">Soccer</option>
            <option value="cricket">Cricket</option>
            <option value="squash">Squash</option>
            <option value="golf">Golf</option>
            <option value="tennis">Tennis</option>
            <option value="basketball">Basketball</option>
            <option value="baseball">Baseball</option>
        </select>
      </p>

      <p>
        <label for="list">Add me to the mailing list</label>
        <input type="checkbox" id="list" name="emaillist" value="Yes">
      </p>

      <p><input type="submit" name="submit" value="submit"></p>
    </form>

    <?php if(isset($_POST["submit"])) { ?>
    <section id="output">

       <h2>The following information was received from the form:</h2>
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

    </section>
    <?php } ?>
  </body>
</html>
