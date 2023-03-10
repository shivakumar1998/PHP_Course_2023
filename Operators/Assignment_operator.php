<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // Assigment operators
      //  +=  --- Add and assign
      //  -=  --- Subtract and assign
      //  *=  --- Multiply and assign
      //  /=  --- Divide and assign
      //  .=  --- Concatenate and assign

      // long Hnad
       // $x = 5;
      // $x = $x +5;
      // echo $x;

      //short-hand
      $x = 5;
      $x += 5;
      echo $x;

      echo "<br />";
      echo $x -= 5;
      echo "<br />";
      echo $x *= 5;
      echo "<br />";
      echo $x /= 5;
      echo "<br />";

      //long hand
      // $y = "shiva";
      // $z = " backend Developer";
      //
      // echo $y .= $z;

      $str = "shiva";

      $str .= " backend Developer";

      echo $str;
      echo "<br />";
      echo "{$str}";


     ?>

  </body>
</html>
