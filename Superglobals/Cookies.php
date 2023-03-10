<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: COOKIE
      // small file that the webserver stores in the client computer

      //keep in mind that cookie always need to be  set at the top of the document
      // Cookie has 6 arguments
      // COOKIE ARGUMENTS
      // 1. Name   -- required
      // 2. Value  -- required
      // 3. Expire  --required
      // 4. Path    --optional
      // 5. Domain   --optional
      // 6. Security   --optional

      // if you do not include an expiration date, the cookie will only be stored for the current session

      // $time = time() + 86400 * 30;
      // setcookie("name", "Shiva", $time);
      //
      // print_r($_COOKIE);

      // NOTE: there is no spicific method to delete cookie
      $time = time() - 86400 * 30;
      setcookie("name", "Shiva", $time);

      print_r($_COOKIE);
      echo "<br />";

      echo $_COOKIE['name'];



     ?>

  </body>
</html>
