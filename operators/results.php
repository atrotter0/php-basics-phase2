<?php
  $first_number = $_GET["first_number"];
  $second_number = $_GET["second_number"];
  $solution = $first_number + $second_number;
  $weight = $_GET["weight"];
  $distance = $_GET["distance"];
  $divide_by_twenty_and_sum = round(($weight / 20) + ($distance / 20));
  $divide_by_weight_add_five = round(($distance / $weight) + 5);
  $custom_with_subtraction = round($divide_by_twenty_and_sum - 1);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Operators: Calculator & Shipping Results</title>
</head>
<body>
  <div class="container">
    <h1>Arithmetic in PHP is easy!</h1>
    <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is: </p>
    <p><?php echo $solution; ?></p>
    <hr/>
    <h1>Calculating shipping costs is just as easy!</h1>
    <p>Total cost for shipping a package that weighs <?php echo $weight . " lb" ?> and travels <?php echo $distance . " miles" ?>:</p>
    <p>Divide by 20 and add: <?php echo "$" . $divide_by_twenty_and_sum; ?></p>
    <p>Divide by weight and add 5: <?php echo "$" . $divide_by_weight_add_five; ?></p>
    <p>Custom calc with subtraction: <?php echo "$" . $custom_with_subtraction; ?></p>
  </div>
</body>
</html>
