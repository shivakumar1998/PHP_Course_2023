<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: Swapping Numbers
      $num1 = 4;
      $num2 = 9;

      function swapNumbers($num1, $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo "After swapping num1 = " . $num1 . " num2 = " . $num2;
      }
      swapNumbers($num1, $num2);
     ?>

  </body>
</html>
