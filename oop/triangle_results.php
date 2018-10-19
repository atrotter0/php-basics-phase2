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
      return (
        ($this->side1 + $this->side2 <= $this->side3) ||
        ($this->side1 + $this->side3 <= $this->side2) ||
        ($this->side2 + $this->side3 <= $this->side1)
      );
    }

    // 2 sides equal
    public function isIsosceles()
    {
      return (
        ($this->side1 == $this->side2 && $this->side2 !== $this->side3) ||
        ($this->side1 == $this->side3 && $this->side2 !== $this->side3) ||
        ($this->side1 !== $this->side2 && $this->side2 == $this->side3)
      );
    }

    // all sides equal
    public function isEquilateral()
    {
      return (
        ($this->side1 == $this->side2 && $this->side1 == $this->side3)
      );
    }

    // no sides equal
    public function isScalene()
    {
      return (
        ($this->side1 !== $this->side2 && $this->side2 !== $this->side3)
      );
    }
  }

  function checkTriangle($triangle)
  {
    if ($triangle->notATriangle()) {
      echo "Not a triangle!";
    } elseif ($triangle->isIsosceles()) {
      echo "Isosceles";
    } elseif ($triangle->isEquilateral()) {
      echo "Equilateral";
    } elseif ($triangle->isScalene()) {
      echo "Scalene";
    }
  }

  function runTriangleCheck()
  {
    if ($_GET["side1"] && $_GET["side2"] && $_GET["side3"]) {
      $triangle = new Triangle($_GET["side1"], $_GET["side2"], $_GET["side3"]);
      checkTriangle($triangle);
    } else {
     echo "Please fill out all fields to check your triangle.";
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
    <h1>Triangle:</h1>
    <p>The type of your triangle is listed below.</p>
    <p><?php runTriangleCheck(); ?></p>
  </div>
</body>
</html>