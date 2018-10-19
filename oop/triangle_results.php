<?php
  class Triangle
  {
    private $side1;
    private $side2;
    private $side3;

    public function __construct($side1, $side2, $side3)
    {
      $this->side1 = $side1;
      $this->side2 = $side2;
      $this->side3 = $side3;
    }

    public function notATriangle()
    {
      return (($this->side1 + $this->side2 <= $this->side3)) ||
        $this->side1 + $this->side3 <= $this->side2 ||
          $this->side2 + $this->side3 <= $this->side1;
    }
  }

  function checkTriangle($triangle)
  {

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
    <h1>Triangle:</h1>
    <p>The type of your triangle is listed below.</p>
  </div>
</body>
</html>