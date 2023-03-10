<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Leap year
        $year = 2004;

        function isLeapYear($year) {
          if ($year % 4 == 0 || $year % 400 == 0) {
            return true;
          }
          else {
              return false;
          }
        }
        if(isLeapYear($year)) {
          echo $year . " is a leap year";
        }
        else {
            echo $year . " is not a leap year";
        }


     ?>

  </body>
</html>
