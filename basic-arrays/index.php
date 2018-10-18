<?php
  $favorite_ice_cream = buildFavoriteIceCream();
  $favorites_without_vanilla = withoutSecondFlavor();
  $worst_movies = buildWorstMovies();
  $favorite_books = array(
    "Treasure Island",
    "The Eye of the World",
    "The Great Hunt",
    "The Dragon Reborn",
    "Homeland",
    "Exile",
    "Sojourn",
    "The Dragonbone Chair"
  );

  function printArray($array)
  {
    foreach ($array as $item) {
      echo "<li>" . $item . "</li>";
    }
  }

  function buildFavoriteIceCream()
  {
    return array("chocolate", "vanilla", "chocolate and sea salt");
  }

  function withoutSecondFlavor()
  {
    $fav_ice_cream = buildFavoriteIceCream();
    array_splice($fav_ice_cream, 1, 1);

    return $fav_ice_cream;
  }

  function buildWorstMovies()
  {
    $worst_movies = array(
      "The Phantom Menace",
      "The Last Jedi",
      "The Scorpion King",
      "Wing Commander",
      "Battlefield Earth"
    );
    array_push($worst_movies, "Date Movie", "Left Behind");
    return $worst_movies;
  }

  function printEvenItems($array)
  {
    for ($i = 0; $i < count($array); $i++) {
      if (isEven($i)) echo "<li>" . $array[$i] . "</li>";
    }
  }

  function isEven($number)
  {
    return ($number % 2 == 0);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Basic Arrays</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Basic Arrays</h1>
    <p>Original Array: </p>
    <p>
      <ul>
        <?php printArray($favorite_ice_cream); ?>
      </ul>
    </p>
    <p>Second Favorite Flavor: </p>
    <p>
      <ul>
        <li><?php echo $favorite_ice_cream[1]; ?></li>
      </ul>
    </p>
    <p>New Array Without Second Flavor:</p>
    <p>
      <ul>
        <?php printArray($favorites_without_vanilla); ?>
      </ul>
    </p>
    <p>Worst Movies of All Time:</p>
    <p>
      <ul>
        <?php printArray($worst_movies); ?>
      </ul>
    </p>
    <p>Print Even Items:</p>
    <p>
    <ul>
      <?php printEvenItems($favorite_books); ?>
    </ul>
    </p>
  </div>
</body>
</html>