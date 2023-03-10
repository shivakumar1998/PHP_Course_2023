<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $value1 = 10;
      $value2 = 15;

      if ($value1 > $value2)
      {
        $Highest = $value1;
        $lowest = $value2;
        echo "Highest value is: " . $value1 . "<br />";
        echo "Lowest value is: " . $value2;

      }
      elseif ($value1 < $value2)
      {
        $Highest = $value2;
        $lowest = $value1;
        echo "Highest value is: " . $value2 . "<br />";
        echo "Lowest value is: " . $value1;

      }

     ?>

  </body>
</html>
