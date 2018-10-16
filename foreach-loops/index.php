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
    <h2>Enter the prices of 5 grocery items below.</h2>
    <form action="results.php">
      <div class="form-group">
        <label for="price1">Item #1:</label>
        <input type="number" name="price1" class="form-control">
      </div>
      <div class="form-group">
        <label for="price2">Item #2:</label>
        <input type="number" name="price2" class="form-control">
      </div>
      <div class="form-group">
        <label for="price3">Item #3:</label>
        <input type="number" name="price3" class="form-control">
      </div>
      <div class="form-group">
        <label for="price4">Item #4:</label>
        <input type="number" name="price4" class="form-control">
      </div>
      <div class="form-group">
        <label for="price5">Item #5:</label>
        <input type="number" name="price5" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Calculate Total</button>
    </form>
  </div>
</body>
</html>