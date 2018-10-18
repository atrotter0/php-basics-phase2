<!DOCTYPE html>
<html>
<head>
  <title>Logical Operators: Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Logical Operators</h1>
    <h2>Enter a type of food below to see if Ella can eat it.</h2>
    <h3>Note: Ella cannot eat fish or pineapples.</h3>
    <form action="results.php">
      <div class="form-group">
        <label for="food">Food:</label>
        <input type="text" name="food" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Can I eat this?</button>
    </form>
  </div>
</body>
</html>