<?php
//print_r($_POST)
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if(trim($email) == '')
  $error = 'Enter e-mail';
else if(trim($message) == '')
  $error = 'Enter message';
else if(strlen($message) < 10)
  $error = 'Enter more than 10 characters';

if($error != ''){
  echo $error;
  exit;
}

$subject = "=?utf-8?B?".base64_encode("Test")."?=";
$headers ="From: $email\r\nReply to: $email\r\nContebt type: text/html;charset=utf-8\r\n";

mail('kost443562@gmail.com', $subject, $message, $headers);

header('Location: /contact.php');
 ?>
