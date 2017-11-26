<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n \n Email: $email \n \n Message: $message";
$recipient = "ganeshdatta27@gmail.com";
$subject = "Contact Form - ganeshdatta.in";
$mailheader = 'From: Ganesh Datta Website Form <contact@ganeshdatta.in>';
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! I've received your mail." . " -" . "<a href='/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
