<?php
  $albums_and_prices = array(
    "Easy Does It EP" => "$4.99",
    "It's How We Are" => "$8.99",
    "To the End" => "$8.99",
    "Wait For It" => "$8.99",
  );

  $dates_and_venues = array(
    "Portland, OR - 10/16/18" => "The Doug Fir",
    "Seattle, WA - 10/17/18" => "Showbox Sodo",
    "Salt Lake City, UT - 10/18/18" => "The Complex",
    "Denver, CO - 10/19/18" => "Summit Music Hall",
    "Milwaukee, WI - 10/20/18" => "The Rave / Eagles Club",
    "Cincinnati,OH - 10/21/18" => "Bogarts"
  );

  function printArray($array)
  {
    foreach($array as $key => $value) {
      echo "<li>" . $key . ": " . $value . "</li>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Associative Arrays: Band Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Associative Arrays: Band Page</h1>
    <p>Albums</p>
    <ul>
      <?php printArray($albums_and_prices); ?>
    </ul>
    <p>Upcoming Shows</p>
    <ul>
      <?php printArray($dates_and_venues); ?>
    </ul>
  </div>
</body>
</html>