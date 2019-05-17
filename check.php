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
 ?>
