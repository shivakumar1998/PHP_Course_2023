<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $weather = array("Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind");

      echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] .
        ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] ." .";


     ?>

  </body>
</html>
