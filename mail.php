<?php
$fullName = $_POST['full-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formContent=" From: $firstName $lastName \n Phone: $phone \n Email: $email \n Message: $message";
$recipient = "kyledkearney@gmail.com ";
$subject = "1147 S Adams information request from $firstName $lastName";
$customerSubject = "Thank you for reaching out about 1147 S Adams St I will be in touch soon.";
$body = "Please feel free to call or email me directly if you need further assistance. \n Phone: 720-289-7544 \n Email: anna@anhomesearch.com";
$customerMailHeader = "From: DONOTREPLY@jonesbodywork.com \r\n";
$mailHeader = "From: $email \r\n";
mail($recipient, $subject, $formContent, $mailHeader) or die("Error!");
mail($email, $customerSubject, $body, $customerMailHeader) or die("Error!");
?>
