<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $value = 6;

    switch ($value) {
      case 1:
        echo "Spades";
      break;

      case 2:
        echo "Hearts";
        break;
      case 3:
        echo "Diamonds";
        break;
      case 4:
        echo "Clubs";
        break;

      default : echo "Invalid option choosen";
    }
     ?>
  </body>
</html>
