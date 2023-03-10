<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Vat Calculator
        $price = 100;
        $vat = 0.21;
        function calculateVat($price, $vat) {
          $calculatedPrice = ($price * $vat) + $price;

          return $calculatedPrice;

        }

        echo "Price is: " . $price . "<br />";
        echo "Vat is: " . $vat . "<br />";
        echo "Total price: " . calculateVat($price, $vat);
     ?>

  </body>
</html>
