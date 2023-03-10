<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // // NOTE:
    //   Logical operators
    //   And --- Both X and Y are true
    //   && --- Both X and Y are true
    //   Or --- Either X or Y are true
    //   || --- Either X or Y are true
    //   Xor --- Either X or Y are true, not both
    //   ! --- True if X is not true
    //   1 = True , 0 = False

      $x = 0;
      $y = 10;

      // if ($x == $y && 1 == 1) {
      //   echo "True!";
      // }
      // else {
      //     echo "False!";
      // }
      //
      // if ($x == $y xor 1 == 5) {
      //   echo "True!";
      // }
      // else {
      //     echo "False!";
      // }

      if (!$x == $y && 1 == 1) {
        echo "True!";
      }
      else {
          echo "False!";
      }
     ?>

  </body>
</html>
