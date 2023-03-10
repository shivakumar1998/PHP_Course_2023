<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // Increment and Decrement
      // ++$x  --- Pre-Increment
      // $x++  --- Post-Increment
      // --$x  --- Pre-Decrement
      // $x--  --- Post-Decrement

      // NOTE:
      // Inc/Dec only effects Numbers and strings
      // Inc/Dec will not effect Arrays, objects, Resources, boolean

      $x = 10;
        // echo $x++; //Post-Increment
        //   echo "<br />";
        // echo ++$x; //Pre-Increment

        echo $x--; //Post-Decrement
        echo "<br />";
        echo $x;
        echo "<br />";
        echo --$x; //pre-Decrement
          echo "<br />";

        // NOTE: we cannot Decrement NULL but we can Increment it
        

        $y = null;
        echo $y++;
        echo "<br />";
        echo ++$y;



     ?>

  </body>
</html>
