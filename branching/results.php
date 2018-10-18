<?php
  $temp = $_GET["temp"];

  function judgeTemp($temp)
  {
    if ($temp < 60) {
      return "It's too cold out!";
    } elseif ($temp > 80) {
      return "It's too hot!";
    } else {
      return "It's lovely out!";
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Branching: Results</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Branching: Current Temperature</h1>
    <p><?php echo judgeTemp($temp); ?></p>
  </div>
</body>
</html>