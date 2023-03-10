<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $x = 5;
      $y = 7;
      $z = 4;

      $average = ($x + $y + $z)/3;
      $averageFormatted = number_format($average, 2, ',', ' ');
      echo "The average is ". $averageFormatted;

     ?>

  </body>
</html>
