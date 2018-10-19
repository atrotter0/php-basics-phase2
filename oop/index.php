<!DOCTYPE html>
<html>
<head>
  <title>OOP: Dealership, Parcels, Triangle</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form action="car_results.php">
      <h1>Dealership:</h1>
      <p>Fill out the form to search for a car by a specified price and mileage.</p>
      <div class="form-group">
        <label for="search_price">Price:</label>
        <input type="number" name="search_price" class="form-control">
      </div>
      <div class="form-group">
        <label for="search_mileage">Mileage:</label>
        <input type="number" name="search_mileage" class="form-control">
      </div>
      <button type="submit" class="btn btn-lg btn-primary">Find Cars</button>
    </form>
    <form action="parcel_results.php">
      <h1>Parcel:</h1>
      <p>Fill out the form to display the cost of shipping your parcel.</p>
      <div class="form-group">
        <label for="width">Width (in):</label>
        <input type="number" name="width" class="form-control">
      </div>
      <div class="form-group">
        <label for="length">Length (in):</label>
        <input type="number" name="length" class="form-control">
      </div>
      <div class="form-group">
        <label for="height">Height (in):</label>
        <input type="number" name="height" class="form-control">
      </div>
      <div class="form-group">
        <label for="weight">Weight (lb):</label>
        <input type="number" name="weight" class="form-control">
      </div>
      <div class="form-group">
        <label for="distance">Distance (mi):</label>
        <input type="number" name="distance" class="form-control">
      </div>
      <button type="submit" class="btn btn-lg btn-primary">Calculate Shipping Cost</button>
    </form>
  </div>
</body>
</html>