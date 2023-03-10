<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $price = 200;
      $vat = 0.52;
      $totalPrice = ($price * $vat) + $price;

      echo "Price: ". $price . "<br />";
          echo "VAT: ". $vat . "<br />";
              echo "Total price: ". $totalPrice;
     ?>

  </body>
</html>
