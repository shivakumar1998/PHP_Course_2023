<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // Car Manufacturer

      $machineHours = 8000;
      $machineAge = 8;
      $machineFailures = 24;

      if ($machineHours >= 10000 || $machineAge > 7 || $machineFailures >= 25) {
        echo "Machine needs to be replaced!";

      }
      else {
        echo "Machine is in perfect condition!";
      }


     ?>

  </body>
</html>
