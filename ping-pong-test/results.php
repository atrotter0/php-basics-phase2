<?php
  $number_input = $_GET["number"];

  function runPingPong($number)
  {
    $numbers = createNumberRange($number);
    $result = checkAndReplace($numbers);
    printResult($result);
  }

  function createNumberRange($number)
  {
    $numbers_array = array();
    for ($i = 0; $i <= $number; $i++) {
      array_push($numbers_array, $i);
    }
    return $numbers_array;
  }

  function checkAndReplace($numbers)
  {
    for ($i = 0; $i < count($numbers); $i++) {
      if (divisibleByThreeAndFive($numbers[$i]) && notZero($numbers[$i])) {
        $numbers[$i] = "ping-pong";
      } elseif (divisibleBy($numbers[$i], 3) && notZero($numbers[$i])) {
        $numbers[$i] = "ping";
      } elseif (divisibleBy($numbers[$i], 5) && notZero($numbers[$i])) {
        $numbers[$i] = "pong";
      }
    }
    return $numbers;
  }

  function divisibleByThreeAndFive($number)
  {
    return (divisibleBy($number, 3) && (divisibleBy($number, 5)));
  }

  function notZero($number)
  {
    return ($number !== 0);
  }

  function divisibleBy($number, $divisor)
  {
    return ($number % $divisor == 0);
  }

  function printResult($modified_numbers)
  {
    foreach ($modified_numbers as $number)
    {
      echo "<li>" . $number . "</li>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Ping Pong Test: Results</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Ping Pong Test</h1>
    <p>Here are your results:</p>
    <ul>
      <?php runPingPong($number_input); ?>
    </ul>
  </div>
</body>
</html>