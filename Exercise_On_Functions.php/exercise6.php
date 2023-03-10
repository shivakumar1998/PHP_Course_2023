<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Prime Number

        $num1 = 11;

        // function isPrime($num1) {
        //   if($num1 % 2 != 0) {
        //     return true;
        //   }
        //   else {
        //     return false;
        //   }
        // }

        function isPrime($num1) {
          if($num1 == 1) {
            return false;
          }
          else {
              for ($i = 2; $i < $num1 / 2; $i++) {
                if($num1 % $i == 0) {
                  return false;
                }

              }
              return 1;
          }
        }

        if (isPrime($num1)) {
          echo $num1 . " is a prime number";
        }
        else {
            echo $num1 . " is not a prime number ";
        }

     ?>

  </body>
</html>
