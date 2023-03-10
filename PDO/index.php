<?php
require_once 'includes/config.php';
require_once 'includes/database.php';

 ?>

<!--  <?php
// check the DB Driver
  print_r(PDO::getAvailableDrivers());
 ?>  -->


<?php
$object = new Database();
echo $object->connect();
 ?>
