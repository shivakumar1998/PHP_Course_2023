<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Array built-in functions
        // array() -- is a basic function
        // array_merge() -takes two parameters

        $personalInfo = array("Name" => "Shiva", "Age" => 24, "city" => "Hyderabad");

        $moreInfo = array("State" => "Telangana", "weight" => 69);

        $personalInfo =  array_merge($personalInfo, $moreInfo);

        // print_r($personalInfo); //Result: Array ( [Name] => Shiva [Age] => 24 [city] => Hyderabad [State] => Telangana [weight] => 69 )

        foreach ($personalInfo as $key => $value) {
          // echo $key . ": " . $value ."<br />";
          //result Name: Shiva
          // Age: 24
          // city: Hyderabad
          // State: Telangana
          // weight: 69


        }
        echo "<br />";

        // array_keys() takes one parameter and prints only keys
        // print_r(array_keys($personalInfo));
        echo "<br />";
        // result: Array ( [0] => Name [1] => Age [2] => city [3] => State [4] => weight )

        // array_values() takes one parameter and prints only values
        // print_r(array_values($personalInfo));
        // result: Array ( [0] => Shiva [1] => 24 [2] => Hyderabad [3] => Telangana [4] => 69 )

        // NOTE: we cannot use array_push for Associative array

        // array_push takes two parameters and appends value to the array
        $cars = array("volvo", "mercedes", "bmw");
        array_push($cars, "Ferarri");
        // echo $cars;
        print_r($cars);
        echo "<br />";

        // array_search() takes two params searches inside of an array
        echo array_search("bmw", $cars);
        //Result: returns index of that values
        // for bmw string the index value is 2

        echo "<br />";
        //Count() -  Counts the number of items in an array
        echo count($cars);

     ?>

  </body>
</html>
