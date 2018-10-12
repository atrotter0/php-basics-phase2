<?php
  $name = $_GET["name"];
  $address = $_GET["address"];
  $apt = $_GET["apt"];
  $city = $_GET["city"];
  $state = $_GET["state"];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Forms: Order Confirmation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Order Confirmation:</h1>
    <p>Full Name: <?php echo $name ?></p>
    <p>Street Address: <?php echo $address ?></p>
    <p>Apt/Unit: <?php echo $apt ?></p>
    <p>City: <?php echo $city ?></p>
    <p>State: <?php echo $state ?></p>
  </div>
</body>
</html>
