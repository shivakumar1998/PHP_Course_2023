<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $year = 2004;

      if ($year % 400 == 0 || $year % 4 == 0) {
        echo $year . " is a leap year!";
      }
      else {
        echo $year . " is not a leap year!";
      }
     ?>

  </body>
</html>
