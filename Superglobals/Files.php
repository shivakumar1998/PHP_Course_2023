<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: files superglobals
        // $_FILES
        //
        // How to upload files
        // 1. Upload it to the root
        // 2. Directly to the database
        //
        //  enctype="multipart/form-data
        // Specifies how the form data should be encoded

        echo $name = $_FILES['file']['name'] . "<br />";
        echo $type = $_FILES['file']['type'] . "<br />";
        echo $tmp_location = $_FILES['file']['tmp_name'] . "<br />";
        echo $error  = $_FILES['file']['error'] . "<br />";
     ?>

     <form class="" action="upload.php" method="post" enctype="multipart/form-data">
       Upload: <input type="file" name="file" value=""><br />
       <button type="submit" name="submit">Submit</button>

     </form>

  </body>
</html>
