<?php 
  $soup = "Tomato Basil";
  $drink = "Milk";
  $entree = "Grilled Cheese";
  $dessert = "Apple Pie";
  $daily_specials = array($soup, $drink, $entree, $dessert);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Variables: Specials Menu</title>
</head>
<body>
  <h1>Specials Menu:</h1>
  <ul>
    <?php
      foreach($daily_specials as $special) {
        echo "<li>" . $special . "</li>";
      }
    ?>
  </ul>
</body>
</html>
