<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // Comparison operators
        //
        // <, >, ==, !=, <>, ===(identical), <=, >=, (spaceship operator -1, 0, 1 { <=> (symnbol)})
        // Spaceshhip --if the value on the left is less than the value on the right, the system will return -1 ( 1 <=> 2 )
        // -- if the value on the left is equal to the value on the right, the system will return 0 (2 <=> 2)
        // -- if the value on the left is greater than the value on the right, the system will return 1 (4 <=> 2)
        $x = 15;
        $y = 10;

        if ($x <=> $y) {
          echo "This is true";
        } else {
          echo "This is false";
        }


     ?>
  </body>
</html>
