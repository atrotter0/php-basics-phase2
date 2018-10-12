<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Operators: Shipping Calculator</title>
</head>
<body>
  <div class="container">
    <form action="results.php" method="GET">
      <h1>Fill in two numbers to add them together...</h1>
      <div class="form-group">
        <label for="first_number">First number</label>
        <input id="first_number" name="first_number" class="form-control" type="number">
      </div>
      <div class="form-group">
        <label for="second_number">Second number</label>
        <input id="second_number" name="second_number" class="form-control" type="number">
      </div>
      <hr/>
      <h1>Fill in shipping information...</h1>
      <div class="form-group">
        <label for="weight">Weight (lbs):</label>
        <input id="weight" name="weight" class="form-control" type="number">
      </div>
      <div class="form-group">
        <label for="distance">Distance (miles):</label>
        <input id="distance" name="distance" class="form-control" type="number">
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Go!</button>
    </form>
  </div>
</body>
</html>
