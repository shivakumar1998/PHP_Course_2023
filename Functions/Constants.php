<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: constants
      //
      // a constant is a name or identifier for a fixed value
      // Two ways
      // 1. Function - define()
      // 2. Keyword - CONST
      // constants are always in uppercase
      // Name has the same rules as variables
      // for Constants , we won't use $ sign


      // NOTE: 1. Define()
    //  define(ARGUMENT1, ARGUMENT2);
      // ARGUMENT1 = CONSTANTS_NAME
      // ARGUMENT2 = the value that you want to assign to that constant
      define("COMAPNY_NAME", "Samsung");

    //  echo COMAPNY_NAME;

      // NOTE: 2.CONST
      const MY_NAME = "shiva";

      echo MY_NAME;


     ?>

  </body>
</html>
