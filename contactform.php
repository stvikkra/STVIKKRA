<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "stvikkra@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);

  header("Location: contact.php?mailsend");
}

?>
