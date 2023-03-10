<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $num1 = 5;
    $num2 = 5;

    //   // NOTE: Function with arguments and parameters
    //   function calculator($num1, $num2) {
    //     echo $num1 * $num2;
    //
    //   }
    //   // NOTE: Arguments
    //  calculator($num1, $num2);
    // //calculator();

    // // method 2
    // function calc($num1, $num2 = 20) {
    //   echo $num1 * $num2;
    // }
    //
    // //arguments
    // calc($num1);

    //method -3
    function calc($num1 =5, $num2 = 20) {
      echo $num1 * $num2;
    }

    //arguments
    calc();




     ?>

  </body>
</html>
