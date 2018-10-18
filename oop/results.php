<?php
  class Car
  {
    private $make;
    private $model;
    private $miles;
    private $price;
    private $color;

    public function __construct($make, $model, $miles, $price, $color = "No specified color")
    {
      $this->make = $make;
      $this->model = $model;
      $this->miles = $miles;
      $this->price = $price;
      $this->color = $color;
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

    public function getColor()
    {
      return $this->color;
    }

    public function carDetails()
    {
      return $this->getColor() . " " . $this->getMake() . " " . $this->getModel() .
        ": $" . $this->getPrice();
    }
  }

  function buildCars()
  {
    $cars_holder = array();
    $car1 = new Car("Volkswagon", "Jetta", 131000, 2100, "Red");
    $car2 = new Car("Subaru", "Impreza", 182000, 2500, "Black");
    $car3 = new Car("Jeep", "Cherokee", 194000, 1900);
    array_push($cars_holder, $car1, $car2, $car3);
    return $cars_holder;
  }

  function printCars($cars_list)
  {
    foreach ($cars_list as $car) {
      echo "<p>" . $car->carDetails() . "</p>";
    }
  }

  $cars_array = buildCars();
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
    <p>Matching cars are listed below.</p>
    <?php printCars($cars_array); ?>
  </div>
</body>
</html>