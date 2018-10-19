<?php
  class Car
  {
    private $make;
    private $model;
    private $miles;
    private $price;
    private $color;
    private $img_path;

    public function __construct($make, $model, $miles, $price, $color = "No specified color", $img_path ="img/car.png")
    {
      $this->make = $make;
      $this->model = $model;
      $this->miles = $miles;
      $this->price = $price;
      $this->color = $color;
      $this->img_path = $img_path;
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

    public function getImgPath()
    {
      return $this->img_path;
    }

    public function setMake($new_make)
    {
      $this->make = $new_make;
    }

    public function setModel($new_model)
    {
      $this->model = $new_model;
    }

    public function setMiles($new_miles)
    {
      $this->miles = $new_miles;
    }

    public function setPrice($new_price)
    {
      $this->price = $new_price;
    }

    public function setColor($new_color)
    {
      $this->color = $new_color;
    }

    public function setImgPath($new_img_path)
    {
      $this->img_path = $new_img_path;
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
      echo "<p><img src='" . $car->getImgPath() . "' alt='image of a car'>";
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