<?php
  class Parcel
  {
    const COST = 20;
    private $width;
    private $length;
    private $height;
    private $weight;
    private $distance;
    private $volume;
    private $cost;

    public function __construct($width, $length, $height, $weight, $distance)
    {
      $this->width = $width;
      $this->length = $length;
      $this->height = $height;
      $this->weight = $weight;
      $this->distance = $distance;
      $this->calculateVolume();
      $this->calculateCostToShip();
    }

    public function getCost()
    {
      return $this->cost;
    }

    public function getWidth()
    {
      return $this->width;
    }

    public function getLength()
    {
      return $this->length;
    }

    public function getHeight()
    {
      return $this->height;
    }

    public function getWeight()
    {
      return $this->weight;
    }

    public function setWidth($width)
    {
      $this->width = $width;
    }

    public function setLength($length)
    {
      $this->length = $length;
    }

    public function setHeight($height)
    {
      $this->height = $height;
    }

    public function setWeight($weight)
    {
      $this->weight = $weight;
    }

    public function calculateVolume()
    {
      $this->volume = $this->length * $this->width * $this->height;
    }

    public function calculateCostToShip()
    {
      $this->cost = ($this->distance / self::COST) + ($this->volume / self::COST);
    }
  }

  function displayCostToShip($length, $width, $height, $weight, $distance)
  {
    if ($length && $width && $height && $weight) {
      $parcel = new Parcel($width, $length, $height, $weight, $distance);
      echo "Cost: $" . $parcel->getCost();
    } else {
      echo "<p>Please fill out all fields to calculate the shipping cost of your parcel.</p>";
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
  <link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>
<body>
  <div class="container">
    <h1>Parcel:</h1>
    <p>The cost for shipping your parcel is listed below.</p>
    <?php
      displayCostToShip(
        $_GET["length"],
        $_GET["width"],
        $_GET["height"],
        $_GET["weight"],
        $_GET["distance"]
      );
    ?>
  </div>
</body>
</html>