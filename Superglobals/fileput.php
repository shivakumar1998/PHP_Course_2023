<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      // NOTE: File input
      // foepn() takes two params , path and access type
      // fwrite() takes two params, file_name and text
      // fclose() takes one param, i.e., file_name
      // last value  keeps overwriting


      if (isset($_POST['submit'])) {
        $myFile = fopen("uploads/file.txt", "w");

        $txt = "My age is " . $_POST['age'] . "\n";

        fwrite($myFile, $txt);

        fclose($myFile);

      }
     ?>

     <form class="" action="fileput.php" method="post">
       <input type="text" name="age" value="">
       <input type="submit" name="submit">

     </form>

  </body>
</html>
