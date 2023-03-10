<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: file read

      $filePath = "uploads/file.txt";

      $output = file_get_contents($filePath);

      #if we entered multiple age values
      $ages = explode("\n", $output);

      $totalAge = 0;
      $i = 0;

      foreach ($ages as $age) {
        echo $age . "<br />";
        $totalAge = $totalAge + $age;
        $i++;
      }

      echo "The average age is " . ($totalAge / $i);

     ?>

  </body>
</html>
