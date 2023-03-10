<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $expenses = array(40, 80, 20, 70, 85, 40);

      $totalAmount = null;
      $amountOfExpenses = null;

      foreach ($expenses as $expense) {
        $totalAmount = $expense + $totalAmount;

          $amountOfExpenses =   $amountOfExpenses + 1;

      }
      echo "My " . $amountOfExpenses . " biggest expenses were " . $totalAmount;

     ?>

  </body>
</html>
