<?php
  $food = strtolower($_GET["food"]);

  function canEllaEat($food)
  {
    if (isBadFood($food, "fish") || isBadFood($food, "pineapple")) {
      return "Ella can't eat this!";
    } else {
      return "Ella can eat this.";
    }
  }

  function isBadFood($food, $bad_food)
  {
    return (strrpos($food, $bad_food) > -1);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Logical Operators: Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Logical Operators</h1>
    <h2>Food: <?php echo $food; ?></h2>
    <p><?php echo canEllaEat($food); ?></p>
  </div>
</body>
</html>