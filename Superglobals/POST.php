<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?php
        // NOTE: POST Superglobal
        //POST
        // Collect data from the html form (invisible)

        if (isset($_POST)) {
          echo $_POST['name'] . ", your form is submitted!";

        }
        echo "<br />";

        print_r($_POST);


     ?>
     <form class="" action="POST.php" method="post">
       Name: <input type="text" name="name" value=""> <br /><br />
       Age: <input type="text" name="age" value=""> <br />
       <button type="submit">Submit</button>

     </form>

  </body>
</html>
