<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // NOTE:
        // Initialization : Evaluated once at the beginning of the loop
        // Condition : option- 1: if its true, execute
                    // option- 2: if its false, stop

        // Inc/Dec or Counter: Evaluated at the end of every loop
        // for (initialization; condition; increment/decrement) {
        // Code
        // }

        // for ($x = 1; $x < 10; $x++) {
        //   echo "The number is: " . $x;
        //   echo "<br />";
        // }


        // Going to the bank on 1st of january
        // want to deposit 1000 dollars
        // Interest rate is 5%
        // withdrawl it after 5 years

        $deposit = 1000;
        $interest = 0.05;

        for ($years = 1; $years <= 5; $years++) {
            $deposit += ($deposit * $interest);
            echo "The total amount after " . $years . " year is: " . $deposit;
            echo "<br />";
        }


     ?>

  </body>
</html>
