<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Even or Odd
        $num1 = 7;
        function evenOrNot($num1) {
          if($num1 % 2 == 0) {
            echo $num1 . " is even";
          }
          else {
            echo $num1 . " is odd";
          }

        }
        evenOrNot($num1);


     ?>

  </body>
</html>
