<?php
  class Car
  {
    private $make;
    private $model;
    private $miles;
    private $price;

    public function __construct($make, $model, $miles, $price)
    {
      $this->make = $make;
      $this->model = $model;
      $this->miles = $miles;
      $this->price = $price;
    }

    public function getMake()
    {
      return $this->make;
    }

    public function getModel()
    {
      return $this->model;
    }

    public function getMiles()
    {
      return $this->miles;
    }

    public function getPrice()
    {
      return $this->price;
    }
  }

  function buildCars()
  {
    $cars_holder = array();
    array_push($cars_holder, );
  }

  function printArray($array)
  {
    foreach ($array as $element) {
      echo "<li>" . $element . "</li>";
    }
  }
?>

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
    <h1>Dealership:</h1>
    <p>Your cars are listed below.</p>
    <ul>

    </ul>
  </div>
</body>
</html>