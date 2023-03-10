<?php

  if (isset($_POST['submit'])) {

    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; //Find file name
    $tmp_name = $_FILES['file']['tmp_name'] ; //Temp location
    $size = $_FILES['file']['size']; //Find file size
    $error = $_FILES['file']['error']; //find errors

    // Explode from punctuation mark
    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    // Allowed Extensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension, $isAllowed)) {
      // 0 = no error
      // 1 = error
      if ($error === 0) {
      
        if ($size < 1000000) {

          $newFileName = uniqid('', true) . "." . $fileExtension;

          $fileDestination = "uploads/" . $newFileName;

          move_uploaded_file($tmp_name, $fileDestination);
          header("Location: Files.php?uploadedsuccess");
        }
        else {
            echo "Sorry!, your file size is too big!";
        }

      }
      else {
        echo "Sorry!, there was an error! Try it again";
      }
    }
    else {
        echo "Sorry!, your file type is not accepted";
    }

}

 ?>
