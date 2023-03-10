<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $cars = array("BMW", "Adui", "Honda", "Ferarri");
      //echo $cars[2];

      $car2 = array("volvo", "Chevy", "Volkswagen");


      $cars = array_merge($cars, $car2);
    //  var_dump($cars);
print_r($cars);

    //  var_dump($cars);
  //  print_r($cars)


     ?>

  </body>
</html>
