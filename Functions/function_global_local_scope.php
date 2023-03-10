<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: Global and Local Scope

      $x = 10;
      $y = 20;
      // NOTE: Global Scope
      //to use global scope variable inside the function pass as argument and make a function call
      function myFunction($y) {

        // NOTE: local scope
        echo $y;
      }
      myFunction($y);
     ?>

  </body>
</html>
