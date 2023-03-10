<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        // NOTE: Date & Time
        // DateTime
        //  'd' = Day
        //  'j' = Day without zeros
        //  'D' = Day of week (3 letters)
        //  'l' = Full day of the week
        //  'm' = Month as a number with zeros
        //  'n' = Month as a number without zeros
        //  'M' = Month (3 letters)
        //  'F' = Full Month
        //  'y' = Two-digit year
        //  'Y' = Full Year
      //  echo date('y-m-d'); //Result : 23-03-04
      //  echo date('Y-M-D'); //Result :2023-Mar-Sat

    //  echo date('Y');
      //echo date('Y-m-d'); //Result : 2023-03-04
    //  echo date('m-d-Y'); //American date format

     //  NOTE: Times
     //   'g' = Hours in 12-hour format without zeros
     //   'h' = Hours in 12-hour format with zeros
     //   'G' = Hours in 24=hour format without  zeros
     //   'H' = Hours in 24-hour format with zeros
     //   'a' = am/pm in lowercase
     //   'A' = am/pm in uppercase
     //   'i' = minutes without leading zeros
     //   's' = seconds without leading zeros
     //
     //echo date('h:i:s a'); //standard dateTime format Result: 2023-03-04 11:00:44

     //// NOTE: set Timezone
     date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
     echo date('d-m-Y h:i:s');
     echo "<br />";

     // NOTE: String to time
     // https://www.w3schools.com/php/func_date_strtotime.asp

     $time = strtotime("5:00pm March 04 2023");
     echo $time;
     echo "<br /> ";
     // NOTE: is the timestamp is the value represented as seconds calculated , since UNIX Epoch , January 1, 1970, and also called as UNIX timestamp.

     echo date('Y-m-d h:i:s a', $time); //Result 2023-03-04 05:00:00 pm
     ?>

  </body>
</html>
