<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: Calculator

      $num1 = 15;
      $num2 =10;

      function addNumbers($num1, $num2) {

        return $num1 + $num2;

      }
      function subtractNumbers($num1, $num2) {
        return $num1 - $num2;

      }
      function multiplyNumbers($num1, $num2) {
        return $num1 * $num2;

      }
      function divideNumbers($num1, $num2) {
        return $num1 / $num2;

      }

      echo "Addition of " . $num1 . " and  " . $num2 ." is " . addNumbers($num1, $num2) . "<br />";

            echo "Subtract of " . $num1 . " and  " . $num2 ." is " . subtractNumbers($num1, $num2) . "<br />";

                  echo "Multiplication of " . $num1 . " and  " . $num2 ." is " . multiplyNumbers($num1, $num2) . "<br />";

                        echo "Division of " . $num1 . " and  " . $num2 ." is " . divideNumbers($num1, $num2) . "<br />";

     ?>

  </body>
</html>
