<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Associative arrays
      $cars = array("audi" => 55.500, "Ferarri" => 45.900, "Honda" => 60.750);

foreach ($cars as $key => $value) {
    echo "My " . $key . " has " . $value . " mileage <br />";
}
      // print_r($cars);

     ?>

  </body>
</html>
