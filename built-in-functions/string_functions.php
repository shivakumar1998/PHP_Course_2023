<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          // NOTE: String functions

          //strlen()
          $str = "Today is a sunny day!";
          echo strlen($str);
          echo "<br />";

          // String word count
          $firstName = "My first name is shiva";
          echo str_word_count($firstName);
          echo "<br />";

          // How to find text within a string
          $email = "shiva@example.com";

          if (strpos($email, "@")) {
            echo "This is a valid email";
          }
            else {
                echo "This is a email input field";
            }
            echo "<br />";

            // Ucwords - Every first letter of a word is uppercase!

            echo ucwords("shiva kumar"); //Result : Shiva Kumar
            echo "<br />";
            echo ucwords("what is your name?"); //Result: What Is Your Name?
            echo "<br />";
            //Whole string to uppercase
              echo strtoupper("what is your name?");
              echo "<br />";

              //Whole string to lowercase
                echo strtolower("What Is Your Name?");



       ?>

  </body>
</html>
