<?php
  $text1 = $_GET["string1"];
  $text2 = $_GET["string2"];
  $text3 = $_GET["string3"];
  $encrypted = encrypt($text1, $text2, $text3);

  function encrypt($string1, $string2, $string3)
  {
    if ($string1 && $string2 && $string3) {
      $reversed = strrev($string1);
      $capitalized = strtoupper($string2);
      $capitals_reversed = strtoupper(strrev($string3));
      return $reversed . $capitalized . $capitals_reversed;
    }
  }

  function display_results($encrypted_msg)
  {
    if ($encrypted_msg) {
      echo "<h2>Here is your encrypted message!</h2>";
      echo "<p>" . $encrypted_msg . "</p>";
    } else {
      echo "<h2>Please fill out all fields to display your message.</h2>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Making Functions: Results</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Making Functions</h1>
    <div>
      <h2>Original phrases:</h2>
      <ul>
        <li><?php echo $text1; ?></li>
        <li><?php echo $text2; ?></li>
        <li><?php echo $text3; ?></li>
      </ul>
      <?php display_results($encrypted); ?>
    </div>
  </div>
</body>
</html>