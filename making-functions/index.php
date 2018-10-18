<!DOCTYPE html>
<html>
<head>
  <title>Making Functions: Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <h1>Making Functions</h1>
  <div>
    <form action="results.php">
      <h2>Fill out the fields to create an encrypted message!</h2>
      <div class="form-group">
        <label for="string1">String #1:</label>
        <input type="text" name="string1" id="string1" class="form-control">
      </div>
      <div class="form-group">
        <label for="string2">String #2:</label>
        <input type="text" name="string2" class="form-control">
      </div>
      <div class="form-group">
        <label for="string3">String #3:</label>
        <input type="text" name="string3" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Encrypt</button>
    </form>
  </div>
</div>
</body>
</html>