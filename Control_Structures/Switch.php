<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // NOTE:
    //Conditional switch statement

    $role = "Employee";

    switch ($role) {

      case 'Visitor':
      echo "Welcome Visitor!";
      break;

      case 'Admin':
      echo "Welcome Admin!";
      break;

      case 'Superadmin':
      echo "Welcome Superadmin!";
      break;

      case 'Boss':
      echo "Welcome Boss!";
      break;

      default: echo "Invalid User role!";

    }





     ?>

  </body>
</html>
