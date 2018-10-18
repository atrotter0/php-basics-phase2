<?php
  $uppercase = strtoupper($_GET["string1"]);
  $word_count = str_word_count($_GET["string2"]);
  $shuffled = str_shuffle($_GET["string3"]);
  $index_of_you = stripos($_GET["string4"], "you");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Built-in Functions: Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Built-in Functions: Results</h1>
    <h2>String 1: Uppercase </h2>
    <p><?php echo $uppercase; ?></p>
    <h2>String 2: Word Count</h2>
    <p><?php echo $word_count; ?></p>
    <h2>String 3: Shuffle</h2>
    <p><?php echo $shuffled; ?></p>
    <h2>String 4: First Occurrence of "you"</h2>
    <p><?php echo $index_of_you; ?></p>
  </div>
</body>
</html>