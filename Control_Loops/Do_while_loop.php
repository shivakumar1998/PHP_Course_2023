<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE:
        // Do While Loop => First do, then while

        $cookie = 1;

        do {
          echo "I love Cookies!" . "<br />";
          $cookie++;

        } while ($cookie < 1);

        echo "<br />";

        //comparision
        while ($cookie < 1) {
          echo "I love cookies!" . "<br />";
          $cookie++;
        }

     ?>

  </body>
</html>
