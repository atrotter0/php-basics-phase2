<?php
  $list_of_prices = array(
    $_GET["price1"],
    $_GET["price2"],
    $_GET["price3"],
    $_GET["price4"],
    $_GET["price5"]
  );

  function getTotal($prices_array)
  {
    $total = 0;
    foreach($prices_array as $item_price) {
      isset($item_price) ? $total += (int)$item_price : $total += 0;
    }
    return $total;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Foreach Loops: Cash Register Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Foreach Loops: Cash Resgister Form</h1>
  <p>Total: $<?php echo getTotal($list_of_prices); ?></p>
</div>
</body>
</html>