<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: ForEach Loop - iterate over array variables

       // syntax
       // foreach (array_Expression as $key) {

       // }
       //
       // array
       // $names = array("john", "michael", "rahul", "srinivas");
       //
       // foreach ($names as $name) {
       //   echo "My name is: " .$name . "<br />";
       // }
       //
       // Associative array

       $person = array("Name" => "shiva", "Age" => 30, "Gender" => "male");

       foreach ($person as $key => $value) {
         echo $key . ": " . $value;
         echo "<br />";

       }


     ?>

  </body>
</html>
