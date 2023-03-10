<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Associative Array
      $countries = array("Netherlands" => "Amsterdam", "Germany" => "Berlin", "Thailand" => "Bangkok", "Denamrk" => "Copenhagen", "Canada" => "Toronto");

      //use for each loop
      foreach ($countries as $key => $value) {
        echo "The capital of " . $key . " is " . $value;
        echo "<br />";
      }
     ?>

  </body>
</html>
