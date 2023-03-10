<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $score = 55;

      if ($score >= 90 && $score <= 100) {
        echo "You received an A! You passed the exam!";
      }
      elseif ($score >= 80 && $score <= 89) {
        echo "You received an B! You passed the exam!";
      }
      elseif ($score >= 70 && $score <= 79) {
        echo "You received an C! You passed the exam!";
      }
      elseif ($score >= 60 && $score <= 69) {
        echo "You received an D! You passed the exam!";
      }
      else {
        echo "You received an F! You failed this course!";
      }


     ?>

  </body>
</html>
