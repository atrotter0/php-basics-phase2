<!DOCTYPE html>
<html>
<head>
  <title>Branching: Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Branching: Current Temperature</h1>
    <div>
      <h2>Enter the current temperature in fahrenheit below:</h2>
      <form action="results.php">
        <div class="form-group">
          <label for="temp">Temperature:</label>
          <input type="number" name="temp" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Do I need a jacket?</button>
      </form>
    </div>
  </div>
</body>
</html>