<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Fibonacci series 0 to 50

        $num1 = 0;
        $num2 = 1;
        $counter = 0;

        while ($counter < 10) {
          echo ' '. $num1;
          $num3 = $num2 + $num1;
          $num1 = $num2;
          $num2 = $num3;
          $counter++;
        }

     ?>

  </body>
</html>
