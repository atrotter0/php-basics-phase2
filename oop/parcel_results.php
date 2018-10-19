<?php
  class Parcel
  {
    const SHIPPING_MULTIPLIER = 5;
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
      $this->volume = $this->calculateVolume();
      $this->cost = $this->costToShip();
    }

    public function calculateVolume()
    {
      return $this->length * $this->width * $this->height;
    }

    public function calculateCostToShip()
    {
      return $this->volume / $this->distance * SHIPPING_MULTIPLIER;
    }
  }

  function costToShip($length, $width, $height, $weight, $distance)
  {
    if ($length && $width && $height && $weight) {
      $parcel = new Parcel($width, $length, $height, $weight, $distance);
      return $parcel->getCost();
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
      costToShip(
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