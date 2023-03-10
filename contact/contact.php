<?php

  if (isset($_POST['submit'])) {

    // NOTE: trim() removes whitespaces if any..
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // 1. E-mail your sending it to
    // 2. subject
    // 3. Is the message
    $myMail = "info@example.com";
    $header = "From: " . $email;
    $message2 = "You have reveived a message from" . $name . ". \n\n" . $message;

    mail($myMail, $subject, $message2, $header);
    header("Location: index.php?mailsend");
  }

 ?>
