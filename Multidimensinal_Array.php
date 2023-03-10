<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Mutidimensional Array

      //Expensive cars
      //Audi, Mercedes, BMW

      //Inexpensive cars
      //volvo, ford, Toyota

      $cars = array(
        "Expensive" => array("Audi", "Mercedes", "BMW"),
        "Inexpensive" => array("Volvo", "Ford", "Toyota")
      );

      echo $cars["Expensive"][0];
      echo "<br />";
        echo $cars["Inexpensive"][1];

     ?>

  </body>
</html>
