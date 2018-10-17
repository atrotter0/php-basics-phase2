<!DOCTYPE html>
<html>
<head>
  <title>Ping Pong Test: Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <h1>Ping Pong Test</h1>
  <p>Enter a number into the field below and witness the ping pong magic.</p>
  <form action="results.php">
    <label for="number">Number:</label>
    <div class="form-group">
      <input type="number" name="number" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Run Ping Pong</button>
  </form>
</div>
</body>
</html>