<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: Session Superglobals
      // Session
      // Good to use for sensitive information
      // Session exists as long as the browser is open

      session_start();

      // storing information
      $_SESSION["Name"] = "Shiva";
      $_SESSION["Age"] = 24;

      echo "Hello " . $_SESSION["Name"];
      echo "<br />";
      session_destroy();
      // whenever we close the browser session get destroyed !

      echo "Hello " . $_SESSION["Name"];



     ?>

  </body>
</html>
