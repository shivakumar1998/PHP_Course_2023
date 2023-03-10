<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //  NOTE: Conditional statements
      // If statement
      // Else statement
      // Else if statement
      // Switch statement

      $age = 20;

      if ($age < 20) {
        echo "Sorry, you are too young!";

      }
      elseif ($age > 50) {
        echo "You are too old to party!";
      }
      elseif ($age < 10) {
        echo "You need to be in bed!";
      }
      elseif ($age > 18 && $age < 21) {
        echo "You are not alloed to drink!";
      }
      else {
        echo "You are old enough to go out!";
      }
     ?>

  </body>
</html>
